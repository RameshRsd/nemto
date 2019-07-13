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
}
