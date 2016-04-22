<?php
function ewe_request($name, $default=null) {
    if (!isset($_REQUEST[$name])) return $default;
    return stripslashes_deep($_REQUEST[$name]);
}

function ewe_input_text($name, $label='', $tips='', $attrs='') {
    global $options;


    echo '<th scope="row">';
    echo '<label for="options[' . $name . ']">' . $label . '</label></th>';
    echo '<td><input type="text" name="options[' . $name . ']" value="' .
        htmlspecialchars($options[$name]) . '" size="50"/>';
    echo '<br /> ' . $tips;
    echo '</td>';
}

function ewe_input_textarea($name, $label='', $tips='', $attrs='') {
    global $options;

    if (strpos($attrs, 'cols') === false) $attrs .= 'cols="70"';
    if (strpos($attrs, 'rows') === false) $attrs .= 'rows="10"';

    echo '<th scope="row">';
    echo '<label for="options[' . $name . ']">' . $label . '</label></th>';
    echo '<td><textarea style="width: 100%; height: 100px" wrap="off" name="options[' . $name . ']">' .
        htmlspecialchars($options[$name]) . '</textarea>';
    echo '<br /> ' . $tips;
    echo '</td>';
}	

if (isset($_POST['save'])) {
    if (!wp_verify_nonce($_POST['_wpnonce'], 'save')) die('Securety violated');
    $options = ewe_request('options');
    update_option('eurowe', $options);
}
else {
    $options = get_option('eurowe');
}
?>	

<div class="wrap">

<form method="post" action="">
    <?php wp_nonce_field('save') ?>

  <table class="form-table">
      <tr valign="top"><?php ewe_input_textarea('cjshead', __('Custom javascript snippet placed before closing HEAD tag', 'google-webmaster-tools-manager'), 'All pages', ''); ?></tr>      
      <tr valign="top"><?php ewe_input_textarea('cjsfooter', __('Custom javascript snippet before closing BODY tag', 'google-webmaster-tools-manager'), 'All pages', ''); ?></tr>
      <tr valign="top"><?php ewe_input_text('gsv', __('Google Site Verification', 'google-webmaster-tools-manager'), 'Meta tag', ''); ?></tr>
      <tr valign="top"><?php ewe_input_text('bsv', __('Bing Webmaster Tools', 'google-webmaster-tools-manager'), 'Meta tag', ''); ?></tr>
      <tr valign="top"><?php ewe_input_text('cvs', __('Store category slug in GA CustomVars slot', 'google-webmaster-tools-manager'), 'Slot 1-5', ''); ?></tr>
      <tr valign="top"><?php ewe_input_text('gtmid', __('Google Tag Manager ID', 'google-webmaster-tools-manager'), 'GTM-XXXX', ''); ?></tr>      
      <tr valign="top"><?php ewe_input_textarea('cjsheadlower', __('Custom javascript snippet placed after the GTM snippet but before closing HEAD tag', 'google-webmaster-tools-manager'), 'All pages', ''); ?></tr>      
  </table>
  <p class="submit"><input type="submit" class="button" name="save" value="<?php _e('save', 'google-webmaster-tools-manager'); ?>"></p>
</form>        
</div>

