<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    
    public function save(Request $request){
        // dd($request->all());
        $appointment = new Appointment([
            'Name' => $request->get('name'),
            'Age' => $request->get('age'),
            'Timing' => $request->get('time'),
            'Number' => $request->get('num')
        ]);
        $appointment->save();
        return redirect()->back();
    }
}
