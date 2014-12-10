<?php
/**
 * @file
 * cluster_docs.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function cluster_docs_user_default_permissions() {
  $permissions = array();

  // Exported permission: 'create field_is_resource_document'.
  $permissions['create field_is_resource_document'] = array(
    'name' => 'create field_is_resource_document',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'field_permissions',
  );

  // Exported permission: 'edit field_is_resource_document'.
  $permissions['edit field_is_resource_document'] = array(
    'name' => 'edit field_is_resource_document',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'field_permissions',
  );

  // Exported permission: 'edit own field_is_resource_document'.
  $permissions['edit own field_is_resource_document'] = array(
    'name' => 'edit own field_is_resource_document',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'field_permissions',
  );

  // Exported permission: 'view field_is_resource_document'.
  $permissions['view field_is_resource_document'] = array(
    'name' => 'view field_is_resource_document',
    'roles' => array(
      'administrator' => 'administrator',
      'authenticated user' => 'authenticated user',
    ),
    'module' => 'field_permissions',
  );

  // Exported permission: 'view own field_is_resource_document'.
  $permissions['view own field_is_resource_document'] = array(
    'name' => 'view own field_is_resource_document',
    'roles' => array(
      'administrator' => 'administrator',
      'authenticated user' => 'authenticated user',
    ),
    'module' => 'field_permissions',
  );

  return $permissions;
}