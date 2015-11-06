var base = $('base').attr('href');
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
$('.show-images-browser').click(function(){
	image_browser(1)
	$('#images-browser').modal('show')     
	return false
})

function image_browser(page){
	$.get(base+'media?page='+page,function(response){
		console.log(response)
		var html = "";
		if(response.prev_page)
		{
			html +='<div class="images-nav before" data-page="'+response.prev_page+'">Prev</div>'
		}
		$.each(response.items,function(i,item){
			html += '<img src="'+base+item.thumbnail+'" class="images-item" data-filename="'+item.filename+'">'
		})
		if(response.next_page)
		{
			html +='<div class="images-nav next" data-page="'+response.next_page+'">Next</div>'
		}
		$('.images-browser-wrapper').html(html)
		 images_nav()
	})
}
function images_nav(){
	$('.images-nav').click(function(){
		var page = $(this).data('page')
		// alert(page)
		image_browser(page)
	})
}