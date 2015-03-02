<?php

	$array = array('hi','world');
	$varray = ['I', 'will', 'be', 'back'];
	print_r($varray);

	$diff = array_diff($array, $varray);
	print_r($diff);

	$end = end( $diff );
	print_r($end);
