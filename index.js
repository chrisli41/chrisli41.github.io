/**
 * Created by christopherli on 8/19/16.
 */

$(document).ready(function(){

    $('#project-grid div p').hide();

    $('#project-grid a > div').hover(function(){
        $(this).css('background-color', 'black');
        $(this).find('img').css('opacity', '0.5');
        $(this).find('p').addClass('show-text').show();
    }, function(){
        $(this).css('background-color', 'transparent');
        $(this).find('p').hide();
        $(this).find('img').css('opacity', '1');
    });

    var map = new google.maps.Map(document.getElementById('map_canvas'),  { mapTypeId: google.maps.MapTypeId.ROADMAP, center: new google.maps.LatLng(33.6895948,-117.8819877), zoom:15 });
    var marker = new google.maps.Marker({position: {lat: 33.6895948, lng: -117.8819877}, map: map});
    marker.setMap(map);

});
