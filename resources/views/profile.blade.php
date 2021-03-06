@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="card">



                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                    <img src="/uploads/avatars/{{$profile->avatar}}" style="width:120px; height:125px; float:left; border-radius:50%; margin-left:25px">
                    <div class="card-header"><h3>{{$profile->fname}}'s Profile</h3></div>

                    <div class="card-body ">
                        <span class="font-weight-bold">First Name:</span> {{$profile->fname}}</br>
                        <span class="font-weight-bold">Last Name: </span>{{$profile->lname}}</br>
                        <span class="font-weight-bold">Body: </span>{{$profile->body}}</br>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-success float-right" href="{{ route('profile.edit', ['profile_id' => $profile->id,'user_id' => $profile->user->id]) }}">
                            Edit
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection