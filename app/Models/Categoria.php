<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    public $timestamps = false;
    use HasFactory;
    protected $table = 't_categorias';
    protected $primaryKey='id_categoria'; 
}
