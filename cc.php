<?php

define('IN_CC_APP', true);
require_once('classes/creditcard.php');
define('IN_CC_APP', true);

$numbersToTest = ['4012888888881881', '4012888888881882'];
$creditCardCheck = new creditCardTest();

foreach ($numbersToTest as $numberToTest) {
    echo(sprintf('Test with CC number %s gives result: %s<br>', $numberToTest, ($creditCardCheck->checkNumber($numberToTest)) ? 'Valid' : 'Not valid'));
}