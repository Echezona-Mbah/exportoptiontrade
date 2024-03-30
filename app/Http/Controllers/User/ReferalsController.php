<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReferalsController extends Controller
{
    public function referals()
    {
        $userEmail = auth()->user()->email;
        $refamount = auth()->user()->refamount;
        $referralsCount = User::where('ref', $userEmail)->count();
    
        return view('users.referals', [
            'referralsCount' => $referralsCount,
            'refamount' => $refamount
        ]);
    }


    public function referalslink()
    {
        $userEmail = auth()->user()->email;
        return view('users.referalslink', [
            'userEmail' => $userEmail,
        ]);
    }

    public function logout()
    {
        $this->guard()->logout();

        return redirect('/');
    }

}
