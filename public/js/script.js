$('.closable').click(function(){
	$(this).remove();
})

var confirm_delete = function(){
	var con = confirm("Yakin?")
	if (con == false){
		return false
	}
}

$('.summernote').summernote({
	height: 690,
	focus: true,
	// prettifyHtml: false,
	codemirror: {
			theme: 'monokai',
			htmlMode: true,
			lineNumbers: true,
			lineWrapping: true,
			mode: 'text/html',
			matchBrackets: true
        }
});

