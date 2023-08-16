<?php

namespace App\Http\Controllers\session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginController extends Controller{
    public function index(){
        if(auth()->user()){
            return redirect()->route('home');
        }

        return view('session.login');
    }

    public function store(Request $request){

        dd($request);
    }
}