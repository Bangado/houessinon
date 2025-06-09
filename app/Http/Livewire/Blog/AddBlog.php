<?php

namespace App\Http\Livewire\Blog;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddBlog extends Component
{

    use WithFileUploads;

    public $title;
    public $image;
    public $content;

    public function mount()
    {
        if (!Auth::check()) {
            abort(403, 'Accès interdit');
        }
    }


    public function save()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'content' => 'required|string',
        ]);

        // $imagePath = $this->image ? $this->image->store('articles', 'public') : null;

        if ($this->image && $this->image->isValid()) {
            $destinationPath = public_path('assets/images/articles');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $imagePath = $this->image->storeAs(
                'assets/images/articles',
                uniqid() . '.' . $this->image->getClientOriginalExtension(),
                ['disk' => 'local']
            );


        } else {
            $imagePath = null;
        }

        Article::create([
            'title' => $this->title,
            'image' => $imagePath,
            'content' => $this->content,
        ]);

        session()->flash('success', 'Article créé avec succès !');
        $this->reset(['title', 'image', 'content']);
    }


    public function render()
    {
        return view('livewire.blog.add-blog');
    }
}
