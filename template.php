<?php
/**
 * @file
 * Materialize parent theme template functions
 *
*/

/**
 * Implements hook_preprocess_maintenance_page().
 */
function materialize_preprocess_maintenance_page(&$variables) {
  backdrop_add_css(backdrop_get_path('theme', 'bartik') . '/css/maintenance-page.css');
}

/**
 * Implements hook_preprocess_layout().
 */
function materialize_preprocess_layout(&$variables) {

  if ($variables['content']['header']) {
    $variables['content']['header'] = '<div class="l-header-inner">' . $variables['content']['header'] . '</div>';
  }

if (theme_get_setting('materialize_cdn_css') > 0)
{
backdrop_add_css('https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css', array('type' => 'external'));
}

$var1 = theme_get_setting('materialize_juiced_main_background');
$var2 = theme_get_setting('materialize_juiced_big_statement_background');
$var3 = theme_get_setting('materialize_juiced_main_background_blurred');
$var4 = theme_get_setting('materialize_juiced_big_statement_background_blurred');

if ($var1 && $var3 > 0)
{
backdrop_add_css("@media screen and (min-width: 769px) { .juiced-main::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var1) no-repeat; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if ($var1 && $var3 == 0)
{
backdrop_add_css("@media screen and (min-width: 769px) { .juiced-main { background: url($var1) no-repeat; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if ($var2 && $var4 > 0)
{
backdrop_add_css("@media screen and (min-width: 769px) { .l-big-statement::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var2) no-repeat fixed; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if ($var2 && $var4 == 0)
{
backdrop_add_css("@media screen and (min-width: 769px) { .l-big-statement { background: url($var2) no-repeat fixed; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}


$var5 = theme_get_setting('materialize_body_main_background');
$var6 = theme_get_setting('materialize_footer_main_background');
$var7 = theme_get_setting('materialize_body_main_background_blurred');
$var8 = theme_get_setting('materialize_footer_main_background_blurred');

if ($var5 && $var7 > 0)
{
backdrop_add_css("@media screen and (min-width: 769px) { .layout::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var5) no-repeat; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if ($var5 && $var7 == 0)
{
backdrop_add_css("@media screen and (min-width: 769px) { .layout { background: url($var5) no-repeat; background-size: cover; background-position: center; } }", array('type' => 'inline'));
}

if ($var6 && $var8 > 0)
{
backdrop_add_css("@media screen and (min-width: 769px) { footer.l-footer::before { content: ' '; width: 100%; height: 100%; display: block; position: absolute; z-index: -100; -webkit-filter: blur(20px); -moz-filter: blur(20px); -o-filter: blur(20px); -ms-filter: blur(20px); filter: blur(20px); opacity: 0.4;  background: url($var6) no-repeat fixed; background-size: cover; background-position: center; } footer.l-footer { background: transparent; } }", array('type' => 'inline'));
}

if ($var6 && $var8 == 0)
{
backdrop_add_css("@media screen and (min-width: 769px) { footer.l-footer { background: url($var6) no-repeat fixed; background-size: cover; background-position: center; } }", array('type' => 'inline'));
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

// backdrop_add_js("document.write('<script src=\"http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1\"></' + 'script>')", array('type' => 'inline', 'scope' => 'footer', 'weight' => 9999));
}


function materialize_css_alter(&$css) {
  if (theme_get_setting('materialize_cdn_css') > 0)
  {
  $css_to_remove = array();
  $css_to_remove[] = backdrop_get_path('theme','materialize') . '/css/materialize.css';
    foreach ($css_to_remove as $index => $css_file) {
      unset($css[$css_file]);
    }
  }
}

/**
 * Implements theme_field__field_type().
 */
function materialize_field__taxonomy_term_reference($variables) {
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

function materialize_form_alter(&$form, &$form_state, $form_id) {
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
function materialize_menu_tree($variables) {
return '<a class="dropdown-button btn" href="#">Menu</a><ul class="menu dropdown-content clearfix">' . $variables['tree'];
}

/**
 * Implements theme_menu_link().
 */
function materialize_menu_link($variables) {
$element = $variables['element'];
  $sub_menu = '';

  $element['#attributes']['class'][] = '' . $element['#original_link']['mlid'];

  if ($element['#below']) {
    $sub_menu = backdrop_render($element['#below']);
  }

  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return '<li' . backdrop_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}

function materialize_select($variables) {
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

function materialize_image_style($variables) {

if (isset($variables['attributes']['class'])) {
    $variables['attributes']['class'] = array_merge($variables['attributes']['class'], array('responsive-img'));
  }else{
    $variables['attributes']['class'] = array('responsive-img', $variables['style_name']);
  }

return theme('image', $variables);
}
