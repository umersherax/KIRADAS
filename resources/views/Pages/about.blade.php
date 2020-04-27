@extends('layouts.app')
@section('content')
<style>input {
  width: 400px;
  height: 40px;
}

.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
  background-color: #f1f1f1
}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}</style>
<h1>Select a category</h1>
<div class="dropdown">
        <button class="dropbtn" id="main">Category</button>
        <div class="dropdown-content">
        <a href="#" id="v1" onclick="fun(this.id)">Vehicles</a>
        <a href="#" id="p1" onclick="fun(this.id)">Property</a>
        <a href="#" id="e1" onclick="fun(this.id)">events</a>
        </div>
</div>


<div class="dropdown">
        <button class="dropbtn" id="sub">Sub category</button>
        <div class="dropdown-content">
  
            <div id="veh" style="display: none">
            <a href="#" id="cars" onclick="view(this.id)">cars</a>
            <a href="#" id="bikes" onclick="view(this.id)">bikes</a>
            <a href="#" id="bus" onclick="view(this.id)">bus</a>
            </div>
            <div id="prop" style="display: none">
            <a href="#" id="homes" onclick="view(this.id)">homes</a>
            <a href="#" id="hostels" onclick="view(this.id)">hostels</a>
            <a href="#" id="shops" onclick="view(this.id)">shops</a>
            </div>
            <div id="evnt" style="display: none">
            <a href="#" id="cat" onclick="view(this.id)">Caterings</a>
            <a href="#" id="dress" onclick="view(this.id)">Dresses</a>
            <a href="#" id="events" onclick="view(this.id)">commercial events</a>
            </div>
        </div>
      </div>

      <center>
            <br><br>
            <div style="display: none" id="m_from">
               
                    <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                    @csrf
                    <select style="width:36%; height:50px" name="area">
                       @include('posts.locations');
                    </select><br><br>
                    
                    <input type="text" name="exact_address" placeholder="Exact Address"><br><br>
                    <input type="text" name="title" placeholder="title"><br><br>
                    <input type="text" name="rent_price" placeholder="price"><br><br>
                    <input type="hidden" name="ad_name" id="session_input" />

                    <!-- property categories form -->
                    <div id="main_prop">
                            
                        <div id="home_prop" style="display: none">
                            <input type="hidden" id="homess" name="homes">
                            <input type="text" name="beds" placeholder="No. of beds"><br><br>
                            <input type="text" name="washroom" placeholder="No. of baths"><br><br>
                            <input type="text" name="num_of_portions" placeholder="No. of floors"><br><br>
                            <input type="text" name="covered_area" placeholder="Total Area (e.g 5 Marla)"><br><br>
                        </div>
    
                        <div id="hostel_prop" style="display: none">
                            <input type="hidden" id="hostelss" name="hostels">
                            <select style="width:36%; height:40px" name="wifi">
                                <option value="">WIFI</option>
                                <option value="1">yes</option>
                                <option value="0">No</option>
                            </select><br><br>
                            <select style="width:36%; height:40px" name="washroom">
                                <option value="">Attach Bath</option>
                                <option value="1">yes</option>
                                <option value="0">No</option>
                            </select><br><br>
                            <select style="width:36%; height:40px" name="mess">
                                <option value="">Mess</option>
                                <option value="1">yes</option>
                                <option value="0">No</option>
                            </select><br><br>
                            <select style="width:36%; height:40px" name="parking">
                                <option value="">Parking</option>
                                <option value="1">yes</option>
                                <option value="0">No</option>
                            </select><br><br>
                            
                        </div>
    
                        <div id="shop_prop" style="display: none">
                            <input type="hidden" id="shopss" name="shops">    
                            <input type="text" name="num_of_portions" placeholder="No. of floors"><br><br>
                            <input type="text" name="covered_area" placeholder="Total Area (e.g 2 Marla)"><br><br>
                        </div>
                    </div>
    
                    <!-- Vehicles categories form -->
                    <div id="main_veh">
                        <input type="text" name="CC" placeholder="engine capacity"><br><br>
                        <input type="text" name="num_of_producs" placeholder="total vehicles available"><br><br>
                        <div id="c_vehs" style="display: none">
                            <input type="hidden" name="cars" id="carss">
                            
                            
                        </div>
                        <div id="bu_vehs" style="display: none">
                            <input type="hidden"  name="bus" id="buss">
                            
                             
                        </div>
                        <div id="bi_vehs" style="display: none">
                            <input type="hidden" name="bikes" id="bikess">
                            
                        </div>
                        
                    </div>
                    <input type="file" name="cover_image"><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </center>
        
    
    

@endsection
<script src="{{asset('js/forms.js')}}" type="text/javascript"></script>

				


