function fun(id) {
    var x = id;
    document.getElementById('a2').value = x;
    if (x == 'Vehicles') {

        document.getElementById('main').innerHTML = 'Vehicles';
        document.getElementById('veh').style.display = "block";
        document.getElementById('evnt').style.display = "none";
        document.getElementById('prop').style.display = "none";
        document.getElementById('sub').innerHTML = 'sub category';
        document.getElementById('m_from').style.display = 'none';
    }
    if (x == 'Properties') {

        document.getElementById('main').innerHTML = 'Property';
        document.getElementById('prop').style.display = "block";
        document.getElementById('veh').style.display = "none";
        document.getElementById('evnt').style.display = "none";
        document.getElementById('sub').innerHTML = 'sub category';
        document.getElementById('m_from').style.display = 'none';
    }
    if (x == 'Services') {

        document.getElementById('main').innerHTML = 'events';
        document.getElementById('m_from').style.display = 'none';
        document.getElementById('evnt').style.display = "block";
        document.getElementById('veh').style.display = "none";
        document.getElementById('prop').style.display = "none";
        document.getElementById('sub').innerHTML = 'sub category';


    }
}




function view(id) {
    var x = id;
    document.getElementById('a1').value = x;
    console.log(x);
    if (x == 'cars') {
        document.getElementById("carss").value = document.getElementById("cars").innerHTML;
        document.getElementById('m_from').style.display = 'block';
        document.getElementById('main_veh').style.display = 'block';
        document.getElementById('c_vehs').style.display = 'block';
        document.getElementById('bi_vehs').style.display = 'none';
        document.getElementById('bu_vehs').style.display = 'none';
        document.getElementById('main_prop').style.display = 'none';
        document.getElementById('sub').innerHTML = 'cars';
        document.getElementById('nop').required = true;
        document.getElementById('ec').required = true;
        document.getElementById('bikes_cars').style.display = 'block';

    }

    if (x == 'bikes') {
        document.getElementById("bikess").value = document.getElementById("bikes").innerHTML;
        document.getElementById('m_from').style.display = 'block';
        document.getElementById('main_veh').style.display = 'block';
        document.getElementById('bi_vehs').style.display = 'block';
        document.getElementById('c_vehs').style.display = 'none';
        document.getElementById('bu_vehs').style.display = 'none';
        document.getElementById('main_prop').style.display = 'none';
        document.getElementById('sub').innerHTML = 'bikes';
        document.getElementById('nop').required = true;
        document.getElementById('ec').required = true;
        document.getElementById('bikes_cars').style.display = 'block';


    }

    if (x == 'bus') {
        document.getElementById("buss").value = document.getElementById("bus").innerHTML;
        document.getElementById('m_from').style.display = 'block';
        document.getElementById('main_veh').style.display = 'block';
        document.getElementById('bu_vehs').style.display = 'block';
        document.getElementById('c_vehs').style.display = 'none';
        document.getElementById('bi_vehs').style.display = 'none';
        document.getElementById('bikes_cars').style.display = 'none';
        document.getElementById('main_prop').style.display = 'none';
        document.getElementById('sub').innerHTML = 'bus';
        document.getElementById('nop').required = true;
        document.getElementById('sc').required = true;

    }

    if (x == 'homes') {
        document.getElementById("homess").value = document.getElementById("homes").innerHTML;
        document.getElementById('m_from').style.display = 'block';
        document.getElementById('main_prop').style.display = 'block';
        document.getElementById('home_prop').style.display = 'block';
        document.getElementById('shop_home_prop').style.display = 'block';
        document.getElementById('hostel_prop').style.display = 'none';
        document.getElementById('shop_prop').style.display = 'none';
        document.getElementById('main_veh').style.display = 'none';
        document.getElementById('sub').innerHTML = 'homes';
        document.getElementById('wflor').required = true;
        document.getElementById('mrl').required = true;
        document.getElementById('we').required = true;
        document.getElementById('bd').required = true;

    }

    if (x == 'hostels') {
        document.getElementById("hostelss").value = document.getElementById("hostels").innerHTML;
        document.getElementById('m_from').style.display = 'block';
        document.getElementById('main_prop').style.display = 'block';
        document.getElementById('hostel_prop').style.display = 'block';
        document.getElementById('home_prop').style.display = 'none';
        document.getElementById('shop_prop').style.display = 'none';
        document.getElementById('main_veh').style.display = 'none';
        document.getElementById('sub').innerHTML = 'hostels';
        document.getElementById('inputState').required = true;


    }

    if (x == 'shops') {
        document.getElementById("shopss").value = document.getElementById("shops").innerHTML;
        document.getElementById('m_from').style.display = 'block';
        document.getElementById('main_prop').style.display = 'block';
        document.getElementById('shop_prop').style.display = 'block';
        document.getElementById('shop_home_prop').style.display = 'block';
        document.getElementById('hostel_prop').style.display = 'none';
        document.getElementById('home_prop').style.display = 'none';
        document.getElementById('main_veh').style.display = 'none';
        document.getElementById('sub').innerHTML = 'shops';
        document.getElementById('flor').required = true;
        document.getElementById('marla').required = true;


    }
    if (x == 'cat') {

        document.getElementById('m_from').style.display = 'block';
        document.getElementById('sub').innerHTML = 'caterings';
        document.getElementById('main_veh').style.display = 'none';
        document.getElementById('main_prop').style.display = 'none';
    }
    if (x == 'dress') {
        document.getElementById('m_from').style.display = 'block';
        document.getElementById('sub').innerHTML = 'dresses';
        document.getElementById('main_veh').style.display = 'none';
        document.getElementById('main_prop').style.display = 'none';
    }
    if (x == 'events') {
        document.getElementById('m_from').style.display = 'block';
        document.getElementById('sub').innerHTML = 'commerical events';
        document.getElementById('main_veh').style.display = 'none';
        document.getElementById('main_prop').style.display = 'none';
    }

}