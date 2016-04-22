<?php
# Database Configuration
	
if($_SERVER['SERVER_NAME'] == 'abcstallningar.se.nitea.net'){

	define('DB_NAME', 'abcstallningar.se');

	/** MySQL-databasens användarnamn */
	define('DB_USER', 'nitea');

	/** MySQL-databasens lösenord */
	define('DB_PASSWORD', '0aetin!5');

	/** MySQL-server */
	define('DB_HOST', 'nitea.net');
}else{
	define( 'DB_NAME', '105548-abcstallningarse' );
	define( 'DB_USER', '105548_jn27952' );
	define( 'DB_PASSWORD', '$Vy9+eSgb8(^9SBV' );
	define( 'DB_HOST', 'abcstallningarse-105548.mysql.binero.se' );
	define( 'DB_HOST_SLAVE', 'abcstallningarse-105548.mysql.binero.se' );
}
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';


define('WP_DEBUG', false);

# Security Salts, Keys, Etc
define('AUTH_KEY',         'Eu$oI,~S<%T(|XgjrA:+Q=.>`&I(ytI7AEAt1(Sv2*3d(^XtFng#k8GYo 7cl&4,');
define('SECURE_AUTH_KEY',  '+R*q3rX%vtlKpJe  Q~dlOBdy3#+UsxS1k=:@2O;HO%CIu#TD;7BbQbUBf9R&7{I');
define('LOGGED_IN_KEY',    'rq_U57pg-.m831d7+,z)&H,?Fdw$@mK~>.t=mk-&lz{=#h:L]dE3HIg$Ta]g[Hq,');
define('NONCE_KEY',        'N-9R=QbkbV;QYx_} ,_x7y^H}{vg%A8L{L+lPx9GP-C:_-o}<ni:2VrxAW>~f%r3');
define('AUTH_SALT',        '05I"]HXe0)~mB1R[K: vbU(I^"o5|o?OD)G$!9Ebsz_rD>v[:Bc7QJzy*(0.P^VH');
define('SECURE_AUTH_SALT', 'gv4JH.*=?p:ZX3$HaE1VEFwy$gf!w8W<[Z*Z1I5ledmhil63JW+yLh_rY0@[ 3cY');
define('LOGGED_IN_SALT',   'LwEh-P}, S,*rwsJG!z",/yF9 H k:Kdg;N2L^=gt3U4Iyp8VR>>:%40B$j{NMYe');
define('NONCE_SALT',       '=XLqS"[8@zM5q(uk n~zJg^t<sj^oRfrYbUGTF)T<BUGz!oW]%+W`*|p_)@}:Ig0');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'abcstallningar' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '21ac057c5c5a28cc70547d729041b036b0b7c562' );

define( 'WPE_FOOTER_HTML', "" );

define( 'WPE_CLUSTER_ID', '30881' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_CDN_DISABLE_ALLOWED', false );



define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', 5 );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'www.abcstallningar.se', 1 => 'abcstallningar.se', 2 => 'abcstallningar.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-30881', );

$wpe_special_ips=array ( 0 => '162.13.82.182', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );

define( 'WPE_CACHE_TYPE', 'generational' );

define( 'WPE_LBMASTER_IP', '162.13.82.182' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISALLOW_FILE_MODS', FALSE );
define('WPLANG','en');

# WP Engine ID


# WP Engine Settings








# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
