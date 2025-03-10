<?php

namespace App\Models;

use App\Models\Posts;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    protected $fillable = ['name', 'slug'];
    

    public function Posts(): HasMany 
    {
        return $this->hasMany(Posts::class);
    }
}
