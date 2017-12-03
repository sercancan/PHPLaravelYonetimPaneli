<?php

namespace App\Http\Controllers;

use App\HakkimizdaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
//use Illuminate\Support\Facades\Validator;
use Validator;



class HakkimizdaController extends Controller
{

  public function __construct(){
      $this->middleware("auth");
  }

/*public function frontend_hakkimizda_show(){

      $hakkimizda_data=null;
        try{

          if(Schema::hasTable("apz_hakkimizda")){
              $hakkimizda_data = HakkimizdaModel::select("vizyon_baslik","vizyon_aciklama","tarih_baslik","tarih_aciklama")->get();
          }
        }catch(\Exception $exp){

        }finally{

        }
         return view('frontend.hakkimizda')->with("bilgiler",$hakkimizda_data);
  }//METHOD
  */

    public function hakkimizda_show(){

        if(Schema::hasTable("apz_hakkimizda")){
            $show_value = HakkimizdaModel::select("vizyon_baslik","vizyon_aciklama","tarih_baslik","tarih_aciklama")->get();
        }

        return view("backend.hakkimizda")->with("sayfa","Hakkimizda")->with("show_data",$show_value);
    }

    public function hakkimizda_create(Request $request){


        $vizyon_baslik    =   $request->input("vizyon_baslik");
        $vizyon_aciklama  =   $request->input("vizyon_aciklama");
        $tarihce_baslik   =   $request->input("tarihce_baslik");
        $tarihce_aciklama =   $request->input("tarihce_aciklama");

        $validator = Validator::make($request->all(),[
          'vizyon_baslik' =>   'required',
          'vizyon_aciklama' => 'required',
          'tarihce_baslik' =>  'required',
          'tarihce_aciklama'=> 'required',
        ]);

        if($validator->fails()){
          return response(["durum"=>"warning",
                           "baslik"=>"Eksik Tanımlama",
                            "icerik"=>"Baslik ,yada içerik bölümlerini eksik girdiniz.Tekrar Deneyiniz."]);
        }

        if(Schema::hasTable("apz_hakkimizda")) {
            $sayi = HakkimizdaModel::get()->count();

           if($sayi  == 0 ) {
               $hakkimizdaTablo = new HakkimizdaModel;
               $hakkimizdaTablo->vizyon_baslik = $vizyon_baslik;
               $hakkimizdaTablo->vizyon_aciklama = $vizyon_aciklama;
               $hakkimizdaTablo->tarih_baslik = $tarihce_baslik;
               $hakkimizdaTablo->tarih_aciklama = $tarihce_aciklama;
               $hakkimizdaTablo->save();
           }else{
               $sutuns = array("vizyon_baslik"=>$vizyon_baslik,
                               "vizyon_aciklama"=>$vizyon_aciklama,
                               "tarih_baslik"=>$tarihce_baslik,
                               "tarih_aciklama"=>$tarihce_aciklama);

               $Guncelleme = HakkimizdaModel::where("numara",">","0")->update($sutuns);

               return response(['durum'=>'success',
                   'baslik'=>'Bllgi Durumu',
                   'icerik'=> 'Bilgileriniz Güncellendi.']);
           }
        }

          return response(['durum'=>'success',
              'baslik'=>'Bilgileriniz Kayıt Edilmiştir.',
              'icerik'=> 'Bilgileriniz Kayıt Edilmiştir']);

    }//function

    /////////////////////////////////
}
