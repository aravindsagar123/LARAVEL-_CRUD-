@extends('index')
@section('content')
<center>
@if(session('success'))
                <div class="alert alert-sucess">
                    {!! session('success') !!}
</div>
@endif

<table style="table table-bordered table-striped" style="width:50%;">
<tr>
    <th>name</th>
    <th> email </th>
 <th> phone no </th>
 <th col-span="2">action</th> 
 
</tr>
@foreach($data as $datas)
<tr>
    <td>{{$datas->name}}</td>
    <td>{{$datas->email}}</td>
    <td>{{$datas->phone_no}}</td>
    <td><a href="{{ route('edit',$datas->id) }}" class="btn btn-warning"> edit </a></td>
    <td><a href="{{ route('delete',$datas->id) }}" class="btn btn-danger"> delete </a> </td>
</tr>
    @endforeach
</table><center>
@endsection