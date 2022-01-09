<x-header/>

<div class="container-fluid">
	<div class="row" style="margin-top: 50px; margin-bottom: 50px;">
		<div class="col-lg-3">
		</div>
		<div class="col-lg-6" style="text-align: center;">
			<h3>UBAH KATA LALUAN</h3>
			<hr/>
			
			<br>
			<form action="user_reset" method="post">

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
						<label for="password">Kata laluan baharu</label>
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
						@error('success')
							<span style="float: right;color: green">{{$message}}</span>
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
		<div class="col-lg-3">
		</div>
	</div>
</div>