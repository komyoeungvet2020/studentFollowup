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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="col-8">
            <table class="table table-bordered">
                @if ($students->activeFollowup ==1)
                <tr>
                    <th class="header-table">Profile</th>
                    <td><img src="{{asset('img/'.$students->picture)}}" style="width:80px"></td>
                </td>
                    <tr>
                        <th class="header-table">Firstname</th>
                        <td>{{$students->firstname}}</td>
                    </tr>
                    <tr>
                        <th class="header-table">Lastname</th>
                        <td>{{$students->lastname}}</td>
                    </tr>
                      <tr>
                        <th class="header-table">Class</th>
                        <td>{{$students->class}}</td>
                      </tr>
                      <tr>
                        <th class="header-table">Descrition</th>
                        <td>{{$students->description}}</td>
                      </tr>
                      <tr>
                        <th class="header-table">Comment</th>
                        <td><a href="{{route('createComment',$students->id)}}"><i class="fas fa-comment" style="color:green"></i></a></td>
                      </tr>
                      @endif
            </table>
        </div>
    </div>
</body>
</html>