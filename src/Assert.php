<?php

namespace JLaso\Assert;

class Assert
{
    /**
     * @param string $value
     * @param array $array
     * @throws AssertException
     */
    public static function assertsIsInArray($value, $array)
    {
        if (!in_array($value, $array)) {
            throw new AssertException("It's not true that '%s' belongs to domain '%s'", $value, join(",", $array));
        }
    }

    /**
     * @param string $value
     * @throws AssertException
     */
    public static function assertsIsAnEmail($value)
    {
        if (!preg_match("/^[A-Z0-9a-z\._%+-]+@[A-Za-z0-9\.-]+\.[A-Za-z]{2,6}$/iD",$value)) {
            throw new AssertException("The email provided '%s' does not seems an email", $value);
        }
    }
}