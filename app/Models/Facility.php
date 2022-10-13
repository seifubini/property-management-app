<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;

    protected $table = 'facilities';

    protected $fillable = ['unique_id', 'name', 'category', 'status', 'agent', 'description', 'latitude', 'longitude', 
        'images', 'country', 'city', 'Address', 'zone', 'property_size', 'floors', 'building_year', 'features_text', 
        'video_description', 'video_url', 'floor_plan_description', 'floor_plans', 'published', 'created_by', 'phone_number', 
        'owner_id', 'manager_id'
    ];
}
