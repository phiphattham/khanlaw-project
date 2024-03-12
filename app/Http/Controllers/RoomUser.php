<?php

namespace App\Http\Controllers;

use App\Models\room;
use Illuminate\Http\Request;

class RoomUser extends Controller
{
    /**
     * แสดงรายการห้องพักทั้งหมด
     */
    public function all()
    {
        $rooms = room::paginate(4);
        return view('page.room.room-list', ["rooms" => $rooms]);
    }

    /**
     * แสดงรายการเต็นท์กระโจม
     */
    public function tent()
    {
        $rooms = room::where('type', 'tent')->paginate(4);
        return view('page.room.room-tent', ['rooms' => $rooms]);
    }

    /**
     * แสดงรายการ Hazel
     */
    public function hazel()
    {
        $rooms = room::where('type', 'hazel')->paginate(4);
        return view('page.room.room-hazel', ['rooms' => $rooms]);
    }

    /**
     * แสดงรายการ Holly
     */
    public function holly()
    {
        $rooms = room::where('type', 'holly')->paginate(4);
        return view('page.room.room-holly', ['rooms' => $rooms]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
