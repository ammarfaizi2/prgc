<?php

ini_set("disable_functions", implode(",", get_defined_functions()['internal']));

// define QQQQ
// define RRRR
include "secret.php";

if (isset($_FILES['qqqq'], $_POST['class_name'])) {
	$q = file_get_contents($_FILES['file']['tmp_name']);
	if (strlen($q) > 100) {
		exit("Error");
	} else {

		spl_autoload_register(function ($class)  {
			require $_FILES['file']['tmp_name'];
		});


		$q = new $_POST['class_name'];
		if ($q->q === 2 && $q->q === 3 && $q->q === 4 && $q->q === 5 && $q->q === 10) {
			if ($q['qqqq'] === QQQQ && $q['rrrr'] === (RRRR - 1)) {
				
			}
		}
	}
} else {
	show_source(__FILE__);
}