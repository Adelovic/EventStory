<!DOCTYPE html>
<html>

    <head>
      <meta charset="utf-8" />
      <title>EventStory</title>

      <?= $this->Html->css('bootstrap.css') ?>
      <?= $this->Html->css('style.css') ?>

      <?= $this->Html->script('http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css') ?>
      <?= $this->Html->script('http://fonts.googleapis.com/css?family=Asap:400,700') ?>
    </head>

    <body> 
        <?= $this->element('navbar') ?>

        <div id="wrap">
          <div class="container body">
            <?= $this->fetch('content') ?>
          </div>
          <div id="push"></div>
        </div>
        <?= $this->element('footer') ?>
        <?= $this->element('scripts') ?>
    </body>
</html>
