<?php
$servername = "xxx";
$username = "xxx";
$password = "xxx";
$db = "xxx";
$tableName = "xxx";

$colls = array(
	PASSKEY,
	stationtype,
	dateutc,
	tempinf,
	humidityin,
	baromrelin,
	baromabsin,
	tempf,
	humidity,
	winddir,
	windspeedmph,
	windgustmph,
	maxdailygust,
	rainratein,
	eventrainin,
	hourlyrainin,
	dailyrainin,
	weeklyrainin,
	monthlyrainin,
	totalrainin,
	solarradiation,
	uv,
	wh65batt,
	wh26batt,
	freq,
	model
);

$model = array(
	$_POST[PASSKEY],
	$_POST[stationtype],
	$_POST[dateutc],
	$_POST[tempinf],
	$_POST[humidityin],
	$_POST[baromrelin],
	$_POST[baromabsin],
	$_POST[tempf],
	$_POST[humidity],
	$_POST[winddir],
	$_POST[windspeedmph],
	$_POST[windgustmph],
	$_POST[maxdailygust],
	$_POST[rainratein],
	$_POST[eventrainin],
	$_POST[hourlyrainin],
	$_POST[dailyrainin],
	$_POST[weeklyrainin],
	$_POST[monthlyrainin],
	$_POST[totalrainin],
	$_POST[solarradiation],
	$_POST[uv],
	$_POST[wh65batt],
	$_POST[wh26batt],
	$_POST[freq],
	$_POST[model]
);

try {
	$conn = new PDO("mysql:host=$servername; dbname=$db", $username, $password);
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);;
	$collsStr = implode(",",$colls);
	$valuesStr = implode("', '", $model);
	$sql = "INSERT INTO $tableName (".$collsStr.") VALUES ('$valuesStr')";
	// use exec() because no results are returned
	$conn->exec($sql);
	echo "New record created successfully";
} catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

