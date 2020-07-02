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
  <!--table for view detail student-->
    <div class="container mt-5">
        <div class="col-8">
            <table class="table table-border">
                @if ($student->activeFollowup ==1)
                <tr>
                    <th class="header-table">Profile</th>
                    <td><img src="{{asset('img/'.$student->picture)}}" style="width:80px"></td>
                   </td>
                    <tr>
                        <th class="header-table">Firstname</th>
                        <td>{{$student->firstname}}</td>
                    </tr>
                    <tr>
                        <th class="header-table">Lastname</th>
                        <td>{{$student->lastname}}</td>
                    </tr>
                      <tr>
                        <th class="header-table">Class</th>
                        <td>{{$student->class}}</td>
                      </tr>
                      <tr>
                        <th class="header-table">Descrition</th>
                        <td>{{$student->description}}</td>
                      </tr>
                      <tr>
                        <th class="header-table">Tutor</th>
                        <td>{{$student->user->firstname}}</td>
                      </tr>
                      @endif
                 </table>
            </div>
         </div> 
      </body>
</html>