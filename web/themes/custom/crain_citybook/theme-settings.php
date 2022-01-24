<?php

/**
 * @file
 * Theme settings form for CRAIN Citybook theme.
 */

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function crain_citybook_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['crain_citybook'] = [
    '#type' => 'details',
    '#title' => t('CRAIN Citybook'),
    '#open' => TRUE,
  ];

  $form['crain_citybook']['font_size'] = [
    '#type' => 'number',
    '#title' => t('Font size'),
    '#min' => 12,
    '#max' => 18,
    '#default_value' => theme_get_setting('font_size'),
  ];

}
