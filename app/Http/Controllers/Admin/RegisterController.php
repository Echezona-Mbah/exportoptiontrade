<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{

    public function register(){
        return view('admin.register');
    }

    public function adminregister(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
    
        $register = new Admin([

            'username' => $username ,
            'password' =>  $password,
        ]);
    
        $register->save();
    
        return redirect()->route('admin/login');
    }

    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        
        // $credentials = $request->only('username', 'password');
       // dd($credentials);die();

       $admin = Admin::where('username', $username)->where('password', $password)->first();


        if ($admin) {
            // Authentication passed
            return redirect()->route('admin/dashboard');
            Alert::success('Success', 'login was successful.')->showConfirmButton('OK');
        
        }

        $errorMessage = 'Invalid credentials.';
        Alert::error('Error', $errorMessage)->showConfirmButton('OK');
        return redirect()->back();
    }
}
