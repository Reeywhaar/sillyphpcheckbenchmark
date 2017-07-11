<?php
switch ($argv[1]){
	case "checked":
		require_once("./test_checked.php");
		break;
	case "unchecked":
		require_once("./test_unchecked.php");
		break;
	case "hinted":
		require_once("./test_hinted.php");
		break;
	default:
		die("checked/unchecked/hinted parameter required\n");
}

$dates = [
	"1988-01-01",
	"1989-01-01",
	"1940-01-01",
	"1975-01-01",
	"1990-01-01",
	"1930-01-01",
	"1940-01-01",
	"1951-01-01",
	"1940-01-01",
	"1948-01-01",
	"1928-01-01",
	"1920-01-01",
	"1930-01-01",
	"1940-01-01",
	"1940-01-01",
	"1932-01-01",
	"1950-01-01",
	"1921-01-01",
	"1956-01-01",
	"1957-01-01",
];

$start_time = microtime(true);

for($i = 0; $i<100000; $i++){
	foreach($dates as $date){
		$p = new Person("Tom", new DateTime($date));
		isAdult($p);
	}
}

$end_time = microtime(TRUE);

echo $argv[1];
echo "\n";
echo $end_time - $start_time;
echo "\n";