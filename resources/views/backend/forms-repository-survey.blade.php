<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forms / Elements - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets-backend/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets-backend/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets-backend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets-backend/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets-backend/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets-backend/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('assets-backend/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('assets-backend/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets-backend/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets-backend/css/style.css')}}" rel="stylesheet">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{ url('backend/index-backend')}}" class="logo d-flex align-items-center">
        <img src="{{asset('assets-backend/img/logo.png')}}" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="{{asset('assets-backend/img/messages-1.jpg')}}" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="{{asset('assets-backend/img/messages-2.jpg')}}" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="{{asset('assets-backend/img/messages-3.jpg')}}" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{asset('assets-backend/img/profile-img.jpg')}}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ url('backend/users-profile')}}">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ url('backend/users-profile')}}">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ url('backend/pages-faq')}}">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ url('backend')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <!-- Statistik Sektoral Dropdown -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#statsek-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-building"></i><span>Statistik Sektoral</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="statsek-nav" class="nav-content collapse" >
          <li>
            <a href="{{ route('backend.tables-kegiatan-tpi') }}">
              <i class="bi bi-circle"></i><span>Pendampingan TPI EPSS</span>
            </a>
          </li>
          <li>
            <a href="{{ route('backend.tables-kegiatan-opd') }}">
              <i class="bi bi-circle"></i><span>Pendampingan OPD Statistik Sektoral</span>
            </a>
          </li>
        </ul>
      </li>

      <!-- Repository Survey -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('backend.tables-repository-survey')}}">
          <i class="bi bi-ui-checks"></i>
          <span>Repository Survey</span>
        </a>
      </li>

      <!-- Master Dropdown -->
      <li class="nav-item">
        <a class="nav-link " href="{{ url('backend')}}">
          <i class="bi bi-cast"></i>
          <span>Master</span>
        </a>
      </li>
      
      <!-- Templates Droppdown -->
      <li class="nav-item border-top mt-2 pt-2">
        <a class="nav-link collapsed" data-bs-target="#templates-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-folder"></i><span>Templates</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="templates-nav" class="nav-content collapse" >

          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse ">
              <li>
                <a href="{{ url('backend/components-alerts')}}">
                  <i class="bi bi-circle"></i><span>Alerts</span>
                </a>
              </li>
              <li>
                <a href="{{ url('backend/components-accordion')}}">
                  <i class="bi bi-circle"></i><span>Accordion</span>
                </a>
              </li>
              <li>
                <a href="{{ url('backend/components-badges')}}">
                  <i class="bi bi-circle"></i><span>Badges</span>
                </a>
              </li>
              <li>
                <a href="{{ url('backend/components-breadcrumbs')}}">
                  <i class="bi bi-circle"></i><span>Breadcrumbs</span>
                </a>
              </li>
              <li>
                <a href="{{ url('backend/components-buttons')}}">
                  <i class="bi bi-circle"></i><span>Buttons</span>
                </a>
              </li>
              <li>
                <a href="{{ url('backend/components-cards')}}">
                  <i class="bi bi-circle"></i><span>Cards</span>
                </a>
              </li>
              <li>
                <a href="{{ url('backend/components-carousel')}}">
                  <i class="bi bi-circle"></i><span>Carousel</span>
                </a>
              </li>
              <li>
                <a href="{{ url('backend/components-list-group')}}">
                  <i class="bi bi-circle"></i><span>List group</span>
                </a>
              </li>
              <li>
                <a href="{{ url('backend/components-modal')}}">
                  <i class="bi bi-circle"></i><span>Modal</span>
                </a>
              </li>
              <li>
                <a href="{{ url('backend/components-tabs')}}">
                  <i class="bi bi-circle"></i><span>Tabs</span>
                </a>
              </li>
              <li>
                <a href="{{ url('backend/components-pagination')}}">
                  <i class="bi bi-circle"></i><span>Pagination</span>
                </a>
              </li>
              <li>
                <a href="{{ url('backend/components-progress')}}">
                  <i class="bi bi-circle"></i><span>Progress</span>
                </a>
              </li>
              <li>
                <a href="{{ url('backend/components-spinners')}}">
                  <i class="bi bi-circle"></i><span>Spinners</span>
                </a>
              </li>
              <li>
                <a href="{{ url('backend/components-tooltips')}}">
                  <i class="bi bi-circle"></i><span>Tooltips</span>
                </a>
              </li>
            </ul>
          </li><!-- End Components Nav -->

          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse ">
              <li>
                <a href="{{ url('backend/forms-elements')}}">
                  <i class="bi bi-circle"></i><span>Form Elements</span>
                </a>
              </li>
              <li>
                <a href="{{ url('backend/forms-layouts')}}">
                  <i class="bi bi-circle"></i><span>Form Layouts</span>
                </a>
              </li>
              <li>
                <a href="{{ url('backend/forms-editors')}}">
                  <i class="bi bi-circle"></i><span>Form Editors</span>
                </a>
              </li>
              <li>
                <a href="{{ url('backend/forms-validation')}}">
                  <i class="bi bi-circle"></i><span>Form Validation</span>
                </a>
              </li>
            </ul>
          </li><!-- End Forms Nav -->

          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse ">
              <li>
                <a href="{{ url('backend/tables-general')}}">
                  <i class="bi bi-circle"></i><span>General Tables</span>
                </a>
              </li>
              <li>
                <a href="{{ url('backend/tables-data')}}">
                  <i class="bi bi-circle"></i><span>Data Tables</span>
                </a>
              </li>
            </ul>
          </li><!-- End Tables Nav -->

          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse ">
              <li>
                <a href="{{ url('backend/charts-chartjs')}}">
                  <i class="bi bi-circle"></i><span>Chart.js</span>
                </a>
              </li>
              <li>
                <a href="{{ url('backend/charts-apexcharts') }}">
                  <i class="bi bi-circle"></i><span>ApexCharts</span>
                </a>
              </li>
              <li>
                <a href="{{ url('backend/charts-echarts')}}">
                  <i class="bi bi-circle"></i><span>ECharts</span>
                </a>
              </li>
            </ul>
          </li><!-- End Charts Nav -->

          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-nav" class="nav-content collapse ">
              <li>
                <a href="{{ url('backend/icons-bootstrap')}}">
                  <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
                </a>
              </li>
              <li>
                <a href="{{ url('backend/icons-remix')}}">
                  <i class="bi bi-circle"></i><span>Remix Icons</span>
                </a>
              </li>
              <li>
                <a href="{{ url('backend/icons-boxicons')}}">
                  <i class="bi bi-circle"></i><span>Boxicons</span>
                </a>
              </li>
            </ul>
          </li><!-- End Icons Nav -->

          <li class="nav-heading">Pages</li>

          <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('backend/users-profile')}}">
              <i class="bi bi-person"></i>
              <span>Profile</span>
            </a>
          </li><!-- End Profile Page Nav -->

          <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('backend/pages-faq')}}">
              <i class="bi bi-question-circle"></i>
              <span>F.A.Q</span>
            </a>
          </li><!-- End F.A.Q Page Nav -->

          <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('backend/pages-contact')}}">
              <i class="bi bi-envelope"></i>
              <span>Contact</span>
            </a>
          </li><!-- End Contact Page Nav -->

          <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('backend/pages-register')}}">
              <i class="bi bi-card-list"></i>
              <span>Register</span>
            </a>
          </li><!-- End Register Page Nav -->

          <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('backend/pages-login')}}">
              <i class="bi bi-box-arrow-in-right"></i>
              <span>Login</span>
            </a>
          </li><!-- End Login Page Nav -->

          <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('backend/pages-error-404')}}">
              <i class="bi bi-dash-circle"></i>
              <span>Error 404</span>
            </a>
          </li><!-- End Error 404 Page Nav -->

          <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('backend/pages-blank')}}">
              <i class="bi bi-file-earmark"></i>
              <span>Blank</span>
            </a>
          </li><!-- End Blank Page Nav -->

        </ul>
      </li><!-- End Templates Dropdown -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Menambahkan Survey</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
          <div class="card">
              <div class="card-body">
                  <h5 class="card-title">Form Repository Survey</h5>
    
                  <!-- Notifikasi success -->
                  @if (session('success'))
                      <div class="alert alert-success">
                          {{ session('success') }}
                      </div>
                  @endif
    
                  <!-- Cek error -->
                  @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                  @endif
    
                  <!-- Form Tambah/Edit Kegiatan -->
                  <form method="POST" action="{{ isset($repoSurvey) ? route('reposurvey.update', $repoSurvey->id) : route('reposurvey.submit') }}" enctype="multipart/form-data">
                      @csrf
                      @isset($repoSurvey)
                          @method('PUT')
                      @endisset
    
                      <input type="hidden" name="id" value="{{ old('id', $repoSurvey->id ?? '') }}">

                      <!-- Nama Survei -->
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama Survei</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="namaSurvey" name="nama_survey" value="{{ old('nama_survey', $repoSurvey->nama_survey ?? '') }}" required>
                        </div>
                      </div>
    
                      <!-- Sifat -->
                      <div class="row mb-3">
                        <label for="sifatSurvey" class="col-sm-2 col-form-label">Sifat</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="sifatSurvey" name="sifat" required>
                                <option value="" disabled selected></option>
                                @foreach($sifatSurvey as $sifat)
                                    <option value="{{ $sifat }}" {{ (isset($repoSurvey) && $repoSurvey->sifat == $sifat) ? 'selected' : '' }}>
                                        {{ $sifat }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                      </div>
                      
                      <!-- Unit Sampling/Observasi -->
                      <div class="row mb-3">
                        <label for="unitSampling" class="col-sm-2 col-form-label">Unit Sampling/Observasi</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="unitSampling" name="unit_sampling_observasi" required>
                                <option value="" disabled selected></option>
                                @foreach($unitSampling as $unit_sampling_observasi)
                                    <option value="{{ $unit_sampling_observasi }}" {{ (isset($repoSurvey) && $repoSurvey->unit_sampling_observasi == $unit_sampling_observasi) ? 'selected' : '' }}>
                                        {{ $unit_sampling_observasi }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                      </div>

                      <!-- Fungsi/Tim -->
                      <div class="row mb-3">
                        <label for="tim" class="col-sm-2 col-form-label">Fungsi/Tim</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="tim" name="tim" required>
                                <option value="" disabled selected></option>
                                @foreach($tim as $tim)
                                    <option value="{{ $tim }}" {{ (isset($repoSurvey) && $repoSurvey->tim == $tim) ? 'selected' : '' }}>
                                        {{ $tim }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                      </div>

                      <!-- Kegiatan -->
                      <div class="row mb-3">
                        <label for="kegiatan" class="col-sm-2 col-form-label">Hasil Pengecekan di POK-0 2025</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="kegiatan" name="kegiatan" required>
                                <option value="" disabled selected></option>
                                @foreach($kegiatan as $kegiatan)
                                    <option value="{{ $kegiatan }}" {{ (isset($repoSurvey) && $repoSurvey->kegiatan == $kegiatan) ? 'selected' : '' }}>
                                        {{ $kegiatan }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                      </div>

                      <!-- Tingkat Kesulitan -->
                      <div class="row mb-3">
                        <label for="tingkatSulit" class="col-sm-2 col-form-label">
                            Tingkat Kesulitan Kegiatan dibandingkan Kegiatan Lain di Fungsi yang Sama
                        </label>
                        <div class="col-sm-10">
                            <select class="form-select" id="tingkatSulit" name="tingkat_kesulitan" required>
                                <option value="" disabled selected>Pilih Tingkat Kesulitan</option>
                                @for ($i = 1; $i <= 5; $i++)
                                    <option value="{{ $i }}" {{ (isset($repoSurvey) && $repoSurvey->tingkat_kesulitan == $i) ? 'selected' : '' }}>
                                        {{ $i }}
                                    </option>
                                @endfor
                            </select>
                            <small class="form-text text-muted mt-2">
                                1 sd 5, 1 sangat mudah dan 5 sangat sulit
                            </small>
                        </div>
                      </div>
                      
                      <!-- Hasil Pengecekan di POK-0 2025 -->
                      <div class="row mb-3">
                        <label for="hasilCek" class="col-sm-2 col-form-label">Hasil Pengecekan di POK-0 2025</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="hasilCek" name="hasil_pengecekan" required>
                                <option value="" disabled selected></option>
                                @foreach($cekPok as $pok)
                                    <option value="{{ $pok }}" {{ (isset($repoSurvey) && $repoSurvey->hasil_pengecekan == $pok) ? 'selected' : '' }}>
                                        {{ $pok }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                      </div>

                      <!--PJ -->
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Penanggung Jawab</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="pj" name="pj" value="{{ old('pj', $repoSurvey->pj ?? '') }}" required>
                        </div>
                      </div>

                      <!-- Jumlah Sampel -->
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Jumlah Sampel</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="jumlahSampel" name="jumlah_sampel" value="{{ old('jumlah_sampel', $repoSurvey->jumlah_sampel ?? '') }}" required>
                        </div>
                      </div>

                      <!-- Tahun -->
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Tahun</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tahun" name="tahun" value="{{ old('tahun', $repoSurvey->tahun ?? '') }}" required>
                        </div>
                      </div>

                      <!-- Upload Kuesioner -->
                      <div class="row mb-3">
                        <label for="kuesioner" class="col-sm-2 col-form-label">Dokumen PDF Kuesioner</label>
                        <div class="col-sm-10">
                            @if(isset($repoSurvey) && $repoSurvey->kuesioner)
                                <a href="{{ Storage::url($repoSurvey->kuesioner) }}" target="_blank">Lihat File Sebelumnya</a>
                                <br>
                                <input type="file" class="form-control" id="kuesioner" name="kuesioner">
                            @else
                                <input type="file" class="form-control" id="kuesioner" name="kuesioner" required>
                            @endif
                        </div>
                      </div>

                      <!-- RAW Data -->
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">RAW Data</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="rawData" name="raw_data" value="{{ old('raw_data', $repoSurvey->raw_data ?? '') }}" required>
                        </div>
                      </div>

                      <!-- Ada Pengolahan -->
                      <div class="row mb-3">
                        <label for="pengolahanKab" class="col-sm-2 col-form-label">Pengolahan di BPS Kabupaten</label>
                        <div class="col-sm-10">
                          <select class="form-select" id="pengolahanKab" name="pengolahan_kab" required onchange="togglePlatformPengolahan()">
                            <option value="" disabled selected>Pilih Ya/Tidak</option>
                            <option value="1" {{ (isset($repoSurvey) && $repoSurvey->pengolahan_kab == 1) ? 'selected' : '' }}>Ya</option>
                            <option value="0" {{ (isset($repoSurvey) && $repoSurvey->pengolahan_kab === 0) ? 'selected' : '' }}>Tidak</option>
                          </select>
                        </div>
                      </div>

                      <!-- Platform Pengolahan -->
                      <div class="row mb-3" id="platformPengolahanSection" style="display:none;">
                        <label for="platform" class="col-sm-2 col-form-label">Platform Pengolahan</label>
                        <div class="col-sm-10">
                          <select class="form-select" id="platform" name="platform_pengolahan" required onchange="toggleLinkInput()">
                            <option value="" disabled selected>Pilih Platform</option>
                            <option value="1" {{ (isset($repoSurvey) && $repoSurvey->platform_pengolahan == 1) ? 'selected' : '' }}>Dekstop</option>
                            <option value="0" {{ (isset($repoSurvey) && $repoSurvey->platform_pengolahan === 0) ? 'selected' : '' }}>Online</option>
                          </select>
                        </div>
                      </div>

                      <!-- Dekstop (Link Monitoring) -->
                      <div id="linkMonitoringDiv" style="display: none;">
                        <label for="linkMonitoring">Link Monitoring</label>
                        <input type="url" id="linkMonitoring" name="link_monitoring" class="form-control" value="{{ old('link_monitoring', $repoSurvey->link_monitoring ?? '') }}">
                      </div>

                      <!-- Online (Link Webentry) -->
                      <div id="linkWebentryDiv" style="display: none;">
                        <label for="linkWebentry">Link Webentry</label>
                        <input type="url" id="linkWebentry" name="link_webentry" class="form-control" value="{{ old('link_webentry', $repoSurvey->link_webentry ?? '') }}">
                      </div>
    
                      <!-- Button Submit -->
                      <div class="row mb-3 mt-5">
                          <div class="col-sm-12 text-end">
                              <button type="submit" class="btn btn-primary">
                                  {{ isset($repoSurvey) ? 'Update Survey' : 'Tambahkan Survey' }}
                              </button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
    </section>    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets-backend/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('assets-backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets-backend/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('assets-backend/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('assets-backend/vendor/quill/quill.js')}}"></script>
  <script src="{{asset('assets-backend/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('assets-backend/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('assets-backend/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets-backend/js/main.js')}}"></script>

  {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> --}}

  <script>
    // Fungsi untuk menangani tampilan section platform pengolahan berdasarkan pengolahan_kab
    function togglePlatformPengolahan() {
      var pengolahanKab = document.getElementById('pengolahanKab').value;
      
      if (pengolahanKab == '1') {
        document.getElementById('platformPengolahanSection').style.display = 'block';
      } else {
        document.getElementById('platformPengolahanSection').style.display = 'none';
        document.getElementById('linkMonitoringDiv').style.display = 'none';
        document.getElementById('linkWebentryDiv').style.display = 'none';
      }
    }

    // Fungsi untuk menampilkan input link berdasarkan platform
    function toggleLinkInput() {
      var platform = document.getElementById('platform').value;
      
      if (platform == '1') {  // Dekstop
        document.getElementById('linkMonitoringDiv').style.display = 'block';
        document.getElementById('linkWebentryDiv').style.display = 'none';
      } else if (platform == '0') {  // Online
        document.getElementById('linkWebentryDiv').style.display = 'block';
        document.getElementById('linkMonitoringDiv').style.display = 'none';
      }
    }

    document.addEventListener('DOMContentLoaded', function() {
      togglePlatformPengolahan();  
      toggleLinkInput();  
    });
  </script>

</body>

</html>