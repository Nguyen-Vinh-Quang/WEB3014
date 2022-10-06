<!-- Ke thua lai layout master-->
@extends('layouts.master')

<!-- Truyen gia tri nhung phan thay doi -->

<!-- yield(ten) ~ section(ten, gia tri...) Đây là thay đổi title-->
@section('title','Danh sach san pham')

<!-- $section('title',) Đây là thay đổi ở phần-->
@section('content-title', 'ABC')
@section('content')
THU VIEN PHP 2 <br>
<!--<?php echo $name ?>-->
<!--<?php echo $price ?>-->

<!--BLADE-->
{{$name}} <br>
{{$price}} <br>
{{strlen($name) > 2 ? 'Do dai lon hon 2' : 'Do dai nho hon 2'}} <br>
@if($price > 10000000)
<p style="color:red">Lon hon 10tr</p>
@else
<p style="color:red">Nho hon 10tr</p>
@endif <br>
<ul>
    @foreach ($array as $item)
    <li>{{$item}}</li>
    @endforeach
</ul>
@endsection
