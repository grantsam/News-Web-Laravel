<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'category_id',
        'slug',
        'content',
        'image',
    ];

    /**
     * Get a snippet of the content (maximum 100 words).
     */
    public function getContentSnippetAttribute()
    {
        return str_word_count($this->content, 0) > 100
            ? implode(' ', array_slice(explode(' ', $this->content), 0, 100)) . '...'
            : $this->content;
    }

    /**
     * Define the relationship with the Category model.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
