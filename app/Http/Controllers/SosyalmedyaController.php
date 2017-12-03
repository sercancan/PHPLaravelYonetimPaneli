<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sosyalmedyaModel;
use Schema;

class SosyalmedyaController extends Controller
{

  public function __construct(){
      $this->middleware("auth");
  }
    public function sosyalmedya_show(){

      if(Schema::hasTable("apz_sosyalmedya")){
        $sosmed = sosyalmedyaModel::select("numara","facebook","linkedin","youtube","instagram",
                                         "twitter","googleplus","tumblr","pinterest","vimeo","flickr","vk")->get();
       }
      return view("backend.sosyalMedya")->withSayfa("Sosyal Medya")->withSosyalmedyatablo($sosmed);
    }//FUNC

    /////////////////////////////////////////////////////////

    public function sosyalmedya_create(Request $request){


            if(Schema::hasTable("apz_sosyalmedya")){

        $sosmed = sosyalmedyaModel::select("numara","facebook","linkedin","youtube","instagram",
                                           "twitter","googleplus","tumblr","pinterest","vimeo","flickr","vk")->get();

        $facebook = $request->input("facebook")  ;
        $linkedin = $request->input("linkedin")  ;
        $youtube = $request->input("youtube") ;
        $google =  $request->input("googleplus") ;
        $twitter = $request->input("twitter") ;
        $vimeo = $request->input("vimeo") ;
        $tumblr = $request->input("tumblr");
        $vk = $request->input("vk") ;
        $flickr = $request->input("flickr");
        $pinterest = $request->input("pinterest");
        $instagram = $request->input("instagram") ;

      $veriSayisi = sosyalmedyaModel::get()->count();


      if($veriSayisi == 0)
      {
      $veriEkle = new sosyalmedyaModel;
      $veriEkle->facebook = $facebook;
      $veriEkle->linkedin = $linkedin;
      $veriEkle->youtube = $youtube;
      $veriEkle->googleplus = $google;
      $veriEkle->twitter = $twitter;
      $veriEkle->vimeo = $vimeo;
      $veriEkle->tumblr = $tumblr;
      $veriEkle->vk = $vk;
      $veriEkle->flickr = $flickr;
      $veriEkle->pinterest = $pinterest;
      $veriEkle->instagram = $instagram;
      $veriEkle->save();

      }else{


      $sutuns = array("facebook"=>$facebook,
                      "linkedin"=>$linkedin,
                      "youtube"=>$youtube,
                      "googleplus"=>$google,
                      "twitter"=>$twitter,
                      "vimeo"=>$vimeo,
                      "tumblr"=>$tumblr,
                      "vk"=>$vk,
                      "flickr"=>$flickr,
                      "pinterest"=>$pinterest,
                      "instagram"=>$instagram);
      $veriGüncelle = sosyalmedyaModel::where("numara",">","0")->update($sutuns);
      }

      }//if Hastable
        return view("backend.sosyalMedya")->withSosyalmedyatablo($sosmed);

    }//FUNCTION

    ///////////////////////////////////





}
