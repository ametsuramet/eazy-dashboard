<div class="container">
<div class="col-md-8 col-md-offset-2">

<?php echo $this->tag->form(array('post/save', 'method' => 'post')); ?>
	
	<div class="form-group">
		<label for="">Title</label>
		<?php echo $this->tag->textField(array('title', 'class' => 'form-control', 'value' => $data->title)); ?>
	</div>

	
		
<!--  -->
    <?php echo $this->tag->submitButton(array('Send')); ?>

<?php echo $this->tag->endForm(); ?>
</div>
</div>