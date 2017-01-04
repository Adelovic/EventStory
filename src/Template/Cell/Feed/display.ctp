<div class="col-md-6 col-md-offset-1">
  <div class="page-header">
    <h1>Événements <span class="label label-default"><?=count($events)?></span></h1>
  </div>
  <hr class="clearbreak">

<?php if($mode == 'city') { ?>
  <div id="map" style="height:300px"></div>
  <script type="text/javascript">
  var map;
  var marker;
  function initMap()
  {
    var myLatLng = {lat: <?= $coordinates['lat'] ?>, lng: <?= $coordinates['lng'] ?>};
    map = new google.maps.Map(document.getElementById('map'), {
      center: myLatLng,
      zoom: 16
    });

    marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: '<?= $event['title'] ?>'
  });
  }
  </script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmcMKTC1X98dBN6DhE4ETGCYTEKpB916w&callback=initMap">
  </script>
  <?php } ?>

<?php foreach ($events as $event) { ?>
      <div class="postbox">
        <?= $this->Html->image('raclette.jpeg', ['alt' => 'Image de ' . $event['title'], 'class' => 'postimg']); ?>
        <h3 class="posthl"><?= $this->Html->link($event['title'], ['controller' => 'events', 'action' => 'view', $event['id']])?></h3>
        <p><?= $event['description']?></p>
      </div>
      <hr class="articlebreak">
<?php } ?>
	</div>
