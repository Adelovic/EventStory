<div class="well bs-sidebar" id="sidebar">
  <?= $this->Html->image('avatars/'.$user['picture'].'.png', ['alt' => 'Mon image de profil', 'class' => 'img-circle img-responsive pp']); ?>
      <h2 style="text-align: center; color: #4D667C"><a href="#"><?=$user['first_name'] . ' ' . $user['last_name']?></a></h2>
      <h4 style="text-align: center">Etudiant en informatique</h4>
      <hr>
      <ul class="nav nav-pills" role="tablist">
          <li class="pull-left"><a href="#">Notifications <span class="badge"><?= count($invites) ?></span></a></li>
      </ul>
</div>
