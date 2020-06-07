 @extends('/template/templatewarga')

<!-- isi bagian title -->
<!-- cara penulisan isi section yang pendek -->
@section('title', 'Data diri')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Data diri anda.')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
 <div class="content">
        <div class="row">
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="../assets/img/damir-bosnjak.jpg" alt="...">
              </div>
              {{-- @foreach($hasilkuh as $datahadeh) --}}
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="../assets/img/mike.jpg" alt="...">
                    <h5 class="title">{{ @$hasilkuh['name'] }} </h5>
                  </a>
                </div>
                <p class="description text-center">
                  Stay Safe! <br> Jaga Kesehatan selalu
                  <br> -Admin
                </p>
              </div>
              {{-- @endforeach --}}
              <div class="card-footer">
                <hr>
                <div class="button-container">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-6 ml-auto">
                      <h5>{{ @$hasilkuh['email'] }}<br><small>Email</small></h5>
                    </div>
                    <div class="col-lg-6 col-md-6 col-6 ml-auto mr-auto">
                      <h5>{{ @$hasilkuh['nik'] }}<br><small>Nik</small></h5>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-6 ml-auto mr-auto">
                      <h5>{{ @$hasilkuh['gender'] }}<br><small>Jenis Kelamin</small></h5>
                    </div>
                    <div class="col-lg-6 col-md-6 col-6 ml-auto mr-auto">
                      <h5>{{ @$hasilkuh['tgl_lahir'] }}<br><small>Tanggal Lahir</small></h5>
                    </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Edit Profile</h5>
              </div>
              <div class="card-body">
                <form method="POST" action="/useredit/{{ @$hasilkuh['nik'] }}">
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" placeholder="Nama anda" name="name" value="{{ @$hasilkuh['name'] }}">
                        @if($errors->has('name'))
                            <div class="text-danger">
                                {{ $errors->first('name')}}
                            </div>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Alamat email</label>
                        <input type="email" class="form-control" placeholder="Email Anda." name="email" value="{{ @$hasilkuh['email'] }}">
                        @if($errors->has('email'))
                            <div class="text-danger">
                                {{ $errors->first('email')}}
                            </div>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>NIK (Nomor Induk Kependudukan)</label>
                        <input type="text" class="form-control" disabled="" placeholder="Nama Anda" name="nik" value="{{ @$hasilkuh['nik'] }}">
                        @if($errors->has('nik'))
                            <div class="text-danger">
                                {{ $errors->first('nik')}}
                            </div>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tgl_lahir" value="{{ @$hasilkuh['tgl_lahir'] }}">
                        @if($errors->has('tgl_lahir'))
                            <div class="text-danger">
                                {{ $errors->first('tgl_lahir')}}
                            </div>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Tolong dirahasiakan" name="password" value="">
                        <input type = "hidden" name = "role" value ="warga">
                        @if($errors->has('password'))
                            <div class="text-danger">
                                {{ $errors->first('password')}}
                            </div>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="gender">
                          <option disabled="disabled" selected="selected">...</option>
                          <option value="Laki-Laki">Laki-Laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Update Profile</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5">
            <div class="image">
              <div id="kodeqr"></div>
            </div>
          </div>
        </div>
  </div>
<script src="{{asset('qrjs/qrcode.js')}}"></script>
<script type="text/javascript">
new QRCode(document.getElementById("kodeqr"), "{{ @$hasilkuh['token'] }}");
</script>
@endsection