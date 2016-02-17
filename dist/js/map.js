$(function () {

  'use strict';

  var myMarkers = {};

  $.ajax({
    type: 'POST',
    url: 'getMapData.php',
    data: '',
    dataType: 'json',
    cache: false,
    success: function(result) {

      myMarkers = result;
      
      
      
      $('#world-map-markers').vectorMap({
        map: 'world_mill_en',
        normalizeFunction: 'polynomial',
        hoverOpacity: 0.7,
        hoverColor: false,
        backgroundColor: 'transparent',
        regionStyle: {
          initial: {
            fill: 'rgba(210, 214, 222, 1)',
            "fill-opacity": 1,
            stroke: 'none',
            "stroke-width": 0,
            "stroke-opacity": 1
          },
          hover: {
            "fill-opacity": 0.7,
            cursor: 'pointer'
          },
          selected: {
            fill: 'yellow'
          },
          selectedHover: {
          }
        },
        markerStyle: {
          initial: {
            fill: '#00a65a',
            stroke: '#111'
          }
        },
        onMarkerClick: function (ev, index) {
          var markers = $('#world-map-markers');
          document.getElementById("mapInfoTitle").innerText = myMarkers[index].name ;
          document.getElementById("mapInfoDetails").innerText = myMarkers[index].details; 
        },
        container: $('#world-map-markers'),
        


        markers: myMarkers
      });

      



    },
  });
});
