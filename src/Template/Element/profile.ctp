<div class="well bs-sidebar" id="sidebar">
  <?= $this->Html->image('avatars/' . $user['avatar'], ['alt' => 'Mon image de profil', 'class' => 'img-circle img-responsive pp']); ?>
      <h2 style="text-align: center; color: #4D667C"><a href="#"><?=$user['first_name'] . ' ' . $user['last_name']?></a></h2>
      <h4 style="text-align: center">Etudiant en informatique</h4>
      <p style="text-align:center;">
          <a href="#">Facebook</a> | <a href="#">Twitter</a> | <a href="#">Google+</a>
      </p>
      <hr>
      <ul class="nav nav-pills" role="tablist">
          <li class=" pull-left"><a href="#">Paramètres</a></li>
          <li class="pull-right"><a href="#">Messages <span class="badge">3</span></a></li>
      </ul>
</div>