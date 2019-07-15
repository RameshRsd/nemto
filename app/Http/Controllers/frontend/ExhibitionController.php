<?php

namespace App\Http\Controllers\frontend;

use App\Model\Country;
use App\Model\VisaInvitation;
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
        $countries = Country::orderBy('name')->get();
        return view('frontend.pages.exhibition.visa_invitation_letter',compact('title','countries'));
    }
    public function post_visa_invitation_letter(Request $request){
        $this->validate($request, [
            'company_name'=> 'required',
            'passport_name'=> 'required',
            'nationality'=> 'required',
            'date_of_birth'=> 'required',
            'country_id'=> 'required',
            'passport_number'=> 'required',
            'place_of_issue'=> 'required',
            'date_of_issue'=> 'required',
            'expiry_date'=> 'required',
            'file'=> 'required',
            'email'=> 'required|email',
            'mobile_number'=> 'required|numeric',
        ]);
        $invitation = new VisaInvitation();
        $invitation->company_name = $request->company_name;
        $invitation->passport_name = $request->passport_name;
        $invitation->nationality = $request->nationality;
        $invitation->date_of_birth = $request->date_of_birth;
        $invitation->email = $request->email;
        $invitation->mobile_number = $request->mobile_number;
        $invitation->country_id = $request->country_id;
        $invitation->website = $request->website;
        $invitation->passport_number = $request->passport_number;
        $invitation->place_of_issue = $request->place_of_issue;
        $invitation->date_of_issue = $request->date_of_issue;
        $invitation->expiry_date = $request->expiry_date;
        $invitation->status = 'inactive';
        if ($request->hasFile('file')){
            $filename = time().'.'.request()->file('file')->getClientOriginalExtension();
            $filename = md5(microtime()) . '.' . $filename;
            request()->file('file')->move('public/uploads/passport/',$filename);
            $invitation->file =$filename;
        }
        $invitation->save();
        return redirect()->back()->with('success','Thank you for applying Visa Invitation Letter');
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
