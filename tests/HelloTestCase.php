<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use Tanarurkerem\Register\Hello;

class HelloTestCase extends TestCase
{
    public function testSay()
    {
        $hello = new Hello();
        $this->assertEquals($hello->say(), 'Hello!');
    }
}
