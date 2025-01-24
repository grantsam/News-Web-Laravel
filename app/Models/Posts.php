<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\Category;
class Posts extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory, Notifiable;

    protected $table = 'posts';
    protected $fillable = ['title', 'author', 'slug', 'content', 'image'];

    public function Category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}