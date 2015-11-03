<div class="col-md-4 col-md-offset-4">
<?php echo $this->tag->form(array('session/start', 'method' => 'post')); ?>
<?php echo $this->tag->hiddenField(array('token_key', 'value' => $this->security->getTokenKey())); ?>
<?php echo $this->tag->hiddenField(array('token', 'value' => $this->security->getToken())); ?>
	<h1>LOGIN FORM</h1>
	<p><?php echo $this->getContent(); ?></p>
	<div class="form-group">
    <label for="email">username:</label>
    	<?php echo $this->tag->textField(array('email', 'class' => 'form-control')); ?>
	</div>
	<div class="form-group">
    <label for="password">password:</label>
    	<?php echo $this->tag->passwordField(array('password', 'class' => 'form-control')); ?>
	</div>
	<div class="form-group">
    	<?php echo $this->tag->submitButton(array('Search', 'class' => 'btn btn-danger btn-danger')); ?>
    </div>
<?php echo $this->tag->endform(); ?>
</div>