<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<?php $activePage = basename($_SERVER['PHP_SELF'], ".php");?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    @yield('title') - SiPenMas
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{url('../assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{url('../assets/css/paper-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{url('../assets/demo/demo.css" rel="stylesheet')}}" />

</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="/dashboardwarga" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="/dashboard" class="simple-text logo-normal">
          {{Session::get('name')}}
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="<?= ($activePage == 'dashboard') ? 'active':''; ?>">
            <a href="/dashboardwarga">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="<?= ($activePage == 'datadiri') ? 'active':''; ?>">
            <a href="/publicuser">
              <i class="nc-icon nc-single-02"></i>
              <p>Profil User</p>
            </a>
          </li>
          <li class="<?= ($activePage == 'datadiri') ? 'active':''; ?>">
            <a href="/publicformcatatan">
              <i class="nc-icon nc-single-copy-04"></i>
              <p>Ajukan Perjalanan</p>
            </a>
          </li>
          <li class="<?= ($activePage == 'perjalanansingle') ? 'active':''; ?>">
            <a href="/publicdaftarjalan">
              <i class="nc-icon nc-align-left-2"></i>
              <p>Data Perjalanan anda</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">@yield('judul_halaman')</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="/logout">Keluar</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      @yield('konten')
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li><a href="https://www.instagram.com/gdeguna/" target="_blank">Instagram</a></li>
                <li><a href="https://twitter.com/gdegunaa" target="_blank">Twitter</a></li>
                <li><a href="https://github.com/gdeguna" target="_blank">Github</a></li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear())
                </script>, Guna Dharma
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{url('../assets/js/core/jquery.min.js')}}"></script>
  <script src="{{url('../assets/js/core/popper.min.js')}}"></script>
  <script src="{{url('../assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{url('../assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{url('../assets/js/plugins/chartjs.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{url('../assets/js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{url('../assets/js/paper-dashboard.min.js?v=2.0.1')}}" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{url('../assets/demo/demo.js')}}"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
  <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
  <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
{{-- tabel masyarakat --}}
  <script>
    $(document).ready(function(){
        $('#tabel-masyarakat').DataTable();
    });
</script>

{{-- sweetalert terima permintaan --}}
<script type="text/javascript">
$('.batal-jalan').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Apakah Yakin?',
        text: 'Perjalanan anda akan dibatalkan.',
        icon: 'warning',
        buttons: ["Batalkan", "Ya!"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
            swal("Dibatalkan...", {
            icon: "success",
            });
        }
    });
});
</script>

<script>
    $(document).ready(function(){
        $('#tabel-pengajuan').DataTable();
    });
</script>
 <script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
</body>

</html>
