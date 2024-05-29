
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/OPL/OpenLayers.js"></script>




<script>

  showMemap(47.35387, 8.43609);

  function showMemap(lat, lon){

    var lat            = lat;
    var lon            = lon;
    var zoom           = 18;

    var fromProjection = new OpenLayers.Projection("EPSG:4326");   // Transform from WGS 1984
    var toProjection   = new OpenLayers.Projection("EPSG:900913"); // to Spherical Mercator Projection
    var position       = new OpenLayers.LonLat(lon, lat).transform( fromProjection, toProjection);

    map = new OpenLayers.Map("Map");
    var mapnik         = new OpenLayers.Layer.OSM();
    map.addLayer(mapnik);

    var markers = new OpenLayers.Layer.Markers( "Markers" );
    map.addLayer(markers);
    markers.addMarker(new OpenLayers.Marker(position));

    map.setCenter(position, zoom);



  }

</script>

<script>
     
   var l_lat = "";
   var l_long = "";


    function getLocation() {
      if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(showPosition);
      } else {
          
      }
    }

    function showPosition(position) {
        l_lat = position.coords.latitude; 
        l_long = position.coords.longitude;

        $("#llat").html("");
        $("#llat").html(llat);
        
        $("#llong").html("");
        $("#llong").html(l_long);

        showMemap(l_lat, l_long);

    }

  
    setInterval(function(){
      
      getLocation();

      

      $.ajax({
    

        url 	: '<?php echo base_url();?>/Location/submit_location',
          type 	: 'post',
          data 	: {"loc_lat": l_lat, "loc_long" : l_long},
          dataType : "json",
          cache   : false,
          processData: true,
          success : function(data){
            
          }
          
      });

      
    }, 30000)

    





  


</script>