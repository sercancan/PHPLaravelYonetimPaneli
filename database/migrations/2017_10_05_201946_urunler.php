<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Urunler extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create("apz_urunler",function($tablo){

          $tablo->increments("numara");
          $tablo->string("urun_adi",40);
          $tablo->string("urun_kodu",15);
          $tablo->string("urun_aciklama",100);
          $tablo->string("urun_eklenmedurumu",15);
          $tablo->boolean("stok_durumu",false);
          $tablo->string("vitrin_resmi",100);
          $tablo->timestamps();

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("apz_urunler");
    }
}
