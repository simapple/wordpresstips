<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
//核心入口文件 不知道是否可以修改，应该是可以
//使用主题
//修改成false 返回空白
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
//加载执行wordpress流程
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
