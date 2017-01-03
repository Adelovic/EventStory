<!DOCTYPE html>
<html>

    <head>
      <meta charset="utf-8" />
      <title>EventStory</title>

      <?= $this->Html->css('bootstrap.css') ?>
      <?= $this->Html->css('style.css') ?>
      <?= $this->Html->css('ionicons.min.css') ?>
    </head>

    <body>
        <?= $this->element('navbar') ?>

        <div id="wrap">
          <?php if ($user) {
    ?>
            <div class="container body">
          <?php
} else {
    ?>
            <div class="container body" style="margin-top: 135px">
          <?php
} ?>
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
          </div>
          <div id="push"></div>
        </div>
        <?= $this->element('footer') ?>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <?= $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js') ?>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <?= $this->Html->script('bootstrap.min.js') ?>
        <?= $this->Html->script('http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css') ?>
        <?= $this->Html->script('http://fonts.googleapis.com/css?family=Asap:400,700') ?>
    </body>
</html>
