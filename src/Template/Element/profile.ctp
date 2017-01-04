<div class="well bs-sidebar" id="sidebar">
  <?= $this->Html->image('avatars/'.$avatar['id'] . '.' . $avatar['extension'], ['alt' => 'Mon image de profil', 'class' => 'img-circle img-responsive pp']); ?>
      <h2 class="name"><?= $this->Html->link(strtoupper($user['last_name']) . ' ' . $user['first_name'], ['controller' => 'users', 'action' => 'view', $user['id']]) ?></h2>
      <h4 class="text-center"><?=$user['description']?></h4>
      <hr>
      <ul class="nav nav-pills" role="tablist">
          <li class="pull-left"><a href="#">Notifications <span class="badge"><?= count($invites) ?></span></a></li>
      </ul>
</div>
