  <div class="col-md-6 col-md-offset-1">
      <div class="page-header">
        <h1>Evenements <span class="label label-default"><?=count($cityEvents)?></span></h1>
      </div>
      <hr class="clearbreak">
      
<?php foreach ($cityEvents as $event) { ?>
      <div class="postbox">
        <img src="./assets/300x300.png" class="postimg"/>
        <h3 class="posthl"><?= $event['title']?></h3>
        <p><?= $event['description']?></p>
      </div>
      <hr class="articlebreak">
<?php } ?>

		
	</div>
