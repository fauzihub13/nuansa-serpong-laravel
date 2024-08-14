<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    //
    public function index(){
        $rooms = Room::all();
        return response()->json([
            'status'=>'success',
            'data'=>$rooms,
        ], 200 );
    }
}
