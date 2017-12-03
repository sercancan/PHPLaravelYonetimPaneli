<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUserTableColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

          Schema::table("users",function($table){
            $table->string("user_level")->default("user");
            $table->string("location")->nullable()->default(null);
            $table->integer("gender")->nullable()->default(null);
            $table->string("website")->nullable()->default(null);
            $table->string("job")->nullable()->default(null);
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("users",function($table){
          $table->dropColumn("user_level");
          $table->dropColumn("location");
          $table->dropColumn("gender");
          $table->dropColumn("website");
          $table->dropColumn("job");
        });
    }
}
