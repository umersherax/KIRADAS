@extends('layouts.app')
@section('content')
        <h3>Categories</h3>
        @if(!Auth::guest())
                            @if(Auth::user()->credentials=="admin")
                                <a href="/categories/create" class="btn btn-primary">Create new category</a>
                            @endif
                        @endif
       
            @foreach ($categories as $category)
                <div class="card p-3 mt-3 mb-3">
                    @if($category->parent=="")
                    <h2><a href="/categories/{{$category->id}}">{{$category->name}}</a></h2>
                    @else
                        <h3><a href="/categories/{{$category->id}}">{{$category->name}}</a></h3>
                        @endif
                        
                </div>
            @endforeach
            
@endsection


