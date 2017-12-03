<?php

namespace App\Http\Controllers;


use App\urunekleModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Schema;
use Intervention\Image\Facades\Image;
use Validator;

    class UrunlerController extends Controller
{

  public function __construct(){
      $this->middleware("auth");
  }

/*
    public function urunler_show_frontend()
    {
      if(Schema::hasTable("apz_urunler"))
      {
          $tablo_verileri = urunekleModel::select("numara","urun_adi","urun_kodu","urun_aciklama",
                                                  "urun_eklenmedurumu","stok_durumu","vitrin_resmi")
                                                  ->orderBy("numara","DESC")
                                                  ->get();
       }//if
              return view("frontend/urunler")->with("urunler_data",$tablo_verileri);
    }
    */

  public function urunler_edit(){
    $NumaraDuzenle = Input::get("numDuzenle","duzenleNo-Yok");

      if($NumaraDuzenle != "duzenleNo-Yok"){
        $veri_duzenle = urunekleModel::where("numara",$NumaraDuzenle)->get();
      }

    return view("backend.urunDuzenle")->with("sayfa","Haber Ekle")->with("duzenleID",$veri_duzenle);

  }//FUNC

  public function urunler_edit_post(Request $request)
  {

    $guncellenen_ID = $request->input("guncellenen_id");

        try{
            $validator = Validator::make($request->all(),[
            //  'urunresmi'=>'required',
              'urunad'=>'required',
              'urunkodu'=>'required',
              'urunaciklama'=>'required',
              'stokvarmi' =>"required",
            ]);

            $urunad = $request->input("urunad");
            $urunkodu = $request->input("urunkodu");
            $urunaciklama = $request->input("urunaciklama");
            $stokdurumu = $request->input("stokvarmi");

            if($validator->fails())
            {
              return "HATALI DUZENLEME tt";
            }
            $sutuns = array("urun_adi"=>$urunad,"urun_kodu"=>$urunkodu,"urun_aciklama"=>$urunaciklama,"stok_durumu"=>$stokdurumu);
              urunekleModel::where("numara","=",$guncellenen_ID)->update($sutuns);

            /*
            if(Schema::hasTable("apz_urunler")){
                $tablo_verileri = urunekleModel::select("numara","urun_adi","urun_kodu","urun_aciklama",
                                                        "urun_eklenmedurumu","stok_durumu","vitrin_resmi")
                                                        ->orderBy("numara","DESC")->get();

          }
          */
        }catch(\Exception $et){
            return "catch urun duzenle : ". $et;
        }finally{

        }
        return response(["durum"=>"success",
                         "baslik"=>"Bilgileri Güncelleme",
                          "icerik"=>"Başarıyla Güncelleme işleminiz gerçekleştirildi."]);

      //  return view("backend/urunler")->withSayfa("Ürünler")->withDatas($tablo_verileri);
  }//FUNCTION

////////////////////////////////////////////////////////////

  public function urunler_show(){
      //$ayar = Model::where("id",1)->select("tablo.* ")->get();
  if(Schema::hasTable("apz_urunler")){
      $tablo_verileri = urunekleModel::select("numara","urun_adi","urun_kodu","urun_aciklama",
                                              "urun_eklenmedurumu","stok_durumu","vitrin_resmi")->orderBy("numara","DESC")->get();

        }
          return view("backend/urunler")->withSayfa("Ürünler")->withDatas($tablo_verileri);
    }//FUNC
    ///////////////////////////////////

    public function urunler_create(Request $request)
    {
     try{

        $resim = Input::file("urunresmi");
       if(empty($resim)){
          return response(["durum"=>"warning",
                           "baslik"=>"Kayıt Durumu",
                            "icerik"=>"Resim Eklemeyi Unuttunuz.."]);
        }

      //  $i = 0;
        $urun_resim_ismi = "";
          foreach($resim as $file)
          {
          //  $i++;
            Storage::disk("urunuploads")->makeDirectory("uresim");

             $uzanti =  $file->getClientOriginalExtension();
             $genislik =   Image::make($file->getRealPath())->width();
             $uzunluk =  Image::make($file->getRealPath())->height();

             $dizin = "UrunResimleri/uresim/1-".$file->getClientOriginalName();
             $urun_resim_ismi = "1-".$file->getClientOriginalName();
         Image::make($file->getRealPath())->resize($genislik,$uzunluk)->save($dizin);
        }//foreach

      $urunad = $request->input("urunad");
      if(Input::has("urunkodu")){
        $urunkod = Input::get("urunkodu","urunkodu-yok");
      }
      if(Input::has("urunaciklama")){
      $urunaciklama = Input::get("urunaciklama","urunaciklama-yok");
      }
      if(Input::has("stokvarmi")){
      $stokdurumu = Input::get("stokvarmi","stokvarmi-yok");
      }
      if(Input::has("urunaciklama")){
      $urunaciklama = Input::get("urunaciklama","urunaciklama-yok");
      }


    if(Schema::hasTable("apz_urunler") ){

        $urunkayit = new urunekleModel;
        $urunkayit->urun_adi = $urunad;
        $urunkayit->urun_kodu =  $urunkod;
        $urunkayit->urun_aciklama = $urunaciklama;
        $urunkayit->urun_eklenmedurumu = date("d-m-y");
        $urunkayit->stok_durumu = $stokdurumu;
        $urunkayit->vitrin_resmi = $urun_resim_ismi;
      //  $urunkayit->vitrin_resmi = $resim[0]->getClientOriginalName();
        $dt = $urunkayit->save();
      }else{
        return response(['durum'=>'success',
            'baslik'=>'Ürün Kayıt Durumu',
            'icerik'=> 'KAYIT TABLOSU BULUNAMADI']);
    }

      //Storage::disk("uploads")->makeDirectory("img");
      //Image::make($resim->getRealPath())->resize(222,200)->save("yuklenen/img/logos.png");

      return response(['durum'=>'success',
                   'baslik'=>'Ürün Kayıt Durumu',
                   'icerik'=> $resim[0]->getClientOriginalName().' adlı urununuz kayıt edildi ;)']);
      }catch(\Exception $et){
        return response(["durum"=>"error",
                         "baslik"=>"Kayıt Durumu",
                          "icerik"=>"Eklenme Hatası..".$et]);
      }finally{

      }
  }//FUNC


  public function urunler_delete(){
      $urun_id  = null;
    try{
      if(Schema::hasTable("apz_urunler")){
          $tablo_verileri = urunekleModel::select("numara","urun_adi","urun_kodu","urun_aciklama",
                                                  "urun_eklenmedurumu","stok_durumu","vitrin_resmi")->orderBy("numara","DESC")->get();

            }

        if(Input::has("silinecek_id")){
         $urun_id = Input::get("silinecek_id");
        }
        if(Schema::hasTable("apz_urunler")){
          urunekleModel::where("numara","=",$urun_id)->delete();

        /*  return response(["durum"=>"error",
                           "baslik"=>"Kayıt Durumu",
                            "icerik"=>"Eklenme Hatası..".$et]);*/
        }

        if(Schema::hasTable("apz_urunler")){
            $tablo_verileri = urunekleModel::select("numara","urun_adi","urun_kodu","urun_aciklama",
                                                    "urun_eklenmedurumu","stok_durumu","vitrin_resmi")->orderBy("numara","DESC")->get();

              }
    }catch(\Exception $ex){
      echo $ex;
    /*  return response(["durum"=>"error",
                       "baslik"=>"Kayıt Durumu",
                        "icerik"=>"Eklenme Hatası..".$ex]);*/
    }finally{

    }

        return view("backend.urunler")->withDatas($tablo_verileri);;
  }//FUNC
}
