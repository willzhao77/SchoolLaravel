@extends('adminframe')
@section('content')

<div class="">
  <form action="{{ url('back/newscenter/'.$newsitem->id) }}" method="POST">
    {{ method_field('PATCH') }}
    {!! csrf_field() !!}
    <div class="">
      <label for="">News Title</label><input type="text" name="title" value="{{ $newsitem->title }}">
    </div>
    <div class="">
      <label for="">Author</label><input type="text" name="author" value="{{ $newsitem->author }}">
    </div>
    <div class="">
        <img src="../../../{{ $newsitem->imgpath }}" alt="">
        <p>../{{ $newsitem->imgpath }}</p>
    </div>
    <div class="">
      <label for="">Picture</label><input type="file" accept="image/*" name="imgpath">
    </div>
    <div class="">
      <label for="">Details</label><textarea name="content" >{{ $newsitem->content }}</textarea>
    </div>
    <input type="hidden" name="id" class="form-control" style="width: 300px;" value="{{ $newsitem->id }}">
    <button type="submit" class="btn btn-lg btn-success col-lg-12">Submit</button>
  </form>
</div>

@endsection
