<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Admin.Dashboard');
    }

    public function edit(){

         return view('Admin.edit');

    }

    public function AdminData(){
        $edit = User::find(Auth::user()->id);
        return json_encode([
        'name'=>$edit->name,
        'email'=>$edit->email,
        ]);
    }

}
