<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    
    use HasFactory;
    
    protected $table = 'news';
    protected $fillable = [
        'slug',
        'title',
        'content',
        'image',
        'author',
        'category_id',
    ];

    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}



