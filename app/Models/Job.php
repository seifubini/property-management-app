<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'jobs';

    protected $fillable = ['job_id', 'case_id', 'vendor_id', 'scope_of_work', 'prepared_by', 'client_approval', 'agreement', 
            'management_approval', 'quotation_id', 'completed', 'created_by'
        ];
}
