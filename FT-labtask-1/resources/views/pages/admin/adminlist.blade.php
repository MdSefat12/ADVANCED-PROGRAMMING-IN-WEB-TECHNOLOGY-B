
@extends("layouts.app")
@section("content")

<td><a class="btn btn-success" href="/admindesh">BACK</a></td>


<table class = "table table-border">
    <tr>
  
        <th>Name</th>
        <th>PASSWORD</th>
        <th>EMAIL</th>
        <th>PHONE</th>
        <th>ADDRESS</th>

        <th>ACTION</th>

</tr>

@foreach($students as $student)
<tr>
    <td>{{$student->name}}</td>
    <td>{{$student->password}}</td>
    <td>{{$student->email}}</td>
    <td>{{$student->address}}</td>
    
    <td>{{$student->phone}}</td>
    
    <td><a  class="btn btn-success" href="/adminedit/{{$student->id}}/{{$student->name}}">EDIT</a></td>
    
    <td><a class ="btn btn-danger" href="/admindelete/{{$student->id}}/{{$student->name}}">DELETE</a></td>
</tr>
@endforeach

</table>
@endsection