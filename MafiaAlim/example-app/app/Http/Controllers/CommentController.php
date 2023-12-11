<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function GetAllRounds() {    
        $rooms = Comment::all();
        return $rooms;
    }

    public function GetRoundById($id){
        $room = Comment::find($id);
        if($room)
            return $room;
        else
            return "Was not found";
    }

    public function CreateRound(Request $request){
        $room = new Comment();

        $room->save();
        return $room;
    }

    public function UpdateRound(Request $request, $id){
        $room = Comment::find($id);
        
        $room->update();
        $room->save();
        return $room;
    }

    public function DeleteRoom($id){
        return Comment::whereId($id)->delete();
    }
}
