<?php

namespace App\Http\Controllers\backend\Admin;

use App\Model\Diplomatic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DiplomaticController extends Controller
{
    public function index(){
        $title = 'Diplomatic Official Registration Details ';
        $diplomatics = Diplomatic::orderBy('id','DESC')->get();
        return view('backend.admin.diplomatic.index',compact('title','diplomatics'));
    }
}
