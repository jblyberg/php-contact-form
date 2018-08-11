<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomePageTest extends TestCase
{

    /** @test */
    public function the_welcome_page_returns_status_200()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /** @test */
    public function welcome_page_content_is_displayed()
    {
        $response = $this->get('/');

        $response->assertSee('Code Something Awesome');
    }

    /** @test */
    public function the_contact_form_appears_on_the_front_page()
    {
        $response = $this->get('/');

        $response->assertSee('Your Email Address');
    }

}
