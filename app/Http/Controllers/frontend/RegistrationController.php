<?php

namespace App\Http\Controllers\frontend;

use App\Model\Country;
use App\Model\Delegate;
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
        $exhibitor->status = 'active';
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
        $exhibitor = new Delegate();
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
        $exhibitor->status = 'active';
        $exhibitor->save();
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
        $foreign_delegate->status = 'active';
        $foreign_delegate->save();
        return redirect()->back()->with('success','Thank you for Registration !!');
    }

}
