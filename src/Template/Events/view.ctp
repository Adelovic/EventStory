<!--
Pour le cote createur :
VOUS AVEZ UNE VARIABLE CREATOR, DEMMERDEZ VOUS <3 bises, jean claude
Pour voir si l'user participe : vous avez un boolean participates, arrangez les boutons comme il faut

Pour participer appeler l'action add du controller Participations
pour se desinscrire appeler l'action delete du même controller
-->

<div class="row" style="margin-top: 180px;">
  <div class="col-md-6 col-md-offset-1">
    <div class="page-header">
      <h1>Raclette chez moi !</h1>
    </div>


    <div class="postbox">
      <div style="background-image:url('assets/rac.jpg');" class="event"></div>
    </div>

    <hr class="articlebreak">
    <div class="postbox">
      <h3>Informations</h3>
      <div class="col-md-6">
        <ul class="list-group">
          <li class="list-group-item">
            Le 10/10/2010
          </li>
          <li class="list-group-item">
              À 10/10/2010
          </li>
          <li class="list-group-item">
            Au 4 Avenue de beauvert 28100 GRENOBLE
          </li>
        </ul>
      </div>
      <div class="col-md-6">
        <ul class="list-group">
          <li class="list-group-item">
            <span class="pull-right">14</span>
            Invités
          </li>
          <li class="list-group-item">
            <span class="pull-right">14</span>
            Participants
          </li>
          <li class="list-group-item">
            <span class="pull-right">14</span>
            Non répondu
          </li>
        </ul>
      </div>
      <h3>Description</h3>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>

    <hr class="articlebreak">




<div id="map"></div>
    <script type="text/javascript">

	var map;
  var marker;
	function initMap()
	{
    var myLatLng = {lat: 43.171673, lng: 5.9873831};
	  map = new google.maps.Map(document.getElementById('map'), {
	    center: myLatLng,
	    zoom: 8
	  });

    marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Toulon'
  });
	}
<div id="map"></div>
    <script type="text/javascript">

	var map;
  var marker;
	function initMap()
	{
    var myLatLng = {lat: 43.171673, lng: 5.9873831};
	  map = new google.maps.Map(document.getElementById('map'), {
	    center: myLatLng,
	    zoom: 8
	  });

    marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Toulon'
  });
	}

    </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmcMKTC1X98dBN6DhE4ETGCYTEKpB916w&callback=initMap">
    </script>
    </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmcMKTC1X98dBN6DhE4ETGCYTEKpB916w&callback=initMap">
    </script>




  </div>

  <div class="col-md-4">
      <div class="well bs-sidebar" id="sidebar">
        <h1 style="text-align:center">Organisateur</h1><hr>
        <img class="img-circle img-responsive pp" src="assets/pp.jpg" alt="" />
        <h2 style="text-align: center; color: #4D667C"><a href="#">Christopher GROSSAIN</a></h2>
        <h4 style="text-align: center">Etudiant en informatique</h4>
        <hr>
        <h4 style="text-align:center">Partenaires :</h4>
        <a href="#">HauteSavoie</a>, <a href="#">Fromage.com</a>, <a href="#">Carrefour</a>, <a href="#">Un autre partenaire</a>, <a href="#">Et un dernier</a>
        <hr>
        <h4 style="text-align:center">Donnez votre réponse</h4>
        <a href="#" class="btn btn-success" style="width:49%">Participer</a>
        <a href="#" class="btn btn-danger" style="width:49%">Ne pas participer</a>
      </div>
  </div>
</div>
