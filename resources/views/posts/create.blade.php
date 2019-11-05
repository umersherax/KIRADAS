@extends('layouts.app')

@section('content')
        <br>
        <br>
        <br>
        <h1>Create Ad</h1>
        
        {!! Form::open(['action'=>'PostsController@store','method'=>'POST','enctype'=>'multipart/data'])!!}
        
            <div class="form-group">
                {{Form::label('title','Title')}}
                {{Form::text('title','',['class'=>'form-control','placeholder'=>'title'])}}
            </div>
            <div class="form-group">
                    {{Form::label('body','Body')}}
                    {{Form::textarea('body','',['class'=>'form-control','placeholder'=>'Enter body'])}}
                </div>
                <div class="form-group">
                        {{Form::label('category_id','Category_id')}}
                        {{Form::text('category_id','',['class'=>'form-control','placeholder'=>'Category ID'])}}
                    </div>
                
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        {!! Form::close()!!}
       
@endsection
