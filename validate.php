<?php
if (isset($_POST['answer'])) {

// while ($row = mysqli_fetch_array($read)) {}
// $read = mysqli_query($connection, "SELECT * FROM `lahacks`;");


	if ($_POST['answer'] == "838eae573a858f9fabfa88e1c9a68bd4fd90ea87263b8507486255fc04c69b18") {
		$connection = mysqli_connect("127.0.0.1", "lahacks", "LosAltosHacksIsGreat2017", "lahacks") or die("Unable to connect to database... please tell admin about this.");
		mysqli_query($connection, "INSERT INTO `winners` (`name`) VALUES ('" . $_POST['name'] . "');");
 ?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Los Altos Hacks | Capture The Flag</title>
			<link rel="stylesheet" href="css/main.css" />
		</head>
		<body>
			<div class="main">
				<h4>$ Los Altos Hacks<br /><span style="color: tomato">CTF</span></h4>
			</div>
			<p>$ Your hash was correct!</p>
			<p>Please go to the Adventure workshop room to see if you were first! If you were, you get some sweet prizes. :)</p>
		</body>
		</html>
	<?php } else { ?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Los Altos Hacks | Capture The Flag</title>
			<link rel="stylesheet" href="css/main.css" />
		</head>
		<body>
			<div class="main">
				<h4>$ Los Altos Hacks<br /><span style="color: tomato">CTF</span></h4>
			</div>
			<p style="color: tomato">$ Your hash was incorrect!</p>
			<p><a href="." class="back">Click here to go back.</a></p>
		</body>
		</html>
<?php } } else { header("Location: ."); } ?>
