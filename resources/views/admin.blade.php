

<x-header-admin/>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3 class="m-0 text-dark">Elektronik Jejak Bakat (e-JeBAt)</h3>
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
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card card-purple card-outline">
              <div class="card-body">
                <h5 class="card-title">Senarai Permohonan</h5><br>
                <hr/>

                <p class="card-text text-bold">
                Lihat dan semak senarai permohonan. 
                </p>

                <p class="card-text">
                Lihat senarai permohonan aktiviti, beri keputusan status kelulusan permohonan berdasarkan semakan dan penilaian
                </p>

                <button onclick="location.href='{{ url('semakadmin') }}'" type="button" class="btn btn-purple btn-block">Lihat Senarai</button>

              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="card card-purple card-outline">
              <div class="card-body">
                <h5 class="card-title">Laporan Aktiviti</h5><br>
                <hr/>

                <p class="card-text text-bold">
                Lihat laporan pasca-aktiviti pelajar disini. 
                </p>

                <p class="card-text">
                  
                  Pelajar dibenarkan selewat-lewatnya <strong style="color: red;">14 HARI</strong> untuk menghantar laporan pasca-aktiviti.&nbsp;

                  <span class="right badge badge-danger blink_me" style="padding: 5px;">PENTING</span>
                </p>

                <div class="d-none d-sm-none d-md-block d-lg-block">
                  <button onclick="location.href='{{ url('laporanadmin') }}'" type="button" class="btn btn-purple">Lihat Laporan</button>
                </div>

                <div class="d-block d-sm-block d-md-none d-lg-none">
                  <button onclick="location.href='{{ url('laporanadmin') }}'" type="button" class="btn btn-purple btn-block">Lihat Laporan</button>
                </div>

              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
        <!-- report
        <div class="row">
          <div class="col-lg-3">
            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">MyRA</h5><br>
                <hr/>

              	<button onclick="location.href='{{ url('') }}'" type="button" class="btn btn-primary btn-block">Teruskan</button>
              </div>
            </div>
          </div>
          
          <div class="col-lg-3">
            <div class="card card-danger card-outline">
              <div class="card-body">
                <h5 class="card-title">Alumni</h5><br>
                <hr/>

                <button onclick="location.href='{{ url('') }}'" type="button" class="btn btn-danger btn-block">Teruskan</button>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="card card-success card-outline">
              <div class="card-body">
                <h5 class="card-title">Industri</h5><br>
                <hr/>

                <button onclick="location.href='{{ url('') }}'" type="button" class="btn btn-success btn-block">Teruskan</button>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="card card-warning card-outline">
              <div class="card-body">
                <h5 class="card-title">Komuniti</h5><br>
                <hr/>

                <button onclick="location.href='{{ url('') }}'" type="button" class="btn btn-warning btn-block">Teruskan</button>
              </div>
            </div>
          </div>
        </div>
         -->
        <!-- /.row -->

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


</div>
<!-- ./wrapper -->

<x-footer-admin/>
