<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PlayerInGame;

class PlayerInGameController extends Controller
{
    public function GetAllRounds() {    
        $rooms = PlayerInGame::all();
        return $rooms;
    }

    public function GetRoundById($id){
        $room = PlayerInGame::find($id);
        if($room)
            return $room;
        else
            return "Was not found";
    }

    public function CreateRound(Request $request){
        $room = new PlayerInGame();

        $room->save();
        return $room;
    }

    public function UpdateRound(Request $request, $id){
        $room = PlayerInGame::find($id);
        
        $room->update();
        $room->save();
        return $room;
    }

    public function DeleteRoom($id){
        return PlayerInGame::whereId($id)->delete();
    }
}
