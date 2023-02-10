<?php

namespace App\Models;

use App\Models\PropertyCharacteristic;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'broker_id', 'address', 'listing_type', 'city', 'zip_code', 'description', 'build_year'
    ];

    public function characsteristic()
    {
        return $this->hasOne(PropertyCharacteristic::class);
    }
}
