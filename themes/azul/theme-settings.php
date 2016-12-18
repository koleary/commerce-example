<?php

/**
 * @file
 * Azul theme settings form.
 */

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function azul_form_system_theme_settings_alter(&$form, &$form_state) {
  $form['azul'] = [
    '#type' => 'details',
    '#title' => t('Azul settings'),
    '#description' => t('After making any changes below, you may need to clear the Drupal cache.'),
    '#open' => TRUE,
  ];

  $form['azul']['font_size'] = [
    '#type' => 'number',
    '#title' => t('Font size (in ems)'),
    '#min' => .8,
    '#max' => 1.6,
    '#size' => 6,
    '#step' => .01,
    '#description' => t('Set a global font size for Azul'),
    '#default_value' => theme_get_setting('font_size'),
  ];

  $fonts[''] = t('- Default -');

  $fonts['Standard'] = [
    'tahoma' => 'Tahoma',
    'lucida-sans-unicode' => 'lucida Sans Unicode',
    'verdana' => 'Verdana',
    'arial' => 'Arial',
  ];

  $fonts['Google fonts'] = [
    'ubuntu' => 'Ubuntu ',
    'open-sans' => 'Open Sans',
    'pt-sans' => 'PT Sans',
    'roboto' => 'Roboto',
    'source-sans-pro' => 'Source Sans Pro',
  ];

  $form['azul']['font_family'] = [
    '#type' => 'select',
    '#title' => t('Font family'),
    '#options' => $fonts,
    '#description' => t('Set a global font family for Azul'),
    '#default_value' => theme_get_setting('font_family'),
  ];

}
