<?php

namespace App\Http\Controllers\backend\Admin;

use App\Model\VisaInvitation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VisaController extends Controller
{
    public function index(){
        $title = 'Via Invitation Request List';
        $invitations = VisaInvitation::orderBy('id','DESC')->get();
        return view('backend.admin.visa-invitation.index',compact('title','invitations'));
    }
    public function update_status(Request $request, $id)
    {
        $invitation = VisaInvitation::findOrFail($id);
        $invitation->status = $request->status;
        $invitation->save();
//        if ($exhibition->status=='active'){
//
//        }
        return redirect('admin/visa-invitation')->with('success', 'Status Changed Successfully !!');

    }

}
