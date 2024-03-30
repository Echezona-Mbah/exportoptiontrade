<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\WelcomeEmail;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use RealRashid\SweetAlert\Facades\Alert;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */

     public function store(Request $request)
     {
         try {
             $request->validate([
                 'name' => ['required', 'string', 'max:255'],
                 'lastname' => ['required', 'string', 'max:255'],
                 'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
                 'password' => ['required'],
                 'wallet' => ['required', 'string', 'max:255'],
                 'quesion' => ['required', 'string', 'max:255'],
                 'referral_url' => 'url',
             ]);

             $referralUrl = $request->input('referral_url');
        $referralQueryParams = parse_url($referralUrl, PHP_URL_QUERY);
        parse_str($referralQueryParams, $queryParameters);
        $referralCode = isset($queryParameters['ref']) ? $queryParameters['ref'] : null;

     
             $user = User::create([
                 'name' => $request->name,
                 'lastname' => $request->lastname,
                 'email' => $request->email,
                 'password' => Hash::make($request->password),
                 'bitcoin' => $request->wallet,
                 'quesion' => $request->quesion,
                 'ref' => $referralCode,
             ]);
     
             Mail::to($user->email)->send(new WelcomeEmail($user));
     
             Alert::success('Success', 'Register was successful.')->showConfirmButton('OK');
         } catch (ValidationException $e) {  
             $errorMessage = 'Please fill in all required fields.';
             Alert::error('Error', $errorMessage)->showConfirmButton('OK');
     
             return redirect()->back()->withInput()->withErrors($e->validator->errors());
         } 
     
         event(new Registered($user));
         Auth::login($user);
     
         return redirect(RouteServiceProvider::HOME);
     }

}
