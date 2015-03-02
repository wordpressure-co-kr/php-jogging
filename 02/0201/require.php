<?php

define( ENDL, "\n");

try {
	$error = 'Always throw this error';
	throw new Exception($error);

	echo 'Never executed';

} catch ( Exception $e ) {
	echo 'Caught exception: ', $e->getMessage(), ENDL;
}

echo "Hi, world";
echo ENDL;
echo "Hi,","World";
