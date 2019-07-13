<?php

namespace App\Http\Controllers\backend\Admin;

use App\Model\Exhibitor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExhibitionController extends Controller
{
    public function index(){
        $title = 'Exhibition Registration Details ';
        $exhibitions = Exhibitor::orderBy('id','DESC')->get();
        return view('backend.admin.exhibition.index',compact('title','exhibitions'));
    }
}
