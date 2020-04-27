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
        <a href="#" id="Vehicles" onclick="fun(this.id)">vehicles</a>
        <a href="#" id="Properties" onclick="fun(this.id)">Property</a>
        <a href="#" id="Services" onclick="fun(this.id)">events</a>
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
<br><br><br>

  
<div style="display: none" id="m_from">

            <form name="myForm" method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data" >
                @csrf
                <input id="a1" type="hidden" name="check">
                <input id="a2" type="hidden" name="check2">
               
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Title</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="Product Title" name="title" required>
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Rent Price</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Per Day" name="rent_price" required>
              </div>
            </div>
            
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputState">Area</label>
                    <select id="inputState" class="form-control" name="area" required>
                        @include('posts.locations');
                    </select>
                  </div>
              <div class="form-group col-md-5">
                <label for="inputCity">Exact Address</label>
                <input type="text" class="form-control" id="inputCity" name="exact_address" required>
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4">Contact Number</label>
                <input type="text" class="form-control" id="inputPassword4" name="phone" required>
              </div>  
            </div>

           

             <!-- property categories form -->
             <div id="main_prop">
                <div id="home_prop" style="display: none">
                    <input type="hidden" id="homess" name="homes">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            
                            <label for="inputZip">No. of beds</label>
                            <input type="text" class="form-control" id="bd" name="beds" >
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputZip">No. of baths</label>
                            <input type="text" class="form-control" id="we" name="washroom" >
                          </div>
                    </div>
                </div>
                <div id="hostel_prop" style="display: none">
                    <input type="hidden" id="hostelss" name="hostels">
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputState">WIFI</label>
                            <select id="inputState" class="form-control" name="wifi" >
                                <option value="">WIFI</option>
                                <option value="1">yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputState">Attach Washroom</label>
                            <select id="inputState" class="form-control" name="A_washroom" >
                                <option value="">Washroom</option>
                                <option value="1">yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputState">Mess</label>
                            <select id="inputState" class="form-control" name="mess" >
                                <option value="">Mess</option>
                                <option value="1">yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputState">Parking</label>
                            <select id="inputState" class="form-control" name="parking" >
                                <option value="">Parking</option>
                                <option value="1">yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div id="shop_prop" style="display: none">
                    <input type="hidden" id="shopss" name="shops">
                </div>
                <div id="shop_home_prop" style="display: none">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputZip">No. of floors</label>
                            <input type="text" class="form-control" id="flor" name="num_of_portions" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputZip">Covered Area</label>
                            <input type="text" placeholder="5 marla etc" class="form-control" id="marla" name="covered_area" >
                        </div>
                    </div>
                </div>
             </div>

             <!-- Vehicles categories form -->
             <div id="main_veh">
                <div class="form-row">
                        <label for="inputZip">Total vehicles available</label>
                        <input type="text" class="form-control" id="nop" name="num_of_producs" >
                </div>
                <div id="c_vehs" style="display: none">
                    <input type="hidden" name="cars" id="carss">
                </div>
                <div id="bi_vehs" style="display: none">
                    <input type="hidden" name="bikes" id="bikess">
                </div>
                <div id="bu_vehs" style="display: none">
                    <input type="hidden"  name="bus" id="buss">
                        <label for="inputZip">Seating Capacity</label>
                        <input type="text" class="form-control" id="sc" name="SC" >
                </div>
                
                <div id="bikes_cars" style="display: none">
                        <label for="inputZip">Engine Capacity</label>
                        <input type="text" placeholder="(e.g 1600 CC)" class="form-control" id="ec" name="CC" >
                </div>
             </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea3">Details</label>
                <textarea class="form-control" id="exampleFormControlTextarea3" name="body" rows="7" placeholder="Key features of your product" required></textarea>
              </div>
              <div class="form-group">
                <label for="exampleFormControlFile1">Upload Picture</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="cover_image" multiple>
              </div>
              <div class="form-group">
                <label for="exampleFormControlFile1">Upload Picture</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="cover_imag" multiple>
              </div>
              <div class="form-group">
                <label for="exampleFormControlFile1">Upload Picture</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="cover_ima" multiple>
              </div>
              
            <button type="submit" class="btn btn-primary">POST AD</button>
          </form>
        </div>

      

@endsection
<script src="{{asset('js/forms.js')}}" type="text/javascript"></script>

      

    
    

    
    
				


