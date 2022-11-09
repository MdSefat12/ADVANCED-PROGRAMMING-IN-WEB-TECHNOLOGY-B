@extends("layouts.app")
@section("content")

<h2> Teacher Created </h2>
<form action="{{route('teachercreated')}}" class="form-group" method = "post">
    <!-- Cross Site Request Forgery-->
    {{csrf_field()}}
     
    <div class="col-md-4 form-group">
    <span>NAME</span>
    <input type="text" name="name" value="{{old('name')}}" class="form-control">
    @error("name")
    <span class="text-denger">{{$message}}</span>
    @enderror
</div>
<div class="col-md-4 form-group">
    <span>PASSWORD</span>
    <input type="text" name="password" value="{{old('password')}}" class="form-control">
    @error("password")
    <span class="text-denger">{{$message}}</span>
    @enderror
</div>

<div class="col-md-4 form-group">
    <span>EMAIL</span>
    <input type="text" name="email" value="{{old('email')}}" class="form-control">
    
    @error("email")
    <span class="text-denger">{{$message}}</span>
    @enderror
</div>

<input type="submit"  class="btn btn-success" value="Add">

</form>
@endsection

