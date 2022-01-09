<x-header-new />
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Student Profile</h1>
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
    <div class="container">
      <table style="width:100%">
        <tr>
          <td width="30%" class="topleft"><img src="./images/neelofa.png" width="270" height="180">
            <h2><br></h2>
            <h4>PSM Title:</h4>
          </td>
          <td width="20%">
            <h2>Name</h2>
            <h2>Matric ID</h2>
            <h2>Faculty</h2>
            <h2>Course</h2>
            <h2>Sem & Year</h2>
            <h2>Campus/Home Address</h2>
            <h2>Phone Number</h2>
            <h2>Email</h2>
            <h2>Supervisor Name</h2>
          </td>
          <td width="50%">
            <h3>:&nbsp&nbsp{{$students[0]->name}}</h3>
            <h3>:&nbsp&nbsp{{$students[0]->studentID}}</h3>
            <h3>:&nbsp&nbsp{{$students[0]->faculty}}</h3>
            <h3>:&nbsp&nbsp{{$students[0]->course}}</h3>
            <h3>:&nbsp&nbsp{{$students[0]->sem_year}}</h3>
            <h3>:&nbsp&nbsp{{$students[0]->address}}</h3>
            <h3>:&nbsp&nbsp{{$students[0]->phone}}</h3>
            <h3>:&nbsp&nbsp{{$students[0]->email}}</h3>
            <h3>:&nbsp&nbsp{{$students[0]->sv_name}}</h3>
          </td>
        </tr>
      </table>
      <h2><br></h2>
      <h2><br></h2>
      <a class="button-73" role="button" href="EditProfile">Edit Profile</a>
      <h2><br></h2>
    </div><!-- /.container -->
  </div>
  <!-- /.content -->

</div>
<!-- ./wrapper -->

<x-footer-new />