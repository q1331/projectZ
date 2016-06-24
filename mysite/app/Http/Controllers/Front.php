<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

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

}