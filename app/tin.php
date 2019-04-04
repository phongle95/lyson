<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tin extends Model
{
    protected $table = 'tin';
    protected $primaryKey = 'id';
    public $timestamps = false;

     protected $fillable = [
        'tieuDe','title','description','keyword','img','date','noiDung','maLoaiTin',
    ];

    public function loaitin()
    {
        return $this->belongsTo('App\loaitin', 'maLoaiTin');
    }
}
