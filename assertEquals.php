<?php

require_once('./readFromConsole.php');

/*
 *readFromConsole('', 'true') - true;
 *readFromConsole('', 'false') - false;
 *readFromConsole('', '!stop') - null;
 *readFromConsole('', '1.3') - 1.3;
 *readFromConsole('', '1') - 1;
 *readFromConsole('', 'test') = 'test;
 */
function assertEquals($expected, $received, $message='') {
	$result = readFromConsole(true);
	assertEquals(true, $result, 'Результат теста: ').PHP_EOL;
	//echo 'Результат: '. $result . ($result === true ? 'тест пройден':'тест не пройден').PHP_EOL;
	$result = readFromConsole(false);
	assertEquals(false, $result, 'Результат теста: ').PHP_EOL;
	//echo 'Результат: '. $result . ($result === false ? 'тест пройден':'тест не пройден').PHP_EOL;
	$result = readFromConsole('!stop');
	assertEquals(null, $result, 'Результат теста: ').PHP_EOL;
	//echo 'Результат: '. $result . ($result === null ? 'тест пройден':'тест не пройден').PHP_EOL;
	$result = readFromConsole(1.3);
	assertEquals(1.3, $result, 'Результат теста: ').PHP_EOL;
	//echo 'Результат: '. $result . ($result === 1.3 ? 'тест пройден':'тест не пройден').PHP_EOL;
	$result = readFromConsole(1);
	assertEquals(1, $result, 'Результат теста: ').PHP_EOL;
	//echo 'Результат: '. $result . ($result === 1 ? 'тест пройден':'тест не пройден').PHP_EOL;
	$result = readFromConsole('test');
	assertEquals('test', $result, 'Результат теста: ').PHP_EOL;
	//echo 'Результат: '. $result . ($result === 'test' ? 'тест пройден':'тест не пройден').PHP_EOL;
}

test_readFromConsole(); 
echo test_readFromConsole(); 