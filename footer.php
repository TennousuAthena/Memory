<?php
/**
 * ┌─┐┬ ┬┌─┐┬ ┬┌┐┌┌─┐┌─┐┌┐┌┌─┐ ┌─┐┌─┐┌┬┐
 * └─┐├─┤├─┤││││││┌─┘├┤ ││││ ┬ │  │ ││││
 * └─┘┴ ┴┴ ┴└┴┘┘└┘└─┘└─┘┘└┘└─┘o└─┘└─┘┴ ┴
 *
 * @package WordPress
 * @Theme Memory
 *
 * @author admin@shawnzeng.com
 * @link https://shawnzeng.com
 */
?>
		<div id="foot">
			<a id="back-to-top"><i class="memory memory-top"></i></a>
			<p>版权所有 © <?php echo date("Y"); ?> <a href="<?php echo get_option( 'siteurl' ); ?>"><?php bloginfo('name'); ?></a> <?php if( cs_get_option( 'memory_record' )!=null ) { ?> | 
			<!--<a href="https://icp.gov.moe" target="_blank"><?php //echo cs_get_option( 'memory_record' ); ?></a>-->
			<a href="https://icp.gov.moe" target="_blank">萌ICP备 </a><a href="https://icp.gov.moe/?keyword=<?php echo cs_get_option( 'memory_record' ); ?>" target="_blank"> <?php echo cs_get_option( 'memory_record' ); ?>号</a>
			<?php } ?><br/>Theme <a class="theme" href="https://github.com/TennousuAthena/Memory" target="_blank">Memory</a> | 采用 <img alt="知识共享许可协议" title="知识共享许可协议" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/80x15.png" /> 许可. All Rights Reserved. <br/><span class="my-face">(●'◡'●)ﾉ</span>本博客已萌萌哒运行了<span id="span_dt_dt"></span></p>
		</div>
		<div id="layout-shadow"></div>
<?php wp_enqueue_script( 'func', get_template_directory_uri() . '/js/func.js', false, wp_get_theme()->get('Version'), array('jquery') );
		wp_enqueue_script( 'support', get_template_directory_uri() . '/js/support.js', false, wp_get_theme()->get('Version'), array('jquery') );
		wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js', false, wp_get_theme()->get('Version'), array('jquery','func','support') );
		if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
		wp_localize_script( 'app', 'memoryConfig', array(
			'siteUrl' => get_stylesheet_directory_uri(),
			'siteStartTime' => cs_get_option( 'memory_start_time' ),
			'ajaxUrl' => admin_url('admin-ajax.php'),
			'commentEditAgain' => cs_get_option( 'memory_comment_edit' ),
			'loadPjax' => cs_get_option( 'memory_pjax' ),
		)); ?>
	<?php wp_footer(); if ( cs_get_option( 'memory_user_js' )!=null ) echo '<script>' . cs_get_option( 'memory_user_js' ) . '</script>';?>
</body>
</html>
