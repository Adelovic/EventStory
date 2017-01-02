<div class="row">
  <div class="col-md-6 col-md-offset-1">
    <div class="page-header">
      <h1 class="pull-left"><?= $event->title ?></h1>
      <?php if($event->invitation_type == "everyone"){
      echo '<button data-toggle="modal" data-target="#friendModal" type="button" href="" style="margin-top: 1.5em" class="btn btn-primary pull-right">Invitez vos amis</button>';
      } ?>
    </div>

    <!-- friend modal -->
    <div class="modal fade" id="friendModal" tabindex="-1" role="dialog" aria-labelledby="invite" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <?= $this->Form->create(); ?>
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="invite">Invitez des amis</h4>
          </div>
          <div class="modal-body">
            <?php foreach ($friends as $friend) { 
              echo '<label for="1">' . strtoupper($friend->last_name) . ' ' . $friend->first_name . '</label>';
              echo $this->Form->checkbox('invite', ['value' => '1', 'id' => '1', 'class' => 'pull-right']) . '<br>';
            } ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            <button type="button" class="btn btn-primary">Inviter</button>
          </div>
        </div>
        <?= $this->Form->end(); ?>
      </div>
    </div>

    <div class="postbox">
      <div class="event">
        <?php echo $this->Html->image('raclette.jpeg', ['alt' => 'event image', 'class' => 'event']) ?>
      </div>
    </div>
    <hr>
    <div class="postbox">
      <div id="map" style="height:200px"></div>
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
    </div>

    <hr>
    <div class="postbox">
      <h3>Informations</h3>
      <div class="col-md-6">
        <ul class="list-group">
          <li class="list-group-item">Le 
            <?= $event->date_happening ?>
          </li>
          <li class="list-group-item">
            <?= $event->address ?>
          </li>
        </ul>
      </div>
      <div class="col-md-6">
        <ul class="list-group">
          <li class="list-group-item">
            <span class="pull-right"><?= $guests ?></span>
            Invités
          </li>
          <li class="list-group-item">
            <span class="pull-right"><?= $participants ?></span>
            Participants
          </li>
        </ul>
      </div>
    </div>
    <hr><br>
    <div class="postbox">
      <h3>Description</h3>
      <p>
        <?= $event->description ?>
      </p><hr>
    </div>

    <hr class="articlebreak">
  </div>

  <div class="col-md-4">
      <div class="well bs-sidebar" id="sidebar">
        <h1 class="text-center">Organisateur</h1><hr>
        <?= $this->Html->image('avatars/'.$avatar['id'] . '.' . $avatar['extension'], ['alt' => 'image de profil du créateur', 'class' => 'img-circle img-responsive pp']); ?>
        <h2 class="text-center"><a href="#"><?php echo strtoupper($creator->last_name) . ' ' . $creator->first_name ?></a></h2>
        <h4 class="text-center"><?= $creator->description ?></h4>
        <hr>
        <h4 class="text-center">Partenaires :</h4>
        <a href="#">HauteSavoie</a>, <a href="#">Fromage.com</a>, <a href="#">Carrefour</a>, <a href="#">Un autre partenaire</a>, <a href="#">Et un dernier</a>
        <hr>
        <?php if($participates){
          echo $this->Html->link('Ne plus participer', ['controller' => 'participations', 'action' => 'delete', $event->id], ['class' => 'center-block btn-block btn btn-danger']);
        }
        else {
          echo $this->Html->link('Participer', ['controller' => 'participations', 'action' => 'add', $event->id], ['class' => 'center-block btn-block btn btn-success']);
        } ?>

      </div>
  </div>
</div>
