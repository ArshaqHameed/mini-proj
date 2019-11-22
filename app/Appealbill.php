<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appealbill extends Model
{
    //
    protected $table = 'appealbills';
    protected $fillable = ['ration-id','amount'];
}
