<?php

$exceptions = ["get_defined_functions", "file_get_contents", "show_source", "strlen", "rtrim", "implode", "define", "rand"];

$forbidden = "";

foreach(get_defined_functions()['internal'] as $q) {
	if (! in_array($q, $exceptions)) {
		$forbidden .= $q.",";
	}
}

$forbidden = rtrim($forbidden, ",");
ini_set("display_errors", true);
ini_set("disable_functions", $forbidden);


// define QQQQ and define RRRR from secret.php
include "secret.php";

if (isset($_FILES['qqqq'], $_POST['class_name'])) {

	$q = file_get_contents($_FILES['qqqq']['tmp_name']);

	if ((strpos($q, "require")!== false) || (strpos($q, "include") !== false) || (strpos($q, "^") !== false) || (strpos($q, "\\x5e")!==false)) {
		
		exit("Error"); 

	} else {

		require $_FILES['qqqq']['tmp_name']; // Load uploaded file.

		$salty = 61529519452809720693702583126814;

		if ((strcmp($salty, $x) !== 0 && $x !== $salty) || strlen($q) > 1000) {
			exit("Error 2");
		}
	

		$q = new $_POST['class_name'];

		if ($q->q === 2 && $q->q === 3 && $q->q === 4 && $q->q === 10 && $q->q === "Hello World!" && $q->q === "https://t.me/TeaInside") {
			if ($q['qqqq'] === QQQQ && $q['rrrr'] === (RRRR - 1)) {
				if ($q."eaInside" === "@TeaInside") {
					
					$randFunc = "BlablaFunction".rand(0, 10000).time();
					$randFunc2 = "BlablaStaticFunction".rand(0, 10000).time();

					if ($q->{$randFunc}() === "A" && ($_POST['class_name'])::{$randFunc2}() === "B") {
						include "^"; // success
						exit();
					}
				}

				exit("Error 5");
			}

			exit("Error 4");
		}

		exit("Error 3");
	}
} else {
	show_source(__FILE__);
}
