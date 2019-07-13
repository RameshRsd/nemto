<?php

namespace App\Http\Controllers\backend\Admin;

use App\Model\AbstractSubmission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AbstractController extends Controller
{
    public function index(){
        $title = 'Abstract Submission Details ';
        $abstracts = AbstractSubmission::orderBy('id','DESC')->get();
        return view('backend.admin.abstract.index',compact('title','abstracts'));
    }
}
