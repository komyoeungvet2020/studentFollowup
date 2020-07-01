<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update comment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
 <div class="container mt-5">
   <div class="row">
     <div class="col-3"></div>
     <div class="col-6">
      <div class="card">
        <div class="card-header text-center">Update comment</div>
        <div class="card-body">
          <form action="{{route('updateComment',$comment->id)}}" method="POST">
            @csrf
            @method('patch')
              <div class="form-group">
                  <textarea name="comment"class="form-control" required>{{$comment->comment}}</textarea>
              </div>
              <button type="submit" class="btn btn-primary float-right">Save changes</button>
               <a href="#"><button class="btn btn-danger">Close</button></a>
            </form>
        </div>
      </div>
     </div>
     <div class="col-3"></div>
   </div>
 </div>
</body>
</html>