    <section id="about" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        
                        <h4>Design</h4>
                        <p>- Photoshop</p>
                        <p>- Interface Design</p>

                        <h4>Develop</h4>
                        <p>- CSS</p>
                        <p>- PHP</p>
                        <p>- HTML5</p>
                        <p>- XHTML</p>
                        <p>- JAVA</p>  
                        <a href="#cv" class="page-scroll btn btn-xl">My CV</a>                      

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/me/ax.jpg" class="img-responsive img-circle" alt="">
                        <h4>Ashish Magar</h4><br>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://np.linkedin.com/in/ashish-magar-21554b119"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li><a href="https://github.com/ashishmagar1"><i class="fa fa-github"></i></a>
                            </li>
                            <li><a href="https://twitter.com/onlylegendery"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/ashish.magar.54"><i class="fa fa-facebook"></i></a>
                            </li>
                            
                            
                        </ul>
                        <b>Linkedin | Github | Twitter | Facebook </b>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        
                        <h4>Brief Introduction</h4>

                        <p>Hello everyone, I’m ASHISH MAGAR, one honest, helpfull graphic and web designer. I have a passion for arts, web and design. I really love designing as its a creative work and make people happy. If you need help then let me help you with your design needs. Together we can create something usefull, valuable, time worthy and special. </p>
                        <a href="#mylocation" class="page-scroll btn btn-xl">Wanna Know my Location???</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h4>My Working Process</h4>
<h5>1. RESEARCH</h5>
<p>Before starting new project, firstly i do research. As per the findings of research i move on . This help me to make project sucessfull as i will know the expectation of client and users.</p>

<h5>2. WIREFRAME</h5>
<p>Wireframes are the blueprints to any website. In order to insure a great user experience this is an essential design step. It also ensures consistency throughout the site.</p>

<h5>3. BUILD</h5>
<p>As per the wireframes, I can draft up a visual mockup of the site with all the color and image content. Then it is off to hours of coding to take it from a well thought idea to an actual website.</p>

<h5>4. DELIVER</h5>
<p>Site is ready to be launched. I will be around to answer any questions and provide maintenance if needed.</p>

<a href="#contact" class="page-scroll btn btn-xl">Contact Me???</a>
                </div>

            </div>
<section id="mylocation" class="bg-light-gray">
<div class="fl_right">
      <div id="tabcontainer" class="border">
<div id="tabs-3" class="tabcontainer" align="center"><h1><b>My Location</b></h1> </div>
      </div>
      <div>

<div>

<!DOCTYPE html >
<html>
<head>
<script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
var myCenter=new google.maps.LatLng(27.7429804,85.3116728);


function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:15,
  panControl:true,
  zoomControl:true,
  zoomControlOptions: {
      position:google.maps.ControlPosition.TOP_LEFT
    },
  mapTypeControl:true,
  mapTypeControlOptions: {
      style:google.maps.MapTypeControlStyle.DROPDOWN_MENU,
      position:google.maps.ControlPosition.TOP_LEFT
    },
  scaleControl:true,
  streetViewControl:true,
  streetViewControlOptions: {
      position:google.maps.ControlPosition.TOP_LEFT
    },
  overviewMapControl:true,
  rotateControl:true,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  animation:google.maps.Animation.BOUNCE
  });

marker.setMap(map);

var infowindow = new google.maps.InfoWindow({
  content:"My Place"
  });

google.maps.event.addListener(marker, 'click', function() {
  infowindow.open(map,marker);
  });

google.maps.event.addListener(map,'center_changed',function() {
// 10 seconds after the center of the map has changed, pan back to the marker
  window.setTimeout(function() {
    map.panTo(marker.getPosition());
  },10000);
  });

google.maps.event.addListener(map, 'click', function(event) {
  placeMarker(event.latLng);
  });

function placeMarker(location) {
  var marker = new google.maps.Marker({
    position: location,
    map: map,
  });
  var infowindow = new google.maps.InfoWindow({
    content: 'Latitude: ' + location.lat() +
    '<br>Longitude: ' + location.lng()
  });
  infowindow.open(map,marker);
}
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

<body>
<div id="googleMap" style="width:1100px;height:500px;"></div>
</body>
</html>
</div>
</div>


        </div>
    </section>
    </section>