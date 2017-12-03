<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HaberlerMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("apz_haberler",function($tablo){
            $tablo->increments("id");
            $tablo->string("haber_resmi");
            $tablo->string("haber_baslik");
            $tablo->string("haber_icerik");
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
        Schema::drop("apz_haberler");
    }
}
