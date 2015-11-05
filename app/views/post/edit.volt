<div class="container">
<div class="col-md-8 col-md-offset-2">

{{ form('post/save', 'method': 'post') }}
	
	<div class="form-group">
		<label for="">Title</label>
		{{ text_field("title", "class": "form-control", "value" : data.title) }}
	</div>

	
	<div class="form-group">
		<label for="">Description</label>
		{{ text_area("title", "class": "form-control summernote", "value" : data.description) }}
	</div>
	
	<div class="form-group">
		<label for="">Category</label>
		{{ select("type", categories, 'using': ['id', 'title'], "value" : data.category,"class": "form-control") }}
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
    {{ submit_button('Send') }}

{{ end_form() }}
</div>
</div>