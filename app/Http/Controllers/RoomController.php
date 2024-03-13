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
        $rooms = Room::all();
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
            'image'=> 'required',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(room $room)
    {
        //
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
}
