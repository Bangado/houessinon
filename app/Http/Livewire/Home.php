<?php

namespace App\Http\Livewire;

use App\Jobs\SendContactMail;
use Livewire\Component;

class Home extends Component
{
    public $email, $name, $subject, $message;

    public function render()
    {
        return view('livewire.home')->layout('layouts.app');
    }

    public function contact(){

        $data=[
            'email'=>$this->email,
            'name'=>$this->name,
            'subject'=>$this->subject,
            'message'=>$this->message
        ];

        SendContactMail::dispatch($data);

        $this->reset(['email', 'name', 'subject', 'message']);

        $this->dispatchBrowserEvent('form-submitted');

        session()->flash('success', 'Votre demande a bien été envoyée !');

    }
}
