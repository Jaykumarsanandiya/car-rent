<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Contact;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function listCar(){
        $cars = Car::all();
        return view('index', ["cars" => $cars]);
    }

    public function form($id){
        $car = Car::find($id);
        return view('form', ["car" => $car]);
    }

    public function contact(){
        return view('contact');
    }

    public function about(){
        return view('about');
    }

    public function contactSave(Request $request){
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
       
        $contact->save();
       
       
        return redirect('/fleet')->with('status',  $contact->name .' ,  Our Car Dealer will contact shortly' );
    }
}
