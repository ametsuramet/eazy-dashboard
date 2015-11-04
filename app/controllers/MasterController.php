<?php

class MasterController extends \Phalcon\Mvc\Controller
{

	protected $_isJsonResponse = false;

	

    public function onConstruct(){
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

	 	$this->assets
			->addCss('css/bootstrap/bootstrap.min.css')
			->addCss('css/summernote.css')
			->addCss('css/codemirror/codemirror.css')
			->addCss('css/codemirror/monokai.css')
			->addCss('css/font-awesome.min.css')
			->addCss('css/style.css');
		$this->assets
			->addJs('js/jquery/jquery-2.1.4.min.js')
			->addJs('js/bootstrap/bootstrap.min.js')
			->addJs('js/codemirror/lib/codemirror.js')
			->addJs('js/codemirror/mode/xml/xml.js')
			->addJs('js/summernote.min.js')
			->addJs('js/script.js');

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

		$this->auth = $this->view->auth = $this->session->get('auth');

    }

    public function setJsonResponse() {
		$this->view->disable();

		$this->_isJsonResponse = true;
		$this->response->setContentType('application/json', 'UTF-8');
	}

}

