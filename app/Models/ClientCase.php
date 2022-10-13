<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientCase extends Model
{
    use HasFactory;

    protected $table = 'client_cases';

    protected $fillable = ['case_name', 'case_id', 'client_id', 'property_id', 'contract_id', 'employee_id', 'case_description', 
        'case_status', 'service_id', 'created_by'];

    public function ClientCase()
    {
        return $this->belongsTo(Property::class);
    }
}
