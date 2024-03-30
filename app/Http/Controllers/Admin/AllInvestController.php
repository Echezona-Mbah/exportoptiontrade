<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use Illuminate\Http\Request;

class AllInvestController extends Controller
{
    public function allInvest(){
        $invests = Deposit::where('status','confirmed')->get();
        return view('admin.allInvestment',compact('invests'));
    }
}
