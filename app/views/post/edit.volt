<div class="container">
<div class="col-md-8 col-md-offset-2">

{{ form('post/save', 'method': 'post') }}
	
	<div class="form-group">
		<label for="">Title</label>
		{{ text_field("title", "class": "form-control", "value" : data.title) }}
	</div>
	
	
	<div class="form-group">
	<button class="btn btn-primary show-images-browser"><i class="fa fa-camera"></i></button>
	</div>

	
	<div class="form-group">
		<label for="">Category</label>
		{{ select("type", categories, 'using': ['id', 'title'], "value" : data.category,"class": "form-control") }}
	</div>
	
	<div class="form-group">
		<label for="">Description</label>
		{{ text_area("title", "class": "form-control summernote", "value" : data.description) }}
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

	<div class="form-group">
		<label for="">Status</label>
		<select class="form-control" name="id_website">
			<option value="0" <?php  $data->flag=="draft"? print("SELECTED") :null?> >Draft</option>
			<option value="1" <?php  $data->flag=="publish"? print("SELECTED") :null?> >Publish</option>
		</select>
	</div>

	<div class="form-group">
		<label for="">Featured</label>
		<select class="form-control" name="id_website">
			<option value="0" <?php  $data->option->featured=="0"? print("SELECTED") :null?> >Disabled</option>
			<option value="1" <?php  $data->option->featured=="1"? print("SELECTED") :null?> >Enabled</option>
		</select>
	</div>
	<div class="form-group">
		<label for="">Comment</label>
		<select class="form-control" name="id_website">
			<option value="0" <?php  $data->option->comment=="0"? print("SELECTED") :null?> >Disabled</option>
			<option value="1" <?php  $data->option->comment=="1"? print("SELECTED") :null?> >Enabled</option>
		</select>
	</div>
	<div class="form-group">
		<label for="">Caption</label>
		{{ text_area("title", "class": "form-control", "value" : data.option.caption) }}
	</div>

	<div class="form-group">
		<label for="">Custom Slug</label>
		{{ text_field("title", "class": "form-control", "value" : data.slug) }}
	</div>
	<div class="form-group">
		<label for="">Tag</label>
		<input type="text" name="tag"  class="form-control"  value="<?= $data->option->tag ?>">
	</div>
	<div class="form-group">
		<label for="">Published</label>
		<input type="text" name="published"  class="form-control"  value="<?= $data->published_at ?>">
	</div>
<!--  -->
    {{ submit_button('Send') }}

{{ end_form() }}
</div>
</div>