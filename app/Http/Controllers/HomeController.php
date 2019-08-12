<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome.index');
    }
    public function verify_user_role(){

        $user_role=Auth::user()->user_role;
        $user='';
        if($user_role==1){//admin
            return redirect()->route('admin');
        }else if($user_role==2){//Normal User
            return redirect(url('user'));
        }else if($user_role==3){//Chef
            return redirect(url('chef'));
        }
        else if($user_role==4){//Delivery
            return redirect()->route('delivery');
        }
        else{
            return view('welcome.index', ['User'=>$user]);
        }

    }
    public function logout(){
        echo 'logout';
    }
}
