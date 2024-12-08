<?php

namespace App\Models;

use App\Models\News;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{

    use HasFactory;
    
    protected $table = 'category';
    protected $fillable = [
        'name'
    ];

    public function news() : HasMany
    {
        return $this->hasMany(News::class, 'category_id');
    }
}
