<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
<<<<<<< HEAD
        'image',
=======
>>>>>>> 900c954ac77b78dc6c78db428a9e9fefc896b08f
    ];
}