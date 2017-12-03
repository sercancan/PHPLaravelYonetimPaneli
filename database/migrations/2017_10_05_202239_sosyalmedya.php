<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sosyalmedya extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("apz_sosyalMedya",function($tablo){
          $tablo->increments("numara");
          $tablo->string("facebook")->nullable()->default("facebook-yok");
          $tablo->string("instagram");
          $tablo->string("twitter");
          $tablo->string("googleplus");
          $tablo->string("youtube");
          $tablo->string("tumblr");
          $tablo->string("pinterest");
          $tablo->string("vimeo");
          $tablo->string("linkedin");
          $tablo->string("flickr");
          $tablo->string("vk");
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
        Schema::drop("apz_sosyalMedya");
    }
}
