<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $user = User::all()->count();
        if($user<1){
            $user = new User;
            $user->name = "Admin";
            $user->email = "Admin@fenntech.com";
            $user->password =Hash::make("admin123");
            $user->save();
            return view('LandingPage');
        }
        return view('LandingPage');
    }
}
