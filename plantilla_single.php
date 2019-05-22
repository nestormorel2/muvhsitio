<?php /* plantilla utilizada para listar una noticia */ ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php if ( 'post' == get_post_type() ) { ?>
    <?php } ?>
    
    <?php the_content(); ?>

    <?php if(has_post_thumbnail(get_the_ID())){ ?>   
    	 <div align="center" style="margin-top:10px;"class="img-responsive"/>
                <?php echo get_the_post_thumbnail( get_the_ID(), 'noticia_thumb' ); ?>
         </div>
         <?php } ?> 
    <br class="clearfix">
<?php endwhile; else: ?>
    <h1>No hay contenido en esta seccion.</h1>
<?php endif; ?>