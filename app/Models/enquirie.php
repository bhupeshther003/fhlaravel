<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enquirie extends Model
{
    use HasFactory;
    protected $table='enquiries';
    protected $primaryKey="id";
}