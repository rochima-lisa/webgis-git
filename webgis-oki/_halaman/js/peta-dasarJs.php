<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
   crossorigin=""></script>
   <link rel="stylesheet" href="js/leaflet-panel-layers-master/src/leaflet-panel-layers.css" />
    <script src="js/leaflet-panel-layers-master/src/leaflet-panel-layers.js"></script>
 	<script src="js/leaflet.ajax.js"></script>
	<script src="https://cdn.rawgit.com/hayeswise/Leaflet.PointInPolygon/v1.0.0/wise-leaflet-pip.js"></script>
  
   <script type="text/javascript">

   	var map = L.map('mapid').setView([-3.270983, 105.431898], 8.5);

//layer peta

	var CitraSatelit = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
				attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community'
			});
	map.addLayer(CitraSatelit);


   	var BaseMap = L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
	});

	var TopoMap = L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
	maxZoom: 17,
	attribution: 'Map data: &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, <a href="http://viewfinderpanoramas.org">SRTM</a> | Map style: &copy; <a href="https://opentopomap.org">OpenTopoMap</a> (<a href="https://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA</a>)'
	});
	

	var myStyle2 = {
	    "color": "#ffff00",
	    "weight": 1,
	    "opacity": 0.9
	};

//geojson batas kabupaten

	var BatasKabupaten = new L.GeoJSON.AJAX(["geojson/bataskabupaten.geojson"], {
			style: function({onEachFeature:popUp}) {
				return{
					opacity : 0.3,
					width : 0.5,
					color : 'white',
					fillColor : 'yellow',
				}
				},
			});
	


//geojson batas kecamatan

var BatasKecamatan = new L.GeoJSON.AJAX(["geojson/bataskecamatan.geojson"], {
			style: function({onEachFeature:popUp}) {
				return{
					opacity : 0.4,
					width : 0.5,
					color : 'white',
					fillColor : 'yellow',
				}
				},
			});



//choropleth Map Batas Desa/Kelurahan

var info = L.control();

info.onAdd = function (map) {
	this._div = L.DomUtil.create('div', 'info');
	this.update();
	return this._div;
};

info.update = function (props) {
	this._div.innerHTML = '<h4>Sebaran Hotspot</h4>' +  (props ?
		'<b>' + ' Desa/Kel.' + ' ' + props.NAME_4 + '</b><br />' + ' Kecamatan' + ' ' + props.NAME_3 
		: 'Di Kabupaten Ogan Komering Ilir');
};

info.addTo(map);

function getColor(d) {
		return d == 1.0 ? '#cca633' :
				d == 2.0  ? '#cccc33' :
				d == 3.0 ? '#a6cc33' :
				d == 4.0  ? '#33cc33' :
				d == 5.0   ? '#33cc80' :
				d == 6.0   ? '#33cccc' :
				d == 7.0   ? '#b38f00' :
				d == 8.0   ? '#ffcc00' :
				d == 9.0   ? '#f2ffcc' :
				d == 10.0   ? '#608000' :
							'#FFEDA0';
	}

	function style(feature) {
		return {
			weight: 1,
			opacity: 0.6,
			color: 'white',
			dashArray: '3',
			fillOpacity: 0.6,
			fillColor: getColor(feature.properties.warna)
		};
	}

	function highlightFeature(e) {
		var layer = e.target;

		layer.setStyle({
			weight: 5,
			color: '#666',
			dashArray: '',
			fillOpacity: 0.7
		});

		if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
			layer.bringToFront();
		}

		info.update(layer.feature.properties);
	}

	var Choropleth;

	function resetHighlight(e) {
		Choropleth.resetStyle(e.target);
		info.update();
	}

	function zoomToFeature(e) {
		map.fitBounds(e.target.getBounds());
	}

	function onEachFeature(feature, layer) {
		layer.on({
			mouseover: highlightFeature,
			mouseout: resetHighlight,
			click: zoomToFeature
		});
	}

	Choropleth = new L.GeoJSON.AJAX(["geojson/batasdesa2.geojson"], {
		style: style,
		onEachFeature: onEachFeature
	});




//fitur tambahan	

    function popUp(f,l){
		    var out = [];
		    if (f.properties){
		        for(key in f.properties){
		            out.push(key+": "+f.properties[key]);
		        }
		        l.bindPopup(out.join("<br />"));
		    }
		}

	var popup = L.popup();

	function onMapClick(e) {
		popup
		 	.setLatLng(e.latlng)
		   .setContent("Koordinat " + e.latlng.toString())
		   .openOn(map);
}

map.on('click', onMapClick);


L.control.scale().addTo(map);



//hotspot

var hotspot = L.layerGroup();
<?php
	
	
	if($sql!=''){
		$db->where('Date_LTZ','%'.$sql.'%','LIKE');
  	}
	

	$getdata=$db->ObjectBuilder()->get('hotspotviirs');
	
	foreach ($getdata as $row) {
		?>

		var myIcon<?=$row->Temp_BB?> = L.icon({
		iconUrl: '<?php if ($row->Temp_BB == 999999) echo('assets/icon/marker5.png');
					else if ($row->Temp_BB >= 400 && $row->Temp_BB <= 1000 ) echo('assets/icon/marker6.png');
					else if ($row->Temp_BB >= 1001 && $row->Temp_BB <= 1200 ) echo('assets/icon/marker7.png');
					else if ($row->Temp_BB >= 1201 && $row->Temp_BB <= 1400 ) echo('assets/icon/marker8.png');
					else if ($row->Temp_BB >= 1401 && $row->Temp_BB <= 1600 ) echo('assets/icon/marker9.png');
					else if ($row->Temp_BB >= 1601 && $row->Temp_BB <= 2500 ) echo('assets/icon/marker10.png');
					else if ($row->Temp_BB >= 2501 && $row->Temp_BB <= 999998 ) echo('assets/icon/marker2.png');
					?>',
		iconSize: [10, 25],
    
	});

		L.marker([<?=$row->Lat_GMTCO?>,<?=$row->Lon_GMTCO?>],{icon: myIcon<?=$row->Temp_BB?>}).addTo(hotspot)
            .bindPopup("Lat : <?=$row->Lat_GMTCO?> <sup>o</sup> , Lon : <?=$row->Lon_GMTCO?> <sup>o</sup><br>Temperature Source : <?php if ($row->Temp_BB==999999) { echo "???"; } else {$celcius = ($row->Temp_BB)-273.15; echo $celcius;	}?> <sup>o</sup>C<br>Radiant Heat Intensity : <?php if ($row->RHI == 999999) {echo "???";}else{ echo $row->RHI; }?> W/m<sup>2</sup><br>Source Footprint : <?php if ($row->Area_Pixel == 999999) {echo "???";}else{ echo $row->Area_Pixel; }?> m<sup>2</sup><br>Time : <?=$row->Date_Mscan?> <br>Temperature Background : <?php if ($row->Temp_Bkg==999999) { echo "???"; } else {$celcius = ($row->Temp_Bkg)-273.15; echo $celcius;	}?> <sup>o</sup>C<br>Radiant Heat : <?php if ($row->RH == 999999) {echo "???";}else{ echo $row->RH; }?> MW<br>Local Time : <?=$row->Date_LTZ?> <br>Atmosphere Corrected : No");
        <?php
	}
	?>





//batas hotspot dengan geojson




//legenda

function iconByName(name) {
	return '<i class="icon icon-'+name+'"></i>';
}

function featureToMarker(feature, latlng) {
	return L.marker(latlng, {
		icon: L.divIcon({
			className: 'marker-'+feature.properties.amenity,
			html: iconByName(feature.properties.amenity),
			iconUrl: '../images/markers/'+feature.properties.amenity+'.png',
			iconSize: [25, 41],
			iconAnchor: [12, 41],
			popupAnchor: [1, -34],
			shadowSize: [41, 41]
		})
	});
}

var baseLayers = [
	{
		name: "Esri World Imagery",
		layer: CitraSatelit
	},
	{
		name: "Base Map",
		layer: BaseMap
	},
	{
		name: "Topographic Map",
		layer: TopoMap
	}
];

var overLayers = [
	{
		group: "Over Layers",
		icon: iconByName('parking'),
		collapsed: true,
		layers: [
			{
				name: "Hotspot",
				layer: hotspot
			},
			{
				name: "Batas Wilayah Kabupaten",
				layer: BatasKabupaten
			},
			{
				name: "Batas Wilayah Kecamatan",
				layer: BatasKecamatan
			},
			{
				name: "Batas Wilayah Desa/Kelurahan",
				layer: Choropleth
			}
		]
	}
];

var panelLayers = new L.Control.PanelLayers(baseLayers, overLayers, {
	compact: true,
	collapsibleGroups: true,
	collapsed: true
});

map.addControl(panelLayers);


</script>


