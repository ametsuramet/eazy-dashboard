$('.closable').click(function(){
	$(this).remove();
})

var confirm_delete = function(){
	var con = confirm("Yakin?")
	if (con == false){
		return false
	}
}