@extends('layouts.app')

@section('content')


<style>
    img {
height:250px;
width: 330px;
}
  </style> 
       <h3>Ads</h3>
       @if($id ?? '')
                @if($flt ?? '' && $a ?? '' && $b ?? '')
                <div class="container">
                    <h4>Price sort</h4>
                    <form action= "{{route('testcat', $id)}}"method="post">
                        @csrf
                        <div class="form-group row">
                            <div class="col-xs-2">    
                                <input class="form-control" id="ex1" type="text" placeholder="Min" value="{{$a ?? ''}}" name="min">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xs-2">
                                <input class="form-control" id="ex1" type="text" placeholder="Max" value="{{$b ?? ''}}" name="max">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sort</button>
                </div>
            
                <br>
                <div class="form-group">
                <label for="exampleFormControlSelect1">SORT BY</label>
                <select class="form-control" id="exampleFormControlSelect1" style="width:18%" name="see">
                    <option>Filter</option>
                    <option @if($flt==1) selected @endif>High to low</option>
                    <option @if($flt==2) selected @endif>Low to high</option>
                    <option @if($flt==3) selected @endif>Newly Listed</option>
                    <option @if($flt==4) selected @endif>Oldest Listed</option> 
                </select>
                <br>
                <button type="submit" class="btn btn-primary" >Sort</button>
                </div>
            
                </form>
            
            
            @elseif($a ?? '' && $b ?? '' )
            <div class="container">
                <h4>Price sort</h4>
                <form action= "{{route('testcat', $id)}}"method="post">
                    @csrf
                    <div class="form-group row">
                        <div class="col-xs-2">    
                        <input class="form-control" id="ex1" type="text" value="{{$a ?? ''}}" name="min">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xs-2">
                        <input class="form-control" id="ex1" type="text" value="{{$b ?? ''}}" name="max">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Sort</button>
                
            </div>
            <br>
            <div class="form-group">
                <label for="exampleFormControlSelect1">SORT BY</label>
                <select class="form-control" id="exampleFormControlSelect1" style="width:18%" name="see">
                    <option>Filter</option>
                    <option >High to low</option>
                    <option>Low to high</option>
                    <option>Newly Listed</option>
                    <option>Oldest Listed</option> 
                </select>
                <br>
                <button type="submit" class="btn btn-primary" >Sort</button>
            </div>
            
            
            <br>
            @elseif($flt ?? '')
            <div class="form-group">
                <div class="container">
                    <h4>Price sort</h4>
                    <form action= "{{route('testcat', $id)}}"method="post">
                        @csrf
                        <div class="form-group row">
                            <div class="col-xs-2">    
                            <input class="form-control" id="ex1" type="text" placeholder="Misn" name="min">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xs-2">
                            <input class="form-control" id="ex1" type="text" placeholder="Max" name="max">
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Sort</button>   
                </div>
            </div>
                <br>
                <div class="form-group">
                <label for="exampleFormControlSelect1">SORT BY</label>
                <select class="form-control" id="exampleFormControlSelect1" style="width:18%" name="see">
                    <option>Filter</option>
                    <option @if($flt==1) selected @endif>High to low</option>
                    <option @if($flt==2) selected @endif>Low to high</option>
                    <option @if($flt==3) selected @endif>Newly Listed</option>
                    <option @if($flt==4) selected @endif>Oldest Listed</option> 
                </select>
                <br>
                <button type="submit" class="btn btn-primary" >Sort</button>
                </div>
                
            
                
            
            @else
            <div class="container">
                <h4>Price sort</h4>
                <form action= "{{route('testcat', $id)}}"method="post">
                    @csrf
                    <div class="form-group row">
                        <div class="col-xs-2">    
                        <input class="form-control" id="ex1" type="text" placeholder="Min" name="min">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xs-2">
                        <input class="form-control" id="ex1" type="text" placeholder="Max" name="max">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Sort</button>
                
            </div>
            <br>
            <div class="form-group">
                <label for="exampleFormControlSelect1">SORT BY</label>
                <select class="form-control" id="exampleFormControlSelect1" style="width:18%" name="see">
                    <option>Filter</option>
                    <option >High to low</option>
                    <option>Low to high</option>
                    <option>Newly Listed</option>
                    <option>Oldest Listed</option> 
                </select>
            </div>
            <button type="submit" class="btn btn-primary" >Sort</button>
            </form>
            @endif








       @else()
       @if($flt ?? '' && $a ?? '' && $b ?? '')
    <div class="container">
        <h4>Price sort</h4>
        <form action="{{ action('PostsController@sort') }}" method="post">
            @csrf
            <div class="form-group row">
                <div class="col-xs-2">    
                    <input class="form-control" id="ex1" type="text" placeholder="Min" value="{{$a ?? ''}}" name="min">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-xs-2">
                    <input class="form-control" id="ex1" type="text" placeholder="Max" value="{{$b ?? ''}}" name="max">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sort</button>
    </div>

    <br>
    <div class="form-group">
    <label for="exampleFormControlSelect1">SORT BY</label>
    <select class="form-control" id="exampleFormControlSelect1" style="width:18%" name="see">
        <option>Filter</option>
        <option @if($flt==1) selected @endif>High to low</option>
        <option @if($flt==2) selected @endif>Low to high</option>
        <option @if($flt==3) selected @endif>Newly Listed</option>
        <option @if($flt==4) selected @endif>Oldest Listed</option> 
    </select>
    <br>
    <button type="submit" class="btn btn-primary" >Sort</button>
    </div>

    </form>


@elseif($a ?? '' && $b ?? '' )
<div class="container">
    <h4>Price sort</h4>
    <form action="{{ action('PostsController@sort') }}" method="post">
        @csrf
        <div class="form-group row">
            <div class="col-xs-2">    
            <input class="form-control" id="ex1" type="text" value="{{$a ?? ''}}" name="min">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-2">
            <input class="form-control" id="ex1" type="text" value="{{$b ?? ''}}" name="max">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Sort</button>
    
</div>
<br>
<div class="form-group">
    <label for="exampleFormControlSelect1">SORT BY</label>
    <select class="form-control" id="exampleFormControlSelect1" style="width:18%" name="see">
        <option>Filter</option>
        <option >High to low</option>
        <option>Low to high</option>
        <option>Newly Listed</option>
        <option>Oldest Listed</option> 
    </select>
    <br>
    <button type="submit" class="btn btn-primary" >Sort</button>
</div>


<br>
@elseif($flt ?? '')
<div class="form-group">
    <div class="container">
        <h4>Price sort</h4>
        <form action="{{ action('PostsController@sort') }}" method="post">
            @csrf
            <div class="form-group row">
                <div class="col-xs-2">    
                <input class="form-control" id="ex1" type="text" placeholder="Misn" name="min">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-xs-2">
                <input class="form-control" id="ex1" type="text" placeholder="Max" name="max">
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Sort</button>   
    </div>
</div>
    <br>
    <div class="form-group">
    <label for="exampleFormControlSelect1">SORT BY</label>
    <select class="form-control" id="exampleFormControlSelect1" style="width:18%" name="see">
        <option>Filter</option>
        <option @if($flt==1) selected @endif>High to low</option>
        <option @if($flt==2) selected @endif>Low to high</option>
        <option @if($flt==3) selected @endif>Newly Listed</option>
        <option @if($flt==4) selected @endif>Oldest Listed</option> 
    </select>
    <br>
    <button type="submit" class="btn btn-primary" >Sort</button>
    </div>
    

    

@else
<div class="container">
    <h4>Price sort</h4>
    <form action="{{ action('PostsController@sort') }}" method="post">
        @csrf
        <div class="form-group row">
            <div class="col-xs-2">    
            <input class="form-control" id="ex1" type="text" placeholder="Min" name="min">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-2">
            <input class="form-control" id="ex1" type="text" placeholder="Max" name="max">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Sort</button>
    
</div>
<br>
<div class="form-group">
    <label for="exampleFormControlSelect1">SORT BY</label>
    <select class="form-control" id="exampleFormControlSelect1" style="width:18%" name="see">
        <option>Filter</option>
        <option >High to low</option>
        <option>Low to high</option>
        <option>Newly Listed</option>
        <option>Oldest Listed</option> 
    </select>
</div>
<button type="submit" class="btn btn-primary" >Sort</button>
</form>
@endif
@endif
       @if(count($posts)>0)
                
       <div class="card-group">
       @foreach ($posts as $post)
       
      
       @if(($loop->index)%3==0)
       </div>
       <br>
       <div class="card-group" >
           @endif
       
            
           <a href="/posts/{{$post->id}}">
           <div class="card">
               <a href="/posts/{{$post->id}}">
               <img class="card-img-top" src="storage/cover_images/{{$post->cover_image}}" alt="Card image cap">
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




     