<?php

namespace App\Http\Controllers\backend\Admin;

use App\Model\Delegate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DelegateController extends Controller
{
    public function index(){
        $title = 'Delegate Registration Details ';
        $delegates = Delegate::orderBy('id','DESC')->get();
        return view('backend.admin.delegate.index',compact('title','delegates'));
    }
}
