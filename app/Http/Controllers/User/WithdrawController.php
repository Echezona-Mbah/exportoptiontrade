<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class WithdrawController extends Controller
{
    public function withdraw(){
        $user = auth()->user()->email;
        return view('users.withdrawal',['user' => $user]);
    }

    public function submitWithdraw(Request $request)
    {
        try {
            $userEmail = $request->input('email');
            $amount = $request->input('amount');
            $details = $request->input('details');
            $wallet = $request->input('wallet');
            $method = $request->input('method');

            $user = User::where('email', $userEmail)->first();
            $userBalance = $user->balance;
    
            if ($userBalance < $amount) {
                Alert::error('Error', 'Insufficient balance.')->showConfirmButton('OK');
                return redirect()->back();
            }
    
            $user->balance -= $amount;
            $user->save();

            $deposit = new Withdrawal([
                'email' => $userEmail,
                'amount' => $amount,
                'description' => $details,
                'method' => $method,
                'wallet' => $wallet,
                'user_id' => $user->id,
            ]);
    
            $deposit->save();
    
            Alert::success('Success', "You have successfully withdrawn £$amount worth of Bitcoin to your wallet!.")->showConfirmButton('OK');
            return redirect()->route('withdrawalTable');
        } catch (\Exception $e) {
            Alert::error('Error', 'An error occurred. Please try again.')->showConfirmButton('OK');
            return redirect()->back();
        }
    }
    
    public function withdrawalTable(){
        $user = auth()->user();
        $withdrawals = $user->withdrawals()->get();
        return view('users.withdrawalTable',['withdrawals' => $withdrawals]);
    }
    
}
