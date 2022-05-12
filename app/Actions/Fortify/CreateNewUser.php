<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        // AutoGenerate School ID

        $school_id=IdGenerator::generate(['table' => 'users', 'field'=>'school_id', 'length' => 12, 'prefix' => 'sch_'.date('y').'_']);
        
        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            //school_id
            'school_id' =>$school_id,
            //set default theme to light version 

            'theme'=> 'light', 

            //configure default user role 

            'role'=> 'onboarding', 

        ]);

    }
}
