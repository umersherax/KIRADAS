@extends('layouts.app')

@section('content')
        <br>
        <br>
        <br>
        <h1>Edit Ad</h1>
        {!! Form::open(['action'=>['PostsController@update',$post->id],'method'=>'POST','enctype'=>'multipart/form-data'])!!}
            <div class="form-group">
                {{Form::label('title','Title')}}
                {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'title'])}}
            </div>
            <div class="form-group">
                    {{Form::label('body','Body')}}
                    {{Form::textarea('body',$post->body,['class'=>'form-control','placeholder'=>'Enter body'])}}
                </div>
                <div class="form-group">
                        {{Form::file('cover_image')}}

                    </div>

                    @if($post->category_id==6)
                    <div class="form-group">
                        {{Form::label('num_of_products','Num_of_products')}}
                        {{Form::textarea('num_of_products',$post->num_of_products,['class'=>'form-control','placeholder'=>'Enter number of products'])}}
                    </div>
                    @endif
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        {!! Form::close()!!}
       
@endsection
