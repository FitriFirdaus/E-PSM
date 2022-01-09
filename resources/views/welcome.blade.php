<x-header />
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div class="container-fluid">
    <div class="row" style="margin-top: 50px; margin-bottom: 50px;">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">

            <div>
                <form action="user_login" method="post">
                    <div class="form-group">
                        <img class="w-100 h-100" src="./images/ump_logo.png" alt="PSM System UMP" />
                    </div>
                    <hr />
                    <marquee width="100%" direction="left" height="30px">
                        Sila daftar akaun bagi pengguna baharu
                    </marquee>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Staff ID</label>
                        <input type="text" class="form-control form-control-lg" id="studentID" name="studentID" placeholder=" User ID" value="{{old('staff_id')}}">

                        @error('staff_id')
                        <span style="float: right;color: red">{{$message}}</span>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Kata Laluan</label>
                        <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Kata Laluan">
                        @error('password')
                        <span style="float: right;color: red">{{$message}}</span>
                        <br>
                        @enderror
                        <small class="form-text" style="text-align: right; padding-right: 20px;"><a href="forgot" class="alert-link" style="color: #212529;">lupa kata laluan?</a></small>
                    </div>

                    {{@csrf_field()}}

                    <div style="text-align: center; padding-top: 20px;">
                        <button type="submit" class="btn btn-dark btn-lg btn-block">Hantar</button>
                    </div>

                </form>
            </div>

        </div>
        <div class="col-lg-4"></div>
    </div>
</div>

<!-- <x-footer/> -->
<script>
    @error('password')
    $flashdata = "{{$message}}";
    if ($flashdata) {
        Swal.fire({
            title: 'Error!',
            text: $flashdata,
            icon: 'error',
            confirmButtonText: 'Close'
        })
    }
    @enderror
</script>