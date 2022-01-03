<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\Log;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        Log::info("this the test enhacement");
        $this->assertTrue(true);
    }
}
