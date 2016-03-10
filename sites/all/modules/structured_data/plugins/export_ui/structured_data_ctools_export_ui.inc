<?php


/**
 * Define this Export UI plugin.
 */
$plugin = array(
  'schema' => 'structured_data_preset',  // As defined in hook_schema().
  'access' => 'administer structured data',  // Define a permission users must have to access these pages.

  // Define the menu item.
  'menu' => array(
    'menu prefix' => 'admin/structure',
    'menu item' => 'yogaf',
    'menu title' => 'Snippet',
    'menu description' => 'Administer Mymodule presets.',
  ),

  // Define user interface texts.
  'title singular' => t('snippet'),
  'title plural' => t('snippets'),
  'title singular proper' => t('Mymodule snippet'),
  'title plural proper' => t('Mymodule snippets'),

  // Define the names of the functions that provide the add/edit forms.
  'form' => array(
    'settings' => 'structured_data_ctools_export_ui_form',
    'validate' => 'structured_data_ctools_export_ui_validate',
    // 'submit' and 'validate' are also valid callbacks.
  ),
);


/**
 *  * Define the preset add/edit form.
 *   */
function structured_data_ctools_export_ui_form(&$form, &$form_state) {
  $form['#tree'] = TRUE;
  $preset = $form_state['item'];
  dpm($preset);
  $snippet_array = drupal_json_decode($preset->mydata);
  $form['yog'] = structured_data_json_to_form('yog', $snippet_array);


}



function structured_data_ctools_export_ui_validate(&$form, &$form_state) {
  $yog = $form_state['values']['yog'];

  $form_state['values']['mydata'] = str_replace('\/' ,'/', drupal_json_encode($yog));
}
