<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $table = 'agents';

    protected $fillable = ['name', 'email', 'phone_number', 'gender', 'picture', 'created_by', 'user_id'];

    public function Agent()
    {
        return $this->belongsTo(User::class);
    }
}
