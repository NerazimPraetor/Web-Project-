$(document).ready(function(){
    $("#update").click(function(event){
        $.ajax({
            type: "GET",
            url: "update.php",
            dataType: "html"
        })
		.done(function(data){
			if (data.error){
				$('#errorAlert').text(data.error).show();
				$('#successAlert').hide();
			}
			else {
				$('#successAlert').text(data.name).show();
				$('#errorAlert').hide();
			}
		});

        event.preventDefault();
    })
});