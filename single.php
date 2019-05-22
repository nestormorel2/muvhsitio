<?php ?>
<?php get_header(); ?>

<div class="fondo titulo h2">
	<div class="container"> 
		<h2><?php the_title(); ?></a></h2>
		<?php 
			if(is_single()){
				include('infonoticias.php');
			}
		?>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="publicacion clearfix">
			<?php include('plantilla_single.php'); ?> 
					
		</div>  
	</div>
</div>
<?php get_footer(); ?>