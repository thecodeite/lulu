<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>
    <section id="page">
        <div class="boxed">
        	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        	   
        	    <!-- page content -->
                <?php global $more; $more = 0; the_content(); ?>	
    			<!-- /page content -->
    			
    			<hr>
    			
    			<!-- form -->
				<form id="contact_form" name="contact_form" method="post" action="<?php echo get_template_directory_uri(); ?>/inc/contact-form.php" enctype="multipart/form-data">
					<input name="recipient" value="<?php echo get_option('admin_email'); ?>" type="hidden" />		
					<input name="url" value="<?php echo home_url(); ?>" type="hidden" />	
					
					<label for="name">Name:</label>
					<input type="text" id="name" name="name" value="" required />
					
					<label for="email">Email:</label>
					<input type="text" id="email" name="email" value="" required />
					
					<label for="phone">Telephone:</label>
					<input type="text" id="phone" name="phone" value="" required />
					
					<label for="message">Message:</label>
					<textarea id="message" name="message" required></textarea>
				
					<input class="button" type="submit" id="send_message" name="send_message" value="Submit" />
				</form>
    			<!-- /form -->
    			
        	<?php endwhile; endif; ?>
        </div>
    </section>
<?php get_footer(); ?>
