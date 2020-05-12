<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
Use Faker\Factory;
use App\Link;

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

        $response->assertSee('Link Reducer');
    }

    /**
     *
     * @test
     */
    public function check_that_links_can_be_stored_return_201()
    {
        $this->withoutMiddleware();

        $link = factory('App\Link')->make();
        $createdLink = $this->post(route('store'), $link->toArray());
        $createdLink->assertStatus(302);
        $this->assertDatabaseHas('links',$link->toArray());
        
    }

    /**
     *
     * @test
     */
    public function check_that_when_link_parameter_when_saving_is_incomplete_it_returns_419() {
        
        // Try to create an link with incomplete parameter
        $response = $this->post(route('store'));

        $response->assertStatus(419);
    }

    /**
     *
     * @test
     */
    public function check_that_you_can_get_links_via_api() {
        
        $response = $this->get(route('apiIndex'));

        $response->assertStatus(200);
    }

    /**
     *
     * @test
     */
    public function check_that_links_get_deleted_successfully() {
        
        $response = $this->get(route('destroy', 1));

        $response->assertSee('Link Reducer');
    }

}
