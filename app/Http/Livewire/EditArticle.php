<?php
namespace App\Http\Livewire;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class EditArticle extends Component
{
    use WithFileUploads;

    public $articleId;
    public $title;
    public $content;
    public $newImage;
    public $existingImage;

    public function mount($id)
    {
        if (!Auth::check()) {
            abort(403);
        }

        $article = Article::findOrFail($id);

        $this->articleId = $article->id;
        $this->title = $article->title;
        $this->content = $article->content;
        $this->existingImage = $article->image;
    }

    public function update()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'newImage' => 'nullable|image|max:2048',
        ]);

        $article = Article::findOrFail($this->articleId);

        $article->title = $this->title;
        $article->content = $this->content;
        $article->slug = Str::slug($this->title) . '-' . now()->format('YmdHis');

        if ($this->newImage) {
            $article->image = $this->newImage->store('articles', 'public');
        }

        $article->save();

        session()->flash('success', 'Article mis à jour avec succès !');
    }

    public function render()
    {
        return view('livewire.edit-article');
    }
}