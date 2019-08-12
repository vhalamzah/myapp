<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Models\user_roles;
use DB;
class UserController extends Controller
{
    public function index(){
        $id = Auth::User()->getId();
        $myprofile = DB::select('select * from users where id='.$id);
        return view('user.index',['data'=>$myprofile]);
    }
}
