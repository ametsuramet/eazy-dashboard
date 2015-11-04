<?php
use Phalcon\Paginator\Adapter\Model as PaginatorModel;
class PostController extends MasterController
{

    public function articleAction()
    {
    	$posts = Post::find(["type = 'post'","id_reg" => $this->auth->id_reg]);
        $paginator   = new PaginatorModel(
            array(
                "data"  => $posts,
                "limit" => $this->params->limit,
                "page"  => $this->params->page
            )
        );

        $page = $paginator->getPaginate();
    	$this->view->setVar("page",$page);
    }
    public function editAction()
    {
    	// print_r($this->params);
    	$post = Post::findFirst($this->params->id);
    	$this->view->setVar("data",$post);

    }
}

