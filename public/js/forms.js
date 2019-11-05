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