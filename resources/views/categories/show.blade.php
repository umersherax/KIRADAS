@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ads</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    
                    
                            @foreach($posts as $post)
                            

                                <td><h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3></td>
                                
                            
                            
                            @endforeach
                            
                        
                       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
