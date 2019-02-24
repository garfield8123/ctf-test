<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

function startsWith($haystack, $needle) {
     $length = strlen($needle);
     return (substr($haystack, 0, $length) === $needle);
}


function checkInjection($phrase) {
	// ' OR {true phrase} --
	if (startsWith(strtolower($phrase), "' or ")) {
		// This will give an expression of "true" in sql if they did it right, but it could be "1=1", etc. we need to evaluate
		$query = explode(" ", str_replace(";", "", str_replace("' or ", "", rtrim(strtolower($phrase), " \t."))));

		if ($query[sizeof($query) - 1] == "--") {
			unset($query[sizeof($query) - 1]);
		} else {
			return false;
		}

		if (sizeof($query) == 3) {
			if (str_replace("=", "", $query[1]) == "" && $query[0] == $query[2]) {
				return true;
			}
		} else if (sizeof($query) == 1) {
			if ($query[0] . " " == "true ") {
				return true;
			}

			$smallerString = explode("=", $query[0]);
			if ($smallerString[0] == $smallerString[1]) {
				return true;
			}
		}
	}
	return false;
}

if (checkInjection($username) || checkInjection($password)) {
	$_SESSION['logged_in'] = 1;
        header("Location: cp.php");
} else { ?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>validate</title>
		<link rel="stylesheet" href="css/main.css" />
	</head>
	<body>
		<p>your username and password do not match the database's credentials. <a href=".">try again</a></p>
	</body>
	</html>
<?php } ?>
