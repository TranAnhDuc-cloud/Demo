<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'tablePost';
    protected $fillable = ['clm1','clm2','clm3'];
    protected $timestamps = false;

    public function Post(){
        // belongsTo() Liên Kiết con tới cha 1-1
        return $this->belongsTo('App\LoaiSanPham');
    }
}
