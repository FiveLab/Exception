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
 * Json parse error
 *
 * @author Vitaliy Zhuk <v.zhuk@fivelab.org>
 */
class JsonParseException extends \Exception
{
    /**
     * Create via code (json_last_error)
     *
     * @param int $code
     *
     * @return JsonParseException
     */
    public static function create($code)
    {
        $codes = array(
            JSON_ERROR_NONE => 'None',
            JSON_ERROR_DEPTH => 'Error depth',
            JSON_ERROR_STATE_MISMATCH => 'State mismatch',
            JSON_ERROR_CTRL_CHAR => 'Control character',
            JSON_ERROR_SYNTAX => 'Syntax error',
            JSON_ERROR_UTF8 => 'Invalid UTF8',
            JSON_ERROR_RECURSION => 'Recursion error',
            JSON_ERROR_INF_OR_NAN => 'Inf or Nan values is not available',
            JSON_ERROR_UNSUPPORTED_TYPE => 'Unsupported type'
        );

        if (isset($codes[$code])) {
            $message = $codes[$code];
        } else {
            $message = 'Undefined';
        }

        return new static($message, $code);
    }
}
