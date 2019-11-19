@extends('layouts.app')
@section('content')


<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listing <a class="btn btn-success float-right btn-sm" href="/dashboard">Back</a></div>

                <div class="card-body">
                        {!! Form::open(['action' => ['ListingsController@update',$listing->id],'method' =>'POST','enctype'=>'multipart/form-data']) !!}
                        <div class="form-group ">
                            {{Form::label('name','Name: ')}}
                            {{Form::text('name',$listing->name,['class'=>'form-control','placeholder'=>'Enter Name'])}}
                            <div class='text-danger'>{{$errors->first('name')}}</div>

                        </div>
                        <div class="form-group ">
                            {{Form::label('email','Email: ')}}
                            {{Form::text('email',$listing->email,['class'=>'form-control','placeholder'=>'Enter Email'])}}
                            <div class='text-danger'>{{$errors->first('email')}}</div>

                        </div>
                        <div class="form-group ">
                            {{Form::label('website','Website: ')}}
                            {{Form::text('website',$listing->website,['class'=>'form-control','placeholder'=>'Enter Company Website'])}}
                            <div class='text-danger'>{{$errors->first('website')}}</div>

                        </div>

                        <div class="form-group ">
                            {{Form::label('phone','Contact Number: ')}}
                            {{Form::text('phone',$listing->phone,['class'=>'form-control','placeholder'=>'Contact Number'])}}
                        </div>
                        <div class="form-group ">
                            {{Form::label('address','Company Address: ')}}
                            {{Form::text('address',$listing->address,['class'=>'form-control','placeholder'=>'Company Address'])}}
                        </div>

                        <div class="form-group ">
                            {{Form::label('bio', 'Bio: ')}}
                            {{Form::textarea('bio', $listing->bio, ['class'=>'form-control','placeholder'=>'About This Company'])}}
                            </div>
                            {{ Form::hidden('_method', 'PUT') }}

                            {{Form::submit('submit',['class'=>'btn btn-success'])}}


                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>


@endsection
