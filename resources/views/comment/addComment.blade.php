<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>addComment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
      <div class="container mt-5">
          <div class="col-3"></div>
          <div class="col-6">
              <div class="card">
                  <div class="card-header">Comment</div>
                  <div class="card-body">
                      <form action="{{route('addComment',$student->id)}}" method="POST">
                        @csrf
                          <div class="form-group">
                              <input type="text" name="comment" class="form-control" placeholder="Comment">
                          </div>
                          <button type="submit" class="btn btn-success float-right">Submit</button>
                          <button type="reset" class="btn btn-danger"><a href="{{route('student.index')}}">Cancel</a></button>
                      </form>
                  </div>
              </div>
          </div>
          <div class="col-3"></div>
      </div>
</body>
</html>