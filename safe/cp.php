<?php
session_start();

if (!empty($_SESSION['logged_in'])) {
	$connection = mysqli_connect("127.0.0.1", "lahacks", "LosAltosHacksIsGreat2017", "lahacks") or die("Unable to connect to database. Please notify admin about this... :(");

	echo "<b>35 96 39 80 39 96 69 24 171 145</b><br /><a href='DSCA'>DSCA</a>";
	echo "<br /><br /><b>take note of these:</b><br />dan_account: 374315;<br />employer_account: 453919;";
} else {
	header("Location: .");
}
?>
