@extends('templates.default')

    @section('content')
    
    <div class="alert alert-success" role="alert">
       Selamat Datang DiReport 110... {{Auth::user()->name ?? ''}}
    </div>
    <br><br><br><br><br><br>
    <div class="card text-center" style="width: 18rem, margin-left:10px;">
        <img class="card-img-top " src="{{url('/assets/dist/img/110.png')}}" alt="Card image cap">
        <div class="card-body">
            <p class="card-text">Selamat datang Eos 110</p>
        </div>  
    </div>
    @endsection