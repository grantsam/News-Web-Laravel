<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Posts extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'user_id', 'category_id', 'slug', 'content', 'image'];

    // Relasi ke User
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke Category
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    // Accessor untuk mendapatkan nama author dari User
    public function getAuthorAttribute(): string
    {
        return $this->user ? $this->user->name : 'Unknown';
    }
}
