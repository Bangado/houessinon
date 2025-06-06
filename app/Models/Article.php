<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;
    use HasUuids;

        protected $fillable = [
        'title',
        'slug',
        'image',
        'content',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($article) {
            // Si le slug n’est pas défini manuellement
            $timestamp = Carbon::now()->format('YmdHis');
            $article->slug = Str::slug($article->title) . '-' . $timestamp;
        });
    }
}
