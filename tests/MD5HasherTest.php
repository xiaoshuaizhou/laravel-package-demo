<?php
/**
 * Created by PhpStorm.
 * User: choudavid
 * Date: 18/3/24
 * Time: 18:19
 */

use Zhouxiaoshuai\Hasher\MD5Hasher;
use PHPUnit\Framework\TestCase;

class MD5HasherTest extends TestCase
{
    protected $hasher;

    public function setUp()
    {
        $this->hasher = new MD5Hasher();
    }

    public function testMD5HasherMake()
    {
        $password = md5('passowrd');


        $passwordTwo = $this->hasher->make('passowrd');

        $this->assertEquals($password, $passwordTwo);
    }

    public function testMD5HasherMakeWithSalt()
    {
        $password = md5('passowrdzhou');

        $passwordTwo = $this->hasher->make('passowrd',['salt' => 'zhou']);

        $this->assertEquals($password, $passwordTwo);
    }

    public function testMD5HasherCheck()
    {
        $password = md5('passowrd');

        $passwordCheck = $this->hasher->check('passowrd',$password);

        $this->assertTrue($passwordCheck);
    }
    public function testMD5HasherCheckWithSalt()
    {
        $password = md5('passowrdzhou');

        $passwordCheck = $this->hasher->check('passowrd',$password,['salt' => 'zhou']);

        $this->assertTrue($passwordCheck);
    }
}