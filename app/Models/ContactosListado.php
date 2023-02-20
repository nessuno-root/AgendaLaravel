<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactosListado extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table='v_contactos';
    protected $primaryKey='id_contacto';
   
}
