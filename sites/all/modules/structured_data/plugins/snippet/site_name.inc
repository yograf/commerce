<?php

$plugin = array(
  'label' => t('yogaf'),
  'description' => t('yogf.'),
  'path' => 'yogaf',
  'moshe' => 'bob sfog',
);


function structured_data_site_name_site_name_configure($settings) {
  $form = array();
  $form['url'] = array(
    '#type' => 'textfield',
    '#title' => t('URL'),
    '#description' => t('asdfdf'),
  );

  return $form;
}




function structured_data_site_name_site_name_save($settings) {
  dpm('dsfdf');


}


function structured_data_site_name_site_name_elements() {
  return array(
    'dfasdf' => 'asdfsdaf',
    'asdfasdfasdfsdf' => 'fasdfadsf',
    'yogev' => 'priel',
  );


}
