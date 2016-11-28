(function() {
	$.ajax({
	  type: "POST",
	  url: '/crud/index.php',
	  data: 'name',
	  success: success,
	  dataType: dataType
	});
});