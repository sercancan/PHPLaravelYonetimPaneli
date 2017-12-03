<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hakkimizda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("apz_hakkimizda",function($tablo){
            $tablo->increments("numara");
            $tablo->string("vizyon_baslik",100);
            $tablo->string("vizyon_aciklama",255);
            $tablo->string("tarih_baslik",100);
            $tablo->string("tarih_aciklama",255);
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
      Schema::drop("apz_hakkimizda");
    }
}
