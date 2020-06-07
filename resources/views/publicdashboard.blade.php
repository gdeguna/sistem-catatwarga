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
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-circle-10 text-success"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Selamat Datang <b>{{Session::get('name')}}</b></p>
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
                    <iframe src="https://covid19.go.id/p/berita" height="800px" width="100%"></iframe>
                  </div>
                  <div class="tab-pane" id="profile" role="tabpanel" aria-expanded="false">
                    <iframe src="https://www.arcgis.com/apps/opsdashboard/index.html#/594fcf112e9242868456758117a0c330" height="800px" width="100%"></iframe>
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