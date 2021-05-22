<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthModel extends Model
{
    use HasFactory;

    protected $table = 'user_tb';
    protected $fillable = [
        'name',
        'date_of_birth',
        'phone',
        'email',
        'status',
        'password_hash'
    ];
}
