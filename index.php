<?php
	require_once __DIR__."/vendor/autoload.php";
	require_once __DIR__."/src/Controllers/MathController.php";

	$math = new MathController();

	$pow = $math->calcPow(2, 2);

	echo $pow;