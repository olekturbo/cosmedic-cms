<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PriceSubcategory extends Model
{
    public function price_category() {
        return $this->belongsTo(PriceCategory::class);
    }

    public function prices() {
        return $this->hasMany(Price::class);
    }
}
