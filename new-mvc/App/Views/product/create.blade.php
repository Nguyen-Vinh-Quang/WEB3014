@extends('layouts.master')
@section('title','Thêm mới sản phẩm')
@section('content-title', 'Thêm mới sản phẩm')
@section('content')
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID</label>
    <input type="text" class="form-control" id="id" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="text" class="form-control" id="name">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Price</label>
    <input type="number" class="form-control" id="name">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Image</label>
    <input type="file" class="form-control" id="name">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Category_id</label>
    <input type="text" class="form-control" id="name">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Status</label>
    <input type="text" class="form-control" id="name">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection