<?php include(dirname(__FILE__).'/header.php'); ?>


	<div class="row section-head">

	         <hr id="top">     	    
			     <h1><?php $plxShow->tagName(); ?>
			 </h1>
			  <hr />     
		<div class="twelve columns">
			<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>

			<article class="article" role="article" id="post-<?php echo $plxShow->artId(); ?>">

				<header>
					<h1>
						<?php $plxShow->artTitle('link'); ?>
					</h1>
					<small>
						<?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?> -
						<time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time> -
						<?php $plxShow->artNbCom(); ?>
					</small>
				</header>

				<section>
					<?php $plxShow->artChapo(); ?>
				</section>

				<footer>
					<small>
						<?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat() ?> - 
						<?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags() ?>
					</small>
				</footer>

			</article>

			<?php endwhile; ?>


			<nav class="pagination text-center">
				<?php $plxShow->pagination(); ?>
			</nav>

			<span>
				<?php $plxShow->tagFeed() ?>
			</span>

     	



	      </div> <!-- end section-head -->
	</div>


<?php include(dirname(__FILE__).'/footer.php'); ?>
