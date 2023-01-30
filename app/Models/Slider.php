<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable = [
        'status'
    ];


    public function files()
    {
        return $this->morphMany(File::class, 'fileable');
    }

    public function language()
    {
        return $this->hasMany(SliderLanguage::class, 'slider_id');
    }

    public function availableLanguage()
    {
        return $this->language()->where('language_id', '=', Localization::getIdByName(app()->getLocale()));
    }
}
