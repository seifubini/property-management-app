<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyFeature extends Model
{
    use HasFactory;

    protected $table = 'property_features';

    protected $fillable = ['name', 'icon', 'published'];

    /*
     * customers belong to a property
     *
    **/
    public function PropertyFeature(){

        return $this->belongsTo(PropertyHasFeature::class);
    }
}
