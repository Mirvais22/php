<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    public function GetAllRounds() {    
        $rooms = Game::all();
        return $rooms;
    }

    public function GetRoundById($id){
        $room = Game::find($id);
        if($room)
            return $room;
        else
            return "Was not found";
    }

    public function CreateRound(Request $request){
        $room = new Game();

        $room->save();
        return $room;
    }

    public function UpdateRound(Request $request, $id){
        $room = Game::find($id);
        
        $room->update();
        $room->save();
        return $room;
    }

    public function DeleteRoom($id){
        return Game::whereId($id)->delete();
    }
}
