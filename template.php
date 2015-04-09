<?php

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
return '<a class="dropdown-button btn" href="#" data-activates="dropdown1">Menu</a><ul id="dropdown1" class="menu dropdown-content clearfix">' . $variables['tree'] . '</ul>';
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

