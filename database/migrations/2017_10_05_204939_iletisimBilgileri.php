<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class IletisimBilgileri extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("apz_iletisim",function($tablo){
            $tablo->increments("numara");
            $tablo->string("sirket_adi",100);
            $tablo->string("adres",100);
            $tablo->string("telefon",11);
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
        Schema::drop("apz_iletisim");
    }
}
