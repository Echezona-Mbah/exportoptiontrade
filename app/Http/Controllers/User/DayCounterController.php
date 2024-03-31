<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DayCounterController extends Controller
{
    //

    public function index()
    {
        $targetDate = Carbon::create(2023, 12, 31);
        $today = Carbon::now();
        $daysRemaining = $today->diffInDays($targetDate);

        return view('counter', compact('daysRemaining'));
    }

    public function counter(Request $request){

        $counter = Deposit::where('status','=', 'confirmed')->increment('day_counter', 1);

        $Swift = Deposit::where('plan','=', 'Basic PLAN')->get();
        foreach ($Swift as $Swifts) {
        $amount =  $Swifts->amount;
        $id =  $Swifts->id;
        $tet =  $Swifts->tet;
        $day_counter =  $Swifts->day_counter;
        $interest =  $Swifts->interest;
        $newValue = ($amount / 100) * 10;
        $newinstrest = $tet + $newValue;
        $newamount = $amount + $newValue;
        $Total = $amount + $tet;
       //  print_r($tet);die();
        if($day_counter == 1 && $tet == 0){
            $update = Deposit::where('status','=', 'confirmed')->where('id','=', $id)->update(['amount' => $newamount,'tet' => $newValue ]);
        }else{
            $update = Deposit::where('status','=', 'confirmed')->where('id','=', $id)->update(['amount' => $Total ]);

        }
    }


        $Medial = Deposit::where('plan','=', 'GOLD PLAN')->get();
        foreach ($Medial as $Medials) {
        $amount =  $Medials->amount;
        $id =  $Medials->id;
        $day_counter =  $Medials->day_counter;
        $interest =  $Medials->interest;
        $newValue = ($amount / 100) * 30;
        $newinstrest = $tet + $newValue;
        $newamount = $amount + $newValue;
        $Total = $amount + $tet;
       //  print_r($tet);die();
        if($day_counter == 1 && $tet == 0){
            $update = Deposit::where('status','=', 'confirmed')->where('id','=', $id)->update(['amount' => $newamount,'tet' => $newValue ]);
        }else{
            $update = Deposit::where('status','=', 'confirmed')->where('id','=', $id)->update(['amount' => $Total ]);

        }


    }

        $Brisk = Deposit::where('plan','=', 'MASTER PLAN')->get();
        foreach ($Brisk as $Brisks) {
        $amount =  $Brisks->amount;
        $id =  $Brisks->id;
        $day_counter =  $Brisks->day_counter;
        $interest =  $Brisks->interest;
        $newValue = ($amount / 100) * 45;
        $newinstrest = $tet + $newValue;
        $newamount = $amount + $newValue;
        $Total = $amount + $tet;
       //  print_r($tet);die();
        if($day_counter == 1 && $tet == 0){
            $update = Deposit::where('status','=', 'confirmed')->where('id','=', $id)->update(['amount' => $newamount,'tet' => $newValue ]);
        }else{
            $update = Deposit::where('status','=', 'confirmed')->where('id','=', $id)->update(['amount' => $Total ]);

        }


    }

    $Vertex = Deposit::where('plan','=', 'PREMIUM PLAN')->get();
        foreach ($Vertex as $Vertexs) {
        $amount =  $Vertexs->amount;
        $id =  $Vertexs->id;
        $day_counter =  $Vertexs->day_counter;
        $interest =  $Vertexs->interest;
        $newValue = ($amount / 100) * 60;
        $newinstrest = $tet + $newValue;
        $newamount = $amount + $newValue;
        $Total = $amount + $tet;
       //  print_r($tet);die();
        if($day_counter == 1 && $tet == 0){
            $update = Deposit::where('status','=', 'confirmed')->where('id','=', $id)->update(['amount' => $newamount,'tet' => $newValue ]);
        }else{
            $update = Deposit::where('status','=', 'confirmed')->where('id','=', $id)->update(['amount' => $Total ]);

        }
    }

    $Vertex = Deposit::where('plan','=', 'VIP PLAN')->get();
        foreach ($Vertex as $Vertexs) {
        $amount =  $Vertexs->amount;
        $id =  $Vertexs->id;
        $day_counter =  $Vertexs->day_counter;
        $interest =  $Vertexs->interest;
        $newValue = ($amount / 100) * 75;
        $newinstrest = $tet + $newValue;
        $newamount = $amount + $newValue;
        $Total = $amount + $tet;
       //  print_r($tet);die();
        if($day_counter == 1 && $tet == 0){
            $update = Deposit::where('status','=', 'confirmed')->where('id','=', $id)->update(['amount' => $newamount,'tet' => $newValue ]);
        }else{
            $update = Deposit::where('status','=', 'confirmed')->where('id','=', $id)->update(['amount' => $Total ]);

        }
    }



    $user = auth()->user();
    $userId = $user->id;
    $depositSum = Deposit::where('user_id', $userId)->sum('amount');
    $user->balance = $depositSum;
    $user->save();



    }

}
