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
    public function update_status(Request $request, $id){
        $exhibition = Exhibitor::findOrFail($id);
        $exhibition->status = $request->status;
        $exhibition->save();
//        if ($exhibition->status=='active'){
//
//        }
        return redirect('admin/exhibitions')->with('success','Status Changed Successfully !!');
    }
}
