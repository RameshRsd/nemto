<?php

namespace App\Http\Controllers\backend\Admin;

use App\Model\Delegate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DelegateController extends Controller
{
    public function index()
    {
        $title = 'Delegate Registration Details ';
        $delegates = Delegate::orderBy('id', 'DESC')->get();
        return view('backend.admin.delegate.index', compact('title', 'delegates'));
    }

    public function update_status(Request $request, $id)
    {
        $delegate = Delegate::findOrFail($id);
        $delegate->status = $request->status;
        $delegate->save();
//        if ($exhibition->status=='active'){
//
//        }
        return redirect('admin/delegates')->with('success', 'Status Changed Successfully !!');

    }
}