<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function create() {
        return view('registrations.create');
    }

    public function store() {
        //Validate Form Data
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        //Create and Save user to db
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);

        //Login User
        auth()->login($user);

        //Redirect
        return redirect('/posts');
    }
}
