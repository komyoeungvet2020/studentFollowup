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
          <!-- Form for add comments -->
                <form action="{{route('addComment',$student->id)}}" method="POST">
                @csrf
                  <div class="form-group">
                      <textarea name="comment" class="form-control" placeholder="Write a comment" required></textarea>
                  </div>
                  <button type="submit" class="btn btn-success float-right">Post</button>
              </form>
         <!-- view comments-->
                  <h6> Student name: {{$student->firstname." "}}{{" ".$student->lastname}}</h6>
                  @foreach ($student->comments as $comment)
                   <h6>Comment by: {{$comment->user->firstname}} Date: {{$comment->created_at}}</h6>
                   <div class="jumbotron" style="padding:15px">
                    <p>{{$comment->comment}}</p>
                    @if ($comment->user->firstname == Auth::user()->firstname)
                    <a href="{{route('editComment',$comment->id)}}"><i class='fas fa-pen' style="color: teal"></i></a>
                    <a href="{{route('deleteComment',$comment->id)}}" onclick="return confirm('Are you sure you want to delete?')"><i class='fas fa-trash' style="color: red"></i></a>
                    @endif
                   </div>
                     
                @endforeach
            </div>
         </div> 
      </body>
</html>