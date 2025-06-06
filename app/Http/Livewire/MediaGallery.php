<?php

namespace App\Http\Livewire;

use App\Models\Media;
use Livewire\Component;

class MediaGallery extends Component
{

    public $currentIndex = null;

    public function updatedCurrentIndex($index)
    {
        $this->currentIndex = $index;
        $this->emit('openImageModal', $index);
    }


    public function render()
    {
        $images = Media::latest()->get();

        return view('livewire.media-gallery', [
            'images' => $images
        ]);
    }
}
