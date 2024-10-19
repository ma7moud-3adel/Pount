<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function cat()
    {
        return $this->belongsToMany(Category::class);
    }
    protected $fillable = [
        'name',
        'description',
        'image',
        'count',
        'meta_keywords',
    ];
}
