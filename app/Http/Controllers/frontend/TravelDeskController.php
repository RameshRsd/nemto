<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TravelDeskController extends Controller
{
    public function official_travel_partners(){
        $title = 'Official Travel Partners - Nepal Medical Tourism Organization (A non-profitable organization)';
        return view('frontend.pages.traveldesk.official_travel_partners',compact('title'));
    }
    public function travel_visa_information(){
        $title = 'Official Travel Partners - Nepal Medical Tourism Organization (A non-profitable organization)';
        return view('frontend.pages.traveldesk.travel_visa_information',compact('title'));
    }
}
