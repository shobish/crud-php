@extends("Layout")

@section("content")
<h1>list</h1>
@if(Session::get("success"))
<div class="alert alert-success" role="alert">
    {{Session::get("success")}}
</div>
@endif

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Age</th>
            <th scope="col">Class</th>
            <th scope="col">Address</th>
            <th scope="col">Phone</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @php
        $num=1;
        @endphp
        @foreach($data as $item)
        <tr>
            <th scope="row">{{$num++}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->age}}</td>
            <td>{{$item->class}}</td>
            <td>{{$item->address}}</td>
            <td>{{$item->phone}}</td>
            <td>
                <a href="edit/{{$item->id}}"><button type="button" class="btn btn-primary">edit</button> </a>
                <a href="delete/{{$item->id}}"><button type="button" class="btn btn-danger">delete</button> </a>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>



@stop