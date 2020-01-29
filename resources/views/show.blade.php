@extends('layouts.app')
@section('content')
    
<main role="main" style="padding-top:10px;">
    @foreach ($posts as $post)
    <div class="well">
            <div class="col-md-12">
                    <div class="card col-md-12">
                            <div class="card-body">
                                <h5 class="card-title"><a>{{$post->email}}</a></h5>
                                <p class="card-text">{{$post->message}}</p>
                                <p class="card-text"><small>Witten on {{$post->created_at}}<br> by {{$post->name}}</small></p>
                            </div>
                        </div>
            </div>
    </div>
@endforeach
</main>  
@endsection
