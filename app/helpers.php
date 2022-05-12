<?php

use App\Models\User;
use App\Models\Student;

//Helper Functions Here

if (!function_exists('getTotalFemales')) {

    function getTotalFemales($class_name)
    {
        return $females = Student::where('class', $class_name)->where('gender', 'female')->sum();
    }
}

if (!function_exists('getTotalStudents')) {

    function getTotalStudents($class_name)
    {
        return $males = Student::sum();
    }
}

if (!function_exists('getTotalMales')) {

    function getTotalMales($class_name)
    {
        return $males = Student::where('class', $class_name)->where('gender', 'male')->sum();
    }
}


if (!function_exists('getFirstName')) {

    function getFirstName($attribute)
    {
        try {

            $attribute = strtolower($attribute);
            $response = explode(' ', trim($attribute))[0];

            return ucfirst($response);
        } catch (exception $e) {

            return '!ErrorFirstName!';
        }
    }
}

if (!function_exists('getLastName')) {

    function getLastName($attribute)
    {
        try {

            $attribute = strtolower($attribute);
            $response = explode(' ', trim($attribute))[1];

            return ucfirst($response);
        } catch (exception $e) {

            return '!ErrorLastName!';
        }
    }
}

if (!function_exists('getGender')) {

    function getGender($user_id)
    {
        try {

            $gender = User::find($user_id)->gender;

            switch ($gender) {
                case '':

                    return '';

                    break;

                case 'none':
                    return 'Prefer not to say';
                    break;
                default:
                    return ucfirst($gender);
                    break;
            }

            //code...
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}


if (!function_exists('themeSwitch')) {
    function themeSwitch($version)
    {

        // Set Theme Mode [light or dark] based on User Preferences or System Color Mode

        $color_scheme = isset($_COOKIE["color_scheme"]) ? $_COOKIE["color_scheme"] : false;
        if ($color_scheme === false) $color_scheme = 'light';

        if (isset($color_scheme) && $color_scheme == 'dark') {

            $version = 'dark-mode';
        } else {

            switch ($version) {

                case "light":
                    $version = "theme-cyan";

                    break;

                case "dark":
                    $version = "dark-mode";

                    break;

                default: {

                        $version = "theme-cyan";
                    }
            }
        }

        return $version;
    }
}


if (!function_exists('getUserRole')) {
    function getUserRole()
    {

        try {
            $role = Auth::user()->role;
            return ucFirst($role);
        } catch (exception $e) {
            $error = $e->getmessage;
            return $error;
        }
    }
}

if (!function_exists('getDay')) {
    function getDay($day)
    {
        $days = ['Monday' => 1, 'Tuesday' => 2, 'Wednesday' => 3, 'Thursday' => 4, 'Friday' => 5, 'Saturday' => 6, 'Sunday' => 7];

        $today = new \DateTime();
        $today->setISODate((int)$today->format('o'), (int)$today->format('W'), $days[ucfirst($day)]);
        return $today;
    }
}



if (!function_exists('getStudentName')) {
    function getStudentName($id)
    {
        $student = User::find($id)->name;
        if ($student) {

            return $student;
        } else {
            return "Error";
        }
    }
}

if (!function_exists('getStudentPhoto')) {
    function getStudentPhoto($id)
    {
        $photo = Student::where('student_id', $id)->first()->student_photo_url;
        if (is_null($photo)) {

            return 'user.png';
        }
        if ($photo) {
            return $photo;
        } else {
            return "Error";
        }
    }
}
