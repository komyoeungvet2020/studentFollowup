<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ViewComment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
   <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
      <div class="container mt-5">
          <div class="col-1"></div>
          <div class="col-10">
              <table class="table table-bordered">
                  <tr>
                      <th>Student</th>
                      <th>Comment</th>
                      <th>Tutor</th>
                      <th>Action</th>
                  </tr>
                  <tr>
                    <td>{{$student->firstname." "}}{{" ".$student->lastname}}</td>
                    @foreach ($student->comments as $comment)
                    <td>{{$comment->comment}}</td>
                    <td>{{$comment->user->firstname}}</td>
                    <td>
                        @if ($comment->user->firstname == Auth::user()->firstname)
                        <a href="{{route('editComment',$comment->id)}}"><i class='fas fa-pen' style="color: teal"></i></a>
                        <a href="{{route('deleteComment',$comment->id)}}"><i class='fas fa-trash' style="color: red"></i></a>
                        @endif
                    </td>
                 </tr>
                  @endforeach
              </table>
          </div>
          <div class="col-1"></div>
      </div>
</body>
</html>