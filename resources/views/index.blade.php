@extends('layouts.app')
@section('title')
    Главная
@endsection
@section('content')
    <div class="jumbotron jumbotron-fluid d-none d-md-block ">
        <div class="container">
            <h1 class="display-4">es.primereason.ru</h1>
            @if(!empty(Auth::user()))
                <p class="lead">welcome! <a href="#" class="text-info">{{Auth::user()->name}}</a></p>
            @endif
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            @foreach($headings as $heading)
                @if($loop->first)
                    <div class="card-group">
                        @endif
                        <div class="card border-secondary" style="width: 18rem;">
                            <img src="{{asset($heading['imgPath'])}}"
                                 class="card-img-top rounded mx-auto d-block p-2 m-1 h-25 d-none d-md-block"
                                 alt="{{$heading['imgAlt']}}">
                            <div class="card-body ">
                                <h5 class="card-title">{{$heading['title']}}</h5>
                                <p class="card-text">{{$heading['textPreview']}}</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{route($heading['route'])}}" class="btn btn-primary">{{__('View ...')}}</a>
                            </div>
                        </div>
                        @if($loop->index === 5)
                    </div>
                    <div class="card-group">
                        @endif
                        @if($loop->last)
                    </div>
                @endif
            @endforeach

        </div>
    </div>
@endsection
