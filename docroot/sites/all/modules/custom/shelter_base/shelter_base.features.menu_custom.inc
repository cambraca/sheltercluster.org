<?php
/**
 * @file
 * shelter_base.features.menu_custom.inc
 */

/**
 * Implements hook_menu_default_menu_custom().
 */
function shelter_base_menu_default_menu_custom() {
  $menus = array();

  // Exported menu: main-menu.
  $menus['main-menu'] = array(
    'menu_name' => 'main-menu',
    'title' => 'Main menu',
    'description' => 'The <em>Main</em> menu is used on many sites to show the major sections of the site, often in a top navigation bar.',
    'language' => 'und',
    'i18n_mode' => 5,
  );
  // Exported menu: menu-general-information.
  $menus['menu-general-information'] = array(
    'menu_name' => 'menu-general-information',
    'title' => 'General Information',
    'description' => '',
    'language' => 'und',
    'i18n_mode' => 5,
  );
  // Exported menu: menu-homepage.
  $menus['menu-homepage'] = array(
    'menu_name' => 'menu-homepage',
    'title' => 'Homepage',
    'description' => 'Menu available on the homepage.',
    'language' => 'und',
    'i18n_mode' => 5,
  );
  // Exported menu: user-menu.
  $menus['user-menu'] = array(
    'menu_name' => 'user-menu',
    'title' => 'User menu',
    'description' => 'The <em>User</em> menu contains links related to the user\'s account, as well as the \'Log out\' link.',
    'language' => 'und',
    'i18n_mode' => 5,
  );
  // Translatables
  // Included for use with string extractors like potx.
  t('General Information');
  t('Homepage');
  t('Main menu');
  t('Menu available on the homepage.');
  t('The <em>Main</em> menu is used on many sites to show the major sections of the site, often in a top navigation bar.');
  t('The <em>User</em> menu contains links related to the user\'s account, as well as the \'Log out\' link.');
  t('User menu');


  return $menus;
}
