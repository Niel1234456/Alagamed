<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alagamed extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'AppointmentDate', 'phone_number', 'services'
    ];
    protected $table = 'alagameds';
   
}