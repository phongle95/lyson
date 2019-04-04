<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class travel extends Model
{
    protected $table = 'travel';
    protected $primaryKey = 'id';
    public $timestamps = false;

     protected $fillable = [
        'tenTour','title','tomTat','keyword','gia','img','date','noiDung','khuyenMai',
    ];

}
