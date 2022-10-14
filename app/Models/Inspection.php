<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inspection extends Model
{
    use HasFactory;

    protected $table = 'inspections';

    protected $fillable = ['inspection_id', 'inspection_date', 'property_id', 'staff_id', 'inspection_comment', 
        'inspection_color', 'inspection_description', 'owner_comment', 'inspection_image', 'inspection_attachment', 
        'owner_id', 'inspection_status', 'inspection_color', 'created_by'];
}
