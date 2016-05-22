<?php include(dirname(__FILE__).'/header.php'); ?>
        <hr id="top">     	    

   <!-- homepage hero
   ================================================== -->
     <section id="hero">		
		<div class="row hero-content">
			<div class="twelve columns hero-container">
			   <!-- hero-slider start-->
			   <div id="hero-slider" class="flexslider">
				   <ul class="slides">
						<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
							<li  role="article" id="post-<?php echo $plxShow->artId(); ?>">
							<div class="flex-caption">
								<h1 class=""><?php $plxShow->artTitle('link'); ?></h1>	
								<h3 class=""><?php $plxShow->artChapo(''); ?></h3>				   
							</div>						
							</li>
						<?php endwhile; ?>
					</ul>
				</div> <!-- end hero-slider -->				   
			</div> <!-- end twelve columns-->
		</div> <!-- end row -->	
		<!--div id="more">
		      <a class="smoothscroll" href="#services">More About Us<i class="fa fa-angle-down"></i></a>
		</div--> 	

   </section> <!-- end homepage hero -->

   
 
   
<?php include(dirname(__FILE__).'/footer.php'); ?>

