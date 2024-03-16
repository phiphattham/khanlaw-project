<?php

namespace App\Http\Controllers;

use App\Models\room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::orderby('id', 'desc')->paginate(10);
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
        // $this->validate($request, [
        //     'number' => 'integer|required',
        //     'type' => 'string|required',
        //     'price' => 'integer|required',
        //     'space' => 'string|required',
        //     'vibe' => 'string|required',
        //     'maximum' => 'string|required',
        //     'image' => 'required',
        // ]);
        // dd($request->all());
        $image = $request->file('image');
        $newImageName = time() . '.' . $image->getClientOriginalExtension();
        $path = Storage::putFileAs('public/images', $image, $newImageName);

        $room = new Room();
        $room->number = $request->number;
        $room->type = $request->type;
        $room->price = $request->price;
        $room->space = $request->space;
        $room->vibe = $request->vibe;
        $room->maximum = $request->maximum;
        $room->image = $path;
        $room->save();
        return redirect()->route('manage-room');
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
        return view('page.admin.room-edit', ['room' => $room]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd($id);
        $validate = $request->validate([
            'number' => 'required',
            'type' => 'required',
            'price' => 'required',
            'space' => 'required',
            'vibe' => 'required',
            'maximum' => 'required',
        ]);
        if ($request->file('image')) {
            $image = $request->file('image');
            $newImageName = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('image')->storeAs('public/images', $newImageName);
            Room::where('id', $id)->update([
                'number' => $validate['number'],
                'type' => $validate['type'],
                'price' => $validate['price'],
                'space' => $validate['space'],
                'vibe' => $validate['vibe'],
                'maximum' => $validate['maximum'],
                'image' => $path,
            ]);
        } else {
            Room::where('id', $id)->update($validate);
        }
        return redirect()->route('manage-room');
        //
    }

    /**
     * รับ param Id -> ลบห้องพัก -> Redirect() กลับไปที่่ manage-room
     */
    public function destroy($id)
    {
        $room = room::where('id', $id)->first();
        $room->delete();
        // dd($room);
        $room->delete();
        return redirect()->route('manage-room');
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
