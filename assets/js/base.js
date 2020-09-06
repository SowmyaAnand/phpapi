var x = document.getElementById("map");
 getLocation()
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}
function showPosition(position) {
    /*x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude; */
    var pf=pf||{};$(window).on('load',function(){var script=document.createElement('script');script.type='text/javascript';if(pfOptsOverrides.isCN){script.src='http://maps.google.cn/maps/api/js?key=AIzaSyCmvXPGOfAHhNg7Eh0fT4qc3M2cgF-1RVk&libraries=geometry,weather&language=en&callback=PFInitialize&v=3.33';window.location="http://planefinder.cn";}else{script.src='//maps.googleapis.com/maps/api/js?key=AIzaSyCmvXPGOfAHhNg7Eh0fT4qc3M2cgF-1RVk&libraries=geometry,weather&language=en&callback=PFInitialize&v=3.33';}
if(pfOptsOverrides.isCNURL){script.src='http://maps.google.cn/maps/api/js?key=AIzaSyCmvXPGOfAHhNg7Eh0fT4qc3M2cgF-1RVk&libraries=geometry,weather&language=en&callback=PFInitialize&v=3.33';}else{script.src='//maps.googleapis.com/maps/api/js?key=AIzaSyCmvXPGOfAHhNg7Eh0fT4qc3M2cgF-1RVk&libraries=geometry,weather&language=en&callback=PFInitialize&v=3.33';}
document.body.appendChild(script);});function PFInitialize(){var pfOpts={restoreView:true,planePollInterval:20,fullPlanePollInterval:120,planePollTimeout:10*1000,flightPathEstimationInterval:[3,3,2,2,1,1,1,0.5,0.5,0.5,0.5,0.5,0.5],flightPathEstimationAltitudeCutOff:500,flightPathEstimationSpeedCutOff:130,flightPathEstimationBatchLimit:50,flightPathEstimationBatchInterval:50,showPersistentFlightpaths:false,followSelectedPlane:false,plotFlightPathEstimation:true,useGeodesicFlightPaths:true,selectedFlightZoomLevel:7,planeColor:"red",tooltipValue:"flight",validSingleClickTimeout:250,disableFlightEstimation:false,maxVisiblePlaneCountLabelThreshold:300,airportMinZoom:10,minPersistentPlaneLabelsZoomLevelV2:6,planeLabelContent:"hide",planeLabelSmallContent:"airline-logo",planeLabelLine1Item1:"flightno",planeLabelLine1Item2:"reg",planeLabelLine2Item1:"route",planeLabelLine2Item2:"alt",planeLabelLine3Item1:"speed",planeLabelLine3Item2:"heading",markerColor:"R",mapTypeV2:"terrain",showAirports:true,showDayNightOverlay:true,showPlaneLabels:true,speedUnit:"kts",altitudeUnit:"feet",distanceUnit:"miles",airportUnit:"iata",minPlaybackSpeed:1,maxPlaybackSpeed:120,mapFadeValue:0.4,mapMinFadeValue:0,mapMaxFadeValue:65,minAltitudeFilterValue:0,maxAltitudeFilterValue:55000,maxAltitudeFilterValue2:60000,minSpeedFilterValue:0,maxSpeedFilterValue:700,maxSpeedFilterValue2:700,airportTZUnit:"airport",sidebarWidth:260,bookmarks:[["Amsterdam, Netherlands",52.25,4.75,7,0],["London, UK",51.47,-0.43,7,0],["Los Angeles, USA",34.01,-118.52,7,0],["Melbourne, Australia",-38.109,144.822,7,0],["New York City, USA",40.398,-73.671,7,0],["São Paulo, Brazil",-22.999,-46.4625,7,0],["Hong Kong",22.1722,114.087,7,0],["Dubai, UAE",25.295,54.598,7,0],],filters:[]};var mapOpts={zoom:3,minZoom:2,maxZoom:18,center:new google.maps.LatLng(position.coords.latitude,position.coords.longitude),streetViewControl:false,backgroundColor:"#B3B3B3",panControl:false,zoomControl:false,mapTypeControl:false};pfOptsOverrides.cloudflareCachePartial=true;pf=new PFCore(pfOpts,pfOptsOverrides,mapOpts);google.maps.event.addListenerOnce(pf.map,'idle',function(){pf.start();});}

}

