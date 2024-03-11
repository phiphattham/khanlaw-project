@extends('layouts.admin')
@section('title')
    จัดการผู้ใช้
@endsection
@section('content')
    {{-- @php
        dump($users);
    @endphp --}}
    <h1 class="mt-4">จัดการผู้ใช้</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">User Management</li>
    </ol>
    <table class="table">
        <thead class="table-light">
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>created_at</th>
            <th hidden>#######</th>
        </thead>
        @foreach ($users as $user)
            <tbody>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at }}</td>
                <td>
                    <a href="#" class="btn btn-warning">แก้ไข</a>
                    <a href="#" class="btn btn-danger">ลบ</a>
                </td>
            </tbody>
        @endforeach
    </table>
@endsection
