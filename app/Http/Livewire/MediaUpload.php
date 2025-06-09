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

        if ($this->image && $this->image->isValid()) {
            $destinationPath = public_path('assets/images/gallery');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $imagePath = $this->image->storeAs(
                'assets/images/gallery',
                uniqid() . '.' . $this->image->getClientOriginalExtension(),
                ['disk' => 'local']
            );


            Media::create([
                'filename' => $imagePath,
            ]);
        } else {
            $imagePath = null;
        }


        session()->flash('success', 'Image enregistrée avec succès !');
        $this->reset('image');
    }

    public function render()
    {
        return view('livewire.media-upload');
    }
}
