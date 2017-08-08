<?php
/**
 * Created by Ken.
 * User: Ken
 * Date: 2017/8/8
 * Time: 22:32
 */

namespace Szzmzb\Hasher;

/**
 * Class Md5Hasher
 * @package Szzmzb\Hasher
 */
class MD5Hasher
{
    /**
     * @param $value
     * @param array $options
     * @return string
     */
    public function make($value, array $options = [])
    {
        $salt = isset($options['salt']) ? $options['salt'] : '';
        return hash('md5', $value.$salt);
    }

    /**
     * @param $value
     * @param $hashValue
     * @param array $options
     * @return bool
     */
    public function check($value, $hashValue, array $options = [])
    {
        $salt = isset($options['salt']) ? $options['salt'] : '';
        return hash('md5', $value.$salt) === $hashValue;
    }
}