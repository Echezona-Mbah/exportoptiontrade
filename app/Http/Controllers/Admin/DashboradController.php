<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\User;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DashboradController extends Controller
{
    public function admin(){
        $confirmedDepositsCount = Deposit::where('status', '=', 'confirmed')->count();
        $allUsersCount = User::all()->count();
        $userNames = User::all();
        $totalBalance = User::sum('balance');
        $withdraw = Withdrawal::all();
        $recentWithdrawals = Withdrawal::latest()->take(4)->get();
        $recentDeposit = Deposit::latest()->take(4)->get();
        return view('admin.dashborad', compact(
            'confirmedDepositsCount','allUsersCount',
            'userNames','totalBalance','recentWithdrawals','recentDeposit'
        ));
    }

    public function allUser(){
        $userNames = User::all();
        return view('admin.allUser',compact('userNames'));
    }

    public function edit(User $user)
    {
        return view('admin.editUser', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|email',
            'wallet' => 'required|string',
            'balance' => 'required|string',
            'refamount' => 'required|string',
        ]);

        $user->update($request->all());

        Alert::success('Success', 'User updated successfully.')->showConfirmButton('OK');

        return redirect()->route('admin.allUser');
    }

    public function destroy(User $user)
    {
        $user->delete();

        Alert::success('Success', 'User deleted successfully.')->showConfirmButton('OK');
        return redirect()->route('admin.allUser');
    }
    
}
