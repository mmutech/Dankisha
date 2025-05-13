<?php

namespace App\Livewire\Pages;

use App\Mail\AutoReply;
use App\Mail\ContactMessage;
use App\Models\Contact;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Rule;

class ContactPage extends Component
{
    #[Rule('required')]
    public $name;

    #[Rule('required')]
    public $email;

    #[Rule('required')]
    public $subject;

    #[Rule('required')]
    public $message;

    public $response = '';

    // Clear form fields
    private function resetFields()
    {
        $this->name = '';
        $this->email = '';
        $this->subject = '';
        $this->message = '';
    }

    // Store Contact
    public function store()
    {
        $this->validate();

        Contact::create([
            'name'      => $this->name,
            'email'     => $this->email,
            'subject'   => $this->subject,
            'message'   => $this->message,
        ]);

        $data = [
            'name'      => $this->name,
            'email'     => $this->email,
            'subject'   => $this->subject,
            'message'   => $this->message,
        ];

        // Send email to YOU (admin)
        Mail::to('contact@dankisha.com')->send(new ContactMessage($data));

        // Send auto-reply to the customer
        Mail::to($this->email)->send(new AutoReply($data));

        $this->dispatch('success', message: 'Message Sent Successfully. Thank you!');
        $this->resetFields();

        $this->response ='Your message has been sent. Thank you!';

        return redirect('/' . '#contact');

    }

    public function render()
    {
        return view('livewire.pages.contact-page');
    }
}
