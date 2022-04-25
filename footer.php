
<hr />
<div id="footer">
<!-- If you'd like to support WordPress, having the "powered by" link somewhere on your blog is the best way; it's our only promotion or advertising. -->
	<p>
		<?php bloginfo('name'); ?> is powered by <a href="http://wordpress.org/">WordPress</a> with <a href="https://github.com/jocap/whiteasmilk" title="White as Milk theme for WordPress">White as Milk</a> designed by <a href="https://azeem.me/">Azeem Azeez</a>.
		<br />
		<a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a> and <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>.
		<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
	</p>
</div>
</div>
		<?php wp_footer(); ?>
</body>
</html>
