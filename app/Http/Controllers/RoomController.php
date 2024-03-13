<?php

namespace App\Http\Controllers;

use App\Models\room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::paginate(10);
        // dd($rooms);
        return view('page.admin.manage-room', ['rooms' => $rooms]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // กำหนด validate
        $this->validate($request, [
            'number' => 'integer|required',
            'type' => 'string|required',
            'detail' => 'string|required',
            'price' => 'integer|required',
            'space' => 'string|required',
            'vibe' => 'string|required',
            'maximum' => 'string|required',
            'image' => 'required',
        ]);
    }

    /**
     * แสดงรายละเอียดห้องพัก
     */
    public function show($id)
    {
        $room_detail = room::where('id', $id)->first();
        // dd($room_detail);
        return view('page.room.room-detail', ['room_detail' => $room_detail]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // dd($id);
        $room = room::where('id', $id)->first();
        return view('page.admin.manage-room-edit', ['room' => $room]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, room $room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(room $room)
    {
        //
    }

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
}
