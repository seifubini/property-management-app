<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $fillable = ['service_id', 'service_name', 'service_description', 'unit', 'unit_price', 'unit_price_currency',
        'created_by', 'status'];

    public function Service()
    {
        return $this->belongsTo(ServicePackage::class);
    }
}
