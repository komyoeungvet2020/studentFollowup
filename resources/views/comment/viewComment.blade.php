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
          <a href=""><button class="btn btn-primary">Add comment</button></a>
          <div class="col-1"></div>
          <div class="col-10">
            <?php
                $role = DB::table('users')->where('user_id', Auth::user()->id)->first();
                ?>
              <table class="table table-bordered">
                  <tr>
                      <th>ID</th>
                      <th>comment</th>
                      <th>Action</th>
                  </tr>
                  @foreach ($student->comments as $comment)
                  <tr>
                    <td>{{$comment->id}}</td>
                    <td>{{$comment->student->firstname}}.{{$comment->student->lastname}}</td>
                    <td>{{$comment->user->firstname}}</td>
                    <td>{{$comment->comment}}</td>
                    <td>
                        @if ($comment->user->firstname == Auth::user()->firstname)
                        <a href=""><button><i class='fas fa-pen' style="color: teal"></i></button></a>
                        <a href=""><button><i class='fas fa-trash' style="color: red"></i></button></a>
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