<?php

namespace App\Http\Livewire\Blog;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class ShowArticle extends Component
{

    use WithPagination;

    protected $paginationTheme = 'tailwind';



    public function render()
    {
        return view('livewire.blog.show-article', [
            'articles' => Article::latest()->paginate(6),
        ]);
    }
}
