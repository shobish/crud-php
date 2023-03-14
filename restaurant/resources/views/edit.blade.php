@extends("Layout")

@section("content")

<div class="col-md-6">
    <form action="" method="post">
        @csrf
        <div class=" form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" value="{{$data->name}}" placeholder="Enter name">
        </div>
        <div class=" form-group">
            <label for="name">Email</label>
            <input type="text" class="form-control" value="{{$data->email}}" name="email" placeholder="Enter email">
        </div>
        <div class=" form-group">
            <label for="age">Age</label>
            <input type="text" class="form-control" value="{{$data->age}}" name="age" placeholder="Enter age">
        </div>
        <div class=" form-group">
            <label for="class">Class</label>
            <input type="text" class="form-control" name="class" value="{{$data->class}}" placeholder="Enter class">
        </div>
        <div class=" form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" value="{{$data->address}}" name="address" placeholder="Enter address">
        </div>
        <div class=" form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" value="{{$data->phone}}" name="phone" placeholder="Enter phone">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@stop