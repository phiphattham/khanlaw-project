@extends('layouts.admin')
@section('title')
    จัดการหน้าเกี่่ยวกับ
@endsection
@section('style')
    <style>
        #container {
            width: 1000px;
            margin: 20px auto;
        }

        .ck-editor__editable[role="textbox"] {
            /* Editing area */
            min-height: 200px;
        }

        .ck-content .image {
            /* Block images */
            max-width: 80%;
            margin: 20px auto;
        }
    </style>
@endsection
@section('content')
    <h1 class="mt-4">จัดการหน้าเว็บไซต์ / เกี่ยวกับ</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Page Management</li>
        <li class="breadcrumb-item active">About page Management</li>
    </ol>
    <div id="container">
        <form action="">
            <div id="editor">
            </div>
        </form>
    </div>
@endsection
@section('script')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
