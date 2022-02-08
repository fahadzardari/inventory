<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    
    function index(){
        $users = User::all();
        return Inertia::render('User/UserDashboard',["users" => $users]);

    }
    function list(){
        return Inertia::render('User/UserItemsList');
    }
}
