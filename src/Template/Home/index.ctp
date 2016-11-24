<div class="row">
	<div class="col-md-8">
		<?= $this->Flash->render() ?>
		<div id="carouselEvents" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carouselEvents" data-slide-to="0" class="active"></li>
				<?php
					for ($i = 1; $i < count($carousel); ++$i) {
					    echo '<li data-target="#carouselEvents" data-slide-to="';
					    echo $i;
					    echo '"></li>';
					} ?>
			</ol>
			<!-- Wrapper for slides -->
			<!-- A CHANGER, TELLEMENT PAS RESPONSIVE!!! -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<?= $this->Html->image($carousel[0], ['alt' => 'event'])?>
				</div>
				<?php
					for ($i = 1; $i < count($carousel); $i++) 
					{
					    echo '<div class="item">';
					    echo $this->Html->image($carousel[$i], ['alt' => 'event']);
					    echo '</div>';
					} ?>
			</div>
			<!-- Left and right controls -->
			<a class="left carousel-control" href="#carouselEvents" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carouselEvents" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
  <div class="col-md-4 register-form">
    <?= $this->element('register') ?>
  </div>
</div>
