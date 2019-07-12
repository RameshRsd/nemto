<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['namespace'=>'frontend'],function(){

    Route::get('/','HomeController@index');

    Route::group(['middleware'=>'guest'],function(){
        Route::get('login','HomeController@getLogin')->name('login');
        Route::post('login','HomeController@postLogin');
        Route::get('register','HomeController@getRegister')->name('register');
        Route::post('register','HomeController@postRegister');
    });

    /*==============================Registration =========================*/
    Route::get('exhibitor-registration','RegistrationController@get_exhibitor_registration');
    Route::get('country_name',function (){
        $country_id = Illuminate\Support\Facades\Input::get('country_id');
        $state_name = \App\Model\State::where('country_id', '=', $country_id)->orderBy('name')->get();
        return Response::json($state_name);
    });
    Route::get('state_name',function (){
        $state_id = Illuminate\Support\Facades\Input::get('state_id');
        $district_name = \App\Model\District::where('state_id', '=', $state_id)->get();
        return Response::json($district_name);
    });
    Route::post('exhibitor-registration','RegistrationController@post_exhibitor_registration');

    Route::get('conference-delegate-registration','RegistrationController@get_conference_registration');
    Route::post('conference-delegate-registration','RegistrationController@post_conference_registration');
    Route::get('foreign-delegate-registration','RegistrationController@get_foreign_delegate_registration');
    Route::post('foreign-delegate-registration','RegistrationController@post_foreign_delegate_registration');
    Route::get('delegate-registration','RegistrationController@get_delegate_registration');
    Route::post('delegate-registration','RegistrationController@post_delegate_registration');
    /*==============================Registration =========================*/

    /*======================The Show============================*/
    Route::get('about-event', 'TheShowController@about_event');
    Route::get('event-features', 'TheShowController@event_features');
    Route::get('medical-industry', 'TheShowController@medical_industry');
    Route::get('event-activities', 'TheShowController@event_activities');
    Route::get('past-show-report-2018', 'TheShowController@past_report_2018');
    Route::get('about-organisers', 'TheShowController@about_organisers');
    Route::get('supporting-organisations', 'TheShowController@supporting_organisations');
    Route::get('strategic-organisations', 'TheShowController@strategic_organisations');
    Route::get('thank-you-sponsors-2018', 'TheShowController@thank_you_sponsors_2018');
    /*======================The Show============================*/

    /*======================Exhibition============================*/
    Route::get('exhibition', 'ExhibitionController@exhibition');
    Route::get('why-exhibit', 'ExhibitionController@why_exhibit');
    Route::get('who-can-exhibit', 'ExhibitionController@who_can_exhibit');
    Route::get('exhibitor-profile', 'ExhibitionController@exhibitor_profile');
    Route::get('layout-plan', 'ExhibitionController@layout_plan');
    Route::get('visa-invitation-letter', 'ExhibitionController@visa_invitation_letter');
    Route::get('venue-details', 'ExhibitionController@venue_details');
    Route::get('stand-and-packages', 'ExhibitionController@stand_and_packages');
    Route::get('exhibitor-list-2018', 'ExhibitionController@exhibitor_list_2018');
    /*======================Exhibition============================*/

    /*======================Conference============================*/
    Route::get('why-attend', 'ConferenceController@why_attend');
    Route::get('who-can-attend', 'ConferenceController@who_can_attend');
    Route::get('highlights', 'ConferenceController@highlights');
    Route::get('conference-speakers-2018', 'ConferenceController@conference_speakers_2018');
    Route::get('agenda-programme', 'ConferenceController@agenda_programme');
    Route::get('regional-forum-schedule', 'ConferenceController@regional_forum_schedule');
    /*======================Conference============================*/

    /*======================Visitors============================*/
    Route::get('why-visit', 'VisitorsController@why_visit');
    Route::get('who-can-visit', 'VisitorsController@who_can_visit');
    Route::get('visitor-profile', 'VisitorsController@visitor_profile');
    Route::get('admission-policy', 'VisitorsController@admission_policy');
    /*======================Visitors============================*/

//* ============================ Awards Controller ==================*//
    Route::get('about-the-awards', 'AwardsController@about_the_awards');
    Route::get('payment-fee-details', 'AwardsController@payment_fee_details');
    Route::get('awards-contact-us', 'AwardsController@awards_contact_us');
//* ============================ Awards Controller ==================*//

    //* ============================ Travel Desk Controller ==================*//
    Route::get('official-travel-partners', 'TravelDeskController@official_travel_partners');
    //* ============================ Travel Desk Controller ==================*//



});


Route::any('logout', 'Auth\LoginController@logout')->name('logout');


Route::group(['namespace'=>'backend'],function(){

    /* ================================================ Admin CONTROL Start============================================================== */
    Route::group(['middleware'=>'admin','prefix'=>'admin','namespace'=>'Admin'],function(){
        Route::get('','AdminController@index');
    });
    /* ================================================ Admin CONTROL Start============================================================== */


    /* ================================================ Admin CONTROL Start============================================================== */
    Route::group(['middleware'=>'visitor','prefix'=>'guest','namespace'=>'Guest'],function(){
        Route::get('','GuestController@index');
    });
    /* ================================================ Admin CONTROL Start============================================================== */


});