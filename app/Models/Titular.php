<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titular extends Model
{
    use HasFactory;

    protected $dates = ['date'];
    //tudo que for enviado pelo post deve ser atualizado tudo
    protected $guarded = [];
}
