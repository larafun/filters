<?php

namespace Larafun\Filters\Tests\Stubs;

use Larafun\Filters\Filter;

class FilterStub extends Filter
{
    public function defaults(): array
    {
        return [
            'test'      => 'value',
        ];
    }

    public function rules(): array
    {
        return [
            'foo'       => 'required|string|max:3'
        ];
    }
}
