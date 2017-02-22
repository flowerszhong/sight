			</div>
			<!-- /Content -->

			<?php get_sidebar(); ?>

			</div>
			<!-- /Container -->

			<div class="footer">
				<p class="copyright">&copy; 2014 <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>.
					<?php _e('保留所有权利.', 'sight'); ?>  | 粤ICP备14094633号
				</p>

				<?php wp_nav_menu(array('theme_location' => 'bottom_menu', 'depth' => 1, 'container' => 'div', 'container_class' => 'bottom-menu', 'menu_id' => 'nav-bottom-menu', 'menu_class' => false, 'fallback_cb' => false)); ?>
			</div>
		</div>
		<!-- Page generated: <?php timer_stop(1); ?> s, <?php echo get_num_queries(); ?> queries -->
		<?php wp_footer(); ?>

		<?php echo (get_option('ga')) ? get_option('ga') : '' ?>
	</body>
</html>
