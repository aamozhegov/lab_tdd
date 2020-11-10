<?php

function readFromConsole($b)
{
	$a = 'Введите что-нибудь ';
	echo $a;
	$b = fgets(STDIN);
	if ($b === 'true') {
		$result = boolval($b);
	}
	elseif (is_string($b)) {
		$result = strval($b);
	}
	elseif (is_float($b)) {
		$result = float($b);
	}
	elseif (is_int($b)) {
		$result = intval($b);
	}
	else {
		$result = null;
	}
	echo $result;
	return $result;
}


