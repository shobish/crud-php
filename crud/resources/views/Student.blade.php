<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Student List</h2>
                <div>
                    <a href={{url('add-student')}} class="btn btn-primary">Add Student</a>
                </div>
                @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                <table class=" table">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>Name</td>
                            <td>Class</td>
                            <td>Age</td>
                            <td>Email</td>
                            <td>Number</td>
                            <td>Address</td>

                            <td>Action</td>
                        </tr>
                    </thead>
                    @php
                    $i=1;

                    @endphp
                    @foreach($data as $stu) <tbody>
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$stu->name}}</td>
                            <td>{{$stu->class}}</td>
                            <td>{{$stu->age}}</td>
                            <td>{{$stu->email}}</td>
                            <td>{{$stu->phone}}</td>
                            <td>{{$stu->address}}</td>
                            <td><a href={{url('edit-student/'.$stu->id)}} class="btn btn-info">edit</a>
                                |<a href={{url('delete-student/'.$stu->id)}} class="btn btn-danger">delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>

    </div>



</body>

</html>