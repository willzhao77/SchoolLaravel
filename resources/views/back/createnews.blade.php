@extends('adminframe')
@section('content')

<div class="">
  <form action="{{ url('back/newscenter') }}" method="POST" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <div class="">
      <label for="">News Title</label><input type="text" name="title" value="">
    </div>
    <div class="">
      <label for="">Author</label><input type="text" name="author" value="">
    </div>
    <div class="">
      <label for="">Picture</label><input type="file" accept="image/*" name="image">
    </div>
    <div class="">
      <label for="">Details</label><textarea name="content" >Enter text here...</textarea>
    </div>
    <button class="btn btn-lg btn-info">Add New</button>
  </form>
</div>

@endsection
