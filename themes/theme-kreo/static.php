<?php include(dirname(__FILE__).'/header.php'); ?>

<section role="article" id="static-page-<?php echo $plxShow->staticId(); ?>">

   	<div class="row section-head">

	         <hr id="top">     	    
	         <hr />     	    

      	<div class="twelve columns">
      		<h1><?php $plxShow->staticTitle(); ?></h1>
			<hr /> 
	         <?php $plxShow->staticContent(); ?>

	      </div> <!-- end section-head -->
	</div>


<?php include(dirname(__FILE__).'/footer.php'); ?>
