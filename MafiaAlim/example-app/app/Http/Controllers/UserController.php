<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function GetAllUsers() {    
        $users = User::all();
        return $users;
    }

    public function GetUserById($id){
        $user = User::find($id);
        if($user)
            return $user;
        else
            return "Was not found";
    }

    public function CreateUser(Request $request){
        $user = new User();
        $user->userName = $request->userName;
        $user->password = $request->userName;
        $user->wins = 0;
        $user->loses = 0;
        $user->status = $request->status;

        $user->save();
        return $user;
    }

    public function UpdateUser(Request $request, $id){
        $user = User::find($id);
        $user->userName = $request->userName;
        $user->password = $request->password;
        $user->wins = $request->wins;
        $user->loses = $request->loses;
        $user->status = $request->status;
        $user->update();
        $user->save();
        return $user;
    }

    public function DeleteUser($id){
        return User::whereId($id)->delete();
    }

}
