<?php

class SettingController extends MasterController
{

    public function indexAction()
    {
    	$setting  = Setting::findFirst($this->auth->id_web);
    	print_r($this->auth->web);
    	die();

    }
    public function changeWebAction()
    {
    	$user = $this->auth;
    	$web = [];
        foreach ($user->web as $w) {
            $web[] = ["id"=>$w['id'],'title'=>$w['title'],'url'=>$w['url']];
        }
 		$website = Setting::findFirst($this->request->getPost('id_website'));

 		// print_r($website)
        $this->session->set('auth',(object) [
            "id" => $user->id,
            "name" => $user->name,
            "username" => $user->username,
            "id_reg" => $user->id_reg,
            "web" => $web,
            "id_web" => $website->id,
            "web_title" => $website->title,
            "web_url" => $website->url
            ]);
	    
	    $this->flash->success('Website changed ');
	    $this->response->redirect('/');
    	
    }

}

