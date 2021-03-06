<?php

class SessionController extends \Phalcon\Mvc\Controller
{

    // public function indexAction()
    // {

    // }
     private function _registerSession($user)
    {
        $web = [];
        foreach ($user->Setting as $w) {
            $web[] = ["id"=>$w->id,'title'=>$w->title,'url'=>$w->url];
        }
        $this->session->set('auth',(object) [
            "id" => $user->id,
            "name" => $user->name,
            "username" => $user->username,
            "id_reg" => $user->id_reg,
            "web" => $web,
            "id_web" => $user->Setting[0]->id,
            "web_title" => $user->Setting[0]->title,
            "web_url" => $user->Setting[0]->url,
            ]);
    }
    public function destroyAction(){
    	$this->session->set('auth',false);
        // $this->auth = false;
        return $this->dispatcher->forward(
            array(
                'controller' => 'login',
                'action'     => 'index'
            )
        );
    }

    /**
     * This action authenticate and logs a user into the application
     */
    public function startAction()
    {

        if ($this->request->isPost() ) {

            // Get the data from the user
            $email    = $this->request->getPost('email');
            $password = $this->request->getPost('password');
          	$tokenKey = $this->request->getPost("token_key");
 			$token    = $this->request->getPost("token");
         
        	if($this->security->checkToken($tokenKey, $token)) {
            	// Find the user in the database
	            $first_user = Users::findFirst(
	                array(
	                    "(email = :email: OR username = :email:) AND status = '1'",
	                    'bind' => array(
	                        'email'    => $email,
	                    )
	                )
	            );

	            // validation password
	            if($first_user){
	                $user = $this->security->checkHash($password, $first_user->password);
	            }

	            if ($user != false) {

	                $this->_registerSession($first_user);

	                $this->flash->success('Welcome ' . $first_user->name);

	                // Forward to the 'invoices' controller if the user is valid
	                return $this->dispatcher->forward(
	                    array(
	                        'controller' => 'index',
	                        'action'     => 'index'
	                    )
	                );
	            }

           	}
            $this->flash->error('Wrong email/password');
        }

        // Forward to the login form again
        return $this->dispatcher->forward(
            array(
                'controller' => 'login',
                'action'     => 'index'
            )
        );
    }
}

