<?php

namespace Tests\Feature;

use Tests\TestCase;
use Livewire\Livewire;
use App\Http\Livewire\ContactForm;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContactFormTest extends TestCase
{
    /** @test */
    function main_page_dont_contain_livewire_component_contact()
    {

        $this->get('/')
            ->assertDontSeeLivewire('contact');

    }

    /** @test */
    function main_page_contain_livewire_component_contactForm()
    {

        $this->get('/')
            ->assertSeeLivewire('contact-form');

    }

    /** @test */
    function contact_form_return_success_message() 
    {
        Livewire::test(ContactForm::class)
            ->set('first_name', 'John')
            ->set('last_name', 'Doe')
            ->set('email', 'johnDoe@gmail.com')
            ->set('phone', '1234567890')
            ->set('message', 'Hello World')
            ->call('submitForm')
            ->assertSee('Your message has been submitted successfully.');
        
    }
}
