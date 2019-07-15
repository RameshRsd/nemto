<?php

namespace App\Http\Controllers\frontend;

use App\Model\AbstractSubmission;
use App\Model\BusinessMeeting;
use App\Model\Country;
use App\Model\Delegate;
use App\Model\Diplomatic;
use App\Model\District;
use App\Model\Exhibitor;
use App\Model\ForeignDelegate;
use App\Model\Occupation;
use App\Model\Recommended;
use App\Model\State;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistrationController extends Controller
{
    public function get_exhibitor_registration(){
        $title = 'Exhibitor Registration - Nepal Medical Tourism Organization (A non-profitable organization)';
        $countries = Country::orderBy('name')->get();
        return view('frontend.pages.registration.exhibitor_registration',compact('title','countries'));
    }
    public function post_exhibitor_registration(Request $request){
        $this->validate($request, [
            'company_name'=> 'required',
            'title'=> 'required',
            'f_name'=> 'required',
            'l_name'=> 'required',
            'country_id'=> 'required',
            'state_id'=> 'required',
            'district_id'=> 'required',
            'email'=> 'required|email',
            'mobile'=> 'required|numeric',
        ]);
        $exhibitor = new Exhibitor();
        $exhibitor->company_name = $request->company_name;
        $exhibitor->title = $request->title;
        $exhibitor->f_name = $request->f_name;
        $exhibitor->l_name = $request->l_name;
        $exhibitor->designation = $request->designation;
        $exhibitor->address1 = $request->address1;
        $exhibitor->address2 = $request->address2;
        $exhibitor->country_id = $request->country_id;
        $exhibitor->state_id = $request->state_id;
        $exhibitor->district_id = $request->district_id;
        $exhibitor->city = $request->city;
        $exhibitor->tel = $request->tel;
        $exhibitor->mobile = $request->mobile;
        $exhibitor->email = $request->email;
        $exhibitor->email2 = $request->email2;
        $exhibitor->website = $request->website;
        $exhibitor->status = 'inactive';
        $exhibitor->save();
        return redirect()->back()->with('success','Thank you for Registration !!');
    }

    public function get_conference_registration(){
        $title = 'Conference Registration - Nepal Medical Tourism Organization (A non-profitable organization)';
        $countries = Country::orderBy('name')->get();
        return view('frontend.pages.registration.conference_registration',compact('title','countries'));
    }
    public function post_conference_registration(Request $request){
        $this->validate($request, [
            'company_name'=> 'required',
            'title'=> 'required',
            'f_name'=> 'required',
            'l_name'=> 'required',
            'country_id'=> 'required',
            'state_id'=> 'required',
            'district_id'=> 'required',
            'email'=> 'required|email',
            'mobile'=> 'required|numeric',
        ]);
        $delegate = new Delegate();
        $delegate->company_name = $request->company_name;
        $delegate->title = $request->title;
        $delegate->f_name = $request->f_name;
        $delegate->l_name = $request->l_name;
        $delegate->designation = $request->designation;
        $delegate->address1 = $request->address1;
        $delegate->address2 = $request->address2;
        $delegate->country_id = $request->country_id;
        $delegate->state_id = $request->state_id;
        $delegate->district_id = $request->district_id;
        $delegate->city = $request->city;
        $delegate->tel = $request->tel;
        $delegate->mobile = $request->mobile;
        $delegate->email = $request->email;
        $delegate->email2 = $request->email2;
        $delegate->website = $request->website;
        $delegate->status = 'inactive';
        $delegate->save();
        return redirect()->back()->with('success','Thank you for Registration !!');
    }

    public function get_foreign_delegate_registration (){
        $title = 'Foreign Delegate Registration - Nepal Medical Tourism Organization (A non-profitable organization)';
        $recommendeds = Recommended::all();
        $occupations = Occupation::all();
        $countries = Country::orderBy('name')->get();
        return view('frontend.pages.registration.foreign_delegate_registration',compact('title','recommendeds','occupations','countries'));
    }
    public function post_foreign_delegate_registration (Request $request){
        $this->validate($request, [
            'register'=> 'required',
            'attend'=> 'required',
            'gender'=> 'required',
            'company_name'=> 'required',
            'designation'=> 'required',
            'occupation_id'=> 'required',
            'recommended_id'=> 'required',
            'title'=> 'required',
            'f_name'=> 'required',
            'l_name'=> 'required',
            'country_id'=> 'required',
            'state_id'=> 'required',
            'district_id'=> 'required',
            'email'=> 'required|email',
            'mobile1'=> 'required|numeric',
        ]);
        if ($request->recommended_id == 3){
            $this->validate($request, [
                'recommended_other'=> 'required',
            ]);
        }
        $foreign_delegate = new ForeignDelegate();
        $foreign_delegate->register = $request->register;
        $foreign_delegate->attend = $request->attend;
        $foreign_delegate->gender = $request->gender;
        $foreign_delegate->title = $request->title;
        $foreign_delegate->f_name = $request->f_name;
        $foreign_delegate->l_name = $request->l_name;
        $foreign_delegate->recommended_id = $request->recommended_id;
        $foreign_delegate->recommended_other = $request->recommended_other;
        $foreign_delegate->occupation_id = $request->occupation_id;
        $foreign_delegate->company_name = $request->company_name;
        $foreign_delegate->designation = $request->designation;
        $foreign_delegate->address1 = $request->address1;
        $foreign_delegate->address2 = $request->address2;
        $foreign_delegate->country_id = $request->country_id;
        $foreign_delegate->state_id = $request->state_id;
        $foreign_delegate->district_id = $request->district_id;
        $foreign_delegate->city = $request->city;
        $foreign_delegate->tel1 = $request->tel1;
        $foreign_delegate->tel2 = $request->tel2;
        $foreign_delegate->mobile1 = $request->mobile1;
        $foreign_delegate->mobile2 = $request->mobile2;
        $foreign_delegate->email = $request->email;
        $foreign_delegate->website = $request->website;
        $foreign_delegate->details = $request->details;
        $foreign_delegate->status = 'inactive';
        $foreign_delegate->save();
        return redirect()->back()->with('success','Thank you for Registration !!');
    }

    public function get_diplomatic_registration(){
        $title = 'Diplomatic Official Registration - Nepal Medical Tourism Organization (A non-profitable organization)';
        $countries = Country::orderBy('name')->get();
        return view('frontend.pages.registration.diplomatic_registration',compact('title','countries'));
    }
    public function post_diplomatic_registration(Request $request){
        $this->validate($request, [
            'company_name'=> 'required',
            'title'=> 'required',
            'f_name'=> 'required',
            'l_name'=> 'required',
            'country_id'=> 'required',
            'state_id'=> 'required',
            'district_id'=> 'required',
            'email'=> 'required|email',
            'mobile'=> 'required|numeric',
        ]);
        $diplomatic = new Diplomatic();
        $diplomatic->company_name = $request->company_name;
        $diplomatic->title = $request->title;
        $diplomatic->f_name = $request->f_name;
        $diplomatic->l_name = $request->l_name;
        $diplomatic->designation = $request->designation;
        $diplomatic->address1 = $request->address1;
        $diplomatic->address2 = $request->address2;
        $diplomatic->country_id = $request->country_id;
        $diplomatic->state_id = $request->state_id;
        $diplomatic->district_id = $request->district_id;
        $diplomatic->city = $request->city;
        $diplomatic->tel = $request->tel;
        $diplomatic->mobile = $request->mobile;
        $diplomatic->email = $request->email;
        $diplomatic->email2 = $request->email2;
        $diplomatic->website = $request->website;
        $diplomatic->status = 'inactive';
        $diplomatic->save();
        return redirect()->back()->with('success','Thank you for Registration !!');
    }

    public function get_abstract_submission(){
        $title = 'Abstract Submission - Nepal Medical Tourism Organization (A non-profitable organization)';
        $countries = Country::orderBy('name')->get();
        return view('frontend.pages.registration.abstract_submission',compact('title','countries'));
    }
    public function post_abstract_submission(Request $request){
        $this->validate($request, [
            'name'=> 'required',
            'company_name'=> 'required',
            'title'=> 'required',
            'presentation_title'=> 'required',
            'email'=> 'required',
            'address1'=> 'required',
            'abstract_info'=> 'required',
            'objective'=> 'required',
            'method_value'=> 'required',
            'result'=> 'required',
            'conclusion'=> 'required',
            'question1'=> 'required',
            'question2'=> 'required',
            'mobile'=> 'required|numeric',
        ]);
        $abstract = new AbstractSubmission();
        $abstract->title = $request->title;
        $abstract->name = $request->name;
        $abstract->company_name = $request->company_name;
        $abstract->presentation_title = $request->presentation_title;
        $abstract->email = $request->email;
        $abstract->mobile = $request->mobile;
        $abstract->address1 = $request->address1;
        $abstract->abstract_info = $request->abstract_info;
        $abstract->objective = $request->objective;
        $abstract->method = $request->method_value;
        $abstract->result = $request->result;
        $abstract->conclusion = $request->conclusion;
        $abstract->question1 = $request->question1;
        $abstract->question2 = $request->question2;
        $abstract->nature = $request->nature;
        $abstract->status = 'inactive';
        if ($request->hasFile('file')){
            $filename = time().'.'.request()->file('file')->getClientOriginalExtension();
            $filename = md5(microtime()) . '.' . $filename;
            request()->file('file')->move('public/uploads/files/',$filename);
            $abstract->file =$filename;
        }
        if ($request->hasFile('photo')){
            $filename = time().'.'.request()->file('photo')->getClientOriginalExtension();

            $filename = md5(microtime()) . '.' . $filename;

            request()->file('photo')->move('public/uploads/photos/',$filename);
            $abstract->photo =$filename;
        }
        $abstract->save();
        return redirect()->back()->with('success','Thank you for Abstract Submission !!');
    }

    public function get_b2b_meetings(){
        $title = 'B2B Meetings - Nepal Medical Tourism Organization (A non-profitable organization)';
        return view('frontend.pages.registration.b2b_meetings',compact('title'));
    }
    public function post_b2b_meetings(Request $request){
        $this->validate($request, [
            'name'=> 'required',
            'company_name'=> 'required',
            'email'=> 'required',
            'website'=> 'required',
            'designation'=> 'required',
            'address'=> 'required',
            'details'=> 'required',
            'prefer_com'=> 'required',
            'mobile'=> 'required|numeric',
        ]);
        $business = new BusinessMeeting();
        $business->name = $request->name;
        $business->company_name = $request->company_name;
        $business->website = $request->website;
        $business->designation = $request->designation;
        $business->tel = $request->tel;
        $business->mobile = $request->mobile;
        $business->address = $request->address;
        $business->details = $request->details;
        $business->email = $request->email;
        $business->prefer_com = $request->prefer_com;
        $business->status = 'inactive';
        $business->save();
        return redirect()->back()->with('success','Thank you for Submit Details !!');
    }
}
