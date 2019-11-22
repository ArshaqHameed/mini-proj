<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    protected $table = 'forbills';
    protected $primaryKey = 'id';
    protected $fillable = ['ration_id','account','ifsc'];
}
