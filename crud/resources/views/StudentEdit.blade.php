<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add-Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2> edit Student</h2>
                @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                <form method="post" action={{url("update-student")}}>
                    @csrf
                    <input type="hidden" name="id" value="{{$data->id}}">
                    <div class=" mb-3">
                        <label name="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" value={{$data->name}}>
                    </div>
                    @error('name')
                    <div class="alert alert-danger">{{$message}}</div>

                    @enderror
                    <div class="mb-3">
                        <label name="class" class="form-label">class</label>
                        <input type="text" name="class" class="form-control" id="class" placeholder="Enter your class" value={{$data->class}}>
                    </div>
                    @error('class')
                    <div class="alert alert-danger">{{$message}}</div>

                    @enderror
                    <div class="mb-3">
                        <label name="age" class="form-label">Age</label>
                        <input type="text" name="age" class="form-control" id="age" placeholder="Enter your age" value={{$data->age}}>
                    </div>
                    @error('age')
                    <div class="alert alert-danger">{{$message}}</div>

                    @enderror
                    <div class="mb-3">
                        <label name="email" class="form-label">email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" value={{$data->email}}>
                    </div>
                    @error('email')
                    <div class="alert alert-danger">{{$message}}</div>

                    @enderror
                    <div class="mb-3">
                        <label name="phone" class="form-label">phone</label>
                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter your number" value={{$data->phone}}>
                    </div>
                    @error('phone')
                    <div class="alert alert-danger">{{$message}}</div>

                    @enderror

                    <button type="submit" class="btn btn-success">submit</button>
                    <a href={{url('student-list')}} class="btn btn-danger">back</a>
            </div>

        </div>


    </div>

</body>

</html>