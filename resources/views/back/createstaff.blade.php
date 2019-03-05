@extends('adminframe')
@section('content')

<div class="">
  <form action="{{ url('back/staff') }}" method="POST" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <div class="">
      <label for="">Staff Name</label><input type="text" name="name" value="">
    </div>
    <div class="">
      <label for="">Staff Title</label><input type="text" name="title" value="">
    </div>
    <div class="">
      <label for="">Picture</label><input type="file" accept="image/*" name="image">
    </div>
    <div class="">
      <label for="">Staff Type</label><input type="text" name="type" value="">
    </div>
    <button class="btn btn-lg btn-info">Add New</button>
  </form>
</div>

@endsection
