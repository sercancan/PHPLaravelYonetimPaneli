<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HaberlerModel extends Model
{

    protected $table = "apz_haberler";
    protected $fillable =["id","haber_resmi","haber_baslik","haber_icerik"];
    public $timestamps = true;
    
}
