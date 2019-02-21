@extends('adminframe')
@section('content')

<div class="">
  <form class="" action="index.html" method="post">
    <div class="">
      <label for="">News Title</label><input type="text" name="newstitle" value="">
    </div>
    <div class="">
      <label for="">Picture</label><input type="file" accept="image/*">
    </div>
    <div class="">
      <label for="">Details</label><textarea name="comment" form="usrform">Enter text here...</textarea>
    </div>
  </form>
</div>

@endsection
