<?php

namespace Larafun\Filters\Tests\Filters;

use Larafun\Filters\Tests\Stubs\FilterStub;
use Larafun\Filters\Tests\TestCase;
use Larafun\Filters\AbstractFilter;

class FilterTest extends TestCase
{
    /** @test */
    public function itPassesValidation()
    {
        $filter = new FilterStub(['foo' => 'bar']);
        $this->assertInstanceOf(AbstractFilter::class, $filter);
    }

    /** @test */
    public function itFailsValidation()
    {
        $this->expectException(\Illuminate\Validation\ValidationException::class);
        $filter = new FilterStub(['bar' => 'baz']);
        $this->assertInstanceOf(AbstractFilter::class, $filter);
    }

    /** @test */
    public function itCanUpdateField()
    {
        $filter = new FilterStub(['foo' => 'bar']);
        $this->assertEquals('bar', $filter->foo);
        $filter->foo = 'baz';
        $this->assertEquals('baz', $filter->foo);
    }

    /** @test */
    public function itValidatesOnUpdateField()
    {
        $filter = new FilterStub(['foo' => 'bar']);
        
        $this->expectException(\Illuminate\Validation\ValidationException::class);
        $filter->foo = 'barbaz';
    }
}
