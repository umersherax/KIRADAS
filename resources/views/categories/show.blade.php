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
                    
                    
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                            @foreach($posts as $post)
                            <tr>

                                <td><h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3></td>
                                
                            </tr>
                            
                            @endforeach
                            
                        </tr>
                       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
