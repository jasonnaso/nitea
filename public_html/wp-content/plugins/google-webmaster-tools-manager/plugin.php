<?php
/*
Plugin Name: Google Tag Manager and Webmaster Tools
Plugin URI:
Description: Extend Wordpress with Google Webmaster and Tracking Tools
Version: 1.3
Author: Erik Lauraeus
Author URI: 
License: GPLv2
*/
$ewe_options = get_option('eurowe');

add_action('init', 'ewe_init');
function ewe_init() {
  global $ewe_options;
}

add_action('admin_menu', 'ewe_admin_menu');
function ewe_admin_menu() {
    add_options_page('Webmaster Extensions', 'Webmaster Extensions', 'manage_options', 'google-webmaster-tools-manager/options.php');
}

// output @ HEAD
add_action( 'wp_head', 'ewe_output_head' , 100 );
function ewe_output_head() {
  global $ewe_options;

  // Custom Javascript
  if (!empty($ewe_options['cjshead'])) {	
    echo $ewe_options['cjshead'];
  }
 
  // Google Webmaster Tools Verification	
  if (!empty($ewe_options['gsv'])) {	
    echo "<meta name='google-site-verification' content='". $ewe_options['gsv'] . "' />";
  }

  // Bing Webmaster Tools Verification	
  if (!empty($ewe_options['bsv'])) {	
    echo "<meta name='msvalidate.01' content='". $ewe_options['bsv'] . "' />";
  }

  // Wordpress posts category stored in GA CustVar for segmentation   
  if (!empty($ewe_options['cvs']) && is_single() ) {
  	$cats = get_the_category();
		if ( is_array( $cats ) && isset( $cats[0] ) ) {  	
	  	echo "<script type='text/javascript'>var dataLayer = dataLayer || []; dataLayer.push({'event': 'wpcategory', 'pageCategory' : '" . $cats[0]->slug . "', 'custVarSlot' : '" . $ewe_options['cvs'] . "'});</script>";
		}
  }   	  
     
  // GTM i HEAD
  if (!empty($ewe_options['gtmid'])) {
     ?>
  <script>
      var dataLayer = dataLayer || [];
      var _gaq = _gaq || [];
      var _exaq = _exaq || [];
      function loadGTM() {
          if (!document.body) { setTimeout(loadGTM, 100); return; }
          (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletag'+'manager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','<?php echo $ewe_options['gtmid']; ?>');
      }
      loadGTM();
  </script>
  <?php
  }

  // Custom Javascript
  if (!empty($ewe_options['cjsheadlower'])) {	
    echo $ewe_options['cjsheadlower'];
  }

}

add_action( 'wp_footer', 'ewe_output_footer');
function ewe_output_footer() {
	global $ewe_options;

  // Custom Javascript
  if (!empty($ewe_options['cjsfooter'])) {	
    echo $ewe_options['cjsfooter'];
  }

	if (!empty($ewe_options['gtmid'])) {
    ?>
<!-- Google Tag Manager NoScript -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=<?php echo $ewe_options['gtmid']; ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager NoScript -->
    <?php
  }  
}
?>