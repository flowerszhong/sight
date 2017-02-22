<?php if (get_option('paging_mode') == 'default'): ?>
	<div class="pagination">
		<?php previous_posts_link(__('上一页', 'sight')); ?>
		<?php next_posts_link(__('下一页', 'sight')); ?>
		<?php if (function_exists('wp_pagenavi')) wp_pagenavi(); ?>
	</div>
	<?php else: ?>
	<div id="pagination"><?php next_posts_link(__('加载更多', 'sight')); ?></div>
<?php endif; ?>

