   <?php

//Frontend ROUTE AYARLARI

use App\HakkimizdaModel;
use Illuminate\Support\Facades\Schema;

Route::get('/', function () {
    //return redirect("urunler");
return view("frontend.anasayfam");
})->name("anasayfa");

Route::get("hakkimizda",function(){
  $hakkimizda_data=null;
    try{

      if(Schema::hasTable("apz_hakkimizda")){
          $hakkimizda_data = HakkimizdaModel::select("vizyon_baslik","vizyon_aciklama","tarih_baslik","tarih_aciklama")->get();
      }
    }catch(\Exception $exp){

    }finally{

    }
     return view('frontend.hakkimizda')->with("bilgiler",$hakkimizda_data);
})->name("hakkimizda");


//Route::get("urunler","UrunlerController@urunler_show_frontend")->name("urunler");

use App\urunekleModel;
Route::get("urunler",function(){
  if(Schema::hasTable("apz_urunler"))
  {
      $tablo_verileri = urunekleModel::select("numara","urun_adi","urun_kodu","urun_aciklama",
                                              "urun_eklenmedurumu","stok_durumu","vitrin_resmi")
                                              ->orderBy("numara","DESC")
                                              ->get();
   }//if

         return view("frontend/urunler")->with("urunler_data",$tablo_verileri);
    //return view("frontend/urunler");
})->name("urunler");

Route::get("galeri",function(){
  return view("frontend.galeri");
})->name("galeri");

Route::get("bizeulasin",function(){
    return view("frontend/bizeulasin");
})->name("bizeulasin");

Route::post("bizeulasin","iletisimController@frontend_bizeulasin_create")->name("bizeulasin");

use App\iletisimModel;
Route::get("iletisim",function(){
  $iletisim_data = null;
    try{
      $iletisim_data = iletisimModel::select("sirket_adi","adres","telefon")->get();

    }catch(\Exception $expt){

    }finally{
      return view("frontend.iletisim")->with("iletisim_data",$iletisim_data);
    }
})->name("iletisim");
Route::get("haberler","HaberlerController@haberler_show")->name("haberler");


////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////

//PANEL ILE ILGILI ROUTE Girisleri
Route::group(["prefix"=>"yonetici"],function(){

  Route::get("admanasayfa",function(){
    $tarih = date("d-m-Y");
    $gun = date("d");
    return view("backend.anasayfa")->withSayfa("Anasayfa")->withTarih($tarih)->withGun($gun);
  })->name("admanasayfa")->middleware("auth");

  /////////////////////////////////////////////////////////////////////

  Route::get("admfirmabilgi","HakkimizdaController@hakkimizda_show")->name("admfirmabilgi");
  Route::post("admfirmabilgi","HakkimizdaController@hakkimizda_create")->name("admfirmabilgi");
  ///////////////////////////////////////////////////////////////////////////
  Route::get("admsosyalmedya","SosyalmedyaController@sosyalmedya_show")->name("admsosyalmedya");
  Route::post("admsosyalmedya","SosyalmedyaController@sosyalmedya_create");
  ///////////////////////////////////////////////////////
  Route::get("admurunekle",function(){
    return view("backend.urunekle")->with("sayfa","Ürün Ekle");
  })->name("admurunekle")->middleware("auth");

  Route::post("admurunekle","UrunlerController@urunler_create")->name("admurunekle");

  /////////////////////////////////
  Route::get("admmusteriler","MusterilerController@musteriler_show")->name("admmusteriler")->middleware("auth");

  //////////////////////////////////////////

  Route::get("admgaleri",function(){
    return view("backend.admgaleri")->with("sayfa","Galeri");
  })->name("admgaleri")->middleware("auth");

  Route::post("admgaleri","galeriController@galeri_create")->name("admgaleri");
  //Route::post("admgaleri","GaleriController@sercanus");

  /////////////////////////////////////////////////////////
  Route::get("admiletisimalani","iletisimController@iletisim_show")->name("admiletisimalani");
  Route::post("admiletisimalani","iletisimController@iletisim_create")->name("admiletisimalani");
  ////////////////////////////////////////////////////////////
  Route::get("admurunler","UrunlerController@urunler_show")->name("admurunler");
  Route::post("admurunler","UrunlerController@urunler_delete")->name("admurunler");

  Route::get("admurunduzenle","UrunlerController@urunler_edit")->name("admurunduzenle");
  Route::post("admurunduzenle","UrunlerController@urunler_edit_post")->name("admurunduzenle");

////////////////////////////////////

  Route::get("admhaberler","HaberlerController@backend_haberler_show")->name("admhaberler")->middleware("auth");
  Route::get("admhaberekle","HaberlerController@admhaber_sayfasi")->name("admhaberekle")->middleware("auth");
  Route::post("admhaberekle","HaberlerController@haberler_create")->name("admhaberekle")->middleware("auth");
  ////////////////////////////////////
  Route::get("admhaberduzenle","HaberlerController@admhaber_duzenle_sayfa")->name("admhaberduzenle");
  Route::post("admhaberduzenle","HaberlerController@admhaber_edit_post")->name("admhaberduzenle");

Route::get("admkullanicilar","KullaniciController@kullanicilar_show")->name("admkullanicilar");
Route::post( "admkullanicilar", "KullaniciController@kullanicilar_AktifPasif")->name("admkullanicilar");

});// Route::grup

Route::get("admsistemcikis",function(){
  return view("backend.sistemcikis");
})->name("admsistemcikis");

////////////////////////////////////////

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

  //unset($request["_token"]);
//Model::where("id",1)->update($request->all());
