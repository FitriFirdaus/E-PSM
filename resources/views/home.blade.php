

<x-header-new/>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3 class="m-0 text-dark">Elektronik Jejak Bakat dan Aktiviti Pelajar (e-JeBAt)</h3>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Utama</li>
              <!-- <li class="breadcrumb-item active">Starter Page</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="card card-purple card-outline">
              <div class="card-body">
                <h5 class="card-title">Permohonan Baru</h5><br>
                <hr/>

                <p class="card-text">
	            	Daftarkan segala butiran aktiviti pelajar di pautan ini. Klik Mohon untuk membuat permohonan baru.
                </p>

                <div class="d-none d-sm-none d-md-block d-lg-block">
                	<button onclick="location.href='{{ url('mohon') }}'" type="button" class="btn btn-purple">Mohon</button>
                </div>

                <div class="d-block d-sm-block d-md-none d-lg-none">
                	<button onclick="location.href='{{ url('mohon') }}'" type="button" class="btn btn-purple btn-block">Mohon</button>
                </div>             

              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
      		<div class="card card-purple card-outline">
              <div class="card-body">
                <h5 class="card-title">Semakan Permohonan</h5><br>
                <hr/>

                <p class="card-text">
	            	Dapatkan maklumat kemaskini terbaru tentang permohonan aktiviti pelajar anda di sini.
                </p>

                <button onclick="location.href='{{ url('semak') }}'" type="button" class="btn btn-purple btn-block">Buat Semakan</button>

              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-lg-6">
            <div class="card card-purple card-outline">
              <div class="card-body">
                <h5 class="card-title">Laporan Aktiviti</h5><br>
                <hr/>

                <p class="card-text">
	            	Kemaskini laporan pasca-aktiviti yang terlibat untuk pelajar anda disini. 
                </p>

                <p class="card-text">
                	
                	Selewat-lewatnya <strong style="color: red;">14 HARI</strong> setelah program dijalankan. JIKA GAGAL BERBUAT DEMIKIAN, SEBARANG PERMOHONAN DI MASA HADAPAN BOLEH UNTUK TAK DIPERTIMBANGKAN &nbsp;

                	<span class="right badge badge-danger blink_me" style="padding: 5px;">PENTING</span>
                </p>

                <div class="d-none d-sm-none d-md-block d-lg-block">
                	<button onclick="location.href='{{ url('laporan') }}'" type="button" class="btn btn-purple">Kemaskini Laporan</button>
                </div>

                <div class="d-block d-sm-block d-md-none d-lg-none">
                	<button onclick="location.href='{{ url('laporan') }}'" type="button" class="btn btn-purple btn-block">Kemaskini Laporan</button>
                </div>

              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


</div>
<!-- ./wrapper -->

<x-footer-new/>
