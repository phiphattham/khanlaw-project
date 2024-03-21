@extends('layouts.guest')
@section('title')
เกี่ยวกับเรา
@endsection

@section('content')
    <div class="card mb-3 mt-5">
        <div class="row g-0">

            <div class="col-md-8">
                <div class="card-body ms-5 mt-4">
                    <ins class="card-title h5">เกี่ยวกับ คานหลาว วิวพอยท์</ins>
                    <p class="card-text">{!! $about->content !!}</p>
                </div>
            </div>

            <div class="col-md-4">
                <img src={{ asset('/img/index.jpg') }} class="img-fluid" alt="...">
            </div>

        </div>
    </div>
@endsection
