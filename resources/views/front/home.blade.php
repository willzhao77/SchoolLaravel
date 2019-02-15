@extends('frame')
@section('content')
<div id="carouselIndicators" class="carousel slide" data-ride="carousel" >
  <ol class="carousel-indicators">
    <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselIndicators" data-slide-to="1"></li>
    <li data-target="#carouselIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner height600" >
    <div class="carousel-item active">
      <img src="img/slide1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/slide2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/slide3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container main" >
  <div class="row">
    <div class="news col-md-8 ">
      <h4 class="itemtitle">News Center</h4>
      <h4 class="itemmore">More...</h4>
      <div class="newsframe">

        @foreach ($newsitems as $newsitem)
          <div class="newsitem">
            <img src="{{ $newsitem->imgpath }}" alt="" class="height200">
            <P>{{ $newsitem->title }}</P>
            <span class="">{{ date("Y-m-d", strtotime($newsitem->created_at)) }}</span>
          </div>
        @endforeach


      </div>
      </div>
    <div class="info col-md-4 ">
      <div class="noticeframe rounded">
        <div>
          <h4 class="eventtitle">Events</h4>
          <h4 class="itemmore">More...</h4>
          <div style="clear: both"></div>
        </div>
        <div class="noticeframein">
          <div class="noticeitem">
            <img src="img/test.png" alt="" class="height100">
            <a href="">Event Description</a>
          </div>
          <div class="noticeitem">
            <img src="img/test.png" alt="" class="height100">
            <a href="">Event Description</a>
          </div>
          <div class="noticeitem">
            <img src="img/test.png" alt="" class="height100">
            <a href="">Event Description</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="tab2">
<div class="container">
<div class="row">
  <div class="col-md-8 border1">
    <img src="img/test.png" alt="" class="height300 margin10">
    <img src="img/test.png" alt="" class="height300 margin10">
    <img src="img/test.png" alt="" class="height300 margin10">
    <img src="img/test.png" alt="" class="height300 margin10">
  </div>
  <div class="col-md-4 ">
    <div class="margin10 padding10 rounded termframe">
      <h4 class="termtitle">2019 Term Dates</h4>
      <div class="margin10 bgterm padding10 rounded">
        <p>Term 1:  </p>
        <p class="textleft"> Monday 4 February (classes start Thursday 7 February) to Friday 12 April </p>
      </div>
      <div class="margin10 bgterm padding10 rounded">
        <p>Term 2:  </p>
        <p class="textleft">Monday 29 April to Friday 5 July</p>
      </div>
      <div class="margin10 bgterm padding10 rounded">
        <p>Term 3:  </p>
        <p class="textleft">Monday 22 July to Friday 27 September</p>
      </div>
      <div class="margin10 bgterm padding10 rounded">
        <p>Term 4:  </p>
        <p class="textleft">Monday 14 October to Thursday 19 December</p>
      </div>
    </div>
  </div>
</div>
</div>
</div>
@endsection
