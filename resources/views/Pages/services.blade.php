<!DOCTYPE html>
<html>
<head>
	<title>forms</title>
</head>

<style type="text/css">
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
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>
<body>



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
			<form action="store" method="post">
				@csrf
				<input type="text" name="area" placeholder="Location"><br><br>
				<input type="text" name="EAddress" placeholder="Exact location"><br><br>
				<input type="text" name="price" placeholder="price"><br><br>
				<input type="text" name="title" placeholder="key features"><br><br>
				<input type="text" name="description" placeholder="details"><br><br>


				


				<!-- property categories form -->
				<div id="main_prop">
					<div id="home_prop" style="display: none">
						<input type="text" name="beds" placeholder="No. of beds"><br><br>
						<input type="text" name="baths" placeholder="No. of baths"><br><br>
						<input type="text" name="floor" placeholder="No. of floors"><br><br>
						<input type="text" name="t_area" placeholder="Total Area (e.g 5 Marla)"><br><br>
					</div>

					<div id="hostel_prop" style="display: none">
						<input type="text" name="wifi" placeholder="wifi"><br><br>
						<input type="text" name="atch_bath" placeholder="attach bath"><br><br>
						<input type="text" name="mess" placeholder="mess"><br><br>
					</div>

					<div id="shop_prop" style="display: none">
						<input type="text" name="furnished" placeholder="furnished"><br><br>
						<input type="text" name="floor" placeholder="No. of floors"><br><br>
						<input type="text" name="t_area" placeholder="Total Area (e.g 2 Marla)"><br><br>
					</div>
				</div>

				<!-- Vehicles categories form -->
				<div id="main_veh">
					<div id="c_vehs" style="display: none">
						<input type="text" name="car_name" placeholder="Car Name"><br><br>
						<input type="text" name="CC" placeholder="engine capacity"><br><br>
						<input type="text" name="sitting" placeholder="sitting capacity"><br><br>
					</div>
					<div id="bi_vehs" style="display: none">
						<input type="text" name="bike_name" placeholder="Bike Name"><br><br>
						<input type="text" name="CC" placeholder="engine capacity"><br><br>
					</div>
					<div id="bu_vehs" style="display: none">
						<input type="text" name="bus_name" placeholder="Bus Name"><br><br>
						<input type="text" name="CC" placeholder="engine capacity"><br><br>
						<input type="text" name="sitting" placeholder="sitting capacity"><br><br>
					</div>
				</div>
				<input type="submit" name="submit" value="Rent It">

			</form>
		</div>
	</center>

</body>


<script type="text/javascript">
		function fun(id) {
		var x = id;
		if(x=='v1'){
			document.getElementById('main').innerHTML='Vehicles';
			document.getElementById('veh').style.display="block";
			document.getElementById('evnt').style.display="none";
			document.getElementById('prop').style.display="none";
			
		}
		if(x=='p1'){
			document.getElementById('main').innerHTML='Property';
			document.getElementById('prop').style.display="block";
			document.getElementById('veh').style.display="none";
			document.getElementById('evnt').style.display="none";
		}
		if(x=='e1'){
			document.getElementById('main').innerHTML='events';
			document.getElementById('evnt').style.display="block";
			document.getElementById('veh').style.display="none";
			document.getElementById('prop').style.display="none";


		}
	}

	function view(id) {
		var x = id;
		console.log(x);
		if(x=='cars'){
			document.getElementById('m_from').style.display='block';
			document.getElementById('main_veh').style.display='block';
			document.getElementById('c_vehs').style.display='block';
			document.getElementById('bi_vehs').style.display='none';
			document.getElementById('bu_vehs').style.display='none';
			document.getElementById('main_prop').style.display='none';
			document.getElementById('sub').innerHTML='cars';
		}

		if(x=='bikes'){
			document.getElementById('m_from').style.display='block';
			document.getElementById('main_veh').style.display='block';
			document.getElementById('bi_vehs').style.display='block';
			document.getElementById('c_vehs').style.display='none';
			document.getElementById('bu_vehs').style.display='none';
			document.getElementById('main_prop').style.display='none';
			document.getElementById('sub').innerHTML='bikes';
		}

		if(x=='bus'){
			document.getElementById('m_from').style.display='block';
			document.getElementById('main_veh').style.display='block';
			document.getElementById('bu_vehs').style.display='block';
			document.getElementById('c_vehs').style.display='none';
			document.getElementById('bi_vehs').style.display='none';
			document.getElementById('main_prop').style.display='none';
			document.getElementById('sub').innerHTML='bus';
		}

		if(x=='homes'){
			document.getElementById('m_from').style.display='block';
			document.getElementById('main_prop').style.display='block';
			document.getElementById('home_prop').style.display='block';
			document.getElementById('hostel_prop').style.display='none';
			document.getElementById('shop_prop').style.display='none';
			document.getElementById('main_veh').style.display='none';
			document.getElementById('sub').innerHTML='homes';
		
		}

		if(x=='hostels'){
			document.getElementById('m_from').style.display='block';
			document.getElementById('main_prop').style.display='block';
			document.getElementById('hostel_prop').style.display='block';
			document.getElementById('home_prop').style.display='none';
			document.getElementById('shop_prop').style.display='none';
			document.getElementById('main_veh').style.display='none';
			document.getElementById('sub').innerHTML='hostels';
	
		}

		if(x=='shops'){
			document.getElementById('m_from').style.display='block';
			document.getElementById('main_prop').style.display='block';
			document.getElementById('shop_prop').style.display='block';
			document.getElementById('hostel_prop').style.display='none';
			document.getElementById('home_prop').style.display='none';
			document.getElementById('main_veh').style.display='none';
			document.getElementById('sub').innerHTML='shops';
	
		}
		if(x=='cat'){
			document.getElementById('m_from').style.display='block';
			document.getElementById('sub').innerHTML='caterings';
			document.getElementById('main_veh').style.display='none';
			document.getElementById('main_prop').style.display='none';
		}
		if( x=='dress'){
			document.getElementById('m_from').style.display='block';
			document.getElementById('sub').innerHTML='dresses';
			document.getElementById('main_veh').style.display='none';
			document.getElementById('main_prop').style.display='none';
		}
		if( x=='events'){
			document.getElementById('m_from').style.display='block';
			document.getElementById('sub').innerHTML='commerical events';
			document.getElementById('main_veh').style.display='none';
			document.getElementById('main_prop').style.display='none';
		}

	}
</script>







</html>
