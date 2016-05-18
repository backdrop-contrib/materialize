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

$current_layout = "default";
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

if (theme_get_setting('materialize_subtheme_cdn_css') > 0)
{
backdrop_add_css('https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css', array('type' => 'external'));
}


if (theme_get_setting('materialize_subtheme_cdn_js') > 0)
{
// backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
backdrop_add_js("themes/materialize/js/materialize.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}
else
{
// backdrop_add_js("themes/materialize/js/materialize.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
backdrop_add_js("themes/materialize/js/global.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));

if (theme_get_setting('materialize_subtheme_script1') > 0)
{
backdrop_add_js("themes/materialize/js/animation.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_subtheme_script2') > 0)
{
backdrop_add_js("themes/materialize/js/buttons.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_subtheme_script3') > 0)
{
backdrop_add_js("themes/materialize/js/cards.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_subtheme_script4') > 0)
{
backdrop_add_js("themes/materialize/js/character_counter.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_subtheme_script5') > 0)
{
backdrop_add_js("themes/materialize/js/collapsible.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_subtheme_script6') > 0)
{
backdrop_add_js("themes/materialize/js/date_picker/picker.date.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_subtheme_script7') > 0)
{
backdrop_add_js("themes/materialize/js/date_picker/picker.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_subtheme_script8') > 0)
{
backdrop_add_js("themes/materialize/js/dropdown.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_subtheme_script9') > 0)
{
backdrop_add_js("themes/materialize/js/forms.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_subtheme_script12') > 0)
{
backdrop_add_js("themes/materialize/js/jquery.easing.1.3.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_subtheme_script13') > 0)
{
backdrop_add_js("themes/materialize/js/jquery.timeago.min.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_subtheme_script14') > 0)
{
backdrop_add_js("themes/materialize/js/leanModal.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_subtheme_script15') > 0)
{
backdrop_add_js("themes/materialize/js/materialbox.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_subtheme_script16') > 0)
{
backdrop_add_js("themes/materialize/js/parallax.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_subtheme_script17') > 0)
{
backdrop_add_js("themes/materialize/js/prism.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_subtheme_script18') > 0)
{
backdrop_add_js("themes/materialize/js/pushpin.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_subtheme_script19') > 0)
{
backdrop_add_js("themes/materialize/js/scrollFire.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_subtheme_script20') > 0)
{
backdrop_add_js("themes/materialize/js/scrollspy.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_subtheme_script21') > 0)
{
backdrop_add_js("themes/materialize/js/sideNav.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_subtheme_script22') > 0)
{
backdrop_add_js("themes/materialize/js/slider.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_subtheme_script23') > 0)
{
backdrop_add_js("themes/materialize/js/tabs.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_subtheme_script24') > 0)
{
backdrop_add_js("themes/materialize/js/toasts.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_subtheme_script25') > 0)
{
backdrop_add_js("themes/materialize/js/tooltip.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_subtheme_script26') > 0)
{
backdrop_add_js("themes/materialize/js/transitions.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_subtheme_script27') > 0)
{
backdrop_add_js("themes/materialize/js/velocity.min.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_subtheme_script28') > 0)
{
backdrop_add_js("themes/materialize/js/waves.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

// backdrop_add_js("themes/materialize/js/init.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}


if (theme_get_setting('materialize_subtheme_script10') > 0)
{
backdrop_add_js("themes/materialize/js/hammer.min.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_subtheme_script11') > 0)
{
backdrop_add_js("themes/materialize/js/jquery.hammer.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_subtheme_script30') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_subtheme_script31') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

if (theme_get_setting('materialize_subtheme_script32') > 0)
{
backdrop_add_js("https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.min.js", array('type' => 'external', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}


if (theme_get_setting('materialize_subtheme_dropdown') > 0)
{
backdrop_add_js("themes/materialize/js/dropdown_init.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

backdrop_add_js("themes/materialize/js/scripts.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));

if (theme_get_setting('materialize_subtheme_script29') > 0)
{
backdrop_add_js("themes/materialize/js/materialize_custom.js", array('type' => 'file', 'scope' => 'footer', 'every_page' => TRUE, 'preprocess' => TRUE));
}

backdrop_add_js("document.write('<script src=\"http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1\"></' + 'script>')", array('type' => 'inline', 'scope' => 'footer', 'weight' => 9999));
}

function materialize_subtheme_css_alter(&$css) {
  $css_to_remove = array();
  if (theme_get_setting('materialize_subtheme_cdn_css') > 0)
  {
  $css_to_remove[] = backdrop_get_path('theme','materialize') . '/css/materialize.css';
  }

  if (theme_get_setting('materialize_subtheme_sass') > 0)
  {
  $css_to_remove[] = backdrop_get_path('theme','materialize') . '/css/style.css';
  $css_to_remove[] = backdrop_get_path('theme','materialize') . '/css/materialize.css';
  }

  foreach ($css_to_remove as $index => $css_file) {
      unset($css[$css_file]);
    }
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

function materialize_subtheme_form_alter(&$form, &$form_state, $form_id) {
$form['actions']['submit']['#attributes']['class'][] = 'waves-effect';
$form['actions']['submit']['#attributes']['class'][] = 'waves-light';
$form['actions']['submit']['#attributes']['class'][] = 'btn-large';

$form['actions']['preview']['#attributes']['class'][] = 'waves-effect';
$form['actions']['preview']['#attributes']['class'][] = 'waves-light';
$form['actions']['preview']['#attributes']['class'][] = 'btn-large';
}

/**
 * Implements theme_menu_tree().
 */
function materialize_subtheme_menu_tree($variables) {
return '<a class="dropdown-button btn" href="#">Menu</a><ul class="menu dropdown-content clearfix">' . $variables['tree'] . '</ul>';
}

function materialize_subtheme_select($variables) {
$classes = array('browser-default');

if (!isset($variables['element']['#attributes']['class']))
{
$variables['element']['#attributes'] = array('class' => $classes);
}
else
{
$variables['element']['#attributes']['class'] = array_merge($variables['element']['#attributes']['class'], $classes);
}

return '<select' . backdrop_attributes($variables['element']['#attributes']) . '>' . form_select_options($variables['element']) . '</select>';
}

function materialize_subtheme_image_style($variables) {

if (isset($variables['attributes']['class'])) {
    $variables['attributes']['class'] = array_merge($variables['attributes']['class'], array('responsive-img'));
  }else{
    $variables['attributes']['class'] = array('responsive-img', $variables['style_name']);
  }

return theme('image', $variables);
}
