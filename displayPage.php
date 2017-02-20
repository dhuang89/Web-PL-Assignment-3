<!-- Dennis Huang dlh4fx
Wyatt Tinsley wtj6tq -->

<html>
<head>
	<title> CS 4640 Assignment 3 </title>
  <link rel="stylesheet" href="styles.css">
</head>
	
<body><script src="functions.js" type="text/javascript"></script>
<?php session_start();
	  echo "<h1> Question Verification Page </h1>";
	  echo "<h3> Review the entered information and submit when ready. </h3>"; 
	  echo "<h3>Press back to return to previous page to edit question. </h3> <br> <br>";
	  $GLOBALS['kind'] = 0;
	  ?>
<div align="center"> Your entered question: <?php if (isset($_POST["question"])) { $type = "mul"; $_SESSION["type"] = 0; $_SESSION["q"] = $_POST["question"]; echo "<strong>" . $_POST["question"] . "</strong>";} ?> 
<?php if (isset($_POST["question2"])) { $type = "tru"; $_SESSION["type"] = 1; $_SESSION["q"] = $_POST["question2"]; echo "<strong>" . $_POST["question2"] . "</strong>";} ?>
<?php if (isset($_POST["question3"])) { $type = "short"; $_SESSION["type"] = 2; $_SESSION["q"] = $_POST["question3"]; echo "<strong>" . $_POST["question3"] . "</strong>";} ?> <br>

<?php if (isset($_POST["Answer"])) { $_SESSION["a"] = $_POST["Answer"]; echo "Correct answer for multiple choice: <strong>" . $_POST["Answer"] . "</strong>";}?> 
<?php if (isset($_POST["Answer2"])) { $_SESSION["a"] = $_POST["Answer2"]; echo "Answer for true/false: <strong>" . $_POST["Answer2"] . "</strong>";} ?> 
<?php if (isset($_POST["response"])) { $_SESSION["a"] = $_POST["response"]; echo "Answer for short answer: <strong>" . $_POST["response"] . "</strong>";} ?> <br>


<?php if (isset($_POST["A"])) { $_SESSION["x"] = $_POST["A"]; echo "Answer A: <strong>" .  $_POST["A"] . "</strong>";} ?><br>
<?php if (isset($_POST["B"])) { $_SESSION["y"] = $_POST["B"];echo "Answer B: <strong>" .  $_POST["B"] . "</strong>";} ?><br>
<?php if (isset($_POST["C"])) { $_SESSION["z"] = $_POST["C"];echo "Answer C: <strong>" .  $_POST["C"] . "</strong>";} ?><br>
<?php if (isset($_POST["D"])) { $_SESSION["zz"] = $_POST["D"];echo "Answer D: <strong>" .  $_POST["D"] . "</strong>";} ?><br>
</div>

<div align="center">
<input type="submit" name="back" value="Back" onClick="history.go(-1);">

<form method="post">
	<input type="submit" name="confirm" id="confirm" value="Confirm">  
</form>
</div>



<?php 

function saveToText() {
	$file = 'data.txt';
	if ($_SESSION["type"] == 0) {
		$question = "Question: " . $_SESSION["q"] . "\n";
		$answer = "Answer: " . $_SESSION["a"] . "\n";
		$a = "Choice A: " . $_SESSION["x"] . "\n";
		$b = "Choice B: " . $_SESSION["y"] . "\n";
		$c = "Choice C: " . $_SESSION["z"] . "\n";
		$d = "Choice D: " . $_SESSION["zz"] . "\n";
		file_put_contents($file, $question, FILE_APPEND | LOCK_EX);
		file_put_contents($file, $answer, FILE_APPEND | LOCK_EX);
		file_put_contents($file, $a, FILE_APPEND | LOCK_EX);
		file_put_contents($file, $b, FILE_APPEND | LOCK_EX);
		file_put_contents($file, $c, FILE_APPEND | LOCK_EX);
		file_put_contents($file, $d, FILE_APPEND | LOCK_EX);
	}

	else {
		$question = "Question: " . $_SESSION["q"] . "\n";
		$answer = "Answer: " . $_SESSION["a"] . "\n";
		file_put_contents($file, $question, FILE_APPEND | LOCK_EX);
		file_put_contents($file, $answer, FILE_APPEND | LOCK_EX);
	}
	

	echo "<center>Question and answer saved to data file. </center> <br>";
	echo "<form action='DataEntry.php'> <input type='submit' value='Create Another Question' /> </form>";
}

if (array_key_exists('confirm', $_POST)) {
	saveToText();
}

?>

<script src="functions.js" type="text/javascript"></script>
</body>
</html>