 @extends('/template/templatewarga')

<!-- isi bagian title -->
<!-- cara penulisan isi section yang pendek -->
@section('title', 'Ajukan Data Keluar')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Form untuk pengajuan data keluar rumah.')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
 <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">NIK anda: {{ @$hasildata['nik'] }}</h5>
              </div>
              <div class="card-body">
                <form method="POST" action="/publiccatatanpost">
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Tempat Tujuan</label>
                        <input type="text" class="form-control" placeholder="Tempat tujuan keluar anda" name="tempat_tujuan">
                        @if($errors->has('tempat_tujuan'))
                            <div class="text-danger">
                                {{ $errors->first('tempat_tujuan')}}
                            </div>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Keperluan</label>
                        <input type="text" class="form-control" placeholder="Keperluan anda untuk keluar" name="keperluan">
                        @if($errors->has('keperluan'))
                            <div class="text-danger">
                                {{ $errors->first('keperluan')}}
                            </div>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Tanggal Perjalanan Keluar</label>
                        <input type="date" class="form-control" placeholder="Tanggal rencana perjalanan" name="tgl_pengajuan">
                        <input type = "hidden" name = "nik" value ="{{ @$hasildata['nik'] }}">
                        @if($errors->has('nik'))
                            <div class="text-danger">
                                {{ $errors->first('nik')}}
                            </div>
                        @endif
                        <input type = "hidden" name = "status" value ="Menunggu">
                        @if($errors->has('status'))
                            <div class="text-danger">
                                {{ $errors->first('status')}}
                            </div>
                        @endif
                        @if($errors->has('tgl_pengajuan'))
                            <div class="text-danger">
                                {{ $errors->first('tgl_pengajuan')}}
                            </div>
                        @endif
                        <input type = "hidden" name = "kode_unik" value ="{{ rand(1000,10000) }}">
                        @if($errors->has('kode_unik'))
                            <div class="text-danger">
                                {{ $errors->first('kode_unik')}}
                            </div>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Simpan Catatan</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection