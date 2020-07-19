<!-- Menghubungkan dengan view template master -->
@extends('/template/template')

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
    <div class="col-md-6">
            <div class="card card-testimonial">
              <div class="card-body ">


              </div>
              <div class="card-footer ">
                <h4 class="card-title"></h4>
                <h6 class="card-category">Hadapkan QR Code</h6>
              </div>
            </div>
          </div>
  </div>
</div>
@endsection