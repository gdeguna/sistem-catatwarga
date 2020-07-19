<!-- Menghubungkan dengan view template master -->
@extends('/template/templatewarga')

<!-- isi bagian title -->
<!-- cara penulisan isi section yang pendek -->
@section('title', 'Dashboard')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Dashboard')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
<div class="content">
        <div class="row">
          <div class="col-lg-3 col-md-9 col-sm-9 text-center"></div>
          <div class="col-lg-5 col-md-9 col-sm-9 text-center">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-3 col-md-2">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-circle-10 text-success"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-10">
                    <div class="numbers">
                      <p class="card-category">Selamat Datang <b>{{Session::get('name')}}</b></hp>
                      <h6 class="card-category">Stay Safe dan jika bisa #dirumahaja</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h5>Info Singkat Covid</h5>
              </div>
              <div class="card-body">
                <div class="nav-tabs-navigation">
                  <div class="nav-tabs-wrapper">
                    <ul id="tabs" class="nav nav-tabs" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-expanded="true">Info seputar covid</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-expanded="false">Covid di Indonesia</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#messages" role="tab" aria-expanded="false">Covid konspirasi?</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div id="my-tab-content" class="tab-content text-center">
                  <div class="tab-pane active" id="home" role="tabpanel" aria-expanded="true">
                    <br>
                    <iframe src="https://data.kemkes.go.id/covid19/index.html" height="800px" width="100%"></iframe>
                  </div>
                  <div class="tab-pane" id="profile" role="tabpanel" aria-expanded="false">
                    <iframe src="https://experience.arcgis.com/experience/57237ebe9c5b4b1caa1b93e79c920338" height="800px" width="100%"></iframe>
                  </div>
                  <div class="tab-pane" id="messages" role="tabpanel" aria-expanded="false">
                    <iframe width="100%" height="800px" src="https://www.youtube.com/embed/cGzQmmsrFQ4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- <div class="row">
          <div class="col-md-2">
            <div class="card ">
              <div id="kodeqr"></div>
            </div>
          </div>
        </div> --}}
</div>
<script src="{{asset('qrjs/qrcode.js')}}"></script>
<script type="text/javascript">
new QRCode(document.getElementById("kodeqr"), "1234");
</script>
@endsection