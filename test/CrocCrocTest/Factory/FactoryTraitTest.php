<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 23/01/16
 * Time: 13:39
 */

namespace CrocCrocTest\Container;


class FactoryTraitTest extends \PhpunitTestCase
{

    public function setUp() {

        $this->instance = $this->getMockForTrait('CrocCroc\Container\Factory\FactoryTrait');

    }

    public function testSetGetFactory() {

        $fixtureFactory = function() {};

        $this->assertSame($this->instance , $this->instance->setFactory($fixtureFactory));
        $this->assertSame($fixtureFactory , $this->instance->getFactory());

    }

}