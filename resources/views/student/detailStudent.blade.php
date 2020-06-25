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
                <form action="{{route('addComment',$student->id)}}" method="POST">
                @csrf
                  <div class="form-group">
                      <textarea name="comment" class="form-control" placeholder="Write a comment" required></textarea>
                  </div>
                  <button type="submit" class="btn btn-success float-right">Post</button>
              </form>
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
                      <a href="{{route('editComment',$comment->id)}}" data-toggle="modal" data-target="#myModal"><i class='fas fa-pen' style="color: teal"></i></a>
                      <a href="{{route('deleteComment',$comment->id)}}" onclick="return confirm('Are you sure you want to delete?')"><i class='fas fa-trash' style="color: red"></i></a>
                      @endif
                  </td>
               </tr>
                @endforeach
            </table>
         </div>
         <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Update comment</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
                    <form action="{{route('updateComment',$comment->id)}}" method="POST">
                      @csrf
                      @method('patch')
                        <div class="form-group">
                            <textarea name="comment" value="{{$comment->comment}}" class="form-control" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Save changes</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </form>
               </div>
           </div>
        </div>
     </div>
   </div> 
    </body>
</html>