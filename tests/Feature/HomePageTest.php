<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomePageTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @test
     */
    public function index_page_should_return_status_code_200()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
