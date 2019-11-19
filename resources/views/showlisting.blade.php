@extends('layouts.app')
@section('content')


<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$listing->name}} <a class="btn btn-success float-right btn-sm" href="/">Back</a></div>

                <div class="card-body">
                    <ul class="list-group">
                        {!! Form::open(['action' => ['ListingsController@update',$listing->id],]) !!}


                            {{Form::label('email','Email: ')}}
                            <li class="list-group-item">{{$listing->email}}</li>
<br>
                            {{Form::label('website','Website: ')}}
                            <li class="list-group-item">{{$listing->website}}</li>
                            <br>
                            {{Form::label('phone','Contact Number: ')}}
                            <li class="list-group-item">{{$listing->phone}}</li>
                            <br>

                            {{Form::label('address','Company Address: ')}}
                            <li class="list-group-item">{{$listing->address}}</li>
                            <br>

                            {{Form::label('bio', 'Bio: ')}}
                            <li class="list-group-item" >{{$listing->bio}}</li>
                            <br>
                            {{Form::label('recruiting', 'Recruiting: ')}}
                            <li class="list-group-item" >{{$listing->recruiting}}</li>
                            <br>

                            <div class="mt-2 text-right text-success"><a href="/message" class="btn btn-success btn-sm">Report Company</a></div>


                    {!! Form::close() !!}
                    </ul>

                </div>
            </div>
        </div>
    </div>


@endsection
