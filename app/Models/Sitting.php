<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sitting extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'address_1',
        'address_2',
        'company_message',
        'about',
        'code_pixel',
        'google_tag',
    ];
}
