<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class iletisimModel extends Model
{
    protected $table = "apz_iletisim";
    protected $fillable = ["numara","sirket_adi","adres","telefon"];
    public $timestamps = false;










}
