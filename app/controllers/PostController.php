<?php

class PostController extends MasterController
{

    public function articleAction()
    {
    	$posts = new Post;
    	$count = $posts->find([
		        "type = 'post'",
		        "id_reg" => $this->auth->id_reg,
		    ])->count();
    	$this->params->all_pages = ceil($count/$this->params->limit);
    	$this->params->offset = ($this->params->page-1)*$this->params->limit;
    	if($this->params->all_pages == $this->params->page)
    	{
    		$this->params->next = false;
    	}
    	$posts = $posts->find([
		        "type = 'post'",
		        "id_reg" => $this->auth->id_reg,
		        "order" => "id DESC",
		        "limit" => $this->params->limit,
		        "offset" => $this->params->offset 
		    ]);

    	// $data = $posts->find(['limit' => $this->params->offset.','.$this->params->limit]);
    	$data = (object)['post'=>$posts,'params'=>$this->params];
    	$this->view->setVar("data",$data);
    }
    public function editAction()
    {
    	// print_r($this->params);
    	$post = Post::findFirst($this->params->id);
    	$this->view->setVar("data",$post);

    }
}

