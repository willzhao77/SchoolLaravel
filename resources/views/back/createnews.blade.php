@extends('adminframe')
@section('content')

<div class="">
  <form action="{{ url('back/newscenter') }}" method="POST">
    {!! csrf_field() !!}
    <div class="">
      <label for="">News Title</label><input type="text" name="title" value="">
    </div>
    <div class="">
      <label for="">Author</label><input type="text" name="author" value="">
    </div>
    <div class="">
      <label for="">Picture</label><input type="file" accept="image/*" name="imgpath">
    </div>
    <div class="">
      <label for="">Details</label><textarea name="content" >Enter text here...</textarea>
    </div>
    <button class="btn btn-lg btn-info">Add New</button>
  </form>
</div>

@endsection
