<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationForm;

use App\User;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
    	
        return view('registration.create');
    
    }

    public function store(RegistrationForm $request)
    {   
        

    	$user = User::create(

            request(['name','email','password'])
        
        );

        auth()->login($user);

        session()->flash('message', 'Registration Successful');

    	return redirect()->home();
    
    }
}
