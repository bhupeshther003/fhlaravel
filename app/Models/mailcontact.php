<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;
use App\Mail\WelcomeEmail;
class mailcontact extends Model
{
    use HasFactory;

    protected $table='mailcontacts';
    protected $primaryKey="contact_id";

 
    /**
     * Write code on Method
     *
     * @return response()
     */
    // public static function boot() {
  
    //     parent::boot();
  
    //     static::created(function ($item) {
                
    //         $adminEmail = "bhupeshther520@gmail.com";
    //         Mail::to($adminEmail)->send(new WelcomeEmail($item));
    //     });
    // }
}
