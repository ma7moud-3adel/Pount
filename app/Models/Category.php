<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory;
    public function product()
    {
        return $this->belongsToMany(Product::class);
    }
    use HasTranslations;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'is_showin',
        'is_popular',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];
    public $translatable = [
        'name',
        'slug',
        'description',
    ];
}
