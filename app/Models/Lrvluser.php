<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lrvluser extends Model
{
    use HasFactory;

    protected $table = 'testuser';

    protected $fillable = [
        'name',
        'email',
        'age',
    ];
}

