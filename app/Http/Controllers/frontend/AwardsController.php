<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AwardsController extends Controller
{
    public function about_the_awards(){
        $title = 'About The Awards - Nepal Medical Tourism Organization (A non-profitable organization)';
        return view('frontend.pages.awards.about_the_awards',compact('title'));
    }
    public function payment_fee_details(){
        $title = 'Payment Details - Nepal Medical Tourism Organization (A non-profitable organization)';
        return view('frontend.pages.awards.fee_details',compact('title'));
    }
    public function awards_contact_us(){
        $title = 'Awards Contact Us - Nepal Medical Tourism Organization (A non-profitable organization)';
        return view('frontend.pages.awards.awards_contact_us',compact('title'));
    }
}
