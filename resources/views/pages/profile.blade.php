@extends('templates.default')

    @section('content')
    <br><br>
    <div class="container ">
        <div class="row card">
            <div class="col-md-8 col-md-offset-1 card-body">
                <img src="/assets/uplouds/avatars/{{$user->avatar}}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px; ">
                <h2>{{$user->name}}'s Profile</h2>
                <form enctype="multipart/form-data" action="/profile"method="POST">
                    <label for="">Update Profile Images</label>
                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="submit" class="pull-right btn btn-sm btn-primary" id="">
                </form>
            </div>
        
        </div>
    </div>
    @endsection