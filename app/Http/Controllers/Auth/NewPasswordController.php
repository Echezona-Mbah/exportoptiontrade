<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use RealRashid\SweetAlert\Facades\Alert;

class NewPasswordController extends Controller
{
    /**
     * Display the password reset view.
     */
    public function create(Request $request): View
    {
        return view('auth.reset-password', ['request' => $request]);
    }

    /**
     * Handle an incoming new password request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'token' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ], [
            'token.required' => 'The token field is required.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please provide a valid email address.',
            'password.required' => 'The password field is required.',
            'password.confirmed' => 'The password confirmation does not match.',
        ]);
    
        // Check for empty fields
        foreach ($request->all() as $key => $value) {
            if (empty($value)) {
                Alert::error('Error', 'All fields are required. Please fill in all the fields.')->showConfirmButton('OK');
                return back()->withInput($request->only('email'))->withErrors(['email' => 'All fields are required.']);
            }
        }
    
        // Password reset logic
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($request->password),
                    'remember_token' => Str::random(60),
                ])->save();
    
                event(new PasswordReset($user));
            }
        );
    
        // Redirect with a specific SweetAlert message
        if ($status == Password::PASSWORD_RESET) {
            Alert::success('Success', 'Password reset successfully. You can now log in.')->showConfirmButton('OK');
        } else {
            Alert::error('Error', 'Unable to reset password. Please try again.')->showConfirmButton('OK');
        }
    
        // Redirect to the intended URL or home
        return redirect()->route('login');
    }

}
