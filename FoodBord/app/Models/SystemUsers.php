<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemUsers extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'email',
        'role',
        'nat_id',
        'password',
        'approved_at'
    ];
}
