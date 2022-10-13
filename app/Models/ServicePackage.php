<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePackage extends Model
{
    use HasFactory;

    protected $table = 'service_packages';

    protected $fillable = ['service_id', 'package_code', 'package_description', 'package_status', 'created_by'];

    public function ServicePackage()
    {
        return $this->hasMany(Service::class);
    }

}
