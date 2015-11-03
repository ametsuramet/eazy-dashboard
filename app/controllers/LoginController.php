<?php
class LoginController extends \Phalcon\Mvc\Controller
{
	public function onConstruct() 
	{

		if  ( $this->session->get('auth') )
		{

	        $this->flash->notice('You have already login ');
			return $this->dispatcher->forward(
	            array(
	                'controller' => 'dashboard',
	                'action'     => 'index'
	            )
        	);


		}
	 
	}


    public function indexAction()
    {
	 
		// $this->session->auth = false;
		$this->assets
			->addCss('css/bootstrap/bootstrap.min.css')
			->addCss('css/style.css');
		$this->assets
			->addJs('js/jquery/jquery-2.1.4.min.js')
			->addJs('js/bootstrap/bootstrap.min.js')
			->addJs('js/script.js');


    }

}

