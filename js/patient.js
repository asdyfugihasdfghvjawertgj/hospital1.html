$(document).ready(function(){

$("#patient").click(function(){
	if ($("#input1").val()=="") {
		$("#span1").text("!require first name");
	}
	else{
		$("#span1").text("");
	}
	if ($("#input2").val()=="") {
		$("#span2").text("!require last name");
	}
	else{
		$("#span2").text("");
	}
	if ($("#input3").val()=="") {
		$("#span3").text("!require gender");
	}
	else{
		$("#span3").text("");
	}
	
	if ($("#input4").val()=="") {
		$("#span4").text("!require date of birth");
	}
	else{
		$("#span4").text("");
	}
	if ($("#input5").val()=="") {
		$("#span5").text("!require address");
	}
	else{
		$("#span5").text("");
	}
	
	if($("#input1").val()!="" && $("#input2").val()!="" && $("#input3").val()!="" && $("#input4").val()!="" && $("#input5").val()!="")
	{

	return true;	
	}
	else{
    return false;
	}
	})

})