<?php

/**
 * Created by PhpStorm.
 * User: xianghongling
 * Date: 2017/6/2
 * Time: 13:51
 */
use Laravist\Hasher\MD5Hasher;
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
        $this->assertEquals(md5('password'),$this->hasher->make('password'));
    }

    public function testMD5HasherMakeWithouSalt()
    {
        $this->assertEquals(md5('passwordxhl'),$this->hasher->make('password',['salt'=>'xhl']));
    }
    
    
    
    
    
    
    
    
}























