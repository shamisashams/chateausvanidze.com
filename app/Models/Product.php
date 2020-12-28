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
        'price',
        'vip',
        'sale',
        'sale_price'
    ];
    public function files()
    {
        return $this->morphMany('App\Models\File', 'fileable');
    }

    public function details(){
        return $this->hasMany('App\Models\ProductLanguage', 'product_id')->where('language_id', Localization::getIdByName(app()->getLocale()));
    }

    public function language()
    {
        return $this->hasMany('App\Models\ProductLanguage', 'product_id');
    }
    public function features()
    {
        return $this->hasMany('App\Models\ProductFeatures', 'product_id');
    }
    public function answers()
    {
        return $this->hasMany('App\Models\ProductAnswers', 'product_id');
    }

    public function availableLanguage() {
        return $this->language()->where('language_id','=', Localization::getIdByName(app()->getLocale()));
    }
}
