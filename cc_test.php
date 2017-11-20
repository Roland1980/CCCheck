<?php

define('IN_CC_APP', true);
require_once('simpletest/autorun.php');
require_once('classes/creditcard.php');


class TestOfCreditcard extends UnitTestCase {
    function testCreditCardNumberCheck()
    {
        $creditCardCheck = new creditCardTest();

        // Test if the input is a string
        $this->assertFalse($creditCardCheck->checkNumber(4012888888881881));
        $this->assertFalse($creditCardCheck->checkNumber(true));

        // Test if the input string has the expected length
        $this->assertFalse($creditCardCheck->checkNumber('401288888888188'));
        $this->assertFalse($creditCardCheck->checkNumber(''));

        // Test if there are only numeric characters in the input
        $this->assertFalse($creditCardCheck->checkNumber('abcdefghijklmnop'));
        $this->assertFalse($creditCardCheck->checkNumber('40128888ab881882'));

        // Test for valid numbers
        $this->assertFalse($creditCardCheck->checkNumber('4012888888881882'));
        $this->assertTrue($creditCardCheck->checkNumber('4012888888881881'));
    }
}