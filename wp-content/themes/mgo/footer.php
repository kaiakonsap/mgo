<?php
/**
 * The template for displaying the footer
 */
?>

	</div>

	<footer class="site-footer">
		<div class="container">
			<?php if (is_active_sidebar('sidebar-2')) : ?>
                    <?php dynamic_sidebar('sidebar-2');
                    ?>
            <?php endif; ?>
            <?php if (is_active_sidebar('sidebar-3')) : ?>
                    <?php dynamic_sidebar('sidebar-3');
                    ?>
            <?php endif; ?>
            <?php if (is_active_sidebar('sidebar-4')) : ?>
                    <?php dynamic_sidebar('sidebar-4');
                    ?>
            <?php endif; ?>
            <?php if (is_active_sidebar('sidebar-5')) : ?>
                    <?php dynamic_sidebar('sidebar-5');
                    ?>
            <?php endif; ?>
            <?php if (is_active_sidebar('sidebar-6')) : ?>
                    <?php dynamic_sidebar('sidebar-6');
                    ?>
            <?php endif; ?>
		</div>
	</footer><!-- .site-footer -->

</div>

<?php wp_footer(); ?>

</body>
</html>