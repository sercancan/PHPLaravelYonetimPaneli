<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MusterilerModel extends Model
{

    protected $table = "apz_musteriler";
    protected $fillable = ["numara","ad","soyad","telefon","adres","eposta","mesaj"];
    public $timestamps = true;


}
