<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newapk extends Model
{
    protected $table = 'newapks';
    protected $primaryKey = 'ration';
    protected $fillable = ['ration','name','gender','age','mobile','head','housename','taluk','village','panchayath','nofamily','adhar','account','ifsc'];
}



