<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sosyalmedyaModel extends Model
{

  protected $table = "apz_sosyalmedya";
  protected $fillable =  ["numara","facebook","instagram","twitter","googleplus",
                          "youtube","tumblr","pinterest","vimeo","linkedin","flickr","vk"];

  public $timestamps = false;                        

}
