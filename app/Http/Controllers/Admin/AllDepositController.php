<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AllDepositController extends Controller
{
    public function allDeposit(){
        $deposits = Deposit::all();
        return view('admin.allDeposit',compact('deposits'));
    }
    public function edit(Deposit $deposit)
    {
        return view('admin.editDeposit', compact('deposit'));
    }

    public function update(Request $request, Deposit $deposit)
    {
        $request->validate([
            'plan' => 'required|string',
            'email' => 'required|email',
            'amount' => 'required|string',
            'description' => 'required|string',
            'method' => 'required|string',
            'ref' => 'required|string',
        ]);

        $deposit->update($request->all());

        Alert::success('Success', 'Deposit updated successfully.')->showConfirmButton('OK');

        return redirect()->route('admin.allDeposit');
    }


    public function destroy(Deposit $deposit)
    {
        $deposit->delete();

        Alert::success('Success', 'deposit deleted successfully.')->showConfirmButton('OK');
        return redirect()->route('admin.allDeposit');
    }


    public function confirm($id)
    {
        $deposit = Deposit::findOrFail($id);
        $userId = $deposit->user_id;
        $amount = $deposit->amount;
        $Refemail = $deposit->ref ?? null;
        //dd($Refemail);die();
        $plan = $deposit->plan;
        $deposit->update(['status' => 'confirmed']);
        $user = User::where('id',$userId)->first();
        $balance = $user->balance;
        $email = $user->email;
        $mainBalance = $balance + $amount ;
        $user->update(['balance' => $mainBalance]);
        //ref
        $planNames = ['Basic PLAN', 'GOLD PLAN', 'MASTER PLAN', 'PREMIUM PLAN', 'VIP PLAN'];        
        $plans = Plan::whereIn('plan', $planNames)
            ->where('plan', $plan)
            ->first();
   //     dd($plans);die();
    // Check if $plans is not null before accessing its properties
    if ($plans) {
        $percent = $plans->percent;
        $mainPercent = ($amount / 100) * $percent;
        $Refuser = User::where('email', $Refemail)->first();

        // Check if $Refuser is not null before accessing its properties
        if ($Refuser) {
            $refamount = $Refuser->refamount;
            $mainRef = $refamount + $mainPercent;
            $Refuser->update(['refamount' => $mainRef]);

            Alert::success('Success', 'Deposit confirmed successfully.')->showConfirmButton('OK');
            return redirect()->route('admin.allDeposit');
        } else {
            // Handle the case where $Refuser is null (no user with the specified email)
            Alert::error('Error', 'User with specified email not found.')->showConfirmButton('OK');
            return redirect()->route('admin.allDeposit');
        }
    } else {
        // Handle the case where $plans is null
        Alert::error('Error', 'Plan not found.')->showConfirmButton('OK');
        return redirect()->route('admin.allDeposit');
    }
    }
    
}
