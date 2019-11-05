@extends('layouts.app')

@section('content')
        <br>
        <br>
        <br>
        <h1>Create Category</h1>
        {!! Form::open(['action'=>'CategoriesController@store','method'=>'POST'])!!}
        
            <div class="form-group">
                {{Form::label('name','Name')}}
                {{Form::text('name','',['class'=>'form-control','placeholder'=>'name'])}}
            </div>
            <div class="form-group">
                    {{Form::label('parent','Parent')}}
                    {{Form::textarea('parent','',['class'=>'form-control','placeholder'=>'parent'])}}
                </div>
                
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        {!! Form::close()!!}
       
@endsection
