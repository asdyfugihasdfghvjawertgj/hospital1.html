$(document).ready(function(){

$("#booking").click(function(){
	if ($("#input1").val()=="") {
		$("#span1").text("!require name");
	}
	else{
		$("#span1").text("");
	}
	if ($("#input2").val()=="") {
		$("#span2").text("!require email");
	}
	else{
		$("#span2").text("");
	}
	if ($("#input3").val()=="") {
		$("#span3").text("!require phone number");
	}
	else{
		$("#span3").text("");
	}
	
	if ($("#input4").val()=="") {
		$("#span4").text("!require your birth");
	}
	else{
		$("#span4").text("");
	}
	if ($("#input5").val()=="") {
		$("#span5").text("!require gender");
	}
	else{
		$("#span5").text("");
	}
	if ($("#input6").val()=="") {
		$("#span6").text("!please select speciality");
	}
	else{
		$("#span6").text("");
	}
	if ($("#input7").val()=="") {
		$("#span7").text("!please select sub-speciality");
	}
	else{
		$("#span7").text("");
	}
	if ($("#input8").val()=="") {
		$("#span8").text("!please select doctor");
	}
	else{
		$("#span8").text("");
	}
	if ($("#input9").val()=="") {
		$("#span9").text("!please select date");
	}
	else{
		$("#span9").text("");
	}
	if ($("#input10").val()=="") {
		$("#span10").text("!please select time");
	}
	else{
		$("#span10").text("");
	}
	if ($("#input11").val()=="") {
		$("#span11").text("!plese enter message");
	}
	else{
		$("#span11").text("");
	}
	var select6=$("#input6").val();
	var select7=$("#input7").val();
	var select8=$("#input8").val();
	var select10=$("#input10").val();
	if($("#input1").val()!="" && $("#input2").val()!="" && $("#input3").val()!="" && $("#input4").val()!="" && $("#input5").val()!="" && select6!="" && select7!="" && select8!="" && $("#input9").val()!="" && select10!="" && $("#input11").val()!="")
	{

	return true;	
	}
	else{
    return false;
	}
	})

})