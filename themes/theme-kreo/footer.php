<?php if (!defined('PLX_ROOT')) exit; ?>


  
   <section id="testimonials">

      <div class="row content flex-container">
    
         <div id="testimonial-slider" class="flexslider">

            <ul class="slides">
			
			
				<?php eval($plxShow->callHook("vignetteArtList", array('
               <li>
                  <p>#art_chapo</p>
                  <div class="testimonial-author">
                    	<img src="img.php?src=#art_vignette&w=150&h=150&crop-to-fit" alt="#art_title">
                    	<div class="author-info">
                    		<a href="#art_url" title="#art_title">#art_title</a>
                    		<span class="position">#art_date</span>
                    	</div>
                  </div>
             	</li>', 3, "1|2", "...", "sort"))); ?>	
			
			

            </ul> <!-- end slides -->

         </div> <!-- end flexslider -->         
        
      </div> <!-- end row -->

   </section> <!-- end testimonials section -->  

     <div class="row">

         <div id="team-wrapper" class="bgrid-fourth s-bgrid-third tab-bgrid-half mob-bgrid-whole group">

            <div class="bgrid member">
               <div class="member-name">
                  <h3><?php $plxShow->lang('CATEGORIES'); ?></h3>
               </div>
				<ul class="cat-list unstyled-list">
					<?php $plxShow->catList('','<li id="#cat_id"><a class="#cat_status" href="#cat_url" title="#cat_name">#cat_name</a> (#art_nb)</li>'); ?>
				</ul>
            </div> <!-- end member -->


            <div class="bgrid member">
               <div class="member-name">
                  <h3><?php $plxShow->lang('LATEST_ARTICLES'); ?></h3>
               </div>
				<ul class="lastart-list unstyled-list">
					<?php $plxShow->lastArtList('<li><a class="#art_status" href="#art_url" title="#art_title">#art_title</a></li>'); ?>
				</ul>
            </div> <!-- end member -->


            <div class="bgrid member">
               <div class="member-name">
                  <h3><?php $plxShow->lang('TAGS'); ?></h3>
               </div>
				<ul class="tag-list">
					<?php $plxShow->tagList('<li class="tag #tag_size"><a class="#tag_status" href="#tag_url" title="#tag_name">#tag_name</a></li>', 20); ?>
				</ul>
            </div> <!-- end member -->


            <div class="bgrid member">
               <div class="member-name">
                  <h3><?php $plxShow->lang('LATEST_COMMENTS'); ?></h3>
               </div>
				<ul class="lastcom-list unstyled-list">
					<?php $plxShow->lastComList('<li><a href="#com_url">#com_author '.$plxShow->getLang('SAID').' : #com_content(34)</a></li>'); ?>
				</ul>
            </div> <!-- end member -->

         </div> <!-- end team-wrapper -->
      </div> <!-- end row -->




	   <!-- Footer
   ================================================== -->
   <footer>

      <div class="row">  

      	<div class="twelve columns content group">
      		
				<ul class="social-links">
               <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
               <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>               
               <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
               <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
               <li><a href="#"><i class="fa fa-flickr"></i></a></li>               
               <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>

            <hr />

            <div class="info">

            	<div class="footer-logo"></div>

	            <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
	            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
	            nibh id elit. 
	            </p>	        

	         </div>

      	</div>           

         <ul class="copyright">
         	<li>&copy; Copyright 2015 KREO.</li> 
         	<li>Design by <a href="http://www.styleshout.com/">Styleshout.</a>.</li>
         	<li><a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a></li>
         </ul>

         <!--div id="go-top">
            <a class="smoothscroll" title="Back to Top" href="#top">Remonter<i class="fa fa-angle-up"></i></a>
         </div-->

      </div> <!-- end row -->

   </footer> <!-- end footer -->

   
   <!-- cette portion est le petit carré jaune qui pivote au changement de page. vous pouvez l'enlever si ça vous énerve -->
   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="<?php $plxShow->template(); ?>/js/jquery-1.11.3.min.js"></script>
   <script src="<?php $plxShow->template(); ?>/js/jquery-migrate-1.2.1.min.js"></script>
   <script src="<?php $plxShow->template(); ?>/js/jquery.flexslider-min.js"></script>
   <script src="<?php $plxShow->template(); ?>/js/jquery.waypoints.min.js"></script>
   <script src="<?php $plxShow->template(); ?>/js/jquery.validate.min.js"></script>
   <script src="<?php $plxShow->template(); ?>/js/jquery.fittext.js"></script>
   <script src="<?php $plxShow->template(); ?>/js/jquery.placeholder.min.js"></script>
   <script src="<?php $plxShow->template(); ?>/js/jquery.magnific-popup.min.js"></script>  
   <script src="<?php $plxShow->template(); ?>/js/main.js"></script>

</body>

</html>