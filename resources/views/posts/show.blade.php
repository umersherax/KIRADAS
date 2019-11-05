@extends('layouts.app')

@section('content')   
        <h2>{{$post->title}}</h2>
        <p>{{$post->body}}</p>
        <hr>
        <small>Written on {{$post->created_at}}by {{$post->user->name}}</small>
        <hr>
        @if(!Auth::guest())
            @if(Auth::user()->id==$post->user_id or Auth::user()->credentials=="admin")
                <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
                {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST', 'class'=>'pull-md-right pull-xl-right pull-lg-right pull-sm-right pull-xs-right'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete',['class'=>"btn btn-danger"])}}
                {!!Form::close()!!}
                @endif
    @endif
    
@endsection
