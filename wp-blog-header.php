<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */
//wordpress执行的开始
if ( !isset($wp_did_header) ) {//暂时不明白这一步的设定，可能防止二次引入
    //执行了header
	$wp_did_header = true;

    //加载wordpress执行
	require_once( dirname(__FILE__) . '/wp-load.php' );
    //核心运作执行，由全局变量$wp执行 main方法
	wp();
    //执行wordress模板
	require_once( ABSPATH . WPINC . '/template-loader.php' );

}
