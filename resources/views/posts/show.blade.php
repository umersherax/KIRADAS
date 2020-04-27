@extends('layouts.app')

@section('content')   
<style>
  h4 { font-family: 'Open Sans'; margin: 0;}

.modal,body.modal-open {
    padding-right: 0!important
}

body.modal-open {
    overflow: auto
}

body.scrollable {
    overflow-y: auto
}

.modal-footer {
	display: flex;
	justify-content: flex-start;
	.btn {
		position: absolute;
		right: 10px;
	}
  
}

  </style>


<script>

$( 'a a' ).remove();

document.documentElement.setAttribute("lang", "en");
document.documentElement.removeAttribute("class");

axe.run( function(err, results) {
  console.log( results.violations );
} );
  </script>
    
      <h2 align="center">{{$post->title}}</h2>
      
      <br>


      <div class="container mt-4">
        <div class="row">
          <div class="col-md-4">
            <a href="#" data-target="#modalIMG" data-toggle="modal" class="color-gray-darker c6 td-hover-none">
              <div class="ba-0 ds-1">
                <img alt="Card image cap" class="card-img-top" style="height:250px;
                width: 330px;" src="/storage/cover_images/{{$post->cover_image}}" />
                
              </div>	
            </a>
            
          </div>
          <div class="col-md-4">
            <a href="#" data-target="#modalIMGa" data-toggle="modal" class="color-gray-darker c6 td-hover-none">
              <div class="ba-0 ds-1">
                <img alt="Card image cap" class="card-img-top" style="height:250px;
                width: 330px;" src="/storage/cover_images/{{$post->cover_imag}}" />
                
              </div>	
            </a>
          </div>
          <div class="col-md-4">
            <a data-target="#modalIMGaa" data-toggle="modal" href="#" class="color-gray-darker td-hover-none">
              <div class="ba-0 tp-s">
                <img alt="Card image cap" class="card-img-top" style="height:250px;
                width: 330px;" src="/storage/cover_images/{{$post->cover_ima}}">
               
              </div>	
            </a>
          </div>		
        </div>
      
        
      
        
      </div>
      
      <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-body mb-0 p-0">
              <img src="/storage/cover_images/{{$post->cover_image}}" alt="" style="width:100%">
            </div>
            <div class="modal-footer">
            
              <button class="btn btn-outline-primary btn-rounded btn-md ml-4 text-center" data-dismiss="modal" type="button">Close</button>
            </div>
          </div>
        </div>
      </div>
      
        
      
        
      </div>
      
      <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMGa" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-body mb-0 p-0">
              <img src="/storage/cover_images/{{$post->cover_imag}}" alt="" style="width:100%">
            </div>
            <div class="modal-footer">
             
              <button class="btn btn-outline-primary btn-rounded btn-md ml-4 text-center" data-dismiss="modal" type="button">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMGaa" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-body mb-0 p-0">
              <img src="/storage/cover_images/{{$post->cover_ima}}" alt="" style="width:100%">
            </div>
            <div class="modal-footer">
             
              <button class="btn btn-outline-primary btn-rounded btn-md ml-4 text-center" data-dismiss="modal" type="button">Close</button>
            </div>
          </div>
        </div>
      </div>

      




<br>
<br>
      
    <h2 align="center">Call now: {{$post->phone_no}}<h2>
        <br><br>
        
       
        
        <div>
            {{$post->body}}
         
        </div><hr>
        
        <table class="table ">
                <thead class="thead-dark">
                  <tr>
                    
                    <th scope="col">Price</th>
                    <th scope="col">Area</th>
                    <th scope="col">Exact Address</th>
            
                  </tr>
                </thead>
                <tbody>
                  <tr>
                   
                    <td>{{$post->rent_price}} rupees</td>
                    <td>{{$post->area}}</td>
                    <td>{{$post->exact_address}}</td>
                
                  </tr>
                 
                </tbody>
              </table>
              @if($post->category_id==2)
              <table class="table ">
                <thead class="thead-dark">
                  <tr>
                    
                    <th scope="col">No. of beds</th>
                    <th scope="col">No. of baths</th>
                    <th scope="col">Floors</th>
                    <th scope="col">Covered Area</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                   
                    <td>{{$post->beds}} </td>
                    <td>{{$post->washroom}}</td>
                    <td>{{$post->num_of_portions}}</td>
                    <td>{{$post->covered_area}}</td>
                  </tr>
                 
                </tbody>
              </table>
              @elseif($post->category_id==3) 
              <table class="table ">
                <thead class="thead-dark">
                  <tr>
                    
                    <th scope="col">No. of Floors</th>
                    <th scope="col">Covered Area</th>
                  </tr>
                </thead>
                <tbody>
                  <tr> 
                    <td>{{$post->num_of_portions}} </td>
                    <td>{{$post->covered_area}}</td>
                  </tr>
                </tbody>
              </table>
              @elseif($post->category_id==10)
              <table class="table ">
                <thead class="thead-dark">
                  <tr>
                    
                    <th scope="col">Wifi</th>
                    <th scope="col">Mess</th>
                    <th scope="col">Washroom</th>
                    <th scope="col">Parking</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                   
                    <td>{{$post->wifi}} </td>
                    <td>{{$post->mess}}</td>
                    <td>{{$post->A_washroom}}</td>
                    <td>{{$post->parking}}</td>
                  </tr>
                 
                </tbody>
              </table>
              @elseif($post->category_id==9)
              <table class="table ">
                <thead class="thead-dark">
                  <tr>
                    
                    <th scope="col">Numbers of Vehicles</th>
                    <th scope="col">Seating Capacity</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                   
                    <td>{{$post->num_of_products}} </td>
                    <td>{{$post->Sitting_Cap}}</td>

                  </tr>
                 
                </tbody>
              </table> 
              @elseif($post->category_id==6||$post->category_id==8)
              <table class="table ">
                <thead class="thead-dark">
                  <tr>
                    
                    <th scope="col">Numbers of Vehicles</th>
                    <th scope="col">Engine Capacity</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                   
                    <td>{{$post->num_of_products}} </td>
                    <td>{{$post->CC}}</td>

                  </tr>
                 
                </tbody>
              </table> 

              @endif
        
        
        <hr>
       
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
