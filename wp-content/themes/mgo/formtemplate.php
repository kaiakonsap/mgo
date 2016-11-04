<?php 
/**
 * Template Name: form
 */

    get_header();
?>
<section>
  <div class="container centeralign" <?php echo 'style="background-color:'.(get_field('backcolor') ? get_field('backcolor') : '#fff').';"'?>>
            <div class="slogan">
        <?php the_title( '<h2 class="title">', '</h2>' );?>
    </div>
    <div class="smalltekst">
          <?php the_content(); ?>
    </div>


  </div>
  <?php if ( !is_preview() ) {
    edit_post_link( __( 'Edit section','mgo-design' ), '<span class="edit-link">', '</span>' );
  }?>

</section>
<?php
    get_footer();
