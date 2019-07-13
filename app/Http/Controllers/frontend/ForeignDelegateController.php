<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ForeignDelegateController extends Controller
{
    public function foreign_delegate_highlights(){
        $title = 'About The Awards - Nepal Medical Tourism Organization (A non-profitable organization)';
        return view('frontend.pages.foreigndelegate.foreign_delegate_highlights',compact('title'));
    }

}
