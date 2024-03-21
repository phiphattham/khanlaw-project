@extends('layouts.profile')
@section('title')
    Profile
@endsection

@section('style')
    <style>
        body {
            background: rgb(99, 39, 120)
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #BA68C8
        }

        .profile-button {
            background: rgb(99, 39, 120);
            box-shadow: none;
            border: none
        }

        .profile-button:hover {
            background: #682773
        }

        .profile-button:focus {
            background: #682773;
            box-shadow: none
        }

        .profile-button:active {
            background: #682773;
            box-shadow: none
        }

        .back:hover {
            color: #682773;
            cursor: pointer
        }

        .labels {
            font-size: 11px
        }

        .add-experience:hover {
            background: #BA68C8;
            color: #fff;
            cursor: pointer;
            border: solid 1px #BA68C8
        }
    </style>
@endsection
@section('content')
    <div class="container rounded bg-white mt-3 mb-5">
        <div class="row">
            <div class="col-md-5 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px"
                        src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                        class="font-weight-bold">{{ '@' . $user->username }}</span><span
                        class="text-black-50">{{ $user->email }}</span><span>
                    </span>
                </div>
            </div>
            <div class="col-md-6 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">แก้ไขโปรไฟล์</h4>
                    </div>
                    <form action="{{ route('updateprofile', $user->id) }}" method="post">
                        @csrf
                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">ชื่อ</label><input type="text"
                                    class="form-control" placeholder="first name" value="{{ $user->f_name }}"
                                    name="f_name"></div>
                            <div class="col-md-6"><label class="labels">นามสกุล</label><input type="text"
                                    class="form-control" value="{{ $user->l_name }}" placeholder="นามสกุล" name="l_name">
                            </div>
                            <div class="col-md-12"><label class="labels">เพศ</label>
                                <select class="form-select" aria-label="Default select example" name="sex">
                                    @if ($user->sex == 'male')
                                        <option value="{{ $user->sex }}" selected>ชาย</option>
                                        <option value="female">หญิง</option>
                                    @else
                                        <option value="{{ $user->sex }}" selected>หญิง</option>
                                        <option value="male">ชาย</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">ชื่อผู้ใช้</label><input type="text"
                                    class="form-control" placeholder="Username" value="{{ $user->username }}" disabled>
                            </div>
                            <div class="col-md-12">
                                <label class="labels">อีเมล์</label>
                                <input type="text" class="form-control" placeholder="Email" value="{{ $user->email }}"
                                    name="email" disabled>
                            </div>

                            <div class="col-md-12"><label class="labels">รหัสผ่านใหม่</label>
                                <input type="text" class="form-control" placeholder="รหัสผ่านใหม่" name="password">
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <button class="btn btn-primary profile-button" type="submit"
                                onclick="return confirm('คุณต้องอัพเดทข้อมูลผู้ใช้ใหม่หรือไม่')">บันทึกการเปลี่ยนแปลง</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
