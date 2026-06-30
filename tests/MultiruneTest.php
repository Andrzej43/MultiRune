<?php
/**
 * Tests for MultiRune
 */

use PHPUnit\Framework\TestCase;
use Multirune\Multirune;

class MultiruneTest extends TestCase {
    private Multirune $instance;

    protected function setUp(): void {
        $this->instance = new Multirune(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Multirune::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
