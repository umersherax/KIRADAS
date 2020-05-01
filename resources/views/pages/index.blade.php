

@extends('layouts.app')

@section('content')
        <div class="jumbotron text-center">
             <style>
                 img {
  height: 200px;
  width: 300px;
}
                 </style>
                
                <h3>Most Recent Ads</h3>
                
                @if(count($posts)>0)
                
                <div class="card-deck">
                @foreach ($posts as $post)
                
                <br >
                <br >
                @if(($loop->index)%3==0)
                <div class="card-deck">
                    @endif
                <br >
                
                    <a href="/posts/{{$post->id}}">
                    <div class="card">
                        <a href="/posts/{{$post->id}}">
                        <img class="card-img-top" src="{{asset("images/".$post->cover_image)}}" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">{{$post->title}}</h5>
                        <p class="card-text">{{$post->body}}</p>
                          <p class="card-text"><small class="text-muted">{{$post->created_at}}</small></p>
                        </div>
                        <a>
                      </div>
                    
                @endforeach
                    </div>
                @else()
                <p>No post found</p>
           @endif()
          
           
 @endsection