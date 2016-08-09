<?php
/**
 * [complete this summary]
 * Created by gach.
 * Date: 18/01/16
 * Time: 10:31
 */

namespace CrocCrocTest\Container\Service;

class ServiceTraitTest extends \PhpunitTestCase {

    public function setUp()
    {
        $this->instance = $this->getMockForTrait('CrocCroc\Container\Service\ServiceTrait');
    }

    public function testSetGetInjector() {

        $MockInjector = new \CrocCroc\Container\Container;

        $this->assertSame($this->instance , $this->instance->setInjector($MockInjector));
        $this->assertSame($MockInjector , $this->instance->getInjector());

    }

}