<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header text-center"><strong>Update Student</strong></div>
                    <div class="card-body">
                        <form action="{{route('student.update',$student->id)}}" method="POST" enctype="multipart/form-data">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <input type="text" name="first" class="form-control" value="{{$student->firstname}}"required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="last" class="form-control" value="{{$student->lastname}}"required>
                            </div>
                            <div class="form-group">
                                <select name="class" class="form-control">
                                        <option {{($student->class =='WEB2020A')? "selected":""}}>WEB2020A</option>
                                        <option {{($student->class =='WEB2020B')? "selected":""}}>WEB2020B</option>
                                        <option {{($student->class =='SNA2020')? "selected":""}}>SNA2020</option>
                                        <option {{($student->class =='2021A')? "selected":""}}>2021A</option>
                                        <option {{($student->class =='2021B')? "selected":""}}>2021B</option>
                                        <option {{($student->class =='2021C')? "selected":""}}>2021C</option>  
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="tutor" class="form-control">
                                    <option {{($student->user->firstname == 'admin')? "selected":""}}>admin</option>
                                    <option {{($student->user->firstname == 'normal')? "selected":""}}>normal</option>
                                </select>
                           </div>
                           <div class="form-group">
                            <input type="file" name="picture" class="form-control" value="{{$student->picture}}" required autocomplete="picture">
                           </div>
                            <div class="form-group">
                                <textarea name="descript"  class="form-control" value="{{$student->description}}" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-success float-right">Submit</button>
                            <button type="reset" class="btn btn-danger"><a href="{{route('student.index')}}">Cancel</a></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>
</html>