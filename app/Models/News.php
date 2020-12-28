<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'position',
        'status',
        'slug',
    ];

    public function details(){
        return $this->hasMany('App\Models\NewsLanguage', 'news_id')->where('language_id', Localization::getIdByName(app()->getLocale()));
    }
    public function files()
    {
        return $this->morphMany('App\Models\File', 'fileable');
    }
    public function language()
    {
        return $this->hasMany('App\Models\NewsLanguage', 'news_id');
    }


    public function availableLanguage() {
        return $this->language()->where('language_id','=', Localization::getIdByName(app()->getLocale()));
    }
}
