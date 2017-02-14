//Dennis Huang dlh4fx
//Wyatt Tinsley wjt6tq

//gets called when window is first loaded, hide all forms until user selects from dropdown
window.onload = function () {
    document.getElementById("short_answer").style.display="none";
    document.getElementById("true_false").style.display="none";
    document.getElementById("multiple_choice").style.display="none";
    formSelect();
}


//depending on dropdown menu selection value, a form will be made visible while others are hidden
function formSelect() {
	var value = document.getElementById("questions").value;

	if (value == "short") {
		document.getElementById("short_answer").style.display="block";
		document.getElementById("true_false").style.display="none";
		document.getElementById("multiple_choice").style.display="none";
	}

	else if (value == "truefalse") {
		document.getElementById("short_answer").style.display="none";
		document.getElementById("true_false").style.display="block";
		document.getElementById("multiple_choice").style.display="none";
	}

	else if (value == "mul") {
		document.getElementById("short_answer").style.display="none";
		document.getElementById("true_false").style.display="none";
		document.getElementById("multiple_choice").style.display="block";
	}
		
	
	
}
