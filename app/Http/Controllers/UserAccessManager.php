<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use PragmaRX\Countries\Package\Countries;
use App\Models\User;
use App\Models\School; 
use App\Models\Address; 


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
        
        // validate request
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
        // Get Values
        $school_name=$request->schoolname;
        $first_name=$request->fname;
        $last_name=$request->lname;
        $date_of_birth=$request->dateofbirth;
        $gender=$request->gender;
        $postal_address=$request->postaladdress;
        $gps_address=$request->gps;
        $country=$request->country;
        // $region=$request->region;

       //Update User
       $update=User::where('id',Auth::user()->id)->update([
           'gender' => $gender,
           'date_of_birth' => $date_of_birth, 
           'role' => 'school', 
       ]);

       //Store Address 
       $store_address=new Address; 
       $store_address->postal_address=$postal_address; 
       $store_address->gps_address=$gps_address; 
       $store_address->country=$country; 
    //    $store_address->region=$region; 
       $store_address->save(); 
       $address_id=$store_address->id;
        // save record for school
        
        $store = new School; 
        $store->school_name=$school_name;
        $store->user_id=Auth::user()->id; 
        $store->created_by=Auth::user()->id;
        $store->date_registered=date('d-m-Y');
        $store->postal_address_id=$address_id; 
        $store->save(); 
        $school_id=$store->id; 

        $update_address=Address::where('id', $address_id)->update([
            'school_id'=>$school_id,
        ]);

        // proceed to dashboard
        
        return redirect('dashboard');
        
    }


}