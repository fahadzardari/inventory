<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class LoginController extends Controller
{

    function index(){
        $user = session('user');
        if($user){

                if($user->role == 'admin'){
                    return redirect('/admin');
                }else {
                    return redirect('/user');
                }
        }
        else{
        return Inertia::render('Home');
        }
    }
    function login(Request $request){
      //  return Hash::make('1');
        $user = User::where(['email' => $request->form['email']])->first();
        if($user){
            if(Hash::check($request->form['password'] , $user->password)){
                session(['user' => $user]);
                if($user->role == 'admin')
                    return redirect('/admin');
                else
                    return redirect('/user');
            }
            else{
                return 'User Does not exist';

            }
        }
        else{
            return 'User Does not exist';

        }
    }
    function logout(){
        session(['user' => NULL]);
        return redirect('/');
    }
}
