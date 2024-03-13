@extends('layouts.admin')
@section('title')
    แก้ไขห้องพัก
@endsection
@section('content')
    <div>
        <h1 class="mt-4">จัดการห้องพัก / แก้ไขห้องพัก</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Website Data Management</li>
            <li class="breadcrumb-item active">Room Management</li>
            <li class="breadcrumb-item active">Edit Room</li>
        </ol>
        {{-- <h5 class="mb-3">แก้ไขห้องพัก</h5> --}}

        <img src="{{ $room->image }}" alt="Room Image" style= "width: 20rem;" class="rounded mx-auto d-block">

        <form method="POST" {{-- action="{{ route('update', $room->id) }}"  --}} enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="formFile" class="form-label">เลือกรูปภาพ</label>
                <input class="form-control" type="file" id="formFile" value="{{ $room->img }}" name="formFile">
            </div>

            <div class="mb-3">
                {{-- <label for="cars">ประเภทห้องพัก : </label> --}}
                <select id="type" name="type" class="form-select">
                    <option hidden>เลือกประเภทห้องพัก</option>
                    <option value="เต้นท์กระโจม">เต้นท์กระโจม</option>
                    <option value="Holly">Holly</option>
                    <option value="Hazel">Hazel</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="text" class="form-label">เลขห้อง</label>
                <input type="text" class="form-control" id="room_number" placeholder="กรอกเลขห้อง"
                    value="{{ $room->room_number }}" name="room_number">
            </div>

            <div class="mb-3">
                <label for="text" class="form-label">รองรับ</label>
                <input type="text" class="form-control" id="support" placeholder="รองรับ" value="{{ $room->support }}"
                    name="support">
            </div>

            <div class="mb-3">
                <label for="text" class="form-label">บรรยากาศ</label>
                <input type="text" class="form-control" id="air" placeholder="กรอกบรรยากาศ"
                    value="{{ $room->air }}" name="air">
            </div>

            <div class="mb-3">
                <label for="text" class="form-label">ขนาดของห้องพัก</label>
                <input type="text" class="form-control" id="space" placeholder="กรองขนาดของห้องพัก"
                    value="{{ $room->space }}" name="space">
            </div>

            <div class="mb-3">
                <label for="text" class="form-label">ราคา</label>
                <input type="text" class="form-control" id="price" placeholder="ราคา" value="{{ $room->price }}"
                    name="price">
            </div>

            <div class=>
                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">อัปเดต</button>
        </form>
    </div>
@endsection
