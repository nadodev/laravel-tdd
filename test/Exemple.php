<?php 

namespace Test;

use PHPUnit\Framework\TestCase;
use stdClass;
use Mockery;

class ExempleTest extends TestCase
{
    public function test_exemple()
    {

        Mockery::mock(stdClass::class)->shouldReceive('teste')->andReturn('teste');
        $this->assertTrue(true);
    }
}