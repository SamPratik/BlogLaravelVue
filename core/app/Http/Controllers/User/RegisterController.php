<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Validator;

class RegisterController extends Controller
{
    public function usernames() {
        $usernames = User::select('username')->get();
        return $usernames;
    }

    public function register(Request $request) {
        // Validation rules...
        $rules = [
            'username' => 'required|unique:users',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'password' => 'required|password_confirmation',
        ];
        // Creting validator instance...
        $validator = Validator::make($request->all(), $rules);

        // If validation fails or validation fails...
        if($validator->fails()) {
            // adding an extra field 'error'...
            $validator->errors()->add('error', 'true');

            return response()->json($validator->errors());
        }

        $user = new User;
        $user->username = $request->username;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->phone = $request->phone;
        $user->save();
        return "success";
    }
}
