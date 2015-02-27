<?php

$a = 123;
$closure = function($name) {
	return $name . ".. genius";
};

echo $closure('degi');
