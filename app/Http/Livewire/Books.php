<?php

namespace App\Http\Livewire;

use App\Jobs\BookRequestPayment;
use Livewire\Component;

class Books extends Component
{
    public $phone = '', $name = '', $country = '', $message = '';
    public function render()
    {
        return view('livewire.books');
    }

    public function contact()
    {

        $data = [
            'phone' => $this->phone,
            'name' => $this->name,
            'country' => $this->country,
            'message' => $this->message
        ];

        BookRequestPayment::dispatch($data);

        $this->reset(['phone', 'name', 'country', 'message']);

        $this->dispatchBrowserEvent('form-submitted');

        session()->flash('books', 'Votre demande a bien été envoyée !');

        #redirect('/books#order-form')->with('books', 'Votre demande a bien été envoyé !');
    }
}
