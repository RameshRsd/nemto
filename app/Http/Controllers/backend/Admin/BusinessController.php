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
    public function update_status(Request $request, $id)
    {
        $b2bmeeting = BusinessMeeting::findOrFail($id);
        $b2bmeeting->status = $request->status;
        $b2bmeeting->save();
//        if ($exhibition->status=='active'){
//
//        }
        return redirect('admin/b2b-meetings')->with('success', 'Status Changed Successfully !!');

    }

}
