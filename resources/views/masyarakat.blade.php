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
                <h4 class="card-title">Semua Masyarakat</h4>
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
                        NIK
                      </th>
                      <th>
                        Nama
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        Jenis Kelamin
                      </th>
                      <th>
                        Tanggal Lahir
                      </th>
                    </thead>
                    <tbody>
                    @foreach($warga as $wnum => $w)
                      <tr>
                        <td>
                          {{$wnum +1}}
                        </td>
                        <td>
                          {{$w->nik}}
                        </td>
                        <td>
                          {{$w->name}}
                        </td>
                        <td>
                          {{$w->email}}
                        </td>
                        <td>
                          {{$w->gender}}
                        </td>
                        <td>
                          {{$w->tgl_lahir}}
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