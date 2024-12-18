<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;
    public function get_categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'posts_categories');
    }
}
