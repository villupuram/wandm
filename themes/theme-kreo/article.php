<?php include(dirname(__FILE__).'/header.php'); ?>

<section role="article" id="post-<?php echo $plxShow->artId(); ?>">


   	<div class="row section-head">

	         <hr id="top">     	    
	         <hr />     	    

      	<div class="twelve columns">
      		<h1><?php $plxShow->artTitle(); ?></h1>
			<hr /> 
					<img src="img.php?src=<?php eval($plxShow->callHook("showVignette", "true")); ?>&w=1000&h=100&crop-to-fit" alt="<?php $plxShow->artTitle() ?>">
			<dt><?php $plxShow->artAuthor() ?> 	</dt> 
			
							<small>
						
						<time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time> -
						<a href="#comments" title="<?php $plxShow->artNbCom(); ?>"><?php $plxShow->artNbCom(); ?></a>
					</small>
					
	         <?php $plxShow->artContent(); ?>
			 
			    <div class="row mobile-no-padding">       	

      	<div class="process bgrid-half tab-bgrid-whole group">

      		<div class="bgrid">
				<dt><?php $plxShow->lang('CLASSIFIED_IN') ?> :</dt> <?php $plxShow->artCat() ?>
				<dt><?php $plxShow->lang('TAGS') ?> : </dt><?php $plxShow->artTags() ?>
				<?php $plxShow->artAuthorInfos('<div class="author-infos">#art_authorinfos</div>'); ?>
		   	</div>

      		<div class="bgrid">
				<?php include(dirname(__FILE__).'/commentaires.php'); ?>
			</div> 

		
      	</div> <!-- end process -->      	

     	



	      </div> <!-- end section-head -->
	</div>


<?php include(dirname(__FILE__).'/footer.php'); ?>
