<?php if (!defined('IN_CC_APP')) die('External script access not allowed');

class creditCardTest
{
    /**
     * @param int $input
     *
     * @return bool
     */
    function checkNumber($input)
    {
        if (!is_string($input)) return false;
        if (strlen($input) != 16) return false;
        if (!ctype_digit($input)) return false;

        $digits = array_reverse(str_split($input));

        // Doubling all digits
        foreach ($digits as $key => $value) {
            if (($key % 2) != 0) {
                $digits[$key] = ($value * 2);
            } else {
                $digits[$key] = (int)$value;
            }
        }

        // Combine the doubled digits into a new array consisting of single digits, and then sum all digits
        $digitSum = array_sum(str_split(implode('', $digits)));

        // Divide by 10, is the remainder 0?
        if (($digitSum % 10) === 0) {
            return true;
        } else {
            return false;
        }
    }
}