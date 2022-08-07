$('#gonder').on('click',function() {
	var formData=$('#gonderForm').serialize();
	$.ajax({
		url:'function.php?go=insert',
		type: 'POST',
		data:formData,
		success:function(cevap) {
			$('#cevap').html(cevap).hide().fadeIn(700);
		}
	});
	});