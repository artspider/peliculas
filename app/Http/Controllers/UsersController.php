<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    function index(){
        $users = User::all();
        return response()->json($users, 200);
    }

    function showOneUser(Request $request, $id){
        $users = User::find($id);
        return response()->json($users, 200);
    }
}


