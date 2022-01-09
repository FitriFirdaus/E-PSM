<?php

$logged_user = session()->get('logged_user');
$user_name = session()->get('user_name');
$roles = session()->get('user_roles');

// $roles = 'superadmin'; // later get from roles session

// $all = session()->all();

// var_dump($all);
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>UMP | e-PSM</title>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <!-- Datatable -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a href="../home" class="nav-link">Main</a>
        </li>

        <li class="nav-item active">
          <a href="../logout" class="nav-link">Logout</a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->


    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-purple elevation-2">
      <!-- Brand Logo -->
      <a class="brand-link" style="text-align: center;">
        <img class="w-50 h-auto" src="../images/UitmLogo.png" alt="UiTM" />
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img class="w-10 h-auto rounded-circle" src="https://avatars.dicebear.com/api/initials/:{{$user_name}}.svg" alt="UiTM" />
          </div>
          <div class="info">
            <span>{{$user_name}}</span>
          </div>
        </div>

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <!-- <img
	        	class="w-10 h-auto"
	        	src="https://pngimage.net/authentification-png-2/"
	        	alt="UiTM"
	      	/> -->
            <!--
            <img src="https://img2.pngio.com/download-secretary-clipart-office-administrator-receptionist-office-administrator-png-1000_1000.png" alt="Download Secretary Clipart Office Administrator - Receptionist ...">
          </div>
          <div class="info">
            <span>Peranan: {{$roles}}</span>
          </div>
        </div>
      -->
            <!-- Sidebar Menu -->
            <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                  <a href="../home" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                      Paparan Utama
                    </p>
                  </a>
                </li>

                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon far far fa-edit"></i>
                    <p>
                      Langkah Permohonan
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>

                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="javascript:;" class="nav-link disabled">
                        <i class="fas fa-angle-right nav-icon"></i>
                        <p>1.0 Butiran Permohonan</p>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="javascript:;" class="nav-link disabled">
                        <i class="fas fa-angle-right nav-icon"></i>
                        <p>2.0 Butiran AJK & Peserta</p>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="javascript:;" class="nav-link disabled">
                        <i class="fas fa-angle-right nav-icon"></i>
                        <p>3.0 Bajet</p>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="javascript:;" class="nav-link disabled">
                        <i class="fas fa-angle-right nav-icon"></i>
                        <p>4.0 Tajaan & Sumber</p>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="javascript:;" class="nav-link disabled">
                        <i class="fas fa-angle-right nav-icon"></i>
                        <p>5.0 Impak Aktiviti</p>
                      </a>
                    </li>
                  </ul>

                </li>

                <li class="nav-item">
                  <a href="semak" class="nav-link @if(url()->current() ===  URL::to('/semak'))
								active
						   @endif
						  ">
                    <i class="nav-icon far far fa-edit"></i>
                    <p>
                      Semakan Permohonan
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="laporan" class="nav-link  active">
                    <i class="nav-icon far far fa-edit"></i>
                    <p>
                      Kemaskini Laporan
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./manual/user.pdf" download="manual" class="nav-link">
                    <i class="nav-icon  fas fa-file"></i>
                    <p>
                      Manual
                    </p>
                  </a>
                </li>

                @if($roles == 'superadmin')
                <li class="nav-item">
                  <a href="register_admin" class="nav-link active">
                    <!-- <i class="nav-icon far far fa-edit"></i> -->
                    <i class="nav-icon fas fa-cogs"></i>
                    <p>
                      Daftar Akaun Admin
                    </p>
                  </a>
                </li>
                @endif

              </ul>
            </nav>
            <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
    </aside>