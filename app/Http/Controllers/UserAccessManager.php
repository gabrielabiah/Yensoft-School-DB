<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use PragmaRX\Countries\Package\Countries;


class UserAccessManager extends Controller
{
    //Manage User Access Privileges

    public function __invoke($dashboard) {

        try {

            $role =Auth::user()->role;
            $roles=['admin', 'school','parent','student','teacher','account', 'superadmin', 'onboarding'];
            $checkrole=in_array($role, $roles);

            switch($checkrole){
                case true:
                    if($role=='superadmin') {
                        return view("dashboards.$dashboard");
                    } else

                     if($role==$dashboard) {

                        
                        $countries=Countries::all();

                         return view("dashboards.$role", compact('countries'));

                    } else abort(403, 'Invalid Request');

                case false: abort(403,'Access Denied');

            }

        }


    catch (exception $e) {

        $error = $e->getmessage();

        if($role=='superadmin'){
            $error = 'Something Went Wrong :(';
        }

    }


    abort(403, "Error: $error");

    }

    public function onboard(Request $request){
        $this->validate($request, [

            'schoolname'    => 'required', 
            'fname'         => 'required', 
            'lname'         => 'required', 
            'dateofbirth'   => 'required', 
            'gender'        => 'required', 
            'country'       => 'required'


        ], [

            'schoolname.required' => 'You need to provide a valid School Name', 
            'fname.required' => 'A valid first name is required', 
            'lname.required' => 'A valid last name is required', 
            'dateofbirth.required'   => 'A valid date of birth is required', 
            'gender.required'   => 'A valid gender information is required', 
            'country.required'   => 'A valid country is required', 

        ]); 
        // validate request
        $school_name=$request->schoolname;
   
        $first_name=$request->fname;
        $last_name=$request->lname;
        $date_of_birth=$request->dateofbirth;
        $gender=$request->gender;
        $postal_address=$request->postaladdress;
        $gps_address=$request->gps;
        $country=$request->country;
        
        // save record 

        
        // proceed to dashboard
        
        return "Yay! 
        $first_name <br>
        $last_name <br>
        $school_name <br>
        $date_of_birth <br>
        $gender <br>
        $postal_address <br>
        $gps_address <br>
        $country <br>
        
        ; Request Received!"; 
        
    }


}