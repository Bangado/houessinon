<?php

namespace App\Http\Livewire;

use App\Mail\ContactMail;
use App\Models\Contact as ModelsContact;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contact extends Component
{
    public $name;
    public $email;
    public $phone;
    public $description;
 
    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
        'phone' => 'string|regex:/^0[1-9]([-. ]?[0-9]{2}){4}$/',
        'description' => 'required',
    ];

    public function sendMail() {
        $this->validate();
 
        // Execution doesn't reach here if validation fails.
 
        $data = ModelsContact::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'description' => $this->description,
        ]);

        Mail::to(env('ADMIN_EMAIL'))->send(new ContactMail($data));

        $this->reset(['name', 'email', 'phone', 'description']);

        session()->flash('message', 'Votre message est bien envoyé');

    }

    public function render()
    {
        return view('livewire.contact')->layout('layouts.app');
    }
}
