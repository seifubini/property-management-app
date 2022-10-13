<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;

    protected $table = 'tenants';

    protected $fillable = ['property_id', 'owner_id', 'property_name', 'contract_code', 'property_code', 'customer_id', 
        'owner_address', 'owner_email', 'place_of_reference', 'property_purpose', 'property_floor_range', 'delivery_time', 
        'bedrooms_number', 'preference_area', 'agent_id', 'rent_fee', 'rent_fee_currency', 'rent_duration', 'site_visit_vehicle', 
        'client_id_card', 'client_comment', 'client_remark', 'contract_status', 'created_by'
    ];

    public function Tenant()
    {
        return $this->belongsTo(Property::class);
    }
}
