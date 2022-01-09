<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
	$logged_user = session()->get('logged_user');

	if (!$logged_user) {
		return view('welcome');
	} else {
		return redirect('home');
	}
});


Route::get('mohon', function () {

	//getting user logged session
	$logged_user = session()->get('logged_user');

	if (!$logged_user) {
		return redirect('/');
	} else {
		$club = DB::table('clubs')->get();
		return view('permohonan.permohonan', ['club' => $club]);
	}
});



Route::get('mohon_two', function () {

	//getting user logged session
	$logged_user = session()->get('logged_user');

	if (!$logged_user) {
		return redirect('/');
	} else {
		$app_id = session()->get('app_id');
		if (!$app_id) {
			return redirect('home');
		} else {
			return view('permohonan.peserta');
		}
	}
})->name('mohon_two');



Route::get('mohon_three', function () {

	//getting user logged session
	$logged_user = session()->get('logged_user');

	if (!$logged_user) {
		return redirect('/');
	} else {
		$app_id = session()->get('app_id');
		if (!$app_id) {
			return redirect('home');
		} else {
			return view('permohonan.bajet');
		}
	}
})->name('mohon_three');


Route::get('mohon_tajaan', function () {

	//getting user logged session
	$logged_user = session()->get('logged_user');

	if (!$logged_user) {
		return redirect('/');
	} else {
		$app_id = session()->get('app_id');
		if (!$app_id) {
			return redirect('home');
		} else {
			return view('permohonan.tajaan');
		}
	}
})->name('mohon_tajaan');


Route::get('mohon_impak', function () {

	//getting user logged session
	$logged_user = session()->get('logged_user');

	if (!$logged_user) {
		return redirect('/');
	} else {
		$app_id = session()->get('app_id');
		if (!$app_id) {
			return redirect('home');
		} else {
			return view('permohonan.impak');
		}
	}
})->name('mohon_impak');


Route::get('bajet', 'PeoplesController@goto_budget');

Route::post('mohon_first', 'ApplicationsController@mohon_first');
Route::post('mohon_second', 'ApplicationsController@mohon_second');

Route::post('submit_budget', 'BudgetsController@count_budget');

Route::post('add_penaja', 'TajaansController@add_penaja');
Route::post('add_sumber', 'SumbersController@add_sumber');

Route::post('submit_final', 'ImpactsController@submit_final');

Route::view('register', 'register');
Route::view('forgot', 'forgot');

Route::post('user_login', 'UsersController@login');
Route::post('user_register', 'UsersController@register');

Route::post('user_reset', 'UsersController@resetpassword');

Route::get('/logout', 'UsersController@logout');

Route::get('semak', 'ApplicationsController@semakan');


Route::get('semakadmin', 'ApplicationsController@semakanAdmin')->name('semakadmin');

Route::get('/details', function () {
	//getting user logged session
	$logged_user = session()->get('logged_user');

	if (!$logged_user) {
		return redirect('/');
	} else {
		return view('semakan.semak_details');
	}
})->name('details');

Route::get('view/{app_id}', 'ApplicationsController@view_application');
Route::post('update_app', 'ApplicationsController@update_application');

Route::get('view_modify/{app_id}', 'ApplicationsController@view_modify_application');
Route::post('modify_app', 'ApplicationsController@modify_application');

Route::post('modify_details/{app_id}', 'ApplicationsController@modify_details');

Route::get('accept/{app_id}', 'ApplicationsController@accepting');

Route::get('reject/{app_id}', 'ApplicationsController@rejecting');

Route::get('deleteapp/{app_id}', 'ApplicationsController@deleteapp');

Route::get('delete/{id}/{app_id}', 'PeoplesController@deleting');

Route::get('laporan', 'ApplicationsController@laporan')->name('laporan');

Route::get('laporanadmin', 'ApplicationsController@laporanadmin')->name('laporanadmin');

Route::post('upload_laporan', 'DocumentsController@upload_laporan');

// Route::get('/viewsemakan',function(){
// 	return view('semakan.semak_view');

// });

// Route::view("semakan.semak_view",'semakan.semak_view');


// url to view doc impact images
Route::get('viewdoc/{app_id}/{filename}', function ($app_id, $filename) {
	$filepath = '\/' . $app_id . '\/' . $filename;
	// $filename = encrypt($filename);
	// $path = storage_path('public/' . $filename);
	$path = public_path('app_doc' . $filepath);

	if (!File::exists($path)) {
		abort(404);
	}

	$file = File::get($path);
	$type = File::mimeType($path);

	$response = Response::make($file, 200);
	$response->header("Content-Type", $type);

	return $response;
});

// url to view doc laporan images if pdf will view, if docs, will downloaded
Route::get('viewdoc/{app_id}/laporan/{filename}', function ($app_id, $filename) {
	$filepath = '\/' . $app_id . '\/laporan/' . $filename;

	$path = public_path('app_doc' . $filepath);

	if (!File::exists($path)) {
		abort(404);
	}

	$file = File::get($path);
	$type = File::mimeType($path);

	$response = Response::make($file, 200);
	$response->header("Content-Type", $type);

	return $response;

	// return Response::download($filepath, 'filename.pdf', $headers);
});


// url to download doc.
Route::get('download/{app_id}/laporan/{filename}', function ($app_id, $filename) {
	$filepath = '/' . $app_id . '/laporan/' . $filename;

	$path = public_path('app_doc' . $filepath);

	if (!File::exists($path)) {
		abort(404);
	}

	$headers = array(

		'Content-Type',

	);

	$response = Response::download($path, $filename, $headers);

	return $response;
});

// url to download impact
Route::get('impactdoc/{app_id}/{filename}', function ($app_id, $filename) {
	$filepath = '/' . $app_id . '/' . $filename;

	$path = public_path('app_doc' . $filepath);

	if (!File::exists($path)) {
		abort(404);
	}

	$headers = array(

		'Content-Type',

	);

	$response = Response::download($path, $filename, $headers);

	return $response;
});


Route::view('register_admin', 'register_admin')->name('register_admin');

Route::post('admin_register', 'UsersController@admin_register');


Route::get('report/{app_id}', 'ReportController@index');
Route::get('testmail', 'TestController@sendEmail');

Route::get('register_club', function () {

	//getting user logged session
	$logged_user = session()->get('logged_user');

	if (!$logged_user) {
		return redirect('/');
	} else {
		$club = DB::table('clubs')->get();
		return view('admin.club', ['club' => $club]);
	}
});
Route::post('addclub', 'ClubController@insert');
Route::post('kemaskiniclub', 'ClubController@update');


Route::get('report', 'ReportController@report')->name('semakadmin');


//StudentHomepage-luqman
// Route::get('home', function () {

// 	//getting user logged session
// 	$logged_user = session()->get('logged_user');
// 	$roles = session()->get('user_roles');

// 	if (!$logged_user) {
// 		return redirect('/');
// 	} else {
// 		if ($roles == 'admin' || $roles == 'superadmin') {
// 			return view('admin');
// 		} else {
// 			return view('StudentProfile.profile');
// 		}
// 	}
// })->name('home');

use App\Http\Controllers\studentsController;

Route::get('home', [studentsController::class, 'index']);
Route::get('EditProfile', [studentsController::class, 'editprofile']);
Route::post('update_profile', 'studentsController@updateprofile');
