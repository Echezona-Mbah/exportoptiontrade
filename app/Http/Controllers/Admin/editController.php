<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\ValidationException;

class editController extends Controller
{
    public function editWallet(){
        $wallets = wallet::all();
        return view('admin.editWallet',compact('wallets'));
    }

    public function updateWallet(Request $request)
    {
        try {
            $request->validate([
                'wallet.*' => 'required',
            ]);
    
            if ($request->has('wallet') && is_array($request->wallet)) {
                foreach ($request->wallet as $walletId => $walletValue) {
                    $wallet = Wallet::findOrFail($walletId);
                    $wallet->update(['wallet' => $walletValue]);
                }
    
                Alert::success('Wallets', 'wallet updated successfully.')->showConfirmButton('OK');
                return redirect()->route('admin.editWallet');
            } else {
                throw new ValidationException('Invalid request data.');
            }
        } catch (\Illuminate\Validation\ValidationException $e) {
            $validationErrors = $e->validator->errors()->all();
            return redirect()->route('admin.editWallet')->withErrors($validationErrors);
        }
    }

    public function logout()
{
    Auth::logout();

    return redirect('/'); // Redirect to the home page or any other desired location
}
    
    
    
    
}
