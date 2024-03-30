<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\Plan;
use App\Models\wallet;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    public function deposit(){
        $plans = Plan::all();
        return view('users.deposit',['plans' => $plans]);
    }

    public function invest($id){
        $plan = Plan::find($id);
        //dd($plan);die();
        $user =auth()->User()->email;
        return view('users.invest',[
            'user' => $user,
            'plan' => $plan
        ]);
    }

    public function submitInvest(Request $request)
{
    $userEmail = $request->input('email');
    $plan = $request->input('plan');
    $amount = $request->input('amount');
    $details = $request->input('details');
    $method = $request->input('method');


    $deposit = new Deposit([
        'email' => $userEmail,
        'plan' => $plan,
        'amount' => $amount,
        'description' => $details,
        'method' => $method,
        'user_id' => auth()->user()->id,
        'ref' => auth()->user()->ref,
    ]);

    $deposit->save();

    return redirect()->route('plan');
}


public function plan(){
    $wallet = wallet::all();
    $user = auth()->user();
    $lastDeposit = $user->deposits()->latest()->first();
    return view('users.plan',[
        'lastDeposit' => $lastDeposit,
        'wallet' => $wallet
    ]);
}

public function depositTable(){
    $user = auth()->user();
    $deposits = $user->deposits()->get();
    return view('users.depositTable',['deposits' => $deposits]);
}




}
