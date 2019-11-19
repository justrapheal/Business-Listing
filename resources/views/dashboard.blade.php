@extends('layouts.app')


@section('content')
@if(session('ok'))

<div class="alert alert-success my-3">
        {{session('ok')}}
    </div>
@endif

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-success" style="background-color:goldenrod">Dashboard <span class="float-right"><a href="/listings/create" class="btn btn-success btn-sm">Add Listings</a></span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Your Listings</h3>
                    @if(count($listings))
                    <table class="table table-striped">

                    <tr>
                        <th>Company</th>
                        <th></th>
                        <th></th>
                    </tr>
                    @foreach($listings as $listing)
                    <tr>
                        <td>{{$listing->name}}</td>
                        <td><a class="btn btn-light float-right btn-sm" href="/listings/{{$listing->id}}/edit">Edit</a></td>
                        <td>
                            {!! Form::open(['action' => ['ListingsController@destroy',$listing->id],'method' =>'POST', 'onsubmit'=>'return confirm("are you sure you want to delete this listing?")']) !!}

                            {{ Form::hidden('_method', 'DELETE') }}

                            {{Form::submit('Delete',['class'=>'btn btn-danger btn-sm '])}}

                            {!! Form::close() !!}

                        </td>
                    </tr>
                    @endforeach
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
