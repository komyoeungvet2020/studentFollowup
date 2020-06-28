<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
    
    <div class="container mt-5">
        <div class="col-12">
            <table class="table table-bordered">
                <tr>
                    <th>Picture</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Class</th>
                    <th>Action</th>
                </tr>
                @foreach ($student as $students)
                   @if ($students->activeFollowup == 0)
                <tr>
                    <td><img src="{{asset('img/'.$students->picture)}}" style="width:80px"></td>
                    <td>{{$students->firstname}}</td>
                    <td>{{$students->lastname}}</td>
                    <td>{{$students->class}}</td>
                    <td>
                      @if (Auth::user()->firstname =='admin')
                        <a href="{{route('followup', $students->id)}}"><i class="fas fa-user-plus" style="color: red"></i></a>
                        @endif
                    </td>
                </tr>
                @endif
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>