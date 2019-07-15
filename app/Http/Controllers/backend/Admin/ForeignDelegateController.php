<?php

namespace App\Http\Controllers\backend\Admin;

use App\Model\ForeignDelegate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ForeignDelegateController extends Controller
{
    public function index(){
        $title = 'Foreign Delegate Registration Details ';
        $foreign_delegates = ForeignDelegate::orderBy('id','DESC')->get();
        return view('backend.admin.foreign-delegate.index',compact('title','foreign_delegates'));
    }
    public function update_status(Request $request, $id)
    {
        $delegate = ForeignDelegate::findOrFail($id);
        $delegate->status = $request->status;
        $delegate->save();
//        if ($exhibition->status=='active'){
//
//        }
        return redirect('admin/foreign-delegates')->with('success', 'Status Changed Successfully !!');

    }

}
