<div class="container">
<div class="col-md-8 col-md-offset-2">

{{ form('post/save', 'method': 'post') }}
	
	<div class="form-group">
		<label for="">Title</label>
		{{ text_field("title", "class": "form-control", "value" : data.title) }}
	</div>

	
		
<!--  -->
    {{ submit_button('Send') }}

{{ end_form() }}
</div>
</div>