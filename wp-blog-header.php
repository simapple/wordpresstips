<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */
//wordpressִ�еĿ�ʼ
if ( !isset($wp_did_header) ) {//��ʱ��������һ�����趨�����ܷ�ֹ��������
    //ִ����header
	$wp_did_header = true;

    //����wordpressִ��
	require_once( dirname(__FILE__) . '/wp-load.php' );
    //��������ִ�У���ȫ�ֱ���$wpִ�� main����
	wp();
    //ִ��wordressģ��
	require_once( ABSPATH . WPINC . '/template-loader.php' );

}
