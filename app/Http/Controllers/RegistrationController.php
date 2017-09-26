<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mail\Welcome;
use App\Http\Requests\RegistrationForm;
use Mail;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('registration.create');
    }
/*
    public function store(RegistrationRequest $request)
    {

    	$user = User::create([
    		'name' => $request->name,
    		'email'	=> $request->email,
    		'password'	=> bcrypt($request->password)
    	]);

    	auth()->login($user);

        Mail::to($user)->send(new Welcome($user));

    	return redirect()->home();
    }*/

    public function store(RegistrationForm $form)
    {
        $form->persist();

        session()->flash('message', 'Thanks so much for singing up!');

        return redirect()->home();
    }
}
