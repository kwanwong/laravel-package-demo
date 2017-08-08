<?php

/**
 * Created by Ken.
 * User: Ken
 * Date: 2017/8/9
 * Time: 0:09
 */

use PHPUnit\Framework\TestCase;

/**
 * Class MD5HasherTest
 */
class MD5HasherTest extends TestCase
{
    /**
     * @var
     */
    protected $hasher;

    /**
     * MD5HasherTest constructor.
     * @param $hasher
     */
    public function __construct($hasher)
    {
        $this->hasher = $hasher;
    }

    /**
     * 初始化单元测试类
     */
    public function setUp()
    {
        $this->hasher = new \Szzmzb\Hasher\MD5Hasher();
    }

    /**
     * 测试hash生成
     */
    public function testMD5HasherMake()
    {
        $password = md5('password');
        $hashPassword = $this->hasher->make('password');

        $this->assertEquals($password, $hashPassword);
    }

    /**
     * 测试加盐hash生成
     */
    public function testMD5HasherMakeWithSalt()
    {
        $salt = 'salt';
        $password = md5('password'.$salt);
        $hashPassword = $this->hasher->make('password', ['salt'=>$salt]);

        $this->assertEquals($password, $hashPassword);
    }

    /**
     * 检测生成hash值是否正确
     */
    public function testMD5HasherCheck()
    {
        $password = md5('password');
        $passwordCheck = $this->hasher->check('password', $password);

        $this->assertTrue($passwordCheck);
    }
}