<?php

namespace App\Http\Controllers\frontend;

use App\Model\Country;
use App\Model\District;
use App\Model\Exhibitor;
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
        return view('frontend.pages.registration.conference_registration',compact('title'));
    }
    public function post_conference_registration(){

    }

    public function get_foreign_delegate_registration (){
        $title = 'Delegate Registration - Nepal Medical Tourism Organization (A non-profitable organization)';
        return view('frontend.pages.registration.conference_registration',compact('title'));
    }
    public function post_foreign_delegate_registration (){

    }

    public function get_delegate_registration(){
        $title = 'Delegate Registration - Nepal Medical Tourism Organization (A non-profitable organization)';
        return view('frontend.pages.registration.conference_registration',compact('title'));
    }
    public function post_delegate_registration(){

    }
}
