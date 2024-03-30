<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\User;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AllWithdrawController extends Controller
{
    public function allWithdraw(){
        $withdrawals = Withdrawal::all();
        return view('admin.allWithdrawal',compact('withdrawals'));
    }

    public function confirm($id)
    {
        $withdrawal = Withdrawal::findOrFail($id);
        $userId = $withdrawal->user_id;
        $amount = $withdrawal->amount;
        //dd($Refemail);die();
        $withdrawal->update(['status' => 'confirmed']);
        $user = User::where('id',$userId)->first();
        $balance = $user->balance;
        $email = $user->email;
        $mainBalance = $balance - $amount ;
        $user->update(['balance' => $mainBalance]);
  // Update all deposits for the user
  $deposits = Deposit::where('user_id', $userId)->get();

  $numDeposits = $deposits->count();

  if ($numDeposits > 0) {
      $amountPerDeposit = $amount / $numDeposits;

      foreach ($deposits as $deposit) {
          $depositAmount = $deposit->amount;
          $updatedDepositAmount = $depositAmount - $amountPerDeposit;

          $deposit->update(['amount' => $updatedDepositAmount]);
      }
  }
    
        Alert::success('Success', 'withdrawal confirmed successfully.')->showConfirmButton('OK');
        return redirect()->route('admin.allWithdraw');
    }


    public function destroy(Withdrawal $withdrawal)
    {
        $withdrawal->delete();

        Alert::success('Success', 'withdrawal deleted successfully.')->showConfirmButton('OK');
        return redirect()->route('admin.allWithdraw');
    }

}
