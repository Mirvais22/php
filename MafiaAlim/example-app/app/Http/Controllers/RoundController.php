<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Round;

class RoundController extends Controller
{
    public function GetAllRounds() {    
        $rooms = Round::all();
        return $rooms;
    }

    public function GetRoundById($id){
        $room = Round::find($id);
        if($room)
            return $room;
        else
            return "Was not found";
    }

    public function CreateRound(Request $request){
        $room = new Round();

        $room->save();
        return $room;
    }

    public function UpdateRound(Request $request, $id){
        $room = Round::find($id);
        
        $room->update();
        $room->save();
        return $room;
    }

    public function DeleteRoom($id){
        return Round::whereId($id)->delete();
    }
}
