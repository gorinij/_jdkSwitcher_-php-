<?php
	$java6 = "jdk1.6.0_38";
	$java8 = "jdk1.8.0_51";
	$javaCur = "jdk_";
	$java_home = "c:\\program Files\\java\\";

	if (file_exists($java_home . $java6)) {
		rename($java_home . $javaCur, $java_home . $java8);
		rename($java_home . $java6, $java_home . $javaCur);
	} else {
		rename($java_home . $javaCur, $java_home . $java6);
		rename($java_home . $java8, $java_home . $javaCur);
	}
?>