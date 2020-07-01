    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Follow up student</a>
                        </li>
                        <li class="nav-item">
                        <a href="{{route('outFollowupView')}}" class="nav-link" >Out Follow Up</a>
                    </li>
                  </ul>
                    <br>
                    <div class="container mt-5">
                        <div class="col-12">
                        @if (Auth::user()->firstname == 'admin')
                            <a href="{{route('home.create')}}" data-toggle="modal" data-target="#myModal"><button class="btn btn-primary">add student</button></a>
                            @endif
                            <table class="table table-bordered">
                                <tr>
                                    <th>Profile</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Class</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($student as $students)
                                @if ($students->activeFollowup ==1)
                                <tr>
                                    <td><img src="{{asset('img/'.$students->picture)}}" style="width:80px"></td>
                                    <td>{{$students->firstname}}</td>
                                    <td>{{$students->lastname}}</td>
                                    <td>{{$students->class}}</td>
                                    <td>
                                        <a href="{{route('home.show',$students->id)}}" ><i class="fas fa-eye" style="color: teal"></i></a>
                                        @if (Auth::user()->firstname == 'admin')
                                        <a href="{{route('home.edit',$students->id)}}"><i class='fas fa-pen'></i></a>
                                        <a href="{{route('outfollowup', $students->id)}}"><i class="fas fa-user-times" style="color: green"></i></a>
                                         @endif
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <!-- Form for add student -->
                    <div class="modal" id="myModal">
                    <div class="modal-dialog">
                      <div class="modal-content">
                      
                        <!-- Modal Header -->
                        <div class="modal-header">
                          <h4 class="modal-title" class="text-center">Add Student</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        
                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="container mt-5">
                                <div class="row">
                                    <div class="col-12">
                                                <form action="{{route('home.store')}}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">
                                                        <input type="text" name="first" class="form-control" placeholder="Firstname">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="last" class="form-control" placeholder="Lastname">
                                                    </div>
                                                    <div class="form-group">
                                                         <select name="tutor" class="form-control">
                                                             <option value="admin">admin</option>
                                                             <option value="normal">normal</option>
                                                         </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <select name="class" class="form-control">
                                                            <option value="">--Class--</option>
                                                            <option value="WEB2020A">WEB2020A</option>
                                                            <option value="WEB2020B">WEB2020B</option>
                                                            <option value="SNA2020">SNA2020</option>
                                                            <option value="2021A">2021A</option>
                                                            <option value="2021B">2021B</option>
                                                            <option value="2021C">2021C</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group"> 
                                                        <input type="file" name="picture" class="form-control" required autocomplete="picture">
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea name="descript" id="" class="form-control" required placeholder="Description...."></textarea>
                                                    </div>
                                                 <button type="submit" class="btn btn-success float-right">Submit</button>
                                            <button type="button" class="btn btn-danger" style="color:#fff"><a href="{{route('home')}}">Cancel</a></button>
                                        </form>
                                     </div>
                                </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
</div>
@endsection
                  




