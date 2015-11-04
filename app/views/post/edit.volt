<div class="container">
<div class="col-md-8 col-md-offset-2">

{{ form('post/save', 'method': 'post') }}
	
	<div class="form-group">
		<label for="">Title</label>
		{{ text_field("title", "class": "form-control", "value" : data.title) }}
	</div>

	
	<div class="form-group">
		<label for="">Descritpion</label>
		{{ text_area("title", "class": "form-control summernote", "value" : data.description) }}
	</div>

	
		
<!--  -->
    {{ submit_button('Send') }}

{{ end_form() }}
</div>
</div>