<?php 

if ($userLogged)
{ ?>
  <div id="nav-wrapper">
    <div id="nav" class="navbar-fixed-top navbar navbar-default navbar-inner">


      <div class="container colorize">
        <div class="row">
          <div class="col-md-7 col-md-offset-1">

            <!-- BAR CONTENTS -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="navbar">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">EventStory</a>
            </div>

            <div class="collapse navbar-collapse" id="navbar">
              <!-- LEFT CONTENT -->
              <ul class="nav navbar-nav">
                <li><a href="#">Accueil</a></li>
              </ul>

              
              <form class="navbar-form" role="search" method="post" action="/EventStory/Search/">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rechercher" name="search" id="search">
                  <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-3">
          <!-- RIGHT CONTENT -->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Créer un événement</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-user"></span> 
                        <strong><?= $user['first_name'] ?></strong>
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-login">
                                <p class="text-left"><strong><?= $user['first_name'] ?> <?= $user['last_name'] ?></strong></p>
                                <p class="text-left small"><?= $user['email'] ?></p>
                                <p class="text-left">
                                    <a href="#" class="btn btn-primary btn-block btn-sm">Modifier mes informations</a>
                                </p>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="navbar-login navbar-login-session">

                                        <p>
                                            <a href="Users/logout" class="btn btn-danger btn-block">Déconnexion</a>
                                        </p>

                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
          </div> <!-- col -->
        </div> <!-- row -->
      </div> <!-- container -->
    </div> <!-- nav -->
  </div> <!-- wrapper -->

<?php 
} 
else
{
?>
  <div id="nav-wrapper">
    <div id="nav" class="navbar-fixed-top navbar navbar-default navbar-inner">

      <!--<div class="container header">
        <div class="row">
          <div class="col-md-12">
            <img class="headerlogo" alt="" src="./assets/header.png"/>
          </div>
        </div>
      </div> -->

      <div class="container colorize">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">

            <!-- BAR CONTENTS -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="navbar">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">EventStory</a>
            </div>

            <div class="collapse navbar-collapse" id="navbar">
              <!-- RIGHT CONTENT -->
              <form class="navbar-form navbar-right" method="post" action="Users/login">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Identifiant" name=email>
                  <input type="password" class="form-control" placeholder="Mot de passe" name=password>
                </div>
                <button type="submit" class="btn btn-default">Se connecter</button>
              </form>
            </div>
          </div> <!-- col -->
        </div> <!-- row -->
      </div> <!-- container -->
    </div> <!-- nav -->
  </div> <!-- wrapper -->
<?php
}
?>
