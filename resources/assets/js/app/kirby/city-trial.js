$(document).ready(function() {
	$('.checkbox input').change(function(){
		var c = this.checked ? '#555' : '#ddd'
	    $(this).parent().css('color', c);
	});
});