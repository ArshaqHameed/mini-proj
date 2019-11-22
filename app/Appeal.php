<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appeal extends Model
{
    //
    protected $table = 'appeals';
    protected $primaryKey = 'ration';
    protected $fillable = ['ration','name','mobile','adhar','account','ifsc','amount'];
}
