<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'release_date',
        'position',
        'status',
        'slug',   
        'price'
    ];
    public function files()
    {
        return $this->morphToMany('App\Models\File', 'fileable');
    }
    public function language()
    {
        return $this->hasMany('App\Models\ProductLanguage', 'product_id');
    }

}
