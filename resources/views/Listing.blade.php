@extends('layouts.app')

@section('content')

<div id="carouselExampleSlidesOnly bgg"  class="carousel slide bg-dark" data-ride="carousel">
    <div class="carousel-inner">
<div style="position:absolute; z-index:3; right:25%">
    <h1 class='text-center  text-light  mt-5 bbb'><strong> Business Listing </strong></h1>
    <h3 class='text-center  text-light mt-3'>Want to check out eligibility of an Organization?</h3>
    <h3 class='text-center  text-light'>Then go no further</h3>
</div>
    <div class="carousel-item active">
          <img style="opacity:0.5" src="https://images.unsplash.com/photo-1527685216219-c7bee79b0089?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="..." height="300">
      </div>
      <div class="carousel-item">
        <img style="opacity:0.5" src="https://images.unsplash.com/photo-1530939069691-adb779735408?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="..." height="300">
      </div>
      <div class="carousel-item">
        <img style="opacity:0.5" src="https://images.unsplash.com/photo-1527090496-346715f0b28d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="..." height="300">
      </div>
    </div>
  </div>

<section>
<div class="text-center h3 mt-3" style="color:goldenrod">Top Companies</div>

<div class="row " >

    @foreach ($listings as $listing)
        <div id="visit" class="col-md-4 text-center">
       <a href="#"  > <img src="../storage/{{$listing->image}}" class="img  my-1 ml-4 " alt="" style="height:80%; width: 60%; border-radius:50%"></a>
       <div style="" class="overlay py-4 h1 px-2 ">{{$listing->name}} <div class="h5  mt-3">
           {{$listing->bio}}
        </div>
        </div>
    </div>


        @endforeach
    </div>
</section>

@include('layouts/footer')

@endsection




