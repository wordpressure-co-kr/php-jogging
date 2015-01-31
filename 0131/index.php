<?php
define(endl, "\n");
$array = [1,2,3,4,5];

$end = end($array);

foreach ( $array as $el ) {
	echo $el . "\n";
}

echo $end . endl;
