<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContactFormTest extends TestCase
{

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

/*
    public function an_email_is_sent_from_the_contact_form()
    {
        Mail::fake();

        $response = $this->post('/contactus', [
            'name'      => 'Fran Frowny',
            'email'     => 'fran@frowny.com',
            'phone'     => '555-555-5555',
            'message'   => 'If you could just call me back, that would be great, mmkay?'

        ]);

        Mail:assertQueued(Contact::class);
    }
*/


    private function contact_submit($attributes)
    {
        $this->withExceptionHandling();

        return $this->post('/contactus', $this->validFields($attributes));
    }

    /*
     * Return sample submission data
     */
    protected function validFields($overrides = [])
    {
        return array_merge([
            'name'      => 'Fran Frowny',
            'email'     => 'fran@frowny.com',
            'phone'     => '555-555-5555',
            'message'   => 'If you could just call me back, that would be great, mmkay?'
        ], $overrides);
    }

}
