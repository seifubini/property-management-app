<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;

    protected $table = 'quotations';

    protected $fillable = ['quotation_id', 'vendor_id', 'property_id', 'case_id', 'bid_price', 'bid_currency', 'delivery_time', 
        'quotation_status', 'created_by'];

    public function Quotation()
    {
        return $this->belongsTo(Vendor::class);
    }
}
