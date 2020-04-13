<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Boot Side Menu jQuery Plugin Demo</title>
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <!-- Bootstrap -->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

  <link href="<?=base_url()?>assets/css/BootSideMenu.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/leaflet/leaflet.css" rel="stylesheet">
  <script src="<?=base_url()?>assets/leaflet/leaflet.js"></script>

<style type="text/css">
  .user{
    padding:5px;
    margin-bottom: 5px;
  }
  #mapid { height: 580px; }
</style>
</head>
<body>

  <!--Test -->
  <div id="test">
    <h2>FITUR</h2>
    <div class="list-group">
      <a href="#" class="list-group-item active">Menu 1</a>
      <a href="#" class="list-group-item">Menu 2</a>
      <a href="#" class="list-group-item">Menu 3</a>
 
    </div>



  </div>
  <!--/Test -->




  <!--Normale contenuto di pagina-->
  <div class="container">
    

    <div class="row">
      <div class="col-md-12">
          <h1>WEBSITE GEOGRAFIS</h1>
      </div>
    </div>
	 <div class="row">
      <div class="col-md-12">
          <div id="mapid"></div>
      </div>
    </div>

    

  </div>
  <!--Normale contenuto di pagina-->

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>assets/js/BootSideMenu.js"></script>

  <script type="text/javascript">
    $('#test').BootSideMenu({side:"left", autoClose:false});
    
	var map = L.map('mapid').setView([-7.4289705,109.2208239], 13);
  var base_url="<?=base_url()?>";

	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	}).addTo(map);

  //var myFeatureGroup = L.featureGroup().addTo(map).on("click", groupClick);
  //var bangunanMarker;

  $.getJSON(base_url+"index.php/home/bangunan_json", function(data){
    $.each(data, function(i, field){

        var v_lat=parseFloat(data[i].bangunan_lat);
        var v_long=parseFloat(data[i].bangunan_long);

        var icon_bangunan = L.icon({
                      iconUrl: base_url+'assets/images/rumah.png',
                      iconSize: [30,30]
                });

        //bangunanMarker =L.marker([v_long,v_lat],{icon:icon_bangunan])
                           //.addTo(myFeatureGroup)
                           //.bindPopup(data[i].bangunan_nama);

        //bangunanMarker.id = data[i].bangunan_id;

      L.marker([v_long,v_lat],{icon:icon_bangunan}).addTo(map)
        .bindPopup(data[i].bangunan_nama)
        .openPopup();

    });
  });

    function groupClick(event) {
      //console.log("Clicked on marker"+ event.layer.id);
      alert("Clicked on marker"+ event.layer.id);
    }

  </script>

</body>
</html>