<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class GaleriController extends Controller
{


public function __construct(){
    $this->middleware("auth");
}


public function sercanus(){

  return "Kadere";
}
///////////////////////////////////////////////////////////
    public function galeri_create(Request $request){

          $resim = Input::file("galeriresim");

      //CALISMADI VALIDATOR
      /*
          $validator = Validator::make($request->all(),[
            'galeriresim[]' => 'required'
          ]);

          if( $validator->fails() ){
            return response(["durum"=>"warning",
                             "baslik"=>"Kayıt Durumu",
                              "icerik"=>"Lütfen Resim Dosyası Ekleyin"]);

          }
          */

       if(empty($resim)){
          return response(["durum"=>"warning",
                           "baslik"=>"Kayıt Durumu",
                            "icerik"=>"Resim Eklemeyi Unuttunuz.."]);
        }


        $i = 0;
          foreach($resim as $file){
            $i++;
            Storage::disk("galeriuploads")->makeDirectory("gresim");

             $uzanti =  $file->getClientOriginalExtension();
             $genislik =   Image::make($file->getRealPath())->width();
             $uzunluk =  Image::make($file->getRealPath())->height();

             $dizin = "GaleriResimleri/gresim/".$file->getClientOriginalName()."-$i.$uzanti";

           Image::make($file->getRealPath())->resize($genislik,$uzunluk)->save($dizin);
        }//foreach


      //Storage::disk("uploads")->makeDirectory("img");
      //Image::make($resim->getRealPath())->resize(222,200)->save("yuklenen/img/logos.png");

      return response(['durum'=>'success',
                   'baslik'=>'Ürün Kayıt Durumu',
                   'icerik'=> ' adlı urununuz kayıt edildi ;)']);
    }//function
    ///////////////////////////////
}
