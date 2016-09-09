
<?php
/*
* Template Name: Email Signup
*
*
*/

get_header(); 

?>

<div class= "overlay">
	<div class="overlay-content">
		<p class="desc"> Enter your email below to Access Site </p>
		<?php 
		$args = array(
			'prepend' => '', 
			'showname' => false,
			'nametxt' => 'Name:', 
			'nameholder' => 'Name...', 
			'emailtxt' => '',
			'emailholder' => 'Enter Email', 
			'showsubmit' => true, 
			'submittxt' => 'Submit', 
			'jsthanks' => false,
			'thankyou' => '',
		);

		echo smlsubform($args); 

		
    ?>
     
    
	</div>
</div>
<?php get_footer(); ?>