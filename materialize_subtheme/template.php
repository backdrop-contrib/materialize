<?php
/**
 * @file
 * Materialize sub theme template functions
 *
*/

/**
 * Implements hook_preprocess_maintenance_page().
 */
function materialize_subtheme_preprocess_maintenance_page(&$variables) {
  backdrop_add_css(backdrop_get_path('theme', 'bartik') . '/css/maintenance-page.css');
}

/**
 * Implements template_preprocess_page().
 */
function materialize_subtheme_preprocess_page(&$variables) {

$current_layout_obj = layout_get_layout_by_path();
$current_layout = $current_layout_obj->name;
$uses_admin_width = config_get('materialize_subtheme.settings', 'use_max_width');
  if ($uses_admin_width) {

    $uses_layout_width1 = config_get('materialize_subtheme.settings', 'max_width_element1');
    if ($uses_layout_width1 < 1) {
      $max_width_layouts1 = config_get('materialize_subtheme.settings', 'site_layouts1');
      $max_width_number1 = config_get('materialize_subtheme.settings', 'max_width_number1');
      foreach ($max_width_layouts1 as $max_width_layout) {
        if (!empty($max_width_layout)) {
          if ( $max_width_layout == $current_layout ) {

            switch ($max_width_number1) {
              case "0":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-800';
              break;
              case "1":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-960';
              break;
              case "2":
              $variables['classes'][] = 'container';
              break;
              case "3":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-1200';
              break;
              case "4":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-1440';
              break;
              default:
              break;
              }
          }
        }
      }
    }


    $uses_layout_width2 = config_get('materialize_subtheme.settings', 'max_width_element2');
    if ($uses_layout_width2 < 1) {
      $max_width_layouts2 = config_get('materialize_subtheme.settings', 'site_layouts2');
      $max_width_number2 = config_get('materialize_subtheme.settings', 'max_width_number2');
      foreach ($max_width_layouts2 as $max_width_layout) {
        if (!empty($max_width_layout)) {
          if ( $max_width_layout == $current_layout ) {

            switch ($max_width_number2) {
              case "0":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-800';
              break;
              case "1":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-960';
              break;
              case "2":
              $variables['classes'][] = 'container';
              break;
              case "3":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-1200';
              break;
              case "4":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-1440';
              break;
              default:
              break;
              }
          }
        }
      }
    }



    $uses_layout_width3 = config_get('materialize_subtheme.settings', 'max_width_element3');
    if ($uses_layout_width3 < 1) {
      $max_width_layouts3 = config_get('materialize_subtheme.settings', 'site_layouts3');
      $max_width_number3 = config_get('materialize_subtheme.settings', 'max_width_number3');
      foreach ($max_width_layouts3 as $max_width_layout) {
        if (!empty($max_width_layout)) {
          if ( $max_width_layout == $current_layout ) {

            switch ($max_width_number3) {
              case "0":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-800';
              break;
              case "1":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-960';
              break;
              case "2":
              $variables['classes'][] = 'container';
              break;
              case "3":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-1200';
              break;
              case "4":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-1440';
              break;
              default:
              break;
              }
          }
        }
      }
    }



  }
}

function materialize_subtheme_preprocess_layout(&$variables) {
  if ($variables['is_front']) {
    $variables['classes'][] = 'layout-front';
  }


$current_layout = $variables["layout"]->name;
$uses_admin_width = config_get('materialize_subtheme.settings', 'use_max_width');
  if ($uses_admin_width) {

    $uses_layout_width1 = config_get('materialize_subtheme.settings', 'max_width_element1');
    if ($uses_layout_width1 > 0) {
      $max_width_layouts1 = config_get('materialize_subtheme.settings', 'site_layouts1');
      $max_width_number1 = config_get('materialize_subtheme.settings', 'max_width_number1');
      foreach ($max_width_layouts1 as $max_width_layout) {
        if (!empty($max_width_layout)) {
          if ( $max_width_layout == $current_layout ) {

            switch ($max_width_number1) {
              case "0":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-800';
              break;
              case "1":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-960';
              break;
              case "2":
              $variables['classes'][] = 'container';
              break;
              case "3":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-1200';
              break;
              case "4":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-1440';
              break;
              default:
              break;
              }
          }
        }
      }
    }


    $uses_layout_width2 = config_get('materialize_subtheme.settings', 'max_width_element2');
    if ($uses_layout_width2 > 0) {
      $max_width_layouts2 = config_get('materialize_subtheme.settings', 'site_layouts2');
      $max_width_number2 = config_get('materialize_subtheme.settings', 'max_width_number2');
      foreach ($max_width_layouts2 as $max_width_layout) {
        if (!empty($max_width_layout)) {
          if ( $max_width_layout == $current_layout ) {

            switch ($max_width_number2) {
              case "0":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-800';
              break;
              case "1":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-960';
              break;
              case "2":
              $variables['classes'][] = 'container';
              break;
              case "3":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-1200';
              break;
              case "4":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-1440';
              break;
              default:
              break;
              }
          }
        }
      }
    }



    $uses_layout_width3 = config_get('materialize_subtheme.settings', 'max_width_element3');
    if ($uses_layout_width3 > 0) {
      $max_width_layouts3 = config_get('materialize_subtheme.settings', 'site_layouts3');
      $max_width_number3 = config_get('materialize_subtheme.settings', 'max_width_number3');
      foreach ($max_width_layouts3 as $max_width_layout) {
        if (!empty($max_width_layout)) {
          if ( $max_width_layout == $current_layout ) {

            switch ($max_width_number3) {
              case "0":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-800';
              break;
              case "1":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-960';
              break;
              case "2":
              $variables['classes'][] = 'container';
              break;
              case "3":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-1200';
              break;
              case "4":
              $variables['classes'][] = 'container';
              $variables['classes'][] = 'container-1440';
              break;
              default:
              break;
              }
          }
        }
      }
    }


  }



// backgrounds
// body region
$var1 = theme_get_setting('body_main_background', 'materialize_subtheme');
$var2 = theme_get_setting('body_main_background_retina', 'materialize_subtheme');
$var3 = theme_get_setting('body_main_background_blurred', 'materialize_subtheme');

if (!empty($var1) && empty($var2) && !empty($var3) ) {
backdrop_add_css("@media screen and (min-width: 600px) { html body::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}

if (!empty($var1) && !empty($var2) && !empty($var3) ) {
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-max-device-pixel-ratio: 1), only screen and (min-width: 600px) and (-webkit-max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max--moz-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-resolution: 191dpi), only screen and (min-width: 600px) and (max-resolution: 1.24dppx) { html body::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-min-device-pixel-ratio: 5/4), only screen and (min-width: 600px) and (-webkit-min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min--moz-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-resolution: 192dpi), only screen and (min-width: 600px) and (min-resolution: 1.25dppx) { html body::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var2) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}

if (!empty($var1) && empty($var2) && empty($var3) ) {
backdrop_add_css("@media screen and (min-width: 600px) { html body { background: url($var1) no-repeat; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if (!empty($var1) && !empty($var2) && empty($var3) ) {
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-max-device-pixel-ratio: 1), only screen and (min-width: 600px) and (-webkit-max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max--moz-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-resolution: 191dpi), only screen and (min-width: 600px) and (max-resolution: 1.24dppx) { html body { background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-min-device-pixel-ratio: 5/4), only screen and (min-width: 600px) and (-webkit-min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min--moz-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-resolution: 192dpi), only screen and (min-width: 600px) and (min-resolution: 1.25dppx) { html body { background: url($var2) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}


// calltoaction region
$var1 = theme_get_setting('footer_main_background', 'materialize_subtheme');
$var2 = theme_get_setting('footer_main_background_retina', 'materialize_subtheme');
$var3 = theme_get_setting('footer_main_background_blurred', 'materialize_subtheme');

if (!empty($var1) && empty($var2) && !empty($var3) ) {
backdrop_add_css("@media screen and (min-width: 600px) { .l-calltoaction::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var1) no-repeat; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if (!empty($var1) && !empty($var2) && !empty($var3) ) {
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-max-device-pixel-ratio: 1), only screen and (min-width: 600px) and (-webkit-max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max--moz-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-resolution: 191dpi), only screen and (min-width: 600px) and (max-resolution: 1.24dppx) { .l-calltoaction::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-min-device-pixel-ratio: 5/4), only screen and (min-width: 600px) and (-webkit-min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min--moz-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-resolution: 192dpi), only screen and (min-width: 600px) and (min-resolution: 1.25dppx) { .l-calltoaction::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var2) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}

if (!empty($var1) && empty($var2) && empty($var3) ) {
backdrop_add_css("@media screen and (min-width: 600px) { .l-calltoaction { background: url($var1) no-repeat; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if (!empty($var1) && !empty($var2) && empty($var3) ) {
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-max-device-pixel-ratio: 1), only screen and (min-width: 600px) and (-webkit-max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max--moz-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-resolution: 191dpi), only screen and (min-width: 600px) and (max-resolution: 1.24dppx) { .l-calltoaction { background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-min-device-pixel-ratio: 5/4), only screen and (min-width: 600px) and (-webkit-min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min--moz-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-resolution: 192dpi), only screen and (min-width: 600px) and (min-resolution: 1.25dppx) { .l-calltoaction { background: url($var2) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}


// juiced_main region
$var1 = theme_get_setting('juiced_main_background', 'materialize_subtheme');
$var2 = theme_get_setting('juiced_main_background_retina', 'materialize_subtheme');
$var3 = theme_get_setting('juiced_main_background_blurred', 'materialize_subtheme');

if (!empty($var1) && empty($var2) && !empty($var3) ) {
backdrop_add_css("@media screen and (min-width: 600px) { .juiced-main::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var1) no-repeat; background-size: cover; background-position: center;  } }", array('type' => 'inline'));
}

if (!empty($var1) && !empty($var2) && !empty($var3) ) {
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-max-device-pixel-ratio: 1), only screen and (min-width: 600px) and (-webkit-max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max--moz-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-resolution: 191dpi), only screen and (min-width: 600px) and (max-resolution: 1.24dppx) { .juiced-main::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-min-device-pixel-ratio: 5/4), only screen and (min-width: 600px) and (-webkit-min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min--moz-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-resolution: 192dpi), only screen and (min-width: 600px) and (min-resolution: 1.25dppx) { .juiced-main::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var2) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}

if (!empty($var1) && empty($var2) && empty($var3) ) {
backdrop_add_css("@media screen and (min-width: 600px) { .juiced-main { background: url($var1) no-repeat; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if (!empty($var1) && !empty($var2) && empty($var3) ) {
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-max-device-pixel-ratio: 1), only screen and (min-width: 600px) and (-webkit-max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max--moz-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-resolution: 191dpi), only screen and (min-width: 600px) and (max-resolution: 1.24dppx) { .juiced-main { background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-min-device-pixel-ratio: 5/4), only screen and (min-width: 600px) and (-webkit-min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min--moz-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-resolution: 192dpi), only screen and (min-width: 600px) and (min-resolution: 1.25dppx) { .juiced-main { background: url($var2) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}


// statement1 region
$var1 = theme_get_setting('statement1_background', 'materialize_subtheme');
$var2 = theme_get_setting('statement1_background_retina', 'materialize_subtheme');
$var3 = theme_get_setting('statement1_background_blurred', 'materialize_subtheme');

if (!empty($var1) && empty($var2) && !empty($var3) ) {
backdrop_add_css("@media screen and (min-width: 600px) { .l-statement1::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var1) no-repeat; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if (!empty($var1) && !empty($var2) && !empty($var3) ) {
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-max-device-pixel-ratio: 1), only screen and (min-width: 600px) and (-webkit-max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max--moz-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-resolution: 191dpi), only screen and (min-width: 600px) and (max-resolution: 1.24dppx) { .l-statement1::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-min-device-pixel-ratio: 5/4), only screen and (min-width: 600px) and (-webkit-min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min--moz-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-resolution: 192dpi), only screen and (min-width: 600px) and (min-resolution: 1.25dppx) { .l-statement1::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var2) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}

if (!empty($var1) && empty($var2) && empty($var3) ) {
backdrop_add_css("@media screen and (min-width: 600px) { .l-statement1 { background: url($var1) no-repeat; background-size: cover; background-position: center;} }", array('type' => 'inline'));
}

if (!empty($var1) && !empty($var2) && empty($var3) ) {
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-max-device-pixel-ratio: 1), only screen and (min-width: 600px) and (-webkit-max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max--moz-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-resolution: 191dpi), only screen and (min-width: 600px) and (max-resolution: 1.24dppx) { .l-statement1 { background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-min-device-pixel-ratio: 5/4), only screen and (min-width: 600px) and (-webkit-min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min--moz-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-resolution: 192dpi), only screen and (min-width: 600px) and (min-resolution: 1.25dppx) { .l-statement1 { background: url($var2) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}


// statement2 region
$var1 = theme_get_setting('statement2_background', 'materialize_subtheme');
$var2 = theme_get_setting('statement2_background_retina', 'materialize_subtheme');
$var3 = theme_get_setting('statement2_background_blurred', 'materialize_subtheme');

if (!empty($var1) && empty($var2) && !empty($var3) ) {
backdrop_add_css("@media screen and (min-width: 600px) { .l-statement2::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}

if (!empty($var1) && !empty($var2) && !empty($var3) ) {
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-max-device-pixel-ratio: 1), only screen and (min-width: 600px) and (-webkit-max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max--moz-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-resolution: 191dpi), only screen and (min-width: 600px) and (max-resolution: 1.24dppx) { .l-statement2::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-min-device-pixel-ratio: 5/4), only screen and (min-width: 600px) and (-webkit-min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min--moz-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-resolution: 192dpi), only screen and (min-width: 600px) and (min-resolution: 1.25dppx) { .l-statement2::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var2) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}

if (!empty($var1) && empty($var2) && empty($var3) ) {
backdrop_add_css("@media screen and (min-width: 600px) { .l-statement2 { background: url($var1) no-repeat; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if (!empty($var1) && !empty($var2) && empty($var3) ) {
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-max-device-pixel-ratio: 1), only screen and (min-width: 600px) and (-webkit-max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max--moz-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-resolution: 191dpi), only screen and (min-width: 600px) and (max-resolution: 1.24dppx) { .l-statement2 { background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-min-device-pixel-ratio: 5/4), only screen and (min-width: 600px) and (-webkit-min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min--moz-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-resolution: 192dpi), only screen and (min-width: 600px) and (min-resolution: 1.25dppx) { .l-statement2 { background: url($var2) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}


// statement3 region
$var1 = theme_get_setting('statement3_background', 'materialize_subtheme');
$var2 = theme_get_setting('statement3_background_retina', 'materialize_subtheme');
$var3 = theme_get_setting('statement3_background_blurred', 'materialize_subtheme');

if (!empty($var1) && empty($var2) && !empty($var3) ) {
backdrop_add_css("@media screen and (min-width: 600px) { .l-statement3::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}

if (!empty($var1) && !empty($var2) && !empty($var3) ) {
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-max-device-pixel-ratio: 1), only screen and (min-width: 600px) and (-webkit-max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max--moz-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-resolution: 191dpi), only screen and (min-width: 600px) and (max-resolution: 1.24dppx) { .l-statement3::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-min-device-pixel-ratio: 5/4), only screen and (min-width: 600px) and (-webkit-min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min--moz-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-resolution: 192dpi), only screen and (min-width: 600px) and (min-resolution: 1.25dppx) { .l-statement3::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var2) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}

if (!empty($var1) && empty($var2) && empty($var3) ) {
backdrop_add_css("@media screen and (min-width: 600px) { .l-statement3 { background: url($var1) no-repeat; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if (!empty($var1) && !empty($var2) && empty($var3) ) {
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-max-device-pixel-ratio: 1), only screen and (min-width: 600px) and (-webkit-max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max--moz-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-device-pixel-ratio: 1.24), only screen and (min-width: 600px) and (max-resolution: 191dpi), only screen and (min-width: 600px) and (max-resolution: 1.24dppx) { .l-statement3 { background: url($var1) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
backdrop_add_css("@media only screen and (min-width: 600px) and (-o-min-device-pixel-ratio: 5/4), only screen and (min-width: 600px) and (-webkit-min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min--moz-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-device-pixel-ratio: 1.25), only screen and (min-width: 600px) and (min-resolution: 192dpi), only screen and (min-width: 600px) and (min-resolution: 1.25dppx) { .l-statement3 { background: url($var2) no-repeat; background-size: cover; background-position: center; left: 0px; } }", array('type' => 'inline'));
}


if (theme_get_setting('materialize_cdn_css') > 0)
{
backdrop_add_css('https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css', array('type' => 'external'));
}


if (theme_get_setting('materialize_cdn_js') > 0)
{
// backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
backdrop_add_js("themes/materialize/js/materialize.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}
else
{
// backdrop_add_js("themes/materialize/js/materialize.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
backdrop_add_js("themes/materialize/js/global.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));

if (theme_get_setting('materialize_script1') > 0)
{
backdrop_add_js("themes/materialize/js/animation.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_script2') > 0)
{
backdrop_add_js("themes/materialize/js/buttons.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_script3') > 0)
{
backdrop_add_js("themes/materialize/js/cards.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_script4') > 0)
{
backdrop_add_js("themes/materialize/js/character_counter.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_script5') > 0)
{
backdrop_add_js("themes/materialize/js/collapsible.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_script6') > 0)
{
backdrop_add_js("themes/materialize/js/date_picker/picker.date.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_script7') > 0)
{
backdrop_add_js("themes/materialize/js/date_picker/picker.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_script8') > 0)
{
backdrop_add_js("themes/materialize/js/dropdown.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_script9') > 0)
{
backdrop_add_js("themes/materialize/js/forms.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_script12') > 0)
{
backdrop_add_js("themes/materialize/js/jquery.easing.1.3.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_script13') > 0)
{
backdrop_add_js("themes/materialize/js/jquery.timeago.min.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_script14') > 0)
{
backdrop_add_js("themes/materialize/js/leanModal.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_script15') > 0)
{
backdrop_add_js("themes/materialize/js/materialbox.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_script16') > 0)
{
backdrop_add_js("themes/materialize/js/parallax.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_script17') > 0)
{
backdrop_add_js("themes/materialize/js/prism.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_script18') > 0)
{
backdrop_add_js("themes/materialize/js/pushpin.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_script19') > 0)
{
backdrop_add_js("themes/materialize/js/scrollFire.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_script20') > 0)
{
backdrop_add_js("themes/materialize/js/scrollspy.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_script21') > 0)
{
backdrop_add_js("themes/materialize/js/sideNav.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_script22') > 0)
{
backdrop_add_js("themes/materialize/js/slider.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_script23') > 0)
{
backdrop_add_js("themes/materialize/js/tabs.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_script24') > 0)
{
backdrop_add_js("themes/materialize/js/toasts.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_script25') > 0)
{
backdrop_add_js("themes/materialize/js/tooltip.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_script26') > 0)
{
backdrop_add_js("themes/materialize/js/transitions.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_script27') > 0)
{
backdrop_add_js("themes/materialize/js/velocity.min.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_script28') > 0)
{
backdrop_add_js("themes/materialize/js/waves.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

// backdrop_add_js("themes/materialize/js/init.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}


if (theme_get_setting('materialize_script10') > 0)
{
backdrop_add_js("themes/materialize/js/hammer.min.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_script11') > 0)
{
backdrop_add_js("themes/materialize/js/jquery.hammer.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_script30') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_script31') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_script32') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.min.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}


if (theme_get_setting('materialize_dropdown') > 0)
{
backdrop_add_js("themes/materialize/js/dropdown_init.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

backdrop_add_js("themes/materialize/js/scripts.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));

if (theme_get_setting('materialize_script29') > 0)
{
backdrop_add_js("themes/materialize/js/materialize_custom.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

backdrop_add_js("document.write('<script src=\"http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1\"></' + 'script>')", array('type' => 'inline', 'scope' => 'footer', 'weight' => 9999));
}

/**
 * Implements theme_field__field_type().
 */
function materialize_subtheme_field__taxonomy_term_reference($variables) {
  $output = '';

  // Render the label, if it's not hidden.
  if (!$variables['label_hidden']) {
    $output .= '<h3 class="field-label">' . $variables['label'] . ': </h3>';
  }

  // Render the items.
  $output .= ($variables['element']['#label_display'] == 'inline') ? '<ul class="links inline">' : '<ul class="links">';
  foreach ($variables['items'] as $delta => $item) {
    $item_attributes = (isset($variables['item_attributes'][$delta])) ? backdrop_attributes($variables['item_attributes'][$delta]) : '';
    $output .= '<li class="taxonomy-term-reference-' . $delta . '"' . $item_attributes . '>' . backdrop_render($item) . '</li>';
  }
  $output .= '</ul>';

  // Render the surrounding DIV with appropriate classes and attributes.
  if (!in_array('clearfix', $variables['classes'])) {
    $variables['classes'][] = 'clearfix';
  }
  $output = '<div class="' . implode(' ', $variables['classes']) . '"' . backdrop_attributes($variables['attributes']) . '>' . $output . '</div>';

  return $output;
}

function materialize_subtheme_css_alter(&$css) {
  $css_to_remove = array();
  if (theme_get_setting('sass', 'materialize_subtheme') > 0)
  {
  $css_to_remove[] = backdrop_get_path('theme','materialize') . '/css/style.css';
  $css_to_remove[] = backdrop_get_path('theme','materialize') . '/css/materialize.css';
  }

  if (theme_get_setting('materialize_cdn_css', 'materialize_subtheme') > 0)
  {
  $css_to_remove[] = backdrop_get_path('theme','materialize') . '/css/materialize.css';
  }

  foreach ($css_to_remove as $index => $css_file) {
      unset($css[$css_file]);
    }
}

function materialize_subtheme_menu_tree($variables) {
  return '<ul class="menu">' . $variables['tree'] . '</ul>';
}

/**
 * Implements theme_preprocess_menu_link().
 */
function materialize_subtheme_menu_link(array $variables) {
  $element = $variables['element'];
  $classes = array('pure-menu-item');
  $element['#attributes']['class'] = array_merge($element['#attributes']['class'], $classes);
  $sub_menu = '';

  if ($element['#below']) {
    $sub_menu = backdrop_render($element['#below']);
  }

  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return '<li' . backdrop_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}
