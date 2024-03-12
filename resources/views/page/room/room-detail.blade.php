@extends('layouts.room')
@section('title')
    ห้องพักทั้งหมด
@endsection

@section('content')

    <body style="background-color: #F2F2F2">
        <div>
            <img src="{{ asset('img/index.jpg') }}" alt="อากาศ" class="crop-img">
            <h1 class="welcome">Welcome</h1>
            <h1 class="descript">คานหลาว วิวพอยท์</h1>
        </div>

        <nav class="navbar navbar-expand-lg mt-4">
            <div class="container-fluid ">
                <div class="col-1"></div>
                <a class="navbar-brand ms-4" href="">ห้องพักทั้งหมด</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('') }}">เต็นท์กระโจม</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('') }}">ห้องพัก Hazel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('') }}">ห้องพัก Holly</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card mt-5" style="width: 30rem;">
                        <img src="{{ asset('img/index.jpg') }}" class="card-img-top" alt="เต็นท์กระโจม">
                        <div class="card-body">
                            <h5 class="card-title border-bottom">ห้องพักที่ 101</h5>

                        </div>
                        <ul>
                            <li class="list-group-item">
                                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                </svg>รองรับ : 2 ท่าน
                            </li>

                            <li class="list-group-item">
                                <svg class="me-2"xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-cloud-haze2-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8.5 2a5.001 5.001 0 0 1 4.905 4.027A3 3 0 0 1 13 12H3.5A3.5 3.5 0 0 1 .035 9H5.5a.5.5 0 0 0 0-1H.035a3.5 3.5 0 0 1 3.871-2.977A5.001 5.001 0 0 1 8.5 2m-6 8a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zM0 13.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5" />
                                </svg>บรรยากาศ : ธรรมชาติ
                            </li>

                            <li class="list-group-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-rulers" viewBox="0 0 16 16">
                                    <path
                                        d="M1 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h5v-1H2v-1h4v-1H4v-1h2v-1H2v-1h4V9H4V8h2V7H2V6h4V2h1v4h1V4h1v2h1V2h1v4h1V4h1v2h1V2h1v4h1V1a1 1 0 0 0-1-1z" />
                                </svg>ความกว้าง : 30 ตร.ม.
                            </li>

                        </ul>
                        <div class="card-body">
                            <a type="button" href="#" class="btn btn-primary me-3">ราคา 500 บาท/คืน</a>
                            <a href="#" class="card-link">ดูรายละเอียด</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                </div>
                <div class="col">
                    <div class="card mt-5" style="width: 30rem;">
                        <img src="{{ asset('img/index.jpg') }}" class="card-img-top" alt="เต็นท์กระโจม">
                        <div class="card-body">
                            <h5 class="card-title border-bottom">ห้องพักที่ 102</h5>

                        </div>
                        <ul>
                            <li class="list-group-item">
                                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                </svg>รองรับ : 2 ท่าน
                            </li>

                            <li class="list-group-item">
                                <svg class="me-2"xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-cloud-haze2-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8.5 2a5.001 5.001 0 0 1 4.905 4.027A3 3 0 0 1 13 12H3.5A3.5 3.5 0 0 1 .035 9H5.5a.5.5 0 0 0 0-1H.035a3.5 3.5 0 0 1 3.871-2.977A5.001 5.001 0 0 1 8.5 2m-6 8a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zM0 13.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5" />
                                </svg>บรรยากาศ : ธรรมชาติ
                            </li>

                            <li class="list-group-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-rulers" viewBox="0 0 16 16">
                                    <path
                                        d="M1 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h5v-1H2v-1h4v-1H4v-1h2v-1H2v-1h4V9H4V8h2V7H2V6h4V2h1v4h1V4h1v2h1V2h1v4h1V4h1v2h1V2h1v4h1V1a1 1 0 0 0-1-1z" />
                                </svg>ความกว้าง : 30 ตร.ม.
                            </li>

                        </ul>
                        <div class="card-body">
                            <a type="button" href="#" class="btn btn-primary me-3">ราคา 500 บาท/คืน</a>
                            <a href="#" class="card-link">ดูรายละเอียด</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="card mt-5" style="width: 30rem;">
                        <img src="{{ asset('img/index.jpg') }}" class="card-img-top" alt="เต็นท์กระโจม">
                        <div class="card-body">
                            <h5 class="card-title border-bottom">ห้องพักที่ 101</h5>

                        </div>
                        <ul>
                            <li class="list-group-item">
                                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                </svg>รองรับ : 2 ท่าน
                            </li>

                            <li class="list-group-item">
                                <svg class="me-2"xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-cloud-haze2-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8.5 2a5.001 5.001 0 0 1 4.905 4.027A3 3 0 0 1 13 12H3.5A3.5 3.5 0 0 1 .035 9H5.5a.5.5 0 0 0 0-1H.035a3.5 3.5 0 0 1 3.871-2.977A5.001 5.001 0 0 1 8.5 2m-6 8a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zM0 13.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5" />
                                </svg>บรรยากาศ : ธรรมชาติ
                            </li>

                            <li class="list-group-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-rulers" viewBox="0 0 16 16">
                                    <path
                                        d="M1 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h5v-1H2v-1h4v-1H4v-1h2v-1H2v-1h4V9H4V8h2V7H2V6h4V2h1v4h1V4h1v2h1V2h1v4h1V4h1v2h1V2h1v4h1V1a1 1 0 0 0-1-1z" />
                                </svg>ความกว้าง : 30 ตร.ม.
                            </li>

                        </ul>
                        <div class="card-body">
                            <a type="button" href="#" class="btn btn-primary me-3">ราคา 500 บาท/คืน</a>
                            <a href="#" class="card-link">ดูรายละเอียด</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                </div>
                <div class="col">
                    <div class="card mt-5" style="width: 30rem;">
                        <img src="{{ asset('img/index.jpg') }}" class="card-img-top" alt="เต็นท์กระโจม">
                        <div class="card-body">
                            <h5 class="card-title border-bottom">ห้องพักที่ 102</h5>

                        </div>
                        <ul>
                            <li class="list-group-item">
                                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                </svg>รองรับ : 2 ท่าน
                            </li>

                            <li class="list-group-item">
                                <svg class="me-2"xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-cloud-haze2-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8.5 2a5.001 5.001 0 0 1 4.905 4.027A3 3 0 0 1 13 12H3.5A3.5 3.5 0 0 1 .035 9H5.5a.5.5 0 0 0 0-1H.035a3.5 3.5 0 0 1 3.871-2.977A5.001 5.001 0 0 1 8.5 2m-6 8a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zM0 13.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5" />
                                </svg>บรรยากาศ : ธรรมชาติ
                            </li>

                            <li class="list-group-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-rulers" viewBox="0 0 16 16">
                                    <path
                                        d="M1 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h5v-1H2v-1h4v-1H4v-1h2v-1H2v-1h4V9H4V8h2V7H2V6h4V2h1v4h1V4h1v2h1V2h1v4h1V4h1v2h1V2h1v4h1V1a1 1 0 0 0-1-1z" />
                                </svg>ความกว้าง : 30 ตร.ม.
                            </li>

                        </ul>
                        <div class="card-body">
                            <a type="button" href="#" class="btn btn-primary me-3">ราคา 500 บาท/คืน</a>
                            <a href="#" class="card-link">ดูรายละเอียด</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>







        {{-- btn เลือกหน้า --}}
        <footer class="page-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href=>1</a></li>
                    <li class="page-item"><a class="page-link" href={{ url('n2_allroom') }}>2</a></li>
                    <li class="page-item"><a class="page-link" href={{ url('n3_allroom') }}>3</a></li>
                </ul>
            </nav>
        </footer>

    </body>
@endsection
