<!-- Dennis Huang dlh4fx 
Wyatt TInsley wtj6tq -->
<html>
<head>
	<title> CS 4640 Assignment 3 </title>
  <link rel="stylesheet" href="styles.css">
</head>

<script> 
//function that checks all fields to make sure they are filled out 
//type is value of dropdown menu user has selected, each kind of question will have different forms to fill
function validateForm(type) {
  if (type == "mul") {
    var x = document.forms["form1"]["question"].value;
    var a = document.forms["form1"]["A"].value;
    var b = document.forms["form1"]["B"].value;
    var c = document.forms["form1"]["C"].value;
    var d = document.forms["form1"]["D"].value;
    if (x == "") {
      alert("Question field must be filled out.");
      return false;
    }
    if (a == "" || b  == "" || c == "" || d == "") {
      alert("Answer choices must be filled out.");
      return false;
    }
  }

  if (type == "tru") {
    var x = document.forms["form2"]["question2"].value;
    if (x == "") {
      alert("Question field must be filled out.");
      return false;
    }
  }

  if (type == "short") {
    var x = document.forms["form3"]["question3"].value;
    var y = document.forms["form3"]["response"].value;

    if (x == "") {
      alert("Question field must be filled out.");
      return false;
    }

    if (y == "") {
      alert("Answer field must be filled out.");
      return false;
    }
  }
  
}

//when user focuses on field, it is highlighted
function highlight(field) {
  field.style.background="cyan";
}

//when user does not focus on field, it is changed back to its original color
function removeFocus(field) {
  field.style.background="white";
}
</script>
<body>

  <?php echo "<h1> Jeopardy Game </h1>"; 

        echo "<h3> By: Dennis Huang and Wyatt Tinsley </h3> <br>";

	      echo "<h3> Create a Question </h3> <br>";
	      echo "<p> Choose a type of question to create.</p> <br>"; ?>


	<select id="questions" onchange="formSelect()"> 
		<option disabled selected value> -- select an option -- </option>
  		<option value="mul">Multiple Choice</option> 
  		<option value="truefalse">True/False</option> 
  		<option value="short">Short Answer</option> 
	</select> <br> <br>

	<form id ="multiple_choice" method="post" action="displayPage.php" name="form1" onsubmit="return validateForm('mul')" >
    <?php echo "<p>Enter multiple choice question and answer. </p> <br>";  
  		echo "Question: <br>"; ?><input type="text" name="question" onfocus="highlight(this)" onblur="removeFocus(this)"/>  <br> <br>
  		<?php echo "Answer:<br>"; ?>
  		<input type="radio" name="Answer" value="A" checked>A. <input type="text" name="A" onfocus="highlight(this)" onblur="removeFocus(this)"/><br>
		<input type="radio" name="Answer" value="B" >B. <input type="text" name="B" onfocus="highlight(this)" onblur="removeFocus(this)"/><br>
		<input type="radio" name="Answer" value="C">C. <input type="text" name="C" onfocus="highlight(this)" onblur="removeFocus(this)"/><br>
		<input type="radio" name="Answer" value="D">D. <input type="text" name="D" onfocus="highlight(this)" onblur="removeFocus(this)"/><br> <br>
  		
  		<button type="submit" value="Submit"> Submit</button> &nbsp;&nbsp;&nbsp;
  		<button type="reset" value="Reset"> Clear</button>
	</form> 

	<form id ="true_false" method="post" action="displayPage.php" name="form2" onsubmit="return validateForm('tru')"> 
    <?php echo "<p>Enter true/false question and answer. </p> <br>"; ?>  
  		<?php echo "Question:"; ?> <br><input type="text" name="question2" onfocus="highlight(this)" onblur="removeFocus(this)"/>  <br> <br>
  		<?php echo "Answer:<br>"; ?>
  		<input type="radio" name="Answer2" value="True" checked>True <br>
		<input type="radio" name="Answer2" value="False">False <br> <br>
  		
  		<button type="submit" value="Submit"> Submit</button> &nbsp;&nbsp;&nbsp;
  		<button type="reset" value="Reset"> Clear</button>
	</form> 

	<form id ="short_answer" method="post" action="displayPage.php" name="form3" onsubmit="return validateForm('short')"> 
    <?php echo "<p>Enter short answer question and response. </p> <br>"; ?>  
  		<?php echo "Question: <br>";?><input type="text" name="question3" onfocus="highlight(this)" onblur="removeFocus(this)"/>  <br> <br>
  		<?php echo "Answer:<br>"; ?>
  		<textarea rows="8" cols="50" name="response" onfocus="highlight(this)" onblur="removeFocus(this)"></textarea> <br>
  		
  		<button type="submit" value="Submit"> Submit</button> &nbsp;&nbsp;&nbsp;
  		<button type="reset" value="Reset"> Clear</button>
	</form> 


	<script src="functions.js" type="text/javascript"></script>

</body>

</html>