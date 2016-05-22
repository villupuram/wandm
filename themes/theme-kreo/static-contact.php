<?php include(dirname(__FILE__).'/header.php'); ?>

<section role="article" id="static-page-<?php echo $plxShow->staticId(); ?>">

   	<div class="row section-head">

	         <hr id="top">     	    
	         <hr />     	    

   		<div class="twelve columns">

	         <h1><?php $plxShow->staticTitle(); ?></h1>

	         <hr />	        

	      </div>

      </div> <!-- end section-head -->

      <div class="row">
      	
      	<div id="contact-form" class="six columns tab-whole left">

            <!-- form -->
            <form name="contactForm" id="contactForm" method="post" action=""  >
      			<fieldset>

                  <div class="group">
 						   <input name="contactName" type="text" id="contactName" placeholder="Nom" value="" minLength="2" required />
                  </div>
                  <div>
	      			   <input name="contactEmail" type="email" id="contactEmail" placeholder="Courriel" value="" required />
	               </div>
                  <div>
	     				   <input name="contactSubject" type="text" id="contactSubject" placeholder="Sujet"  value="" />
	               </div>                       
                  <div>
	                 	<textarea name="contactMessage"  id="contactMessage" placeholder="Message" rows="10" cols="50" required ></textarea>
	               </div>                      
                  <div>
                     <button class="submitform">Envoyer</button>
                     <div id="submit-loader">
                        <div class="text-loader">Envoi en cours...</div>                             
       				      <div class="s-loader">
								  	<div class="bounce1"></div>
								  	<div class="bounce2"></div>
								  	<div class="bounce3"></div>
								</div>
							</div>
                  </div>

      			</fieldset>
      		</form> <!-- Form End -->

            <!-- contact-warning -->
            <div id="message-warning"></div>
            <!-- contact-success -->
      		<div id="message-success">
               <i class="icon-ok"></i>Votre message a été envoyé, merci!<br />
      		</div>

         </div>

         <div class="six columns tab-whole right">

            <p class="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 

	         <h3 class="address">Passez nous voir</h3>

	         <p>
            1600 Amphitheatre Parkway<br>
            Mountain View, CA<br>
            94043 US
            </p>

            <h3>Contact Numbers:</h3>
			   <p>Phone: (000) 555 1212<br>
			   	Mobile: (000) 555 0100<br>
			     	Fax: (000) 555 0101
			   </p>
               	
         </div>     	

      </div> <!-- end row -->     

   </section>  <!-- end contact -->


	
	
	
	
	
	
	

<?php include(dirname(__FILE__).'/footer.php'); ?>
