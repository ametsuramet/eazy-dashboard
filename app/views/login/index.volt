<div class="col-md-4 col-md-offset-4">
{{ form("session/start", "method": "post") }}
{{ hidden_field('token_key', 'value': security.getTokenKey()) }}
{{ hidden_field('token', 'value': security.getToken()) }}
	<h1>LOGIN FORM</h1>
	<p>{{ this.getContent() }}</p>
	<div class="form-group">
    <label for="email">username:</label>
    	{{ text_field("email", 'class':'form-control') }}
	</div>
	<div class="form-group">
    <label for="password">password:</label>
    	{{ password_field("password", 'class':'form-control') }}
	</div>
	<div class="form-group">
    	{{ submit_button("Search", 'class':'btn btn-danger btn-danger') }}
    </div>
{{ endForm() }}
</div>

