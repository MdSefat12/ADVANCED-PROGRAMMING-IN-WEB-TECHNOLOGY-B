@extends("layouts.app")

@section("content")

@if(Session::get("user")) {{Session::get("user")}}





<br>

<br>

<br>

<a class ="btn btn-danger" href="{{route('logout')}}"> log out </a>
@endif
@endsection