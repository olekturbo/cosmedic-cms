<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    public function price_subcategory() {
        return $this->belongsTo(PriceSubcategory::class);
    }
}
