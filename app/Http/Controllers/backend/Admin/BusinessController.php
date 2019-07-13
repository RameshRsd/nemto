<?php

namespace App\Http\Controllers\backend\Admin;

use App\Model\BusinessMeeting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BusinessController extends Controller
{
    public function index(){
        $title = 'B2B Request Details ';
        $b2bmeetings = BusinessMeeting::orderBy('id','DESC')->get();
        return view('backend.admin.business-meeting.index',compact('title','b2bmeetings'));
    }
}
