@extends("backend.sablon/varsayilan")

@section("cssler")
@endsection

@section("javascriptsler")
@endsection

@section("icerik")


{{Auth::user()->aktiflik}}
<div class="container">

  <div class="row">
      <div class="col-lg-10 col-xl-10 col-sm-6">
        <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Kullanıcı Adı</th>
            <th scope="col">Kullanıcı E-Posta</th>
            <th scope="col">Oluşturulma Tarihi</th>
            <th scope="col">Işlem Yönet</th>
          </tr>
        </thead>
        <tbody>
          @foreach($kisiler as $kisi)
          <tr>
            <th scope="row">{{$kisi->id}}</th>
            <td>{{ $kisi->name }}</td>
            <td>{{ $kisi->email }}</td>
            <td>{{ $kisi->created_at }}</td>
            <td>

               <a class="btn btn-danger" href="#">Düzenle</a>
             </td>
             <td>
               @if($kisi->aktiflik == 0)
               <form id="form" name="form" action="admkullanicilar" method="POST">
                 {{csrf_field() }}
                 <input type="hidden" name="kullanici_denetim" value="1" />
                 <input type="hidden" name="kullanici_id" value="{{$kisi->id}}" />
                  <button type="submit" class="btn btn-success">Aktif</button>
                </form>
                  @elseif($kisi->aktiflik == 1)
                  <form id="form" name="form" action="admkullanicilar" method="POST">
                    {{csrf_field() }}
                     <input type="hidden" name="kullanici_denetim"  value="0" />
                      <input type="hidden" name="kullanici_id" value="{{$kisi->id}}" />
                     <button type="submit" class="btn btn-warning">Pasif</button>
                   </form>

                  @endif
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  </div>

@endsection
