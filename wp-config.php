<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
//文件说明 配置文件

//mysql的设置基本上就都在这里

//数据库名
define('DB_NAME', 'wordpress');

/** MySQL database username */
//数据库用户名
define('DB_USER', 'root');
//数据库密码
/** MySQL database password */
define('DB_PASSWORD', '123456');
//数据库主机地址
/** MySQL hostname */
define('DB_HOST', 'localhost');
//数据库编码
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
//数据库校验 一般情况下不用管
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

//这里是一些相关的key 用于验证和安全设置 默认生成的
define('AUTH_KEY',         'MdwNxtnEs|+QJdIe$]p(Wc+=yzD:LbM-sU3cqF{}%>Wh4Ve. )Q$a:h2>hoHwvju');
define('SECURE_AUTH_KEY',  'b$atHQr5y6YmoG=c?gCGe[4smui1w:Elay];g7-n3T!9Gx=SB~{L*n}E8U@zA$>[');
define('LOGGED_IN_KEY',    '&e@8VSN^*p;P=CZw<7pl[R&V2!+%95(QGS^$t}]s;o|v:<+)XPR2SG>R|{:yYpcI');
define('NONCE_KEY',        '~0veYN#-kW.T-~o:9F,Yp:p%0k[Mru{8y+~9*SsO,ps)mHE0l^_T|9MP.mF{]K&O');
define('AUTH_SALT',        '};3+uCVu^T9j;m94](;L%wRU2iC;(}SXiFP33&SY%#{Vw>PMw9E/mo`PlR-T]TKS');
define('SECURE_AUTH_SALT', 'Z0a8`k(D=Vyf0.8$-+p)])-[tMl0Q@}e&?|5oU=36((Zd&f.Vs]k,]Ak]~woqB`j');
define('LOGGED_IN_SALT',   'M{Mx5/m2f5L6aI]/[;xa1wW:lIt44T#-E1gdnjEzPh@p?_d_(t)|gC SN.Cp:$@&');
define('NONCE_SALT',       'Z0(_fq2Lt>^FEe_^?o`GR*:;^sPdBI?&I5PU)%RLIcVQWZqst|kV;G-jPoJ~~4K5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
//数据库表前缀
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
//调试模式是否开启，最好配合调试插件使用
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
//定义了wordpress主路径
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
//引入wordpress的变量文件，这里才是真正的进入wordpress的执行流程
require_once(ABSPATH . 'wp-settings.php');
