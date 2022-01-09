<?php


?>
<x-header-admin/>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: white;">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          
          <h3 class="m-0 text-dark">Pendaftaran Akaun Admin</h3>
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Utama</a></li>
              <li class="breadcrumb-item active">Pendaftaran Admin</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

        <div class="row" style="padding-bottom: 100px; padding-top: 30px;">
          	<div class="col-lg-1"></div>
          	<div class="col-lg-10">

          		<h3>ADMIN BAHARU</h3>
				<hr/>
				<marquee width="100%" direction="left" height="30px">
	                Maklumat peribadi anda tidak akan dikongsi bersama pihak ketiga
	            </marquee>
				<!-- <small id="emailHelp" class="form-text text-muted">Maklumat peribadi anda tidak akan dikongsi bersama pihak ketiga</small> -->
				<br>
				<br>
				<form action="admin_register" method="post">

					<div class="row form-group" style="padding-right: 20px;">
						<div class="col-lg-4 col-md-4 tablet" style="text-align: left; margin-top: 10px;">
							<label for="email">Staff ID</label>
						</div>
						<div class="col-lg-8 col-md-8">
							<input type="text" class="form-control input_style" name="staff_id" placeholder="2010641052" value="{{old('staff_id')}}">

							@error('staff_id')
								<span style="float: right;color: red">{{$message}}</span>
							@enderror
						</div>
					</div>

					<div class="row form-group" style="padding-right: 20px;">
						<div class="col-lg-4 col-md-4 tablet" style="text-align: left; margin-top: 10px;">
							<label for="password">Kata laluan</label>
						</div>
						<div class="col-lg-8 col-md-8">
							<input type="password" class="form-control input_style" name="password" placeholder="Abc123">
							@error('password')
								<span style="float: right;color: red">{{$message}}</span>
							@enderror
						</div>
					</div>

					<div class="row form-group" style="padding-right: 20px;">
						<div class="col-lg-4 col-md-4 tablet" style="text-align: left;">
							<label for="password_confirmation">Sahkan Kata laluan</label>
						</div>
						<div class="col-lg-8 col-md-8">
							<input type="password" class="form-control input_style" name="password_confirmation" placeholder="Abc123">
							@error('password_confirmation')
								<span style="float: right;color: red">{{$message}}</span>
							@enderror
						</div>
					</div>

					<div class="row form-group" style="padding-right: 20px;">
						<div class="col-lg-4 col-md-4 tablet" style="text-align: left; margin-top: 10px;">
							<label for="name">Nama</label>
						</div>
						<div class="col-lg-8 col-md-8">
							<input type="text" class="form-control input_style" name="name" placeholder="Nama" value="{{old('name')}}">
							@error('name')
								<span style="float: right;color: red">{{$message}}</span>
							@enderror
						</div>
					</div>

					<div class="row form-group" style="padding-right: 20px;">
						<div class="col-lg-4 col-md-4 tablet" style="text-align: left; margin-top: 10px;">
							<label for="email">Email</label>
						</div>
						<div class="col-lg-8 col-md-8">
							<input type="email" class="form-control input_style" name="email" placeholder="emel@gmail.com" value="{{old('email')}}">

							@error('email')
								<span style="float: right;color: red">{{$message}}</span>
							@enderror
						</div>
					</div>

					<div class="row form-group" style="padding-right: 20px;">
						<div class="col-lg-4 col-md-4 tablet" style="text-align: left; margin-top: 10px;">
							<label for="phone">No Telefon</label>
						</div>
						<div class="col-lg-8 col-md-8">
							<input type="text" class="form-control input_style" name="phone" placeholder="0192217361" value="{{old('phone')}}">
							@error('phone')
								<span style="float: right;color: red">{{$message}}</span>
							@enderror

							@error('success')
								<span style="float: right;color: green">{{$message}}</span>
							@enderror

							@error('failed')
								<span style="float: right;color: red">{{$message}}</span>
							@enderror
						</div>
					</div>

					{{@csrf_field()}}

					<br>
					<div style="text-align: right; padding-right: 20px;">
						<button type="submit" class="btn btn-dark btn-lg btn-block">Daftar</button>
					</div>

					<br>
					<br>
	                
	            </form>

          	</div>
          	<div class="col-lg-1"></div>
        </div>

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


</div>
<!-- ./wrapper -->

<x-footer-admin/>