<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointment_querie extends Model
{
    use HasFactory;
    protected $table="appointment_queries";
    protected $primaryKey='apoint_query_id';
}
