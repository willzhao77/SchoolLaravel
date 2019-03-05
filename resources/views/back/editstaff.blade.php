@extends('adminframe')
@section('content')

<div class="">
  <form action="{{ url('back/staff/'.$staffitem->id) }}" method="POST" enctype="multipart/form-data">
    {{ method_field('PATCH') }}
    {!! csrf_field() !!}
    <div class="">
      <label for="">Staff Name</label><input type="text" name="name" value="{{ $staffitem->name }}">
    </div>
    <div class="">
      <label for="">Staff Title</label><input type="text" name="title" value="{{ $staffitem->title }}">
    </div>
    <div class="">
        <img src="../../../{{ $staffitem->imgpath }}" alt="">
    </div>
    <div class="">
      <label for="">Picture</label><input type="file" accept="image/*" name="image">
    </div>
    <div class="">
      <label for="">Staff type</label><input type="text" name="type" value="{{ $staffitem->type }}">
    </div>
    <input type="hidden" name="id" class="form-control" style="width: 300px;" value="{{ $staffitem->id }}">
    <button type="submit" class="btn btn-lg btn-success col-lg-12">Submit</button>
  </form>
</div>

@endsection
