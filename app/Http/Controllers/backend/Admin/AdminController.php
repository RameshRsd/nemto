<?php

namespace App\Http\Controllers\backend\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
        $title = 'Admin Panel';
        return view('backend.admin.dashboard',compact('title'));
    }
}
