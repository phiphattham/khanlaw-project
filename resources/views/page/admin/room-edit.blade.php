@extends('layouts.admin')
@section('title')
    แก้ไขห้องพัก
@endsection
@section('content')
    <div>
        <h1 class="mt-4">แก้ไขห้องพัก</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Website Data Management</li>
            <li class="breadcrumb-item active">Room Management</li>
            <li class="breadcrumb-item active">Edit Room</li>
        </ol>

        <img src="{{ asset('storage/images/' . basename($room->image)) }}" alt="Room Image" style= "width: 20rem;"
            class="rounded mx-auto d-block">

        <form method="POST" action="{{ route('update-room', $room->id) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="image" class="form-label">เลือกรูปภาพ</label>
                <input class="form-control" type="file" id="image" value="{{ $room->image }}" name="image">
            </div>

            <div class="mb-3">
                <label for="type" class="mb-2">
                    ประเภทห้องพัก : <span class="badge rounded-pill text-bg-info">{{ $room->type }}</span>
                </label>
                <select id="type" name="type" class="form-select">
                    <option hidden>เลือกประเภทห้องพัก</option>
                    <option value="เต้นท์กระโจม">เต้นท์กระโจม</option>
                    <option value="Holly">Holly</option>
                    <option value="Hazel">Hazel</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="text" class="form-label">เลขห้อง</label>
                <input type="number" class="form-control" id="number" placeholder="กรอกเลขห้อง"
                    value="{{ $room->number }}" name="number">
            </div>

            <div class="mb-3">
                <label for="maximum" class="form-label">รองรับ</label>
                <input type="number" class="form-control" id="maximum" placeholder="รองรับ" value="{{ $room->maximum }}"
                    name="maximum">
            </div>

            <div class="mb-3">
                <label for="text" class="form-label">บรรยากาศ</label>
                <input type="text" class="form-control" id="vibe" placeholder="กรอกบรรยากาศ"
                    value="{{ $room->vibe }}" name="vibe">
            </div>

            <div class="mb-3">
                <label for="space" class="form-label">ขนาดของห้องพัก</label>
                <input type="number" class="form-control" id="space" placeholder="กรองขนาดของห้องพัก"
                    value="{{ $room->space }}" name="space">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">ราคา</label>
                <input type="number" class="form-control" id="price" placeholder="ราคา" value="{{ $room->price }}"
                    name="price">
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">อัปเดต</button>
            </div>
        </form>
    </div>
@endsection
