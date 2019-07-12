<?php

namespace App\Http\Controllers\backend\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GuestController extends Controller
{
    public function index(){
        $title = 'Guest Area';
        return view('backend.guest.dashboard',compact('title'));
    }

}
