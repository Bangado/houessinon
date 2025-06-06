<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleDetail extends Component
{

    public $slug;
    public $article;

    public function mount($slug)
    {
        $this->slug = $slug;
        $this->article = Article::where('slug', $slug)->firstOrFail();
    }
    public function render()
    {
        return view('livewire.article-detail');
    }
}
