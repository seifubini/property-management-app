<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $table = 'properties';

    protected $fillable = ['unique_id', 'name', 'category', 'status', 'rent_period', 'Price', 'currency', 'agent', 'description', 
        'latitude', 'longitude', 'images', 'country', 'city', 'Address', 'zone', 'property_size', 'bed_rooms', 'baths', 
        'garages', 'floors', 'building_year', 'features_text', 'video_description', 'video_url', 'floor_plan_description', 
        'floor_plans', 'published', 'created_by', 'phone_number', 'owner_id'
    ];

    /*
     * customers belong to a property
     *
    **/
    public function tenant(){

        return $this->hasMany(Tenant::class);
    }

    /*
     * property features belong to a property
     *
    **/
    public function propertyhasfeature(){

        return $this->hasMany(PropertyHasFeature::class);
    }
}
