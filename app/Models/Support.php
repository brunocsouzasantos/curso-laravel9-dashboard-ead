<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory;

    protected $fillble = [
        'status',
        'description',
        'uuser_id',
        'llesson_id',
    ];
}
