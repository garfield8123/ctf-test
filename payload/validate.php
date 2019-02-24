<?php
if (isset($_POST['password'])) {
	$password = strtolower($_POST['password']);
	if ($password == "frrucademxseitil") {
		echo "<b>aeknaomrm{wvxsEVYD\]OPMISOXCD@#>C6Xlnl*m<]4?1;f/m</b><br /><a href='encrypt.cpp'>encrypt.cpp</a>";
	} else {
		echo "wrong... <a href='.'>go back and try again... :(</a>";
	}
} else {
	header("Location: .");
}
