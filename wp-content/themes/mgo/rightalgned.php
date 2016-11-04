<?php 
/**
 * Template Name: Paremale joondatud sisu
 */
?>

<?php if (  is_preview() ) {
	get_header();
}?>
<section>
	<?php if (has_post_thumbnail()) {
		$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
	}
	?>
	<div class="container rightalign backimage highcontrast" <?php echo 'style="background-image:url('.$feat_image_url.');background-color:'.(get_field('backcolor') ? get_field('backcolor') : '#fff').';"'?>>
		<span class="transparent" <?php echo 'style="background-color:'.(get_field('backcolor') ? get_field('backcolor') : '#fff').';"'?>>
		</span>
		<div class="text centeralign">	
			<?php if(get_field('title'))
			{?>
			<div <?php if(get_field('tabel') && have_rows('tabel')):?> 
				class="slogan leftalign"
			<?php else: ?>class="slogan"
			<?php endif; ?>
			>
			<?php echo get_field('title');?>
		</div>

		<?php }
		else
		{
			the_title( '<h2 class="title">', '</h2>' );	
		}
		?>
		<?php
		the_content(); ?>
		<?php if(get_field('table')):
		$i=1;
		?>
		
		<div class="table">
			<?php	
			while( have_rows('table') ) : the_row();?>
			<div class="line">
				<?php if($i%2==0)
				{?>
				<div class="bold"><?php the_sub_field('quality'); ?></div>
				<div class="bold"><?php the_sub_field('value'); ?></div>
				<?php }
				else
					{?>
				<div><?php the_sub_field('quality'); ?></div>
				<div><?php the_sub_field('value'); ?></div>
				<?php }?>


			</div>
			<?php $i++; ?>				
		<?php endwhile;	?>
	</div>

<?php endif;
?>
</div>
</div>
<?php if ( !is_preview() ) {
	edit_post_link( __( 'Edit section','mgo-design' ), '<span class="edit-link">', '</span>' );
}?>
</section>
<?php if ( is_preview() ) {
	get_footer();
}?>