<div class="container">
<div class="col-md-8 col-md-offset-2">

<?php echo $this->tag->form(array('post/save', 'method' => 'post')); ?>
	
	<div class="form-group">
		<label for="">Title</label>
		<?php echo $this->tag->textField(array('title', 'class' => 'form-control', 'value' => $data->title)); ?>
	</div>

	
	<div class="form-group">
		<label for="">Description</label>
		<?php echo $this->tag->textArea(array('title', 'class' => 'form-control summernote', 'value' => $data->description)); ?>
	</div>
	
	<div class="form-group">
		<label for="">Category</label>
		<?php echo $this->tag->select(array('type', $categories, 'using' => array('id', 'title'), 'value' => $data->category, 'class' => 'form-control')); ?>
	</div>

	
	<div class="form-group">
		<label for="">Author</label>
		<select class="form-control" name="id_website">
			<?php foreach($authors as $author) : ?>
				<option value="<?= $author['id'] ?>" <?php  $data->id_user==$author['id']? print("SELECTED") :null?> >
					<?= $author['name'] ?>
				</option>
			<?php endforeach ?>
		</select>
	</div>

		

<!--  -->
    <?php echo $this->tag->submitButton(array('Send')); ?>

<?php echo $this->tag->endForm(); ?>
</div>
</div>