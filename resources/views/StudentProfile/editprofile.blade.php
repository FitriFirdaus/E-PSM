<x-header-new />
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Profile</h1>
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
            <form action="update_profile" method="post">
                {{ csrf_field() }}
                <table style="width:100%">
                    <tr>
                        <td width="30%" class="topleft"><img src="./images/neelofa.png" width="270" height="180">
                            <h2><br></h2>
                            <h4>PSM Title:</h4>
                        </td>
                        <td width="70%">
                            <table>
                                <tr>
                                    <td width="30%">
                                        <h2><br> Name</h2>
                                    </td>
                                    <td width="70%">
                                        <h3><br>:&nbsp&nbsp<input type="text" name="name" value="{{$students[0]->name}}"></h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="30%">
                                        <h2><br> Matric ID</h2>
                                    </td>
                                    <td width="70%">
                                        <h3><br>:&nbsp&nbsp{{$students[0]->studentID}}</h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="30%">
                                        <h2><br> Faculty</h2>
                                    </td>
                                    <td width="70%">
                                        <h3><br>:&nbsp&nbsp{{$students[0]->faculty}}</h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="30%">
                                        <h2><br> Course</h2>
                                    </td>
                                    <td width="70%">
                                        <h3><br>:&nbsp&nbsp{{$students[0]->course}}</h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="30%">
                                        <h2><br> Sem & Year</h2>
                                    </td>
                                    <td width="70%">
                                        <h3><br>:&nbsp&nbsp<input type="text" name="sem_year" value="{{$students[0]->sem_year}}"></h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="30%">
                                        <h2><br> Campus/Home Address</h2>
                                    </td>
                                    <td width="70%">
                                        <h3><br>:&nbsp&nbsp<input type="text" name="address" value="{{$students[0]->address}}"></h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="30%">
                                        <h2><br> Phone Number</h2>
                                    </td>
                                    <td width="70%">
                                        <h3><br>:&nbsp&nbsp<input type="text" name="phone" value="{{$students[0]->phone}}"></h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="30%">
                                        <h2><br> Email</h2>
                                    </td>
                                    <td width="70%">
                                        <h3><br>:&nbsp&nbsp<input type="text" name="email" value="{{$students[0]->email}}"></h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="30%">
                                        <h2><br> Supervisor Name</h2>
                                    </td>
                                    <td width="70%">
                                        <h3><br>:&nbsp&nbsp{{$students[0]->sv_name}}</h3>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <h2><br></h2>
                <h2><br></h2>
                <input type="submit" value="Update" class="button-73">
                <h2><br></h2>
            </form>
        </div><!-- /.container -->
    </div>
    <!-- /.content -->

</div>
<!-- ./wrapper -->

<x-footer-new />