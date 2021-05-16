@extends('admin.layouts.glance')
@section('title')
    Quản trị media
@endsection
@section('content')
    <h1> Quản trị media</h1>
    <div style="margin-top: 30px">
    <iframe src="http://localhost:8080/shop_online/shop-online/public/laravel-filemanager" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe>
    </div>
@endsection
