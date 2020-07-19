<!-- Menghubungkan dengan view template master -->
@extends('/template/template')

<!-- isi bagian title -->
<!-- cara penulisan isi section yang pendek -->
@section('title', 'Hak Akses System')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Pengaturan Hak Akses System.')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Daftar Semua Warga</h4>
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
                        NIK
                      </th>
                      <th>
                        Gender
                      </th>
                      <th>
                        Hak Akses
                      </th>
                      <th>
                        Tanggal Lahir
                      </th>
                      <th class="text-center">
                        Action
                      </th>
                    </thead>
                    <tbody>
                      @foreach($hakwarga as $haknum => $x)
                      <tr>
                        <td>
                          {{$haknum +1}}
                        </td>
                        <td>
                          {{$x->name}}
                        </td>
                        <td>
                          {{$x->nik}}
                        </td>
                        <td>
                          {{$x->gender}}
                        </td>
                        <td>
                          {{$x->role}}
                        </td>
                        <td>
                          {{$x->tgl_lahir}}
                        </td>
                        <td class="text-center">
                          <a class="btn btn-success terima-confirm" href="/adminacc/{{$x->nik}}">Jadikan Satgas</a>
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
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Daftar Semua Satgas</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table" id="tabel-pengajuan2">
                    <thead class=" text-primary">
                      <th>
                        No
                      </th>
                      <th>
                        Nama
                      </th>
                      <th>
                        NIK
                      </th>
                      <th>
                        Gender
                      </th>
                      <th>
                        Hak Akses
                      </th>
                      <th>
                        Tanggal Lahir
                      </th>
                      <th class="text-center">
                        Action
                      </th>
                    </thead>
                    <tbody>
                      @foreach($hakadmin as $hakadmin => $y)
                      <tr>
                        <td>
                          {{$hakadmin +1}}
                        </td>
                        <td>
                          {{$y->name}}
                        </td>
                        <td>
                          {{$y->nik}}
                        </td>
                        <td>
                          {{$y->gender}}
                        </td>
                        <td>
                          {{$y->role}}
                        </td>
                        <td>
                          {{$y->tgl_lahir}}
                        </td>
                        <td class="text-center">
                          <a class="btn btn-success terima-confirm" href="/adminexit/{{$y->nik}}">Keluarkan Satgas</a>
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