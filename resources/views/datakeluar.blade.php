<!-- Menghubungkan dengan view template master -->
@extends('/template/template')

<!-- isi bagian title -->
<!-- cara penulisan isi section yang pendek -->
@section('title', 'Catatan Keluar')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Dashboard')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
<div class="content">
	{{-- tabel semua permintaan --}}
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Catatan Seluruh Aktifitas</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        No
                      </th>
                      <th>
                        Nama
                      </th>
                      <th>
                        Tujuan Keluar
                      </th>
                      <th>
                        Keperluan
                      </th>
                      <th>
                        Status
                      </th>
                      <th>
                        Tanggal Pengajuan
                      </th>
                    </thead>
                    <tbody>
                      @foreach($dataall as $allnum => $a)
                      <tr>
                        <td>
                          {{$allnum +1}}
                        </td>
                        <td>
                          {{$a->name}}
                        </td>
                        <td>
                          {{$a->tempat_tujuan}}
                        </td>
                        <td>
                          {{$a->keperluan}}
                        </td>
                        <td>
                          {{$a->status}}
                        </td>
                        <td>
                          {{$a->tgl_pengajuan}}
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
    {{-- tabel permintaan diterima --}}
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Permintaan Diterima</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        No
                      </th>
                      <th>
                        Nama
                      </th>
                      <th>
                        Tujuan Keluar
                      </th>
                      <th>
                        Keperluan
                      </th>
                      <th>
                        Status
                      </th>
                      <th>
                        Tanggal Pengajuan
                      </th>
                    </thead>
                    <tbody>
                      @foreach($dataditerima as $accnum => $b)
                      <tr>
                        <td>
                          {{$accnum +1}}
                        </td>
                        <td>
                          {{$b->name}}
                        </td>
                        <td>
                          {{$b->tempat_tujuan}}
                        </td>
                        <td>
                          {{$b->keperluan}}
                        </td>
                        <td>
                          {{$b->status}}
                        </td>
                        <td>
                          {{$b->tgl_pengajuan}}
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
    {{-- tabel permintaan yang ditolak --}}
    	<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Permintaan Ditolak</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        No
                      </th>
                      <th>
                        Nama
                      </th>
                      <th>
                        Tujuan Keluar
                      </th>
                      <th>
                        Keperluan
                      </th>
                      <th>
                        Status
                      </th>
                      <th>
                        Tanggal Pengajuan
                      </th>
                    </thead>
                    <tbody>
                      @foreach($dataditolak as $rejectnum => $c)
                      <tr>
                        <td>
                          {{$rejectnum +1}}
                        </td>
                        <td>
                          {{$c->name}}
                        </td>
                        <td>
                          {{$c->tempat_tujuan}}
                        </td>
                        <td>
                          {{$c->keperluan}}
                        </td>
                        <td>
                          {{$c->status}}
                        </td>
                        <td>
                          {{$c->tgl_pengajuan}}
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>
@endsection