<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Schema;
use App\MusterilerModel;
class MusterilerController extends Controller
{

    /*public function __construct(){
        $this->middleware("auth");
    }*/


    public function musteriler_show(){
          $musteriler_data = null;
      try{

          if(Schema::hasTable("apz_musteriler"))
          {
              $musteriler_data = MusterilerModel::select("numara","ad","soyad","telefon","adres","eposta","mesaj","created_at")
                                                  ->orderBy("numara","asc")
                                                  ->get();
          }


      }catch(\Exception $et){
          return "MUSTERI TABLO HATASI";
      }finally{

      }
      return view("backend.musteriler")->with("musteriler_data",$musteriler_data);
    }//FUNC

}
