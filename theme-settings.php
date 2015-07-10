<?php
/**
 * @file
 * Theme settings file for Materialize.
 */


function materialize_form_system_theme_settings_alter(&$form, &$form_state, $form_id = NULL) {

if (isset($form_id)) {
   return;
  }

$form['materialize_cdn'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('<b>Use Cloudflare CDN</b> instead of this website to serve the base CSS and Javascript files.  If you are using SASS, you will have to manually adjust your imports to avoid loading the same styles twice.'),
    '#default_value' => theme_get_setting('materialize_cdn', 'materialize'),
  );

$form['disclaimer'] = array(
  '#markup' => '<p>' . t('You may choose to include these Javascript files into your page to help enable these certain components.  WARNING: some of the components may rely on multiple scripts, and you are responsible for adding the theme template functions to utilize these functionalities.  If you do not need these functionalities for this website, you may leave each unchecked.') . '</p>',
);

$form['materialize_script1'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script animation.js'),
      '#default_value' => theme_get_setting('materialize_script1', 'materialize'),
    );

$form['materialize_script2'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script buttons.js'),
      '#default_value' => theme_get_setting('materialize_script2', 'materialize'),
    );

$form['materialize_script3'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script cards.js'),
      '#default_value' => theme_get_setting('materialize_script3', 'materialize'),
    );

$form['materialize_script4'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script character_counter.js'),
      '#default_value' => theme_get_setting('materialize_script4', 'materialize'),
    );

$form['materialize_script5'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script collapsible.js'),
      '#default_value' => theme_get_setting('materialize_script5', 'materialize'),
    );

$form['materialize_script6'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script picker.date.js'),
      '#default_value' => theme_get_setting('materialize_script6', 'materialize'),
    );

$form['materialize_script7'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script picker.js'),
      '#default_value' => theme_get_setting('materialize_script7', 'materialize'),
    );

$form['materialize_script8'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script dropdown.js'),
      '#default_value' => theme_get_setting('materialize_script8', 'materialize'),
    );

$form['materialize_script9'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script forms.js'),
      '#default_value' => theme_get_setting('materialize_script9', 'materialize'),
    );

$form['materialize_script10'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script hammer.js for touch interactions'),
      '#default_value' => theme_get_setting('materialize_script10', 'materialize'),
    );

$form['materialize_script11'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script jquery.hammer.js for JQuery based touch interactions'),
      '#default_value' => theme_get_setting('materialize_script11', 'materialize'),
    );

$form['materialize_script12'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script jquery.easing.js for JQuery based animations'),
      '#default_value' => theme_get_setting('materialize_script12', 'materialize'),
    );

$form['materialize_script13'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script jquery.timeago.js'),
      '#default_value' => theme_get_setting('materialize_script13', 'materialize'),
    );

$form['materialize_script14'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script leanModal.js'),
      '#default_value' => theme_get_setting('materialize_script14', 'materialize'),
    );

$form['materialize_script15'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script materialbox.js'),
      '#default_value' => theme_get_setting('materialize_script15', 'materialize'),
    );

$form['materialize_script16'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script parallax.js'),
      '#default_value' => theme_get_setting('materialize_script16', 'materialize'),
    );

$form['materialize_script17'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script prism.js'),
      '#default_value' => theme_get_setting('materialize_script17', 'materialize'),
    );

$form['materialize_script18'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script pushpin.js'),
      '#default_value' => theme_get_setting('materialize_script18', 'materialize'),
    );

$form['materialize_script19'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script scrollFire.js'),
      '#default_value' => theme_get_setting('materialize_script19', 'materialize'),
    );

$form['materialize_script20'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script scrollspy.js'),
      '#default_value' => theme_get_setting('materialize_script20', 'materialize'),
    );

$form['materialize_script21'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script sideNav.js'),
      '#default_value' => theme_get_setting('materialize_script21', 'materialize'),
    );

$form['materialize_script22'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script slider.js'),
      '#default_value' => theme_get_setting('materialize_script22', 'materialize'),
    );

$form['materialize_script23'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script tabs.js'),
      '#default_value' => theme_get_setting('materialize_script23', 'materialize'),
    );

$form['materialize_script24'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script toasts.js'),
      '#default_value' => theme_get_setting('materialize_script24', 'materialize'),
    );

$form['materialize_script25'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script tooltip.js'),
      '#default_value' => theme_get_setting('materialize_script25', 'materialize'),
    );

$form['materialize_script26'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script transitions.js'),
      '#default_value' => theme_get_setting('materialize_script26', 'materialize'),
    );

$form['materialize_script27'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script velocity.js'),
      '#default_value' => theme_get_setting('materialize_script27', 'materialize'),
    );

$form['materialize_script28'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script waves.js for button effects'),
      '#default_value' => theme_get_setting('materialize_script28', 'materialize'),
    );

$form['materialize_script29'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script materialize_custom.js for an example of some sample webpage effects'),
      '#default_value' => theme_get_setting('materialize_script29', 'materialize'),
    );

}


function materialize_ajax_settings_save($form, $form_state) {
  $config = config('materialize.settings');
  $theme = $form_state['build_info']['args'][0];
  $theme_settings = config_get('theme_' . $theme . '_settings', array());
  $trigger = $form_state['triggering_element'] ['#name'];

  $theme_settings[$trigger] = $form_state['input'][$trigger];

  if (empty($theme_settings[$trigger])) {
    $theme_settings[$trigger] = 0;
  }
  config_set('theme_' . $theme . '_settings', $theme_settings);
  backdrop_set_message("configuration saved.");
}
