<?php
/**
 * Tests for PulseSwarm
 */

use PHPUnit\Framework\TestCase;
use Pulseswarm\Pulseswarm;

class PulseswarmTest extends TestCase {
    private Pulseswarm $instance;

    protected function setUp(): void {
        $this->instance = new Pulseswarm(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Pulseswarm::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
