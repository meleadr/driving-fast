$(function() {
	console.log("auth_script.js loaded");
	
	$('#formConnect input').keyup(function() {
		var empty = false;
		$('#formConnect input').each(function() {
			if ($(this).val() == '') {
				empty = true;
			}
			else{
				$(this).removeClass('is-invalid');
			}
		});
		if (empty) {
			$('#connectBtn').hide();
		} else {
			$('#connectBtn').show();
		}
	});
});
