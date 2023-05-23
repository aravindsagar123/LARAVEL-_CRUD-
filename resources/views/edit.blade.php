@extends('index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">

        </div>
        <div class="col-4" style="padding-top:10px;">
            <form method='POST' action="{{route('update',$edit->id)}}">
                @csrf
                <div class="form-group">
                    <input class="form-control" name="name" value="{{$edit->name}}" placeholder="name*">
                    <label> name : </label>
                </div>
                <div class="form-group">
                    <input class="form-control" name="email" value="{{$edit->email}}" placeholder="email id*">
                    <label> email id : </label>
                </div>
                <div class="form-group">
                    <input class="form-control" name="phone_no" value="{{$edit->phone_no}}" placeholder="phone no *">
                    <label> phone number : </label>
                </div>
                <button class="btn btn-primary" name="update" value="update" type="submit" > update</button> 
</form>
        </div>
    </div>
</div>
@endsection