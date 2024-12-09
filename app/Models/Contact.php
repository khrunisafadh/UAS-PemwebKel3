<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use hasFactory;
    
    protected $table = 'contacts';
    protected $fillable = [
        'name',
        'email',
        'message'
    ];
}
