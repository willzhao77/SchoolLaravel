@extends('frame')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <h4>Support Staff</h4>

      @foreach ($staffitems as $staffitem)
        <div class="staffitem">
          <img src="{{ $staffitem->imgpath }}" alt="" class="height300">
          <p>{{ $staffitem->name }}</p>
          <P>{{ $staffitem->title }}</P>
        </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
