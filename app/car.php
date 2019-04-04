<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    protected $table = 'car';
    protected $primaryKey = 'id';
    public $timestamps = false;

     protected $fillable = [
        'todo','title','description','keyword','img','noiDung',
    ];

}
