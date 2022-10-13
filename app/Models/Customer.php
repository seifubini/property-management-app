<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = ['name', 'email', 'phone_number', 'gender', 'picture', 'created_by', 'user_id'];

    public function Customer()
    {
        return $this->belongsTo(User::class);
    }
}
