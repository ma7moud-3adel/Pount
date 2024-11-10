<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    protected $fillable = [
        'name',
        'description',
        'image',
        'image_0',
        'image_1',
        'category_id',
        'price',
        'size',
    ];
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
