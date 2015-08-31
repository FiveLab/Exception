<?php

/*
 * This file is part of the FiveLab Exception package.
 *
 * (c) FiveLab <mail@fivelab.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FiveLab\Component\Exception;

/**
 * Helper for create unexpected type of exception
 *
 * @author Vitaliy Zhuk <v.zhuk@fivelab.org>
 */
trait UnexpectedTrait
{
    /**
     * Create a new exception for unexpected type
     *
     * @param string|object $actual
     * @param string|object $expected
     * @param int           $code
     * @param \Exception    $prev
     *
     * @return \Exception
     */
    public static function unexpected($actual, $expected, $code = 0, \Exception $prev = null)
    {
        $message = sprintf(
            'The value must be a type of %s, %s given.',
            is_object($expected) ? get_class($expected) : (is_scalar($expected) ? $expected : gettype($expected)),
            is_object($actual) ? get_class($actual) : (is_scalar($actual) ? $actual : gettype($actual))
        );

        return new static($message, $code, $prev);
    }
}
