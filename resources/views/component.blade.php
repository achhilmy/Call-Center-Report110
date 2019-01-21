@extends('templates.default')

@section('content')
    @component('component.alert', ['nayeon'=>'twice'])

        @slot('title')
             Terjadi Lagi   
        @endslot

        <strong>ERROR</strong> , Ada yang Error !.
    @endcomponent
@endsection