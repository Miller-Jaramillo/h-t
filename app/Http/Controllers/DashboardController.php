<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function create()
    {

        $rooms = Room::with('files')->get();
        return view('dashboard',compact('rooms'));
    }
}
