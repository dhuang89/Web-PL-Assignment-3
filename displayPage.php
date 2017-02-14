<!-- Dennis Huang dlh4fx
Wyatt Tinsley wtj6tq -->

<html>
<head>
	<title> CS 4640 Assignment 3 </title>
  <link rel="stylesheet" href="styles.css">
</head>
	
<body><script src="functions.js" type="text/javascript"></script>
<?php echo "<h1> Question Verification Page </h1>";
	  echo "<h3> Review the entered information and submit when ready. </h3>"; 
	  echo "<h3>Press back to return to previous page to edit question. </h3> <br> <br>";
	  ?>
Your entered question: <?php if (isset($_POST["question"])) { $type = "mul"; echo "<strong>" . $_POST["question"] . "</strong>";} ?> 
<?php if (isset($_POST["question2"])) { $type = "tru"; echo "<strong>" . $_POST["question2"] . "</strong>";} ?>
<?php if (isset($_POST["question3"])) { $type = "short"; echo "<strong>" . $_POST["question3"] . "</strong>";} ?> <br>

<?php if (isset($_POST["Answer"])) { echo "Correct answer for multiple choice: <strong>" . $_POST["Answer"] . "</strong>";}?> 
<?php if (isset($_POST["Answer2"])) { echo "Answer for true/false: <strong>" . $_POST["Answer2"] . "</strong>";} ?> 
<?php if (isset($_POST["response"])) { echo "Answer for short answer: <strong>" . $_POST["response"] . "</strong>";} ?> <br>


<?php if (isset($_POST["A"])) { echo "Answer A: <strong>" .  $_POST["A"] . "</strong>";} ?><br>
<?php if (isset($_POST["B"])) { echo "Answer B: <strong>" .  $_POST["B"] . "</strong>";} ?><br>
<?php if (isset($_POST["C"])) { echo "Answer C: <strong>" .  $_POST["C"] . "</strong>";} ?><br>
<?php if (isset($_POST["D"])) { echo "Answer D: <strong>" .  $_POST["D"] . "</strong>";} ?><br>

<input type="submit" name="back" value="Back" onClick="history.go(-1);"> 
<input type="submit" name="confirm" value="Confirm">  

<script src="functions.js" type="text/javascript"></script>
</body>
</html>