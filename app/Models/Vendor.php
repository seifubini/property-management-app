<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $table = 'vendors';

    protected $fillable = ['name', 'email', 'phone_number', 'company_name', 'picture', 'created_by', 'user_id'];

    public function Vendor()
    {
        return $this->belongsTo(User::class);
    }
}
