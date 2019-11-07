@extends('layouts.app')



@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lataest Lazabiz Business Listings </div>

                <div class="card-body">

                    @if(count($listing))

                        <ul class="list-group">
                            @foreach($listing as $listing)

                        <li class="list-group-item"><a href="/listings/{{$listing->id}}">{{$listing->name}}</a> </li>
                            @endforeach
                        </ul>
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
