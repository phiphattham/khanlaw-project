@extends('layouts.admin')
@section('title')
    จัดการห้องพัก
@endsection
@section('content')
    <h1 class="mt-4">จัดการห้องพัก</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Room Management</li>
    </ol>

    {{-- @php
        dump($rooms);
    @endphp --}}
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ลำดับ</th>
                <th scope="col">ประเภท</th>
                <th scope="col">หมายเลขห้อง</th>
                <th scope="col">ราคา</th>
                <th scope="col"><button type="button" class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#createRoom">เพิ่ม</button></th>

            </tr>
        </thead>
        <tbody>

            @foreach ($rooms as $room)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $room->type }}</td>
                    <td>{{ $room->number }}</td>
                    <td>{{ $room->price }}</td>
                    <td>
                        <a href="{{ route('edit-room', $room->id) }}" type="button" class="btn btn-warning">แก้ไข</a></th>
                        <a href="{{ route('delete-room', $room->id) }}" class="btn btn-danger"
                            onclick="return confirm('คุณต้องการลบห้องพักนี้ {{ $room->room_number }} หรือไม่')">ลบ</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>


    {{-- Modal create room --}}
    <div class="modal fade" id="createRoom">
        <div class="modal-dialog">
            <div class="modal-content">


                <!-- Modal Header -->
                <div class="modal-header">
                    <h6>เพิ่มข้อมูลห้องพัก</h6>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="POST" action="/create" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="formFile" class="form-label">เลือกรูปภาพ</label>
                            <input class="form-control" type="file" id="formFile" name="formFile" required>
                        </div>
                        <div class="mb-3">
                            <select class="form-select" id="type" name="type" required>
                                <option hidden>เลือกประเภทห้องพัก</option>
                                <option value="เต้นท์กระโจม">เต้นท์กระโจม</option>
                                <option value="Holly">Holly</option>
                                <option value="Hazel">Hazel</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">เลขห้อง</label>
                            <input type="text" class="form-control" id="room_number" placeholder="กรอกเลขห้อง"
                                name="room_number" required>
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">รองรับ</label>
                            <input type="text" class="form-control" id="support" placeholder="รองรับ" name="support" required>
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">บรรยากาศ</label>
                            <input type="text" class="form-control" id="air" placeholder="กรอกบรรยากาศ"
                                name="air" required>
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">ขนาดของห้องพัก</label>
                            <input type="text" class="form-control" id="space" placeholder="กรองขนาดของห้องพัก"
                                name="space" required>
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">ราคา</label>
                            <input type="text" class="form-control" id="price" placeholder="ราคา" name="price" required>
                        </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">ยืนยัน</button>
                    </form>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ยกเลิก</button>
                </div>
            </div>
        </div>
    </div>
@endsection