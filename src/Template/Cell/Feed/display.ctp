<div class="col-md-6 col-md-offset-1">
  <div class="page-header">
    <h1>Événements <span class="label label-default"><?=count($events)?></span></h1>
  </div>
  <hr class="clearbreak">

<?php foreach ($events as $event) { ?>
      <div class="postbox">
        <?= $this->Html->image($event['image'], ['alt' => 'Image de ' . $event['title'], 'class' => 'postimg']); ?>
        <h3 class="posthl"><?= $event['title']?></h3>
        <p><?= $event['description']?></p>
      </div>
      <hr class="articlebreak">
<?php } ?>


	</div>
