<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">List of Student follow up</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                        <a class="nav-link " data-toggle="tab" href="{{route('student.index')}}">Follow up student</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="{{route('outFollowupView')}}">Out Follow Up</a>
                        </li>
                    </ul>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
