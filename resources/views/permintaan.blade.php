<!-- Menghubungkan dengan view template master -->
@extends('/template/template')

<!-- isi bagian title -->
<!-- cara penulisan isi section yang pendek -->
@section('title', 'Data Masyarakat')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Semua Data Masyarakat')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Permintaan Belum Disetujui</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table" id="tabel-pengajuan">
                    <thead class=" text-primary">
                      <th>
                        No
                      </th>
                      <th>
                        Nama
                      </th>
                      <th>
                        Tempat Tujuan
                      </th>
                      <th>
                        Keperluan
                      </th>
                      <th>
                        Token
                      </th>
                      <th>
                        Waktu Pengajuan
                      </th>
                      <th class="text-center">
                        Action
                      </th>
                    </thead>
                    <tbody>
                      @foreach($datamenunggu as $waitnum => $a)
                      <tr>
                        <td>
                          {{$waitnum +1}}
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
                          {{$a->kode_unik}}
                        </td>
                        <td>
                          {{$a->tgl_pengajuan}}
                        </td>
                        <td class="text-center">
                          <a class="btn btn-success" href="/terima/{{$a->kode_unik}}">Terima</a>
                          <a class="btn btn-danger" href="/tolak/{{$a->kode_unik}}">Tolak</a>
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
<script>
  var msg = '{{Session::get('alert')}}';
  var exist = '{{Session::has('alert')}}';
  if(exist){
    alert(msg);
  }
</script>
</div>
@endsection