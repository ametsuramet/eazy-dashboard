<!DOCTYPE html>
<html>
    <head>
     	<?php echo $this->assets->outputCss(); ?>

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
    		<a class="navbar-brand" href="#">Title</a>
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
    				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
    				<ul class="dropdown-menu">
    					<li><a href="<?php echo $this->url->getBaseUri(); ?>session/destroy">Separated link</a></li>
    				</ul>
    			</li>
    		</ul>
    	</div><!-- /.navbar-collapse -->
    </nav>
    <?php } ?>
        <?php echo $this->getContent(); ?>
    </body>
     <?php echo $this->assets->outputJs(); ?>
</html>
