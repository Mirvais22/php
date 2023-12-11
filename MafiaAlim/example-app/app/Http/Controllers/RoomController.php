<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function GetAllRooms() {    
        $rooms = Room::all();
        return $rooms;
    }

    public function GetRoomById($id){
        $room = Room::find($id);
        if($room)
            return $room;
        else
            return "Was not found";
    }

    public function CreateRoom(Request $request){
        $room = new Room();

        $room->save();
        return $room;
    }

    public function UpdateRoom(Request $request, $id){
        $room = Room::find($id);
        
        $room->update();
        $room->save();
        return $room;
    }

    public function DeleteRoom($id){
        return Room::whereId($id)->delete();
    }
}
