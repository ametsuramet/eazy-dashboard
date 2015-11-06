<?php

class MasterController extends \Phalcon\Mvc\Controller
{

	protected $_isJsonResponse = false;



    public function initialize(){
    	$this->params = (object) [];
    	$auth = $this->session->get('auth');
    	if (!$auth) {
            return $this->dispatcher->forward(
	            array(
	                'controller' => 'login',
	                'action'     => 'index'
	            )
	        );
        } else {
            $this->view->role = 'Users';
        }
  

		foreach ($this->request->get() as $key => $value) {
			$this->params->$key = $value;
		}

		$this->params->limit = 10;
		$this->params->all_pages = 0;
		$this->params->offset = 0;

		if(!isset($this->params->page)){
			$this->params->page = 1;
		}
		$this->params->next = $this->params->page+1;

		$this->view->params = $this->params;

		$this->auth =  $this->session->get('auth');
		$this->view->auth = $this->auth;

		$authors = Users::find(['level = 16 and id_reg='.$this->auth->id_reg])->toArray();
		$list_author = [];
		foreach ($authors as  $author) {
			if($this->auth->id != $author->id)
				$list_author[] =  [
			            "id" => $author['id'],
			            "name" => $author['name'],
			            "username" => $author['username'],
			            "id_reg" => $author['id_reg']
		           	];
		}
		if($this->auth->id_reg == $this->auth->id){
			array_push($list_author,[
			            "id" => $this->auth->id,
            			"name" => $this->auth->name,
            			"username" => $this->auth->username,
            			"id_reg" => $this->auth->id_reg,
		           	]);
		}else{
			$author = Users::findFirst(['id_reg='.$this->auth->id_reg])->toArray();
			array_push($list_author,[
						"id" => $author['id'],
			            "name" => $author['name'],
			            "username" => $author['username'],
			            "id_reg" => $author['id_reg']
		           	]);
		}
		$this->view->authors  = $list_author;
    }

    public function setJsonResponse() {
		$this->view->disable();

		$this->_isJsonResponse = true;
		$this->response->setContentType('application/json', 'UTF-8');
	}

	public function createThumbnail($path){
		$file = str_replace(APP_PATH.'/public/images/'.$this->auth->id_reg, "", $path);
    	$crop_dir = APP_PATH.'/public/images/crops/'.$this->auth->id_reg.'/200-200';

		if (!file_exists($crop_dir.'/'.$file))
		{
			$new_file = $crop_dir.'/'.$file;
			// echo $crop_dir.'/'.$file;
			$raw = new Phalcon\Image\Adapter\GD($path);
			$realWidth = $raw->getWidth();
	    	$realHeight = $raw->getHeight();
			$cropSize = $realWidth;
			$offset_x = 0;
			$offset_y = ($realHeight-$realWidth)/2;
			if ($realWidth > $realHeight)
			{
				$cropSize = $realHeight;
				$offset_x = ($realWidth-$realHeight)/2;
				$offset_y = 0;
			}


			$handle = fopen($new_file, 'w') or die('Cannot open file:  '.$file);
			$raw->crop($cropSize, $cropSize,$offset_x,$offset_y)->resize(200, 200);
			fwrite($handle, $raw->render());
		}
	}

}

