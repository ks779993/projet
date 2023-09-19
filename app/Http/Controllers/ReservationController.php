<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function reservationPage($id){

        $car =Car::find($id);
        return view('reservation', compact('car'));
    }

    public function traiteReservation(Request $request)
    {
      $test =  $request->validate([
         'nombre_place' => 'required|integer',
         'car_id' => 'required|',
       
        ]);

  

        Reservation::create([
            'user_id' => auth()->user()->id,
            'car_id'=>$request->car_id,
            'nombre_place'=>$request->nombre_place,    
        ]);

        return('ok');
        }
}
