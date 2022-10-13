<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorCase extends Model
{
    use HasFactory;

    protected $table = 'vendor_cases';

    protected $fillable = ['vendor_id', 'case_id'];
}
