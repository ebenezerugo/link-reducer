<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @test
     */
    public function basicTest()
    {
        $response = $this->get('/');
        dd($response);
        // $this->assertTrue(true);
    }
}
