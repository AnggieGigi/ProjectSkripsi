@extends('master')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Soft UI Dashboard by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="g-sidenav-show bg-gray-100">   
<div class="container-fluid">
    <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('/assets/img/Tahu.png');">
        <span class="mask bg-gradient-primary opacity-6">
        </span>
    </div>
</div>
      <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
        <div class="row gx-4">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src="{{asset('/assets/img/Tahu.png')}}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                PABRIK TAHU MELATI, BATU
              </h5>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
              <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">
                <li class="nav-item">
                </li>
                <li class="nav-item">
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
        <div class="col-10 col-xl-12">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-md-8 d-flex align-items-center">
                  <h6 class="mb-2">Profile Information</h6>
                </div>
                <div class="col-md-2 text-end">
                </div>
              </div>
            </div>
            <div class="card-body p-1">
              <p class="text-sm style="text-align: justify">
                    Tahu merupakan makanan yang sangat populer dan banyak dikonsumsi oleh masyarakat Indonesia. Tahu terbuat dari kacang kedelai yang telah melalui fermentasi dan pemadatan. Salah satu produsen dan distributor tahu adalah di Pabrik Tahu Melati yang beralamatkan di Jl. Melati No. 11 Pesanggrahan, Kecamatan Batu, Kota Batu. Meskipun ada banyak produsen tahu lainnya di kawasan ini, Tahu Melati telah berhasil mempertahankan reputasinya sebagai salah satu pilihan utama bagi konsumen. Dalam proses penjualan, Tahu Melati memastikan bahwa produknya selalu tersedia dan siap dikirim ke berbagai titik penjualan. Mereka menjual produk mereka langsung kepada konsumen, baik melalui pasar tradisional, supermarket, atau toko kelontong. Selain itu, mereka juga memiliki jaringan distribusi yang luas untuk menjangkau konsumen di berbagai daerah.
              </p>
              <hr class="horizontal gray-light my-1">
              <ul class="list-group">
                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Address:</strong> &nbsp; Jl. Melati No.11, Pesanggrahan, Kec. Batu, Kota Batu, Jawa Timur 65313</li>
                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Mobile      :</strong> &nbsp; (0341) 592091</li>
                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Operasional :</strong> &nbsp; Mon - Sat (08.00 - 16.00)</li>
                <!-- maps -->
                <div class="col-md-6  padding_right0">
                  <div class="map_main">
                     <div class="map-responsive">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63236.14730156451!2d112.43276604863284!3d-7.867921599999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7887351d9d5f1d%3A0xee977acda0d939ec!2sTAHU%20MELATI%20BATU!5e0!3m2!1sid!2sid!4v1715330069592!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
               </div>
              </ul>
            </div>
          </div>
        </div>
  </div>
  <!-- <div class="fixed-plugin"> --> 
    <div class="card shadow-lg ">
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
      </div>
    </div>
  </div>
</body>
</html>
@endsection