<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Input;

class KullaniciController extends Controller
{

    public function __construct(){
      $this->middleware("auth");
    }

    public function kullanicilar_show(){
        try{
        if(Schema::hasTable("users") )
        {
          $kisiler = User::select("id","name","email","aktiflik","created_at","updated_at")->get();
        }
      }catch(\Exception $exp){

      }finally
      {
          return view("backend.kullanicilar")->with("kisiler",$kisiler);
      }

    }//SHOW METHOD

    public function kullanicilar_AktifPasif(){

      $durum = null;
      $kullanici_id = null;
      if(Schema::hasTable("users")){
        if(Input::has("kullanici_denetim") && Input::has("kullanici_id"))
        {
          $durum = Input::get("kullanici_denetim");
          $kullanici_id = Input::get("kullanici_id");

            $sutun = array("aktiflik"=>$durum);
            User::where("id",$kullanici_id)->update($sutun);
       }//ic IF

     }//dıs IF

     try{
     if(Schema::hasTable("users") )
     {
       $kisiler = User::select("id","name","email","aktiflik","created_at","updated_at")->get();
     }
   }catch(\Exception $exp){

   }finally
   {
   }

        return view("backend/kullanicilar")->with("kisiler",$kisiler);
    }//METHOD

}
