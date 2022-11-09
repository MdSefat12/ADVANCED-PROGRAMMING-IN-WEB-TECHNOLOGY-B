
@extends("layouts.app")
@section("content")

<table class = "table table-border">
    <tr>
  
        <th>ID</th>
        <th>NAME</th>
        <th>PASSWORD</th>
        <th>EMAIL</th>

        <th>ACTION</th>

</tr>

@foreach($teacher as $teachers)
<tr>
    <td>{{$teachers->name}}</td>
    <td>{{$teachers->password}}</td>
    <td>{{$teachers->email}}</td>
   
    
    
    
    <td><a href="">EDIT</a></td>
    
    <td><a href="">DELETE</a></td>
</tr>
@endforeach

</table>
@endsection