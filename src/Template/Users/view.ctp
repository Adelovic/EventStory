<div class="panel panel-default">
  <div class="panel-body">
    <div class="col-md-12">
      <?= $this->Html->image('avatars/'.$userShown['picture'].'.png', ['alt' => 'Mon image de profil', 'class' => 'pull-left img-circle pp']) ?>
      <h2 class="text-center"><a href=""><?= strtoupper($userShown['last_name']) . " " . $userShown['first_name'] ?></a></h2>
      <h3 class="text-center"><?= $userShown['birth']?></h3>
    </div>
  </div>


  <div class="panel-footer">
    <!-- t'as une variable $friendshipState c'est un enum ('alreadyInvited', 'nothing', 'waitingForAproval') fais en sorte que ce soit comme sur fb, bises michel. -->
    <?php if($friendshipState == 'alreadyBefriended'){
      echo $this->Html->link('Retirer de la liste d\'amis', ['controller' => 'Friendships', 'action' => 'delete', $friendshipId], ['class' => 'btn btn-danger']);
    }
    else {
      echo $this->Html->link('Demander en amis', ['controller' => 'InvitesFriend', 'action' => 'add', $userShown['id']], ['class' => 'btn btn-success']);
    }
    // PAS BON MICHEL PAS BON <3
    ?>
  </div>
</div>
<div class=" well col-md-3" >
  <em>Evénements organisés :</em><br> 5 <br>
</div>
<div class=" well col-md-8 col-md-offset-1">
<!-- COM Utilisateur-->
<div class="panel panel-default">
  <div class="panel-heading">
    <a href="#">
    <div class="row">
      <div class="pull-left">
        <img alt="64x64" class="img-circle pp" style="width: 64px; height: 64px;" src="C:/Users/User/Desktop/Paul%20Bureau/paul.jpg" >
      </div>
      <div class="col-md-10">
      <h3>Paul G</h3>
      </div>
    </div>
    </a>

  </div>
  <div class="panel-body">
    <h4><b>Super Evenement !</b></h4>
    <hr>
    <p>Joyeux Nöel</p>
  </div>
</div>
<!-- FIN COM Uttilisateur -->

<!-- COM Utilisateur-->
<div class="panel panel-default">
  <div class="panel-heading">
    <a href="#">
    <div class="row">
      <div class="pull-left">
      <img alt="64x64" class="img-circle pp" style="width: 64px; height: 64px;" src="C:/Users/User/Desktop/Paul%20Bureau/paul.jpg" >
      </div>
      <div class="col-md-10">
        <h3>Paul G</h3>
      </div>
    </div>
    </a>

  </div>
  <div class="panel-body">
  <h4><b>Super Evenement !</b></h4>
  <hr>
  <p>Joyeux Nöel</p>
  </div>
</div>
<!-- FIN COM Uttilisateur -->
</div>
