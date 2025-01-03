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
      <h1>Tambah Kegiatan</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
          <div class="card">
              <div class="card-body">
                  <h5 class="card-title">Kegiatan Pendampingan</h5>
    
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
                  <form method="POST" action="{{ isset($kegiatanOpd) ? route('kegiatanopd.update', $kegiatanOpd->id) : route('kegiatanopd.submit') }}" enctype="multipart/form-data">
                      @csrf
                      @isset($kegiatanOpd)
                          @method('PUT')
                      @endisset
    
                      <input type="hidden" name="id" value="{{ old('id', $kegiatanOpd->id ?? '') }}">
    
                      <!-- Tanggal Kegiatan -->
                      <div class="row mb-3">
                          <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Kegiatan</label>
                          <div class="col-sm-10">
                              <input type="date" class="form-control w-auto" id="inputDate" name="tanggal" value="{{ old('tanggal', $kegiatanOpd->tanggal ?? '') }}" required>
                          </div>
                      </div>
    
                      <!-- Nama Anggota Tim SMS -->
                      {{-- <div class="row mb-3">
                          <label for="inputText" class="col-sm-2 col-form-label">Nama Anggota Tim SMS</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputText" name="nama_anggota_tim_sms" value="{{ old('nama_anggota_tim_sms', $kegiatanOpd->nama_anggota_tim_sms ?? '') }}" required>
                          </div>
                      </div> --}}
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama Anggota Tim SMS</label>
                        <div class="col-sm-10">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    Pilih Anggota Tim SMS
                                </button>
                                <ul class="dropdown-menu p-3" aria-labelledby="dropdownMenuButton" style="max-height: 300px; overflow-y: auto;">
                                    @foreach($anggotaTim as $anggota)
                                    <li class="form-check mb-2">
                                        <input 
                                            class="form-check-input" 
                                            type="checkbox" 
                                            value="{{ $anggota->id }}" 
                                            id="anggota{{ $anggota->id }}" 
                                            name="nama_anggota_tim_sms[]" 
                                            style="transform: scale(1.2);" 
                                            @if(isset($selectedAnggota) && in_array($anggota->id, $selectedAnggota)) checked @endif>
                                        <label class="form-check-label" for="anggota{{ $anggota->id }}">{{ $anggota->nama }}</label>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                      </div>
    
                      <!-- OPD Lokus -->
                      <div class="row mb-3">
                        <label for="opdLokus" class="col-sm-2 col-form-label">OPD Lokus</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="opdLokus" name="opd_lokus" required>
                                <option value="" disabled selected>Pilih OPD Lokus</option>
                                @foreach($opdList as $opd)
                                    <option value="{{ $opd }}" {{ (isset($kegiatanOpd) && $kegiatanOpd->opd_lokus == $opd) ? 'selected' : '' }}>
                                        {{ $opd }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                      </div>
    
                      <!-- Lokus Lainnya -->
                      <div class="row mb-3">
                          <label for="inputText" class="col-sm-2 col-form-label">Lokus Lainnya</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputText" name="lokus_lainnya" value="{{ old('lokus_lainnya', $kegiatanOpd->lokus_lainnya ?? '') }}" required>
                          </div>
                      </div>
    
                      <!-- Jenis Kegiatan -->
                      <div class="row mb-3">
                        <label for="jenisKegiatan" class="col-sm-2 col-form-label">Jenis Kegiatan</label>
                        <div class="col-sm-10">
                            <div id="jenisKegiatan">
                                <input class="btn-check" type="radio" name="jenis_kegiatan" id="kompilasi" value="Kompilasi Produk Administrasi (Kompromi)" 
                                    {{ old('jenis_kegiatan', isset($kegiatanOpd) ? $kegiatanOpd->jenis_kegiatan : '') == 'Kompilasi Produk Administrasi (Kompromi)' ? 'checked' : '' }}>
                                <label class="btn btn-outline-primary me-2" for="kompilasi">Kompilasi Produk Administrasi (Kompromi)</label>
                    
                                <input class="btn-check" type="radio" name="jenis_kegiatan" id="survei" value="Survei (Pendataan tidak lengkap)" 
                                    {{ old('jenis_kegiatan', isset($kegiatanOpd) ? $kegiatanOpd->jenis_kegiatan : '') == 'Survei (Pendataan tidak lengkap)' ? 'checked' : '' }}>
                                <label class="btn btn-outline-primary me-2" for="survei">Survei (Pendataan tidak lengkap)</label>
                    
                                <input class="btn-check" type="radio" name="jenis_kegiatan" id="pendataan" value="Pendataan Lengkap" 
                                    {{ old('jenis_kegiatan', isset($kegiatanOpd) ? $kegiatanOpd->jenis_kegiatan : '') == 'Pendataan Lengkap' ? 'checked' : '' }}>
                                <label class="btn btn-outline-primary me-2" for="pendataan">Pendataan Lengkap</label>
                            </div>
                        </div>
                      </div>

                      <!-- Judul Kegiatan -->
                      <div class="row mb-3">
                          <label for="inputText" class="col-sm-2 col-form-label">Judul Kegiatan</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputText" name="judul_kegiatan" 
                                  value="{{ old('judul_kegiatan', isset($kegiatanOpd) ? $kegiatanOpd->judul_kegiatan : '') }}" required>
                          </div>
                      </div>

                      <!-- Kunjungan -->
                      <div class="row mb-3">
                        <label for="kunjungan" class="col-sm-2 col-form-label">Kunjungan</label>
                        <div class="col-sm-10">
                            <div id="kunjungan">
                                @for ($i = 1; $i <= 4; $i++)
                                    <input class="btn-check" type="radio" name="kunjungan" id="kunjungan{{$i}}" value="Kunjungan Ke-{{$i}}" 
                                        {{ old('kunjungan', isset($kegiatanOpd) ? $kegiatanOpd->kunjungan : '') == "Kunjungan Ke-{$i}" ? 'checked' : '' }}>
                                    <label class="btn btn-outline-primary me-2" for="kunjungan{{$i}}">Kunjungan Ke-{{$i}}</label>
                                @endfor
                    
                                <input class="btn-check" type="radio" name="kunjungan" id="kunjunganKeLainnya" value="Kunjungan Ke-5, Dst" 
                                    {{ old('kunjungan', isset($kegiatanOpd) ? $kegiatanOpd->kunjungan : '') == 'Kunjungan Ke-5, Dst' ? 'checked' : '' }}>
                                <label class="btn btn-outline-primary me-2" for="kunjunganKeLainnya">Kunjungan Ke-5, Dst</label>
                            </div>
                        </div>
                      </div>

                      <!-- Nama Pegawai OPD -->
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama Pegawai OPD</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputText" name="nama_pegawai_opd" 
                                value="{{ old('nama_pegawai_opd', isset($kegiatanOpd) ? $kegiatanOpd->nama_pegawai_opd : '') }}" required>
                        </div>
                      </div>

                      <!-- Jabatan Pegawai OPD -->
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Jabatan Pegawai OPD</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputText" name="jabatan_pegawai_opd" 
                                value="{{ old('jabatan_pegawai_opd', isset($kegiatanOpd) ? $kegiatanOpd->jabatan_pegawai_opd : '') }}" required>
                        </div>
                      </div>

                      <!-- Topik Pendampingan -->
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Topik Pendampingan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputText" name="topik_pendampingan" 
                                value="{{ old('topik_pendampingan', isset($kegiatanOpd) ? $kegiatanOpd->topik_pendampingan : '') }}" required>
                        </div>
                      </div>

                      <!-- Skor Pemahaman GSBPM -->
                      <div class="row mb-3">
                        <label for="skorPemahamanGsbpm" class="col-sm-2 col-form-label">Skor Penyerapan/Pemahaman Topik/Materi GSBPM</label>
                        <div class="col-sm-10">
                          <div id="skorPemahamanGsbpm">
                            @for ($i = 1; $i <= 10; $i++)
                              <input class="btn-check" type="radio" name="skor_pemahaman_gsbpm" id="skor{{$i}}" value="{{ $i }}" 
                                {{ old('skor_pemahaman_gsbpm', isset($kegiatanOpd) ? $kegiatanOpd->skor_pemahaman_gsbpm : '') == $i ? 'checked' : '' }}>
                              <label class="btn btn-outline-primary me-2" for="skor{{$i}}">{{ $i }}</label>
                            @endfor
                      
                            <input class="btn-check" type="radio" name="skor_pemahaman_gsbpm" id="skorNA" value="NA" 
                              {{ old('skor_pemahaman_gsbpm', isset($kegiatanOpd) ? $kegiatanOpd->skor_pemahaman_gsbpm : '') == 'NA' ? 'checked' : '' }}>
                            <label class="btn btn-outline-primary me-2" for="skorNA">NA</label>
                          </div>
                        </div>
                      </div>

                      <!-- Skor Pemahaman Rekomstat -->
                      <div class="row mb-3">
                        <label for="skorPemahamanRekomstat" class="col-sm-2 col-form-label">Skor Penyerapan/Pemahaman Topik/Materi Rekomstat</label>
                        <div class="col-sm-10">
                          <div id="skorPemahamanRekomstat">
                            @for ($i = 1; $i <= 10; $i++)
                              <input class="btn-check" type="radio" name="skor_pemahaman_rekomstat" id="rekomstat{{$i}}" value="{{ $i }}" 
                                {{ old('skor_pemahaman_rekomstat', isset($kegiatanOpd) ? $kegiatanOpd->skor_pemahaman_rekomstat : '') == $i ? 'checked' : '' }}>
                              <label class="btn btn-outline-primary me-2" for="rekomstat{{$i}}">{{ $i }}</label>
                            @endfor
                      
                            <input class="btn-check" type="radio" name="skor_pemahaman_rekomstat" id="rekomstatNA" value="NA" 
                              {{ old('skor_pemahaman_rekomstat', isset($kegiatanOpd) ? $kegiatanOpd->skor_pemahaman_rekomstat : '') == 'NA' ? 'checked' : '' }}>
                            <label class="btn btn-outline-primary me-2" for="rekomstatNA">NA</label>
                          </div>
                        </div>
                      </div>

                      <!-- Skor Pemahaman Metadata -->
                      <div class="row mb-3">
                        <label for="skorPemahamanMetadata" class="col-sm-2 col-form-label">Skor Penyerapan/Pemahaman Topik/Materi Metadata</label>
                        <div class="col-sm-10">
                          <div id="skorPemahamanMetadata">
                            @for ($i = 1; $i <= 10; $i++)
                              <input class="btn-check" type="radio" name="skor_pemahaman_metadata" id="metadata{{$i}}" value="{{ $i }}" 
                                {{ old('skor_pemahaman_metadata', isset($kegiatanOpd) ? $kegiatanOpd->skor_pemahaman_metadata : '') == $i ? 'checked' : '' }}>
                              <label class="btn btn-outline-primary me-2" for="metadata{{$i}}">{{ $i }}</label>
                            @endfor
                      
                            <input class="btn-check" type="radio" name="skor_pemahaman_metadata" id="metadataNA" value="NA" 
                              {{ old('skor_pemahaman_metadata', isset($kegiatanOpd) ? $kegiatanOpd->skor_pemahaman_metadata : '') == 'NA' ? 'checked' : '' }}>
                            <label class="btn btn-outline-primary me-2" for="metadataNA">NA</label>
                          </div>
                        </div>
                      </div>

                      <!-- Resume -->
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Resume/Catatan Kunjungan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputText" name="resume" 
                                value="{{ old('resume', isset($kegiatanOpd) ? $kegiatanOpd->resume : '') }}" required>
                        </div>
                      </div>

                      <!-- Lokasi -->
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Lokasi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputText" name="lokasi" 
                                value="{{ old('lokasi', isset($kegiatanOpd) ? $kegiatanOpd->lokasi : '') }}" required>
                        </div>
                      </div>
    
                      <!-- Dokumentasi Kunjungan -->
                      <div class="row mb-3">
                        <label for="dokumentasi_kunjungan" class="col-sm-2 col-form-label">Dokumentasi Kunjungan</label>
                        <div class="col-sm-10">
                            @if(isset($kegiatanOpd) && $kegiatanOpd->dokumentasi_kunjungan)
                                <!-- Jika sudah ada file, tampilkan nama file atau preview -->
                                {{-- <a href="{{ asset('storage/' . $kegiatanOpd->dokumentasi_kunjungan) }}" target="_blank">Lihat File Sebelumnya</a> --}}
                                <a href="{{ Storage::url($kegiatanOpd->dokumentasi_kunjungan) }}" target="_blank">Lihat File Sebelumnya</a>
                                <br>
                                <input type="file" class="form-control" id="dokumentasi_kunjungan" name="dokumentasi_kunjungan">
                            @else
                                <!-- Jika belum ada file, tampilkan input file kosong -->
                                <input type="file" class="form-control" id="dokumentasi_kunjungan" name="dokumentasi_kunjungan" required>
                            @endif
                        </div>
                      </div>
    
                      <!-- Button Submit -->
                      <div class="row mb-3 mt-5">
                          <div class="col-sm-12 text-end">
                              <button type="submit" class="btn btn-primary">
                                  {{ isset($kegiatanOpd) ? 'Update Kegiatan' : 'Tambahkan Kegiatan' }}
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
    // Fungsi untuk memperbarui teks tombol dengan opsi yang dipilih
    function updateButtonText() {
        var selectedValues = [];
        var checkboxes = document.querySelectorAll('.form-check-input:checked');
        
        checkboxes.forEach(function(checkbox) {
            selectedValues.push(checkbox.nextElementSibling.innerText);
        });

        var button = document.getElementById('dropdownMenuButton');
        
        var maxDisplay = 3;  // Menentukan jumlah maksimal opsi yang ditampilkan
        
        if (selectedValues.length > 0) {
            // Menampilkan hingga 3 opsi, sisanya ditambahkan "..."
            button.innerText = selectedValues.slice(0, maxDisplay).join(', ') + (selectedValues.length > maxDisplay ? '...' : '');
        } else {
            button.innerText = 'Pilih Anggota Tim SMS'; // Teks default jika tidak ada yang dipilih
        }
    }

    // Menambahkan event listener untuk setiap checkbox
    document.querySelectorAll('.form-check-input').forEach(function(checkbox) {
        checkbox.addEventListener('change', updateButtonText); // Perbarui teks tombol ketika checkbox berubah
    });

    // Prevent dropdown from closing when a checkbox is clicked
    document.querySelector('.dropdown').addEventListener('click', function(event) {
        event.stopPropagation(); // Mencegah dropdown menutup setelah checkbox diklik
    });

    // Menjalankan fungsi saat halaman dimuat (untuk edit)
    document.addEventListener('DOMContentLoaded', function() {
        updateButtonText(); // Memastikan teks tombol terisi dengan opsi yang sudah dipilih
    });
  </script>

</body>

</html>