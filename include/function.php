
<?php 

	function query($sql) {
		global $connection;
		return mysqli_query($connection, $sql);
	}

	function confirm($result) {
		global $connection;
		if (!$result) {
			die("Query failed ".mysqli_error($connection));
		}
	}

	function escape_string($string) {
		global $connection;
		return mysqli_real_escape_string($connection, $string);
	}

	function fetch_array($result) {
		return mysqli_fetch_array($result);
	}

	function redirect($location) {
		header("Location: $location");
	}

	function updateMeter(){ 
		
$t_date = date("d");
$t_month = date("m");
$tt = date("d") - 1;
$td = $tt;
$t = date("d", strtotime("-2 days"));

$today = query("SELECT * FROM tomorrow_bet WHERE when_bet='2'");
confirm($today);
$row_today = fetch_array($today);

if ($row_today['date_bet'] == $td) {
    $today1 = query("UPDATE tomorrow_bet SET when_bet='1' WHERE date_bet='$td'");
    confirm($today1);
}


$tomorrow = query("SELECT * FROM tomorrow_bet WHERE when_bet='3'");
confirm($tomorrow);
$row_tomorrow = fetch_array($tomorrow);

if ($row_tomorrow['date_bet'] == $t_date) {
    $tomorrow1 = query("UPDATE tomorrow_bet SET when_bet='2'  WHERE date_bet='$t_date'");
    confirm($tomorrow1);
}


$yesterday = query("SELECT * FROM tomorrow_bet WHERE when_bet='1'");
confirm($yesterday);
$row_yesterday = fetch_array($yesterday);

if ($row_yesterday['date_bet'] == $t) {
    $yesterday1 = query("UPDATE tomorrow_bet SET when_bet='0'  WHERE date_bet='$t'");
    confirm($yesterday1);
}

	}


 ?>