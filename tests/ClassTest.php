<?php

use PHPUnit\Framework\TestCase;
use Inaba\TomlHelper;

class ClassTest extends TestCase
{
    /**
     * @expectedException Error
     * @group standard
     */
    public function testNewToError()
    {
        //new TomlHelper;
    }

    /**
     * @group standard
     */
    public function testGetInstance()
    {
        // check class type
        $helper = TomlHelper::getInstance();
        $this->assertInstanceOf(TomlHelper::class, $helper);

        // check same instance
        $helper2 = TomlHelper::getInstance();
        $this->assertSame($helper, $helper2);
    }

    /**
     * @expectedException Error
     * @group standard
     */
    public function testOverwriteInstance()
    {
        $helper = TomlHelper::getInstance();
        $helper->instance = true;
    }
}