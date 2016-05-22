<?php include(dirname(__FILE__).'/header.php'); ?>
<hr id="top">               

<section id="portfolio">
	<div class="row section-head">
		<div class="twelve columns">
			<h1><?php $plxShow->catName(); ?></h1>
			<hr />               
			<?php $plxShow->catDescription(); ?>
		</div>
	</div> <!-- end section-head -->
	<div class="row items">
		<!-- portfolio-wrapper -->
		<div id="portfolio-wrapper" class="bgrid-fourth s-bgrid-third tab-bgrid-half">
			<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
				<div class="bgrid folio-item" role="article" >
				   <div class="item-wrap">
						<img src="img.php?src=<?php eval($plxShow->callHook("showVignette", "true")); ?>&w=315&h=315&crop-to-fit" alt="Hotel Sign">
						<div class="overlay">
							<div class="portfolio-item-meta">
								<h5><?php $plxShow->artTitle(); ?></h5>
								<p><?php $plxShow->artTags() ?></p><br>
								<a href="#modal-<?php echo $plxShow->artId(); ?>">
									<div class="link-icon">
										<i class="fa fa-plus"></i>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div> <!-- item end <?php echo $plxShow->artId(); ?> --> 
				<div id="modal-<?php echo $plxShow->artId(); ?>" class="popup-modal mfp-hide">
					<div class="media">
						<img src="img.php?src=<?php eval($plxShow->callHook("showVignette", "true")); ?>&w=550&h=366&crop-to-fit" alt="Hotel Sign">
					</div>
					<div class="description-box">
						<h4><?php $plxShow->artTitle(); ?></h4>
						<p><?php $plxShow->artChapo(); ?></p>
						<span class="categories"><?php $plxShow->artCat() ?></span>
					</div>
					<div class="link-box group">
						<a href="<?php $plxShow->artUrl(); ?>">Lire la suite</a>
						<a href="#" class="popup-modal-dismiss">Fermer</a>         
					</div>
				</div><!-- modal-<?php echo $plxShow->artId(); ?> end -->
			<?php endwhile; ?>
		</div> <!-- end portfolio-wrapper -->
	</div>  <!-- end row -->
</section> <!-- end portfolio -->

<?php include(dirname(__FILE__).'/footer.php'); ?>
