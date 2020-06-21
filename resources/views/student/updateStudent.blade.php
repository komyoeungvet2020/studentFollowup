<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AddStudent</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header"><strong>Student</strong></div>
                    <div class="card-body">
                        <form action="{{route('student.update',$student->id)}}" method="POST">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <input type="text" name="first" class="form-control" value="{{$student->firstname}}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="last" class="form-control" value="{{$student->lastname}}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="class" class="form-control" value="{{$student->class}}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="descript" class="form-control" value="{{$student->description}}">
                            </div>
                            <div class="form-group">
                                <input type="file" name="picture" class="form-control" value="{{$student->picture}}">
                            </div>
                            <button type="submit" class="btn btn-success float-right">Submit</button>
                            <button type="reset" class="btn btn-danger">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>
</html>