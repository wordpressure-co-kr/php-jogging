<?php
define(endl, "\n");
	
if ( ! isset( $argv[1] ) && $argv[1] == "" ) die("Provide any 4 digit number");
$number = $argv[1];

$array_A = $array_B = (str_split($number));
sort($array_A);
rsort($array_B);
implode($array_A);
implode($array_B);
$unsign = $array_A > $array_B ? TRUE : FALSE; 


echo endl;
