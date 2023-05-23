@extends('index')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4">

            </div>
            @if(session('success'))
                <div class="alert alert-sucess">
                    {!! session('success') !!}
</div>
@endif
            <div class="col-4 mt-5">

               
            <form method="POST" action="{{route('create')}}">
            @csrf
           <div class="card p-2" style="height:250px;">
           <div class="form-group">
           <input type="text" class="form-control" name="name" placeholder="name*" ><br>
        
        <input type="text" class="form-control" name="email" placeholder="email id *" ><br>
    
        <input type="text" class="form-control" name="phone_no" placeholder="phone_no*" >
        
        <button class="btn btn-primary mt-2" name="submit" value="sumbit" style="margin-left:110px;"> SUBMIT </button>
       </div>
</form>

            </div>
        </div>
       
           </div>
           
    </div>
    @endsection
