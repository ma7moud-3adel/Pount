<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
// use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory;
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
    // use HasTranslations;

    protected $fillable = [
        'name',
        'description',
        'image',
    ];
    // public $translatable = [
    //     'name',
    //     'description',
    // ];
}
