<?php
/**
 * @file
 * Theme settings for Materialize sub theme
 *
*/

function materialize_subtheme_form_system_theme_settings_alter(&$form, &$form_state, $form_id = NULL) {

if (isset($form_id)) {
   return;
  }

$form['disclaimer01'] = array(
  '#markup' => '<p><strong>' . t('These settings for the subtheme do NOT extend into the parent theme.') . '</strong></p>',
);


$form['use_max_width'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('<b>Check to use the admin settings below </b> to control the theme max-width. <b>Uncheck</b> to write CSS to control the theme max-width.'),
    '#default_value' => theme_get_setting('use_max_width', 'materialize_subtheme'),
  );

$layouts = layout_load_all();
$layout_items = array();
$options = array();
foreach ($layouts as $layout => $item) {
    $options[$item->name] = check_plain($item->title);
}


$form['maxwidth1'] = array(
        '#title' => t('Theme Max-Width 1'),
        '#type' => 'fieldset',
    );
$default_layout_items = config_get('materialize_subtheme.settings', 'site_layouts1');
$default_value = array();
foreach ($default_layout_items as $default_layout_item) {
   if (isset($options[$default_layout_item])) {
       $default_value[$default_layout_item] = $default_layout_item;
   }
}

  $form['maxwidth1']['site_layouts1'] = array(
        '#title' => t('Set a site max-width on these layouts:'),
        '#type' => 'checkboxes',
        '#options' => $options,
        '#default_value' => $default_value
    );

  $form['maxwidth1']["max_width_element1"] = array(
        '#title' => t('For this page area:'),
        '#type' => 'select',
        '#options' => array("full page", "page content"),
        '#default_value' => config_get('materialize_subtheme.settings', 'max_width_element1')
    );

  $form['maxwidth1']["max_width_number1"] = array(
        '#title' => t('At: '),
        '#type' => 'select',
        '#options' => array("800px", "960px", "Bootstrap container default", "1200px", "1440px"),
        '#default_value' => config_get('materialize_subtheme.settings', 'max_width_number1')
    );




$form['maxwidth2'] = array(
        '#title' => t('Theme Max-Width 2'),
        '#type' => 'fieldset',
    );
$default_layout_items = config_get('materialize_subtheme.settings', 'site_layouts2');
$default_value = array();
foreach ($default_layout_items as $default_layout_item) {
   if (isset($options[$default_layout_item])) {
       $default_value[$default_layout_item] = $default_layout_item;
   }
}

  $form['maxwidth2']['site_layouts2'] = array(
        '#title' => t('Set another site max-width on these layouts:'),
        '#type' => 'checkboxes',
        '#options' => $options,
        '#default_value' => $default_value
    );

  $form['maxwidth2']["max_width_element2"] = array(
        '#title' => t('For this page area:'),
        '#type' => 'select',
        '#options' => array("full page", "page content"),
        '#default_value' => config_get('materialize_subtheme.settings', 'max_width_element2')
    );

  $form['maxwidth2']["max_width_number2"] = array(
        '#title' => t('At: '),
        '#type' => 'select',
        '#options' => array("800px", "960px", "Bootstrap container default", "1200px", "1440px"),
        '#default_value' => config_get('materialize_subtheme.settings', 'max_width_number2')
    );




$form['maxwidth3'] = array(
        '#title' => t('Theme Max-Width 3'),
        '#type' => 'fieldset',
    );
$default_layout_items = config_get('materialize_subtheme.settings', 'site_layouts3');
$default_value = array();
foreach ($default_layout_items as $default_layout_item) {
   if (isset($options[$default_layout_item])) {
       $default_value[$default_layout_item] = $default_layout_item;
   }
}

  $form['maxwidth3']['site_layouts3'] = array(
        '#title' => t('Set another site max-width on these layouts:'),
        '#type' => 'checkboxes',
        '#options' => $options,
        '#default_value' => $default_value
    );

  $form['maxwidth3']["max_width_element3"] = array(
        '#title' => t('For this page area:'),
        '#type' => 'select',
        '#options' => array("full page", "page content"),
        '#default_value' => config_get('materialize_subtheme.settings', 'max_width_element3')
    );

  $form['maxwidth3']["max_width_number3"] = array(
        '#title' => t('At: '),
        '#type' => 'select',
        '#options' => array("800px", "960px", "Bootstrap container default", "1200px", "1440px"),
        '#default_value' => config_get('materialize_subtheme.settings', 'max_width_number3')
    );

$form['materialize_subtheme_sass'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Only load the your-custom.css sub-theme file and remove the parent theme styles.  Use caution:  this setting is for if you are trying to make a smaller download by compiling with Sass'),
    '#default_value' => theme_get_setting('materialize_subtheme_sass', 'materialize_subtheme'),
  );

$form['disclaimer'] = array(
  '#markup' => '<p>' . t('You may choose to include these Javascript files into your page to help enable these certain components.  WARNING: some of the components may rely on multiple scripts, and you are responsible for adding the theme template functions to utilize these functionalities.  If you do not need these functionalities for this website, you may leave each unchecked.') . '</p>',
);

$form['materialize_subtheme_cdn_css'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('<b>Use Cloudflare CDN</b> to serve the Materialize CSS as one minified CSS file.  <br>Uncheck</b> to serve the CSS from your web server.'),
    '#default_value' => theme_get_setting('materialize_subtheme_cdn_css', 'materialize_subtheme'),
  );

$form['materialize_subtheme_cdn_js'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Novice mode: <b>Use Cloudflare CDN</b> instead of this website to serve the whole Materialize library as one minified Javascript file. <br>Uncheck</b> to serve the individual JS files from your web server.'),
    '#default_value' => theme_get_setting('materialize_subtheme_cdn_js', 'materialize_subtheme'),
  );

$form['materialize_subtheme_dropdown'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('<b>Use a drowdown menu for the main menu</b> to load scripts which make your main menu into a Materialize menu.  <br>Uncheck</b> to leave your main menu as the default or use your own menu module.'),
    '#default_value' => theme_get_setting('materialize_subtheme_dropdown', 'materialize_subtheme'),
  );

$form['disclaimer'] = array(
  '#markup' => '<p>' . t('Advanced mode: Uncheck above and selectively check below to only include these certain Javascript files if you only need certain components.  WARNING: some of the components may rely on multiple scripts, and you are responsible for adding the theme template functions to utilize these functionalities.  If you do not need these functionalities for this website, you may leave each unchecked.') . '</p>',
);

$form['materialize_subtheme_script1'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script animation.js'),
      '#default_value' => theme_get_setting('materialize_subtheme_script1', 'materialize_subtheme'),
    );

$form['materialize_subtheme_script2'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script buttons.js'),
      '#default_value' => theme_get_setting('materialize_subtheme_script2', 'materialize_subtheme'),
    );

$form['materialize_subtheme_script3'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script cards.js'),
      '#default_value' => theme_get_setting('materialize_subtheme_script3', 'materialize_subtheme'),
    );

$form['materialize_subtheme_script4'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script character_counter.js'),
      '#default_value' => theme_get_setting('materialize_subtheme_script4', 'materialize_subtheme'),
    );

$form['materialize_subtheme_script5'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script collapsible.js'),
      '#default_value' => theme_get_setting('materialize_subtheme_script5', 'materialize_subtheme'),
    );

$form['materialize_subtheme_script6'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script picker.date.js'),
      '#default_value' => theme_get_setting('materialize_subtheme_script6', 'materialize_subtheme'),
    );

$form['materialize_subtheme_script7'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script picker.js'),
      '#default_value' => theme_get_setting('materialize_subtheme_script7', 'materialize_subtheme'),
    );

$form['materialize_subtheme_script8'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script dropdown.js'),
      '#default_value' => theme_get_setting('materialize_subtheme_script8', 'materialize_subtheme'),
    );

$form['materialize_subtheme_script9'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script forms.js'),
      '#default_value' => theme_get_setting('materialize_subtheme_script9', 'materialize_subtheme'),
    );

$form['materialize_subtheme_script10'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script hammer.js for touch interactions'),
      '#default_value' => theme_get_setting('materialize_subtheme_script10', 'materialize_subtheme'),
    );

$form['materialize_subtheme_script11'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script jquery.hammer.js for JQuery based touch interactions'),
      '#default_value' => theme_get_setting('materialize_subtheme_script11', 'materialize_subtheme'),
    );

$form['materialize_subtheme_script12'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script jquery.easing.js for JQuery based animations'),
      '#default_value' => theme_get_setting('materialize_subtheme_script12', 'materialize_subtheme'),
    );

$form['materialize_subtheme_script13'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script jquery.timeago.js'),
      '#default_value' => theme_get_setting('materialize_subtheme_script13', 'materialize_subtheme'),
    );

$form['materialize_subtheme_script14'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script leanModal.js'),
      '#default_value' => theme_get_setting('materialize_subtheme_script14', 'materialize_subtheme'),
    );

$form['materialize_subtheme_script15'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script materialbox.js'),
      '#default_value' => theme_get_setting('materialize_subtheme_script15', 'materialize_subtheme'),
    );

$form['materialize_subtheme_script16'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script parallax.js'),
      '#default_value' => theme_get_setting('materialize_subtheme_script16', 'materialize_subtheme'),
    );

$form['materialize_subtheme_script17'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script prism.js'),
      '#default_value' => theme_get_setting('materialize_subtheme_script17', 'materialize_subtheme'),
    );

$form['materialize_subtheme_script18'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script pushpin.js'),
      '#default_value' => theme_get_setting('materialize_subtheme_script18', 'materialize_subtheme'),
    );

$form['materialize_subtheme_script19'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script scrollFire.js'),
      '#default_value' => theme_get_setting('materialize_subtheme_script19', 'materialize_subtheme'),
    );

$form['materialize_subtheme_script20'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script scrollspy.js'),
      '#default_value' => theme_get_setting('materialize_subtheme_script20', 'materialize_subtheme'),
    );

$form['materialize_subtheme_script21'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script sideNav.js'),
      '#default_value' => theme_get_setting('materialize_subtheme_script21', 'materialize_subtheme'),
    );

$form['materialize_subtheme_script22'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script slider.js'),
      '#default_value' => theme_get_setting('materialize_subtheme_script22', 'materialize_subtheme'),
    );

$form['materialize_subtheme_script23'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script tabs.js'),
      '#default_value' => theme_get_setting('materialize_subtheme_script23', 'materialize_subtheme'),
    );

$form['materialize_subtheme_script24'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script toasts.js'),
      '#default_value' => theme_get_setting('materialize_subtheme_script24', 'materialize_subtheme'),
    );

$form['materialize_subtheme_script25'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script tooltip.js'),
      '#default_value' => theme_get_setting('materialize_subtheme_script25', 'materialize_subtheme'),
    );

$form['materialize_subtheme_script26'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script transitions.js'),
      '#default_value' => theme_get_setting('materialize_subtheme_script26', 'materialize_subtheme'),
    );

$form['materialize_subtheme_script27'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script velocity.js'),
      '#default_value' => theme_get_setting('materialize_subtheme_script27', 'materialize_subtheme'),
    );

$form['materialize_subtheme_script28'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script waves.js for button effects'),
      '#default_value' => theme_get_setting('materialize_subtheme_script28', 'materialize_subtheme'),
    );

$form['materialize_subtheme_script29'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script materialize_custom.js for an example of some sample webpage effects'),
      '#default_value' => theme_get_setting('materialize_subtheme_script29', 'materialize_subtheme'),
    );

$form['materialize_subtheme_script30'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script modernizr.js'),
      '#default_value' => theme_get_setting('materialize_subtheme_script30', 'materialize_subtheme'),
    );

$form['materialize_subtheme_script31'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script jquery-validate.js'),
      '#default_value' => theme_get_setting('materialize_subtheme_script31', 'materialize_subtheme'),
    );

$form['materialize_subtheme_script32'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script fastclick.js'),
      '#default_value' => theme_get_setting('materialize_subtheme_script32', 'materialize_subtheme'),
    );

}
