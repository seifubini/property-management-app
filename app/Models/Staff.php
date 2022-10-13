<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'staff';

    protected $fillable = ['name', 'email', 'phone_number', 'position', 'id_number', 'gender', 'picture', 
        'created_by', 'user_id', 'joining_date', 'status'];

    public function Staff()
    {
        return $this->belongsTo(User::class);
    }
}
