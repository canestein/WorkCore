<?php
/**
 * Tests for WorkCore
 */

use PHPUnit\Framework\TestCase;
use Workcore\Workcore;

class WorkcoreTest extends TestCase {
    private Workcore $instance;

    protected function setUp(): void {
        $this->instance = new Workcore(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Workcore::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
