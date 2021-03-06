<?php
/**
 * @file
 * cluster_home.features.fe_block_settings.inc
 */

/**
 * Implements hook_default_fe_block_settings().
 */
function cluster_home_default_fe_block_settings() {
  $export = array();

  $export['version'] = '2.0';

  $export['views-homepage2-block_1'] = array(
    'cache' => -1,
    'custom' => 0,
    'delta' => 'homepage2-block_1',
    'module' => 'views',
    'node_types' => array(),
    'pages' => '<front>',
    'roles' => array(),
    'themes' => array(
      'bartik' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'bartik',
        'weight' => 0,
      ),
      'seven' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'seven',
        'weight' => 0,
      ),
      'shelter' => array(
        'region' => 'homepage',
        'status' => 1,
        'theme' => 'shelter',
        'weight' => 0,
      ),
    ),
    'title' => '<none>',
    'visibility' => 1,
  );

  return $export;
}
