<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\iletisimModel;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use App\MusterilerModel;

class iletisimController extends Controller
{

    public function __construct(){
        $this->middleware("auth");
    }

    public function frontend_bizeulasin_create(Request $request){

  try{

      $validator = Validator::make($request->all(), [
        'ad'=>'required',
        'soyad'=>'required',
        'eposta'=>'required|email',
        'telefon'=>'required',
        'mesaj'=> 'required'
    ]);

    if ($validator->fails()) {
      return response(["durum"=>"warning",
                       "baslik"=>"Boş alan",
                        "icerik"=>"Boş alanlaı doldurunuz."]);
    }

    if(Input::has("ad") && Input::has("soyad") && Input::has("eposta") && Input::has("telefon") && Input::has("mesaj")){

        MusterilerModel::create($request->all());
    }
  }catch(\Exception $exp){
    return response(["durum"=>"warning",
                     "baslik"=>"Hata Tespiti",
                      "icerik"=>"Catch Bölümünde hata yakalandı.".$exp]);
  }finally{

  }

    return view("frontend.bizeulasin");
  }//FUNC

    public function frontend_bizeulasin_show(){
          return view("frontend/bizeulasin");
    }//METHODU

    public function frontend_iletisim_show(){
      $iletisim_data = null;
        try{
          $iletisim_data = iletisimModel::select("sirket_adi","adres","telefon")->get();

        }catch(\Exception $expt){

        }finally{
          return view("frontend.iletisim")->with("iletisim_data",$iletisim_data);
        }

    }//METHOD

    public function iletisim_show(){

      $data_iletisim = iletisimModel::select("numara","sirket_adi","adres","telefon")->get();

      return view("backend.admiletisimalani")->with("sayfa","İletişim Bilgileri")->with("tablo_iletisim",$data_iletisim);
    }//FUNC

///////////////////////////////////////////////////

  public function iletisim_create(){


      $sirketadi = Input::get("sirketadi");
      $adres = Input::get("adres");
      $telefon = Input::get("telefon");

    if(Schema::hasTable("apz_iletisim")){
      $data_iletisim = iletisimModel::select("numara","sirket_adi","adres","telefon")->get();
      $veriSayisi =   iletisimModel::get()->count();

        if($veriSayisi > 0){
          $sutuns = array("sirket_adi"=>$sirketadi,"adres"=>$adres,"telefon"=>$telefon);
          $iletisim_guncelle = iletisimModel::where("numara",">","0")->update($sutuns);

        }else{
        $iletisimtablo_Ekle = new iletisimModel;
        $iletisimtablo_Ekle->sirket_adi = $sirketadi;
        $iletisimtablo_Ekle->adres = $adres;
        $iletisimtablo_Ekle->telefon = $telefon;
        $iletisimtablo_Ekle->save();
    }
      }//if hasTable

      //return "$sirketadi - $adres - $telefon";
      return view("backend.admiletisimalani")->with("tablo_iletisim",$data_iletisim);


  }//function

  ////////////////////////

}
