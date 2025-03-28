<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class plant extends Model
{
    use HasSlug;
    protected $connection = 'plants';

    protected $fillable = ['category', 'name', 'slug', 'description', 'price', 'stock_quantity', 'is_active', 'imageUrl'];


    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()->generateSlugsFrom('name')->saveSlugsTo('slug');
    }


}
