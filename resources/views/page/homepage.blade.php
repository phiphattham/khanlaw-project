@extends('layouts.guest')
@section('title')
    เกี่ยวกับเรา
@endsection

@section('content')
    <div>
        <img src="{{ asset('img/index.jpg') }}" alt="อากาศ"
            class="cover-container d-flex w-100 h-100 flex-column img-fluid">
        <h1 class="welcome ">คานหลาว วิวพอยท์</h1>
        <h1 class="descript">ยินดีให้บริการ</h1>
        <a class="btn btn-primary roombtn" href="{{ route('roomlist') }}">ห้องพักทั้งหมด</a>
    </div>
@endsection
