<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.welcome');
    }

    public function getLogin(){
        return view('auth.login');
    }
    public function postLogin(Request $request){
        $this->validate(request(),[
            'email'=>'required',
            'password'=>'required'
        ]);
        $field = filter_var(request('email'),FILTER_VALIDATE_EMAIL) ? 'email' : 'name';
        if (Auth::attempt([$field => request('email'), 'password' => request('password')])) {
            if (Auth::check()) {
                if (Auth::user()->type == 'admin') {
                    return redirect('admin');
                }
                if (Auth::user()->type == 'guest') {
                    return redirect('guest');
                }
            }
        }
        return redirect('login')->withErrors(['email'=>'Invalid credentail'])->withInput(request()->only('email'));
    }

    public function getRegister(){
        return view('auth.register');
    }
}
