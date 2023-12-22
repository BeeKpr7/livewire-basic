<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $message;
    public $successMessage;

    protected $rules = [
        'first_name' => 'required|min:3',
        'last_name' => 'required|min:3',
        'email' => 'required|email',
        'phone' => 'required|numeric',
        'message' => 'required|min:10',
    ];
        //Real-time validations
    public function updated($propertyName)
    {

        $this->validateOnly($propertyName);
        
    }

    public function submitForm()
    {
        sleep(1);
        $validatedData = $this->validate();
        $this->resetForm();
        $this->successMessage='Your message has been submitted successfully.';
    }

    private function resetForm()
    {
        $this->first_name = '';
        $this->last_name = '';
        $this->email = '';
        $this->phone = '';
        $this->message = '';
    }

    public function render()
    {
        return view('livewire.contact-form');
    }

}
