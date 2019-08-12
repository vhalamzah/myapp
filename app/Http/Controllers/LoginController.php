<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\User;
use App\Models\user_roles;
use Tests\Unit\ExampleTest;
class LoginController extends Controller
{
//    public function login(Request $request){
//
//        if(Auth::attempt([
//            'email'=> $request->email,
//            'password'=> $request->password
//        ])){
//
//            $user=User::Where('email',$request->email)->first();
//            $admin=Auth::user()->user_role;
//
//            if($admin->level==1){
//                return redirect()->route('admin');
//
//            }else if($admin==2){
//
//                return redirect(url('user'));
//
//            }else if($admin==3){
//
//                return redirect(url('chef'));
//
//            }else if($admin==4){
//                return redirect()->route('delivery');
//
//            }else{
//                echo "Error";
//                //send back with exception message
//                // return redirect()->rou->with('email', 'Product successfully Updated.');
//                //return redirect()->route('login')->with('error', 'Invalid Login Credentials');
//                //return redirect(url('login'))->with('error', 'Invalid Login Credentials');
//            }
//
//
//        }else{
//            echo "Error";
//            //return redirect(url('login'))->with('error', 'Invalid Login Credentials');
//        }
//
//    }

    public function check_user(Request $request){
        if(Auth::attempt([
            'email'=> $request->email,
            'password'=> $request->password
        ])){

            $user=User::Where('email',$request->email)->first();
            $admin=Auth::user()->user_role;

            if($admin==1){
                return 'admin';

            }else if($admin==2){

                return 'user';

            }else if($admin==3){

                return 'chef';

            }else if($admin==4){

                return 'delivery';

            }else{
                return "Username or Password Incorrect";
                //send back with exception message
                // return redirect()->rou->with('email', 'Product successfully Updated.');
                //return redirect()->route('login')->with('error', 'Invalid Login Credentials');
                //return redirect(url('login'))->with('error', 'Invalid Login Credentials');
            }


        }else{
            return "Username or Password Incorrect";
            //return redirect(url('login'))->with('error', 'Invalid Login Credentials');
        }
    }


}