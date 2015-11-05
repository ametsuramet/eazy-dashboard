<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo $this->url->getBaseUri(); ?>css/bootstrap/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $this->url->getBaseUri(); ?>css/summernote.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $this->url->getBaseUri(); ?>css/codemirror/codemirror.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $this->url->getBaseUri(); ?>css/codemirror/monokai.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $this->url->getBaseUri(); ?>css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $this->url->getBaseUri(); ?>css/style.css" />


        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Phalcon PHP Framework</title>
    </head>
    <body>
    <?php if ($this->session->auth) { ?>
    <nav class="navbar navbar-default" role="navigation">
    	<!-- Brand and toggle get grouped for better mobile display -->
    	<div class="navbar-header">
    		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
    			<span class="sr-only">Toggle navigation</span>
    			<span class="icon-bar"></span>
    			<span class="icon-bar"></span>
    			<span class="icon-bar"></span>
    		</button>
    		<a class="navbar-brand" href="/"><?php echo $auth->web_title; ?></a>
    	</div>
    
    	<!-- Collect the nav links, forms, and other content for toggling -->
    	<div class="collapse navbar-collapse navbar-ex1-collapse">
    		<ul class="nav navbar-nav">
    			<li class="dropdown">
    				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Post <b class="caret"></b></a>
    				<ul class="dropdown-menu">
    					<li><a href="<?php echo $this->url->getBaseUri(); ?>post/article">Article</a></li>
    				</ul>
    			</li>
    		</ul>
    		</ul>
    		<form class="navbar-form navbar-left" role="search">
    			<div class="form-group">
    				<input type="text" class="form-control" placeholder="Search">
    			</div>
    			<button type="submit" class="btn btn-default">Submit</button>
    		</form>
    		<ul class="nav navbar-nav navbar-right">
    			<li class="dropdown">
    				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $auth->name; ?> <b class="caret"></b></a>
    				<ul class="dropdown-menu">
                        <li><a href="<?php echo $this->url->getBaseUri(); ?>setting">Setting</a></li>
                        <?php if (count($auth->web) > 1) ?>
                        <li><a data-toggle="modal" href='#change-website'>Change Website </a></li>
    					<li><a href="<?php echo $this->url->getBaseUri(); ?>session/destroy">Log Out</a></li>
    				</ul>
    			</li>
    		</ul>
    	</div><!-- /.navbar-collapse -->
    </nav>
    <?php } ?>
        <?php echo $this->getContent(); ?>

    </body>
    <?php echo $this->partial('element/modal'); ?>
    <script type="text/javascript" src="<?php echo $this->url->getBaseUri(); ?>js/jquery/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->url->getBaseUri(); ?>js/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->url->getBaseUri(); ?>js/codemirror/lib/codemirror.js"></script>
    <script type="text/javascript" src="<?php echo $this->url->getBaseUri(); ?>js/codemirror/mode/xml/xml.js"></script>
    <script type="text/javascript" src="<?php echo $this->url->getBaseUri(); ?>js/summernote.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->url->getBaseUri(); ?>js/script.js"></script>

    
</html>

