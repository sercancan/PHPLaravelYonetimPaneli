@extends("backend.sablon/varsayilan")

@section("cssler")
<link rel="stylesheet" href="{{asset('assets/plugins/select2/select2.css') }}">
	<link rel="stylesheet" href="{{asset('assets/plugins/select2/select2-bootstrap.css') }}">
@endsection

@section("javascriptsler")
@endsection

@section("icerik")
<div class="container">
		{{Form::open(array("url"=>"yonetici/admsosyalmedya"))}}
<div class="row">

		<?php foreach($sosyalmedyatablo as $veri) {  ?>

        <div class="col-lg-12">

								<div class="form-group">
									<div class="col-sm-9">
										<div class="input-group input-group-lg">
											<a href="http://www.facebook.com" class="input-group-addon btn btn-default btn-lg btn-flat btn-facebook background">
											<i class="fa fa-facebook"></i>
										</a>
											<input type="text" name="facebook" value="<?= $veri->facebook ?>" class="form-control"  >
										</div>
									</div>
								</div>

                    <div class="form-group">
                      <div class="col-sm-9">
                        <div class="input-group input-group-lg">
                          <a  href="#linkedin" class="input-group-addon btn btn-default btn-lg btn-flat btn-linkedin background">
                            <i class="fa fa-linkedin"></i>
                          </a>
                          <input type="text" name="linkedin" value="{{$veri->linkedin}}" class="form-control" placeholder="Linkedin Hesabı">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-9">
                        <div class="input-group input-group-lg">
                          <a href="{{$veri->youtube}}" class="input-group-addon btn btn-default btn-lg btn-flat btn-youtube background">
                            <i class="fa fa-youtube"></i>
                          </a>
                          <input type="text" name="youtube" value="{{$veri->youtube}}" class="form-control" placeholder="Youtube Hesabı">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-9">
                        <div class="input-group input-group-lg">
                          <a href="{{$veri->googleplus}}" class="input-group-addon btn btn-default btn-lg  btn-flat btn-google-plus background">
                            <i class="fa fa-google-plus"></i>
                          </a>
                          <input type="text" name="googleplus" value="{{$veri->googleplus}}"  class="form-control" placeholder="Google Hesabı">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-9">
                        <div class="input-group input-group-lg">
                          <a href="{{$veri->twitter}}" class="input-group-addon btn btn-default btn-lg btn-flat btn-twitter background">
                            <i class="fa fa-twitter"></i>
                          </a>
                          <input type="text"  name="twitter" value="{{$veri->twitter}}" class="form-control" placeholder="Twitter Hesabı">
                        </div>
                      </div>
                    </div>
										<div class="form-group">
											<div class="col-sm-9">
												<div class="input-group input-group-lg">
													<a href="{{$veri->vimeo}}" class="input-group-addon btn btn-default btn-lg btn-flat btn-vimeo-square background">
                            <i class="fa fa-vimeo-square"></i>
                          </a>
													<input type="text" name="vimeo"  value="{{$veri->vimeo}}" class="form-control" placeholder="Vimeo Hesabı">
												</div>
											</div>
										</div>
                    <div class="form-group">
											<div class="col-sm-9">
												<div class="input-group input-group-lg">
													<a href="{{$veri->tumblr}}" class="input-group-addon btn btn-default btn-lg btn-flat btn-tumblr background">
                            <i class="fa fa-tumblr"></i>
                          </a>
													<input type="text" name="tumblr" value="{{$veri->tumblr}}" class="form-control" placeholder="Tumblr Hesabı">
												</div>
											</div>
										</div>
                    <div class="form-group">
											<div class="col-sm-9">
												<div class="input-group input-group-lg">
													<a href="{{$veri->vk}}" class="input-group-addon btn btn-default btn-lg btn-flat btn-vk background">
                            <i class="fa fa-vk"></i>
                          </a>
													<input type="text" name="vk"  value="{{$veri->vk}}" class="form-control" placeholder="VK Hesabı">
												</div>
											</div>
										</div>
                    <div class="form-group">
											<div class="col-sm-9">
												<div class="input-group input-group-lg">
													<a href="{{$veri->flickr}}" class="input-group-addon btn btn-default btn-lg btn-flat btn-flickr background">
                            <i class="fa fa-flickr"></i>
                          </a>
													<input type="text" name="flickr" value="{{$veri->flickr}}" class="form-control" placeholder="Flicr">
												</div>
											</div>
										</div>
                    <div class="form-group">
											<div class="col-sm-9">
												<div class="input-group input-group-lg">
													<a href="{{$veri->pinterest}}" class="input-group-addon btn btn-default btn-lg btn-flat btn-pinterest background">
                            <i class="fa fa-pinterest"></i>
                          </a>
													<input type="text" name="pinterest" value="{{$veri->pinterest}}" class="form-control" placeholder="Pinterest hesabı">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-9">
												<div class="input-group input-group-lg">
													<a href="{{$veri->instagram}}" class="input-group-addon btn btn-default btn-lg btn-flat btn-twitter background">
														<i class="fa fa-instagram" aria-hidden="true"></i>
													</a>
													<input type="text" name="instagram" value="{{$veri->instagram}}" class="form-control"  placeholder="Instagram">
												</div>
											</div>
										</div>

											<div class="col-sm-4">
														{{Form::submit("Bilgi Kaydet",array("class"=>"form-control btn btn-success"))}}
											</div>

                </div>
								</div>
								{{Form::close()}}
              </div>

		<?php } ?>
</div>
@endsection
