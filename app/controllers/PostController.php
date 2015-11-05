<?php
use Phalcon\Paginator\Adapter\Model as PaginatorModel;
class PostController extends MasterController
{

    public function articleAction()
    {
        $posts = Post::find([   
                'type = "post" AND id_web = "'.$this->auth->id_web.'"'
            ]);
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
        $categories = PostCategory::find([   
                'type = "post" AND id_web = "'.$this->auth->id_web.'"'
            ]);

    	// print_r($this->params);
    	$post = Post::findFirst($this->params->id);
    	$this->view->setVar("data",$post);
        $this->view->setVar("categories", $categories);


    }
}

