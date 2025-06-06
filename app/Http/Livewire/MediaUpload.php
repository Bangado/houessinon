<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Media;

class MediaUpload extends Component
{
    use WithFileUploads;

    public $image;

    public function save()
    {
        $this->validate([
            'image' => 'required|image|max:2048',
        ]);

        $filename = $this->image->store('gallery', 'public');

        Media::create([
            'filename' => $filename,
        ]);

        session()->flash('success', 'Image enregistrée avec succès !');
        $this->reset('image');
    }

    public function render()
    {
        return view('livewire.media-upload');
    }
}
