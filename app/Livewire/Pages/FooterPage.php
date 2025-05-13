<?php

namespace App\Livewire\Pages;

use App\Models\Subscriber;
use Livewire\Component;
use Livewire\Attributes\Rule;

class FooterPage extends Component
{
    #[Rule('required|unique:subscribers,email')]
    public $email;

    public $response = '';


      // Clear form fields
    private function resetFields()
    {
        $this->email = '';
    }

    // Subscribe
    public function subscribe()
    {
        $this->validate();

        Subscriber::create([
            'email'     => $this->email,
            'status'    => 'Active',
            'date'      => now(),
        ]);
        $this->resetFields();

        $this->response ='Your subscription request has been sent. Thank you!';

        return redirect('/' . '#contact');
    }

    public function render()
    {
        return view('livewire.pages.footer-page');
    }
}
