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
    public function update_status(Request $request, $id)
    {
        $diplomatic = Diplomatic::findOrFail($id);
        $diplomatic->status = $request->status;
        $diplomatic->save();
//        if ($exhibition->status=='active'){
//
//        }
        return redirect('admin/diplomatic-official')->with('success', 'Status Changed Successfully !!');

    }

}
