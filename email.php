
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
		);

		echo smlsubform($args); 

		if (isset($_POST['sml_subscribe']))
    {   
    ?>
<script type="text/javascript">
window.location = "/najiamade/home";
</script>      
    <?php
    }?>
	</div>
</div>
<?php get_footer(); ?>