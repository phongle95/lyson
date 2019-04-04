<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaitin extends Model
{
    protected $table = 'loaitin';
    protected $primaryKey = 'maLoaiTin';
    public $timestamps = false;

     protected $fillable = [
        'tenLoaiTin',
    ];

    public function tin()
    {
        return $this->belongsTo('App\tin', 'maLoaiTin');
    }
}
