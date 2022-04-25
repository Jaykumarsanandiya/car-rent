<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function insertLead(Request $request){
  
       
       
        $lead = new Lead;
        $lead->fullName = $request->fullName;
        $lead->email = $request->email;
        $lead->phone = $request->phone;
        $lead->carName =  $request->carName;
        $lead->charge =  $request->charge;
        $lead->save();
       
       
        return redirect('/fleet')->with('status',  $lead->fullName .' ,  Our Car Dealer will call for ' . $lead->carName );
    }
}
