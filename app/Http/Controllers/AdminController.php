<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Car;
use App\Models\Lead;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminLogin');
     
    }

  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $email =  $request->post('email');
        $password = $request->post('password');

        $result = Admin::where(['email' => $email ,'password' => $password])->get();
       if( isset( $result[0]->id)){
            $request->session()->put('ADMIN_LOGIN',TRUE);
            $request->session()->put('ADMIN_ID',$result['0']->id);
            return redirect('dashboard');
       }
       else{
           $request->session()->flash("error" , "Credentials not correct");
           return redirect('admin');
       }
    }

    public function dashboard(){
          $leads = Lead::orderBy('created_at', 'desc')->get();
        //   dd($leads);
        // return response()->json(["lead" => $leads]);
        return view('adminDashboard',["leads" => $leads]);
    }

    public function updateStatus($id){
       
        $lead = Lead::find($id); 
        if($lead->status == 0){
            $lead->status = 1; 
        }
        else{
            $lead->status = 0;
        }
      

        $lead->save(); 
        return redirect()->back();
    }


    public function contact(){
        $contacts = Contact::orderBy('created_at', 'desc')->get();
      
        return view('adminDashboardContact',["contacts" => $contacts]);
    }

    public function addCar(Request $request){
    
        $ImageName = time() . '-' . $request->model . '.' . $request->image_url->extension();    
        $car =    new  Car;
        $car->model = $request->model;
        $car->company = $request->company;
        $car->transmission = $request->transmission;
        $car->fuel = $request->fuel;
        $car->seating = $request->seating;
        $car->charge = $request->charge;
        $car->image_url = $ImageName;
        $car->dealer_location = $request->dealer_location;
        $request->image_url->move(public_path('car-rental/images'), $ImageName);
     
        $car->save();
        
        return redirect()->back()->with('status', $car->model  .' ,  Registered' );


    }

    public function deleteCar($id){
        $carDelete = Car::find($id);

        $carDelete->delete();
        return redirect()->back()->with('status', $carDelete->model  .' ,  Deleted' );
    }

    public function  showCar(){
        $cars = Car::all();
        return view('adminShowAllCar', ["cars" => $cars]);
    }
}
