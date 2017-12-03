<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HakkimizdaModel extends Model
{

    protected $table = "apz_hakkimizda";
    protected $fillable = ["numara","vizyon_baslik","vizyon_aciklama","tarih_baslik","tarih_aciklama","created_at","updated_at"];
    public $timestamps = false;


}
