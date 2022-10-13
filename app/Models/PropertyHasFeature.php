<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyHasFeature extends Model
{
    use HasFactory;

    protected $table = 'property_has_features';

    protected $fillable = ['property_id', 'property_feature_id'];

    /*
     * property features belong to a property
     *
    **/
    public function propertyhasfeature(){

        return $this->belongsTo(Property::class);
    }

}
