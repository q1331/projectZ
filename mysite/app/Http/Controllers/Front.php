<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use League\Flysystem\Exception;
use Validator;

class Front extends Controller {

    public function index() {
        return view('home', array('page' => 'home'));
    }

    public function login() {
        return view('login', array('page' => 'home'));
    }

    public function search() {
        return view('market');
    }
	
	public function item() {
		return view('item');
	}

	public function myapplication() {
		return view('myapplication');
	}

	public function orders() {
		return view('orders');
	}
	
	public function user() {
		return view('user');
	}
	
	public function listings() {
		return view('listings');
	}

	public function test() {
		return view('testChild');
	}

	public function dashboard() {
		return view('dashboard.dashboard');
	}
    
    public function register() {
   	 	if (Request::isMethod('post')) {
        	User::create([
    			'name' => Request::get('name'),
			    'username' => Request::get('username'),
                'email' => Request::get('email'),
                'password' => bcrypt(Request::get('password')),
        	]);
    	} 
    	return Redirect::away('login');
    }

    public function authenticate() {
    	if (Auth::attempt(['username' => Request::get('username'), 'password' => Request::get('password')])) {
        	return redirect()->intended('index');
    	} else {
        	return view('login', array('title' => 'Welcome', 'description' => '', 'page' => 'home'));
    	}
	}

	public function logout() {
    	Auth::logout();
   		return Redirect::away('login');
	}

	public function upload(Request $request){
		try{
			$file = array('upl' => $request->file('upl'));
			$rules = array('upl' => 'required',);
			$validator = Validator::make($file, $rules);
			if ($validator->fails()) {
				echo '{"status":"error"}';
				exit;
			} else {
				if ($request->file('upl')->isValid()) {
					$destinationPath = 'uploads'; // upload path
					$extension = $request->file('upl')->getClientOriginalExtension();
					$fileName = rand(11111, 99999) . '.' . $extension;
					$request->file('upl')->move($destinationPath, $fileName);
					echo '{"status":"success"}';
					exit;
				} else {
					echo '{"status":"error"}';
					exit;
				}
			}
		}
		catch(Exception $e){
			echo '{"status":"error"}';
			exit;
		}
	}
}