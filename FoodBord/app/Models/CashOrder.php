<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashOrder extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'transfer',
        'total' ,
        'username',
        'phone-number',
        'email',
        'address',
        'message',
        'terms'
    ];

}
