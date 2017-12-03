<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HaberlerModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Schema;
use Intervention\Image\Facades\Image;
use Validator;
use Illuminate\Support\Facades\Input;

class HaberlerController extends Controller
{


    /*  public function __construct(){
        $this->middleware("auth");
      }
      */




        public function admhaber_sayfasi(){
            return view("backend.admhaberekle")->with("sayfa","Haber Ekle");
        }//FUNC


      public function haberler_show(){

          if(Schema::hasTable("apz_haberler")){
            $haberler_data = HaberlerModel::select("haber_resmi","haber_baslik","haber_icerik","created_at")->orderBy("id","DESC")->get();
            //  return view("frontend.haberler")->with("haberler_data",$haberler_data);
          }
          return view("frontend.haberler")->with("haberler_data",$haberler_data);
      }//FUNC

      public function backend_haberler_show(){

          if(Schema::hasTable("apz_haberler")){
            $haberler_data = HaberlerModel::select("id","haber_resmi","haber_baslik","haber_icerik","created_at")->orderBy("id","DESC")->get();
            //  return view("frontend.haberler")->with("haberler_data",$haberler_data);
          }
          return view("backend.admhaberler")->with("haberler_data",$haberler_data);
      }//FUNC

      public function haberler_create(Request $request){

        $haber_resmi = null;
        $haber_baslik = null;
        $haber_icerik = null;

        $validator = Validator::make($request->all(),[
          'haberresmi'=>'required',
          'haberbaslik'=>'required',
          'habericerigi'=>'required'
        ]);

        if($validator->fails()){
          return response(["durum"=>"warning",
                           "baslik"=>"Eksik Tanımlama",
                            "icerik"=>"Baslik ,Resim yada içerik bölümünü girmediniz.Tekrar Deneyiniz."]);
        }

        try{
          if($request->has("haberresmi") && $request->has("haberbaslik") && $request->has("habericerigi")){
            $haber_resmi = $request->file("haberresmi");
            $haber_baslik = $request->input("haberbaslik");
            $haber_icerik = $request->input("habericerigi");

              if(Schema::hasTable("apz_haberler"))
              {
                Storage::disk("haberuploads")->makeDirectory("hresim");

                 $uzanti =  $haber_resmi->getClientOriginalExtension();
                 $genislik =   Image::make($haber_resmi->getRealPath())->width();
                 $uzunluk =  Image::make($haber_resmi->getRealPath())->height();

                 $dizin = "HaberResimleri/hresim/".$haber_resmi->getClientOriginalName();

               Image::make($haber_resmi->getRealPath())->resize($genislik,$uzunluk)->save($dizin);

            $haber_insert = new HaberlerModel;
            $haber_insert->haber_resmi = $haber_resmi->getClientOriginalName();
            $haber_insert->haber_baslik = $haber_baslik;
            $haber_insert->haber_icerik = $haber_icerik;
            $haber_insert->save();
              }
        }else{
          return response(["durum"=>"warning",
                           "baslik"=>"Eksik Tanımlama",
                            "icerik"=>"Baslik ,Resim yada içerik bölümünü girmediniz.Tekrar Deneyiniz."]);
        }

      }catch(\Exception $et){
            return response(["durum"=>"error",
                             "baslik"=>"Catch Yakaladı",
                              "icerik"=>"Hata Bölümü Devrede bakınız."]);
          }finally{

            //  return $haber_baslik."-".$haber_icerik;
         return response(["durum"=>"success","baslik"=>"Haber Kayıt","icerik"=>"Başarıyla Haberlerinizi Kaydettiniz."]);
              //return view("backend.haberekle");
          }

      }//METHOD

        public function admhaber_duzenle_sayfa(){
            try{
                if(Input::has("haberDuzenle") )
                {
                  $haber_id = Input::get("haberDuzenle");
                  $haber_cek = HaberlerModel::where("id","=",$haber_id)->get();
                }

            }catch(\Exception $ext){

            }finally{

            }
          return view("backend.admhaberduzenle")->with("haber_edit",$haber_cek);
        }

//////////////////////////////////////

      public function admhaber_edit_post(Request $request){

              $guncellenen_id = $request->input("guncelleme_id");
                $haber_resmi = null;
                $haber_baslik = null;
                $haber_icerik = null;

                $validator = Validator::make($request->all(),[
                  'haberresmi'=>'required',
                  'haberbaslik'=>'required',
                  'habericerigi'=>'required'
                ]);

                if($validator->fails()){
                  return response(["durum"=>"warning",
                                   "baslik"=>"Eksik Tanımlama",
                                    "icerik"=>"Baslik ,Resim yada içerik bölümünü girmediniz.Tekrar Deneyiniz."]);
                }

                try{
                  if($request->has("haberresmi") && $request->has("haberbaslik") && $request->has("habericerigi")){
                    $haber_resmi = $request->file("haberresmi");
                    $haber_baslik = $request->input("haberbaslik");
                    $haber_icerik = $request->input("habericerigi");

                    /*  if(Schema::hasTable("apz_haberler"))
                      {
                        Storage::disk("haberuploads")->makeDirectory("hresim");

                         $uzanti =  $haber_resmi->getClientOriginalExtension();
                         $genislik =   Image::make($haber_resmi->getRealPath())->width();
                         $uzunluk =  Image::make($haber_resmi->getRealPath())->height();

                         $dizin = "HaberResimleri/hresim/".$haber_resmi->getClientOriginalName();

                       Image::make($haber_resmi->getRealPath())->resize($genislik,$uzunluk)->save($dizin);
                      }
                      */

                      $sutuns = array("haber_baslik"=>$haber_baslik,"haber_icerik"=>$haber_icerik);
                      HaberlerModel::where("id","=",$guncellenen_id)->update($sutuns);


                }else{
                  return response(["durum"=>"warning",
                                   "baslik"=>"Eksik Tanımlama",
                                    "icerik"=>"Baslik ,Resim yada içerik bölümünü girmediniz.Tekrar Deneyiniz."]);
                }

              }catch(\Exception $et){
                    return response(["durum"=>"error",
                                     "baslik"=>"Catch Yakaladı",
                                      "icerik"=>"Hata Bölümü Devrede bakınız."]);
                  }finally{

                    //  return $haber_baslik."-".$haber_icerik;
                 return response(["durum"=>"success","baslik"=>"Haber Kayıt","icerik"=>"Başarıyla Haberlerinizi Kaydettiniz."]);
                      //return view("backend.haberekle");
                  }


      }//FUNC
}
