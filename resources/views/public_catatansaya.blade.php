<!-- Menghubungkan dengan view template master -->
@extends('/template/templatewarga')

<!-- isi bagian title -->
<!-- cara penulisan isi section yang pendek -->
@section('title', 'Perjalanan Saya')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Semua Data Perjalanan Anda.')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Daftar Perjalanan Anda</h4>
              </div>
              <div class="card-body">
                 <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                </div>
                <div class="table-responsive">
                  <table class="table" id="tabel-masyarakat" cellspacing="0" width="100%">
                    <thead class=" text-primary">
                      <th>
                        No
                      </th>
                      <th>
                        Tujuan
                      </th>
                      <th>
                        Keperluan
                      </th>
                      <th>
                        Token
                      </th>
                      <th>
                        Status
                      </th>
                      <th>
                        Tanggal Pengajuan
                      </th>
                    </thead>
                    <tbody>
                    @foreach($dataanda as $anum => $a)
                      <tr>
                        <td>
                          {{$anum +1}}
                        </td>
                        <td>
                          {{$a->tempat_tujuan}}
                        </td>
                        <td>
                          {{$a->keperluan}}
                        </td>
                        <td>
                          {{$a->kode_unik}}
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
</div>
@endsection