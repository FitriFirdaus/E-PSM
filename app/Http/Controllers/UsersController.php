<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Validator;
Use Exception; 
use App\Models\students as students;

class UsersController extends Controller
{
    function login(Request $req){

    	// Validator

    	$messages = [
    		'required' => 'diperlukan',
    	];

    	$rules = [
    		'studentID' => 'required',
    		'password' => 'required'
    	];

    	$validator = $req->validate($rules, $messages);

    	$data = $req->input();

    	// Select eloquent
    	$check = students::where('studentID', $req->studentID)->exists();

    	if($check){

    		$students = students::where('studentID', $req->studentID)
    				->get()
    				->first();

    		$password = $students->password;
    		$name = $students->name;
            $studentID = $students->studentID;

    		if($password == $data['password']){

    			// Save into session
                Session::put('logged_user', $studentID);   //put the data and in session
                Session::put('user_name', $name);
        
				return redirect('home');
    		}
    		else{

    			// custom back validator message
				$custom_msg = [
					'password' => 'kata laluan salah',
				];

				// return back with custom error message
				return redirect()->back()->withInput()->withErrors($custom_msg);
    		}

    	}else{

    		$custom_msg = [
				'studentID' => 'staff id tidak berdaftar',
			];

			return redirect()->back()->withInput()->withErrors($custom_msg);

    	}

    	// return $check;
    }


    function register(Request $req){

    	// validation
    	$messages = [
    		'required' => 'diperlukan',
    		'between' => 'harus diantara :min - :max aksara',
    		'min' => 'minimum :min aksara',
    		'confirmed' => 'kata laluan tidak sepadan'
    	];

    	$rules = [
    		'email' => 'required | email',
    		'password' => 'required | between:8,10 | confirmed',
    		'password_confirmation' => 'required',
    		'name' => 'required | min:5',
    		'phone' => 'required'
    	];

    	$req->validate($rules, $messages);

    	// return all input data
    	$data = $req->input();

    	// add additional field data
    	$data['purpose'] = 'Pendaftaran';

    	try {

    		$currentdt = date('d-m-Y H:i:s');

    		// Insert 
    		$students = new students;
    		$students->studentID = $req->studentID;
    		$students->password = $req->password;
    		$students->name = $req->name;
    		$students->email = $req->email;
    		$students->phone = $req->phone;
    		$students->created_at = $currentdt;
    		$students->updated_at = $currentdt;

    		$result = $students->save();

    		$details = [
    			'type' => 'Registration',
    			'status' => 'Success',
    		];

    		// save status into session
    		// $session_name = 'regis_status';
    		// Session::put($session_name, $details['status']); 

    		// $test_session = $req->session()->get('regis_status'); 		

    		$data['details'] = $details;

    		// return $test_session;
    		// return view('register', $data);
    		return redirect()->route('home');
    		
    	} catch (Exception $e) {

    		$errCode = $e->errorInfo[1];
    		
    		if($errCode == 1062){
    			$errStatus = 'studentID sudah wujud di dalam sistem';
    		}
    		else{
    			$errStatus = 'Terdapat error';
    		}

    		$details = [
    			'type' => 'Registration',
    			'status' => 'Failed',
    			'error_code' => $errCode,
	    		'description' => $errStatus
    		];

    		$data['details'] = $details;

    		// return $data;
    		// return view('register');
            echo $e;
    	}

    }


    function admin_register(Request $req){

        // validation
        $messages = [
            'required' => 'diperlukan',
            'between' => 'harus diantara :min - :max aksara',
            'min' => 'minimum :min aksara',
            'confirmed' => 'kata laluan tidak sepadan'
        ];

        $rules = [
            'email' => 'required | email',
            'password' => 'required | between:8,10 | confirmed',
            'password_confirmation' => 'required',
            'name' => 'required | min:5',
            'phone' => 'required'
        ];

        $req->validate($rules, $messages);

        // return all input data
        $data = $req->input();

        // add additional field data
        $data['purpose'] = 'Pendaftaran';

        // Select eloquent
        $check = students::where('studentID', $req->studentID)->exists();

        if (!$check) {
           try {

            $currentdt = date('d-m-Y H:i:s');

            // Insert 
            $students = new students;
    		$students->studentID = $req->studentID;
    		$students->password = $req->password;
    		$students->name = $req->name;
    		$students->email = $req->email;
    		$students->phone = $req->phone;
    		$students->created_at = $currentdt;
    		$students->updated_at = $currentdt;

            $result = $students->save();

            $details = [
                'type' => 'Registration',
                'status' => 'Success',
            ];

            // save status into session
            // $session_name = 'regis_status';
            // Session::put($session_name, $details['status']); 

            // $test_session = $req->session()->get('regis_status');        

            $data['details'] = $details;

            // return $test_session;
            // return view('register', $data);
            // return redirect()->route('home');

            $custom_msg = [
                'success' => 'Pendaftaran Admin berjaya',
            ];

            return redirect()->back()->withInput()->withErrors($custom_msg);
            
            } catch (Exception $e) {

                $errCode = $e->errorInfo[1];
                
                if($errCode == 1062){
                    $errStatus = 'staff_id sudah wujud di dalam sistem';
                }
                else{
                    $errStatus = 'Terdapat error';
                }

                $details = [
                    'type' => 'Registration',
                    'status' => 'Failed',
                    'error_code' => $errCode,
                    'description' => $errStatus
                ];

                $data['details'] = $details;

                // return view('register_admin');
                $custom_msg = [
                    'failed' => 'Pendaftaran Admin tidak berjaya',
                ];
                return redirect()->back()->withInput()->withErrors($custom_msg);
            }
        }
        else{
            $custom_msg = [
                'failed' => 'Pendaftaran Admin tidak berjaya! Akaun telahpun wujud',
            ];

            return redirect()->back()->withInput()->withErrors($custom_msg);
        }

        

    }


    function resetpassword(Request $req){
        // validation
        $messages = [
            'required' => 'diperlukan',
            'between' => 'harus diantara :min - :max aksara',
            'min' => 'minimum :min aksara',
            'confirmed' => 'kata laluan tidak sepadan'
        ];

        $rules = [
            'studentID' => 'required',
            'password' => 'required | between:8,10 | confirmed',
            'password_confirmation' => 'required',
        ];

        $req->validate($rules, $messages);

        // return all input data
        $data = $req->input();

        // add additional field data
        $data['purpose'] = 'Reset Password';

        // Select eloquent
        $check = students::where('studentID', $req->studentID)->exists();

        if ($check) {

            $students = students::where('studentID', $req->studentID)
                        ->get()
                        ->first();

            $students->password = encrypt($req->password);
            $students->save();

            $custom_msg = [
                'success' => 'Password berjaya ditukar',
            ];

            return redirect()->back()->withInput()->withErrors($custom_msg);
        }
        else{
            $custom_msg = [
                'staff_id' => 'staff id tidak berdaftar',
            ];

            return redirect()->back()->withInput()->withErrors($custom_msg);
        }

    }


    function logout(){
    	Session::flush();
   		return redirect('/');
    }
}
