<div class="page-header"></div>
            <div class="panel panel-default">
            	<div class="panel-body">

              		<div class="col-lg-6">
            			<?= $this->Html->image('avatars/'.$userShown['picture'].'.png', ['alt' => 'Mon image de profil', 'class' => 'img-circle pp']) ?>
            		</div>
            			<div class="pull-right text-right">
            		<h2><?= $userShown['first_name'] ?> <?= $userShown['first_name']?></h2>
            		<h3><?= $userShown['city']?></h3>
            		<h3><?= $userShown['birth']->timeAgoInWords(['accuracy' => 'year'])?></h3>
             	</div>
              </div>


              <div class="panel-footer">
                <!-- t'as une variable $friendshipState c'est un enum ('alreadyInvited', 'nothing', 'waitingForAproval') fais en sorte que ce soit comme sur fb, bises michel. -->
                  <button type="button" class="btn btn-default"><?= $this->Html->link(__('Ajouter'), ['controller' => 'InvitesFriend', 'action' => 'add', $userShown['id']]) ?></button>
                  <div class="pull-right text-right">
                    <button type="button" class="btn btn-default">Signaler l'utilisateur</button>
                  </div>
              </div>
            </div>
            <div class=" well col-lg-3" >
              <em>Evénements organisés :</em><br> 5 <br>
            </div>
			<div class= "col-lg-1"></div>
            <div class=" well col-lg-8">
              <!-- COM Utilisateur-->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <a href="#">
                    <div class="row">
                      <div class="pull-left">
                        <img alt="64x64" class="img-circle pp" style="width: 64px; height: 64px;" src="C:/Users/User/Desktop/Paul%20Bureau/paul.jpg" >
                      </div>
                      <div class="col-lg-10">
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
                        <div class="col-lg-10">
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
