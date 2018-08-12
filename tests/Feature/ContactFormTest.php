<?php

namespace Tests\Feature;

use App\Mail\ContactFormMessage;
use Tests\TestCase;
use Illuminate\Support\Facades\Mail;

class ContactFormTest extends TestCase
{

    /** @test */
    public function contact_submission_passes_on_correct_validation()
    {
        $this->contact_submit()
            ->assertSessionHasNoErrors();
    }

    /** @test */
    public function contact_submission_requires_a_name()
    {
        $this->contact_submit(['name' => null])
            ->assertSessionHasErrors('name');
    }

    /** @test */
    public function contact_submission_requires_an_email()
    {
        $this->contact_submit(['email' => null])
            ->assertSessionHasErrors('email');
    }

    /** @test */
    public function contact_submission_email_is_valid()
    {
        $this->contact_submit(['email' => 'notavalidemail@address'])
            ->assertSessionHasErrors('email');
    }

    /** @test */
    public function contact_submission_requires_a_message()
    {
        $this->contact_submit(['message' => null])
            ->assertSessionHasErrors('message');
    }

    /** @test */
    public function contact_submission_from_page_with_valid_input_shows_a_success_message()
    {
        $this->followingRedirects()
            ->post('/contactus', $this->validFields())
            ->assertSee('Thank you, Mr. Smiley will be in touch');
    }

    /** @test */
    public function an_email_is_sent_from_the_contact_form()
    {
        Mail::fake();

        $this->contact_submit();

        Mail::assertSent(ContactFormMessage::class);
    }






    /*
     * Wrapper function to test contact form validation
     */
    private function contact_submit($attributes = [])
    {
        $this->withExceptionHandling();

        return $this->post('/contactus', $this->validFields($attributes));
    }

    /*
     * Return sample submission data
     */
    private function validFields($overrides = [])
    {
        return array_merge([
            'name'      => 'Fran Frowny',
            'email'     => 'fran@frowny.com',
            'phone'     => '555-555-5555',
            'message'   => 'If you could just call me back, that would be great, mmkay?'
        ], $overrides);
    }

}
