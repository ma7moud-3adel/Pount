<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    protected $fillable = [
        'name',
        'description',
        'image',
        'price',
        'size',
    ];
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
