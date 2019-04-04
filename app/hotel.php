<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hotel extends Model
{
    protected $table = 'hotel';
    protected $primaryKey = 'id';
    public $timestamps = false;

     protected $fillable = [
        'tenHotel','title','description','keyword','gia','img','diaChi','noiDung',
    ];

}
