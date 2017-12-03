<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Musteriler extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("apz_musteriler",function($tablo){
            $tablo->increments("numara");
            $tablo->string("ad",15);
            $tablo->string("soyad",15);
            $tablo->string("telefon",11);
            $tablo->string("adres",100);
            $tablo->string("eposta",50)->unique();
            $tablo->string("mesaj",255);
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
        Schema::drop("apz_musteriler");
    }
}
