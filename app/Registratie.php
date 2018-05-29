<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registratie extends Model
{

    public $table = 'registratie';

    public $fillable = ['name','email','message'];

}

