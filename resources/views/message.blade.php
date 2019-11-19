@extends('layouts/app')

@section('content')



<div class="card">

        @if(session('message'))

        <div class="alert alert-success my-3">
                {{session('message')}}
            </div>
        @endif

    <div class="card-header">Listing <a class="btn btn-success float-right btn-sm" href="/">Back</a></div>

        <div class="card-body">
                <form action="message" method="POST">
                    <div class="form-group ">
                    <label for='name'> Name </label>
                    <input type="text" class='form-control' name="name" id="name"  value="{{old('email')}}" placeholder= 'Enter Name'>
                    <div class='text-danger'>{{$errors->first('name')}}</div>

                </div>

                <div class="form-group ">
                    <label for = 'email'> Email: </label>
                <input type='email' class='form-control' placeholder ='Enter Email' id="email" value="{{old('email')}}" name="email">
                    <div class='text-danger'>{{$errors->first('email')}}</div>

                </div>
                <div class="form-group ">
                    <label for = 'message'>Enter Message: </label>
                    <textArea name='message' class ='form-control' placeholder = 'Enter a message' cols="20" rows="5"></textArea>
                    <div class='text-danger'>{{$errors->first('website')}}</div>

                </div>




                    <button type='submit' class ='btn btn-outline-success submit ' disabled="false">Submit Message</button>

@csrf
                </form>
        </div>
    </div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script
src="https://code.jquery.com/jquery-3.4.1.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous"></script>
<script>
$(()=>{
$('#email,#name').on('keyup',()=>{

let email = $('#email').val();
let name = $('#name').val();

let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
let validEmail = re.test(email);

if(validEmail && name !=''){
$('.submit').prop('disabled',false);
$('.submit').on('click',()=>{
swal("Good job!", "You clicked the button!", "success");

console.log('ok');
});
}
else{
  $('.submit').prop('disabled',true).css('background-color','#1b1a18');

}

});



});
</script>
<script>

</script>

@endsection
