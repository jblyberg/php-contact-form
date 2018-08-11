<?php

namespace Tests\Integration\Models;

use App\Models\Contact;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContactFormTest extends TestCase
{

    use RefreshDatabase;

    /** @test  */
    public function a_contact_submission_has_a_telephone_number()
    {

        $contact = factory(Contact::class)->create();

        return $this->assertNotEmpty($contact->phone);

    }

    /** @test  */
    public function a_contact_submission_has_no_telephone_number()
    {

        $contact = factory(Contact::class)->create(['phone' => null]);

        return $this->assertEmpty($contact->phone);

    }

}