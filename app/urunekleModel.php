<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class urunekleModel extends Model
{
  protected $table = "apz_urunler";
  protected $fillable = [ "urun_adi",
                          "urun_kodu",
                          "urun_aciklama",
                          "urun_eklenmedurumu",
                          "stok_durumu",
                          "vitrin_resmi",
                          "created_at",
                          "updated_at"];

public $timestamps = false;




}
