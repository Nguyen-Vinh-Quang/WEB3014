<!-- Ke thua lai layout master-->
@extends('layouts.master')

<!-- Truyen gia tri nhung phan thay doi -->

<!-- yield(ten) ~ section(ten, gia tri...) Đây là thay đổi title-->
@section('title','Quản lý danh mục')

<!-- $section('title',) Đây là thay đổi ở phần-->
@section('content-title', 'Quản lý danh mục')
@section('content')
<table class="table table-dark table-striped">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Name</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                 
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td colspan="2">Larry the Bird</td>
                </tr>
              </tbody>
            </table>
@endsection
