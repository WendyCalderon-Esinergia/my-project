<?php

namespace Drupal\Tests\co_core\Unit;

use PHPUnit\Framework\TestCase;
use Drupal\co_core\Unit;
/**
 * Simple test to ensure that asserts pass.
 *
 * @group co_core
 */
class UnitTest extends TestCase
{

    protected $unit;
    protected $testing;

    protected function setUp(): void 
    {
        $this->unit = new Unit();
    }

    /**
     * @covers Drupal\co_core\Unit::setLength
     */
    public function testSetLength()
    {
        // $this->testing = 3;
        $this->assertEquals(0, $this->testing->getLength());
        $this->unit->setLength(9);
        $this->assertEquals(9, $this->unit->getLength());
    }

    /**
     * @covers Drupal\co_core\Unit::getLength
     */
    public function testGetLength()
    {
        // $this->testing = 3;
        $this->unit->setLength(9);
        $this->assertNotEquals(10, $this->unit->getLength());
    }
}
