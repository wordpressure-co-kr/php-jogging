<?php
	echo $_SERVER['HTTP_USER_AGENT'];
	foreach( $_SERVER as $key => $val ) {
		echo $key . " = " . $val;
		echo "\n";
	}
