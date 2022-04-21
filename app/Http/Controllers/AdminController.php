<?php

namespace App\Http\Controllers;

use App\Models\Admin;
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
        return view('admin');
     
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
        return "dashboard";
    }

}
