<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PriceCategory extends Model
{
    public function price_subcategories() {
        return $this->hasMany(PriceSubcategory::class);
    }
}
