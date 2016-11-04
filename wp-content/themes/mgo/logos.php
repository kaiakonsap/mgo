<?php 
/**
 * Template Name: Keskmise suurusega pildid
 */
?>
<?php
get_header(); ?>

<section>
	<?php if (has_post_thumbnail()) {
		$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
	}
	?>
	<div class="container centeralign backimage" <?php echo 'style="background-color:'.(get_field('backcolor') ? get_field('backcolor') : '#fff').';"'?>>
		<span class="transparent" <?php echo 'style="background-color:'.(get_field('backcolor') ? get_field('backcolor') : '#fff').';"'?>>
		</span>
		<?php 
		if(get_field('title'))
			{?>
		<div class="slogan">
			<?php echo get_field('title');?>
		</div>
		
		<?php }
		else
		{
			the_title( '<h2 class="title">', '</h2>' );	
		}
		?>
		<?php if( have_rows('logos') ){?>
		<div id="logos">
		<?php	while ( have_rows('logos') ) : the_row();?>
			<?php $logo=get_sub_field('logo');?>
			<div class="medium middle">
				<img src="<?php echo $logo['url'];?>" alt="<?php echo $logo['alt']?>" width="<?php echo $logo['width']?>" height="<?php echo $logo['height']?>">
			</div>				
		<?php endwhile;	?>	
		</div>
		<?php }?>

	</div>
	<?php if ( !is_preview() ) {
    edit_post_link( __( 'Edit page','mgo-design' ), '<span class="edit-link">', '</span>' );
	}?>
</section>

<?php get_footer(); ?>