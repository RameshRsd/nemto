<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExhibitionController extends Controller
{
    public function exhibition(){
        $title = 'Exhibition';
        return view('frontend.pages.exhibition.exhibition',compact('title'));
    }
    public function why_exhibit(){
        $title = 'Exhibition';
        return view('frontend.pages.exhibition.why_exhibit',compact('title'));
    }
    public function who_can_exhibit(){
        $title = 'Exhibition';
        return view('frontend.pages.exhibition.who_can_exhibit',compact('title'));
    }
    public function exhibitor_profile(){
        $title = 'Exhibition';
        return view('frontend.pages.exhibition.exhibitor_profile',compact('title'));
    }
    public function layout_plan(){
        $title = 'Layout Plan';
        return view('frontend.pages.exhibition.layout_plan',compact('title'));
    }
    public function visa_invitation_letter(){
        $title = 'visa invitation letter';
        return view('frontend.pages.exhibition.visa_invitation_letter',compact('title'));
    }
    public function venue_details(){
        $title = 'visa invitation letter';
        return view('frontend.pages.exhibition.venue_details',compact('title'));
    }
    public function stand_and_packages(){
        $title = 'Stand And Packages';
        return view('frontend.pages.exhibition.stand_and_packages',compact('title'));
    }
    public function sponsorship_opportunities(){
        $title = 'Sponsorship Opportunities - NEMTO';
        return view('frontend.pages.exhibition.sponsorship_opportunities',compact('title'));
    }
    public function exhibitor_list_2018(){
        $title = 'Exhibitor List';
        return view('frontend.pages.exhibition.exhibitor_list_2018',compact('title'));
    }
}
