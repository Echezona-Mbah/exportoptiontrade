<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    public function profile(){
        $users = auth()->user();
        return view('users.profile',['users' => $users]);
    }

    public function updateProfile(Request $request)
{
    try {
        $user = auth()->user();

        $user->name = $request->input('name');
        $user->lastname = $request->input('lastname');
        $user->wallet = $request->input('wallet');

        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        $user->save();

        Alert::success('Success', 'Profile updated successfully.')->showConfirmButton('OK');
    } catch (\Exception $e) {

        Alert::error('Error', 'An error occurred. Please try again.')->showConfirmButton('OK');
    }

    return redirect()->back();
}

}
