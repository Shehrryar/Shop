<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function index(){
        return view('admin.login');
    }

    public function authenticate(Request $request){

        
        $validater = Validater::make($request->all(),
        [
            'émail' =>'required|email',
            'password'=>'required'
        ]);

        echo $validater;

        if($validater->passes()){

        }
        else{
            return redirect()->route('admin.login')->withErrors($validater)->withInput($request->only('email'));
        }
    }
}
