$(document).ready(function(){
	$('#reg3 , #reg4').keyup( function() {
		var pass = $('#reg3').val();
		var con_pass = $('#reg4').val();
		var max = $('#reg3').val();
		if(max.length < 8) {
			$('#val').css('color','yellow').html(' <b style="font-size:10px;">password must 8 charracters</b>');
		} else if (pass == con_pass) {
			$('#val').css('color','skyblue').html(' <b style="font-size:10px;">password match</b>');

		}
	});
	$('.show-modal').click(function(){
		var button = $(this).data('id');
		$.ajax({
			url: "../admin/GetUpdate.php",
			data: {name_id: button},
			dataType: "JSON",
			type: "POST",

			success: function (response){
				$('#this_id').val(response.Key_id);
				$('#fname').val(response.Key_fname);
				$('#lname').val(response.Key_lname);
				$('#email').val(response.Key_email);
			}
		});
	});
});
