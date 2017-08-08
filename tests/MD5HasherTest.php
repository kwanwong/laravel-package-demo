<?php

/**
 * Created by Ken.
 * User: Ken
 * Date: 2017/8/9
 * Time: 0:09
 */

use PHPUnit\Framework\TestCase;

class MD5HasherTest extends TestCase
{
    protected $hasher;

    public function setUp()
    {
        $this->hasher = new \Szzmzb\Hasher\MD5Hasher();
    }

    public function testMD5HasherMake()
    {
        $password = md5('password');
        $hashPassword = $this->hasher->make('password');

        $this->assertEquals($password, $hashPassword);
    }

    public function testMD5HasherMakeWithSalt()
    {
        $salt = 'salt';
        $password = md5('password'.$salt);
        $hashPassword = $this->hasher->make('password', ['salt'=>$salt]);

        $this->assertEquals($password, $hashPassword);
    }
}