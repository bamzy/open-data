

@extends ('layouts.plane')
@section ('body')
	<script src="//cdnjs.cloudflare.com/ajax/libs/d3/3.5.3/d3.min.js"></script>

	<script src="//cdnjs.cloudflare.com/ajax/libs/topojson/1.6.9/topojson.min.js"></script>

	<!-- <script src="/assets/scripts/frontend.js"></script> -->
	<script src="http://datamaps.github.io/scripts/0.4.4/datamaps.all.min.js"></script>

	<div id="arcs" style="position: relative; width: 1000px; height: 1000px;"></div>
	<h1>Yohooooo</h1>
	<script>
	var arcs = new Datamap({
  element: document.getElementById("arcs"),
  scope: 'usa',
  fills: {
    defaultFill: "#ABDDA4",
    win: '#0fa0fa'
  },
  data: {
    'TX': { fillKey: 'win' },
    'FL': { fillKey: 'win' },
    'NC': { fillKey: 'win' },
    'CA': { fillKey: 'win' },
    'NY': { fillKey: 'win' },
    'CO': { fillKey: 'win' }
  }
});

// Arcs coordinates can be specified explicitly with latitude/longtitude,
// or just the geographic center of the state/country.
arcs.arc([
  {
    origin: 'CA',
    destination: 'TX'
  },
  {
    origin: 'OR',
    destination: 'TX'
  },
  {
    origin: 'NY',
    destination: 'TX'
  },
  {
      origin: {
          latitude: 40.639722,
          longitude: -73.778889
      },
      destination: {
          latitude: 37.618889,
          longitude: -122.375
      }
  },
  {
      origin: {
          latitude: 30.194444,
          longitude: -97.67
      },
      destination: {
          latitude: 25.793333,
          longitude: -80.290556
      },
      options: {
        strokeWidth: 2,
        strokeColor: 'rgba(100, 10, 200, 0.4)',
        greatArc: true
      }
  },
  {
      origin: {
          latitude: 39.861667,
          longitude: -104.673056
      },
      destination: {
          latitude: 35.877778,
          longitude: -78.7875
      }
  }
],  {strokeWidth: 1, arcSharpness: 1.4});
          
    
    </script>
    <hr>
    <div id="map2Container" style="position: relative; width: 1000px; height: 1000px;"></div>
    <script>
    var map = new Datamap({
        element: document.getElementById('map2Container'),
        responsive: true
    });

    // Pure JavaScript
    window.addEventListener('resize', function() {
        map.resize();
    });

    // Alternatively with d3
    d3.select(window).on('resize', function() {
        map.resize();
    });

    // Alternatively with jQuery
    $(window).on('resize', function() {
       map.resize();
    });
    </script>

	




@stop