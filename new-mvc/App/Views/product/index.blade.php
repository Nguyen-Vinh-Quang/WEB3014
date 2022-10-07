<!-- Ke thua lai layout master-->
@extends('layouts.master')

<!-- Truyen gia tri nhung phan thay doi -->

<!-- yield(ten) ~ section(ten, gia tri...) Đây là thay đổi title-->
@section('title','Dashboard')

<!-- $section('title',) Đây là thay đổi ở phần-->
@section('content-title', 'Dashboard')
@section('content')
Dashboard
@endsection
