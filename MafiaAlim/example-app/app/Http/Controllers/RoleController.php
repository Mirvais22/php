<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function GetAllRounds() {    
        $rooms = Role::all();
        return $rooms;
    }

    public function GetRoundById($id){
        $room = Role::find($id);
        if($room)
            return $room;
        else
            return "Was not found";
    }

    public function CreateRound(Request $request){
        $room = new Role();

        $room->save();
        return $room;
    }

    public function UpdateRound(Request $request, $id){
        $room = Role::find($id);
        
        $room->update();
        $room->save();
        return $room;
    }

    public function DeleteRoom($id){
        return Role::whereId($id)->delete();
    }
}
