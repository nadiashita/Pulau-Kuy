@extends('user.app')
@section('content')

<div class="bg-light py-3">
    <div class="container">
    <div class="row">
        <div class="col-md-12 mb-0"><a href="home">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Peta</strong></div>
    </div>
    </div>
</div>  
 <div class="card-body">
                    <div class="row mb-3">
                     
                      
                    </div>

<!-- <div class="site-section"> -->
    <div class="container">
   <div class="col-md-12">
  
<div class="border p-4 rounded mb-4">
	 <div class="col">
    <h4 class="card-title">Peta Pulau </h4>

<div id="map" style="width: 100%; height: 500px;"></div>

<script >
    var peta1 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11'
    });



var map = L.map('map', {
    center: [-5.7456825,106.6123551],
    zoom: 17,
    layers: [peta1]
});

var baseMaps = {
    "Grayscale": peta1
};

L.control.layers(baseMaps, overlayMaps).addTo(map);

</script>




</div>
</div>
</div>
</div>
</div>
 

 </div>

    </div>
</div>
@endsection