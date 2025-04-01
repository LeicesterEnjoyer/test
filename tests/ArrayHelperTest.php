<?php

use App\ArrayHelper;
use PHPUnit\Framework\TestCase;

class ArrayHelperTest extends TestCase
{
    public function test_returns_first_element()
    {
        $this->assertEquals(1, ArrayHelper::getFirstElement([1, 2, 3]));
        $this->assertEquals('hello', ArrayHelper::getFirstElement(['hello', 'world']));
    }

    public function test_returns_void_for_empty_array()
    {
        $this->assertEquals('void', ArrayHelper::getFirstElement([]));
    }
}
