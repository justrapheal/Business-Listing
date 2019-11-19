@extends('layouts.app')



@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lataest Lazabiz Business Listings </div>

                <div class="card-body">

                    @if(count($listing))


                            @foreach($listing as $listing)
                    <div class="card card-body mt-2">
                            <div class="list-group">
                        <div class="">
                            <img src="../storage/{{$listing->image}}" class=" img img-thumbnail float-left" style="width:10%; height:12%;  border-radius:40%; object-fit:cover" alt="">
                            <a href="/listings/{{$listing->id}}" class=" h1 text-center text-success">{{$listing->name}}</a> </div>
                            </div>
                            <hr>
                            <div class="text-center">
                                {{$listing->bio}}
                            </div>

                </div>
                            @endforeach
                    @else
                    <h3>No Business Listings.

                    </h3>
                    <h4>you can register and add listings.</h4>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
