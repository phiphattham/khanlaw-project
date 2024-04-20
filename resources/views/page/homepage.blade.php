@extends('layouts.guest')
@section('title')
    เกี่ยวกับเรา
@endsection

@section('content')
    {{-- <div>
        <img src="{{ asset('img/index.jpg') }}" alt="อากาศ"
            class="cover-container d-flex w-100 h-100 flex-column img-fluid">
        <h1 class="welcome ">คานหลาว วิวพอยท์</h1>
        <h1 class="descript">ยินดีให้บริการ</h1>
        <a class="btn btn-primary roombtn" href="{{ route('roomlist') }}">ห้องพักทั้งหมด</a>
    </div> --}}
    <div class="mh-100 text-center">
        <div class="position-relative">
            <img src="{{ asset('img/index.jpg') }}" alt="อากาศ" class="d-flex w-100 h-100 object-fit-cover">
            <div class="position-absolute top-50 start-50 translate-middle">
                <h1>คานหลาว วิวพอยท์</h1>
                <h1>ยินดีให้บริการ</h1>
                <a class="btn btn-primary" href="{{ route('roomlist') }}">ห้องพักทั้งหมด</a>
            </div>
        </div>
    </div>
@endsection
