<?php

/**
 * Implements hook_action_info().
 */
function cluster_libraries_action_info() {
  return array(
    'cluster_libraries_create' => array(
      'type' => 'node',
      'label' => t('Create an arbitrary library'),
      'configurable' => TRUE,
      'permissions' => array('administer nodes'),
    ),
  );
}

function cluster_libraries_create_form($settings, &$form_state) {
  $form = array();

  $form['title'] = array(
    '#type' => 'textfield',
    '#title' => t('Name'),
    '#description' => t('Enter a name for the new library'),
    '#required' => TRUE,
  );

  $form['group'] = array(
    '#type' => 'textfield',
    '#title' => t('Group'),
    '#description' => t('Optional'),
    '#autocomplete_path' => 'cluster_og/groups/autocomplete',
  );

  return $form;
}

function cluster_libraries_create_submit($form, &$form_state) {
  global $user;

  $node = new stdClass();
  $node->type = 'arbitrary_library';
  $node->title = $form_state['values']['title'];
  node_object_prepare($node);
  $node->uid = $user->uid;
  $node->status = NODE_NOT_PUBLISHED;

  if ($group_nid = intval($form_state['values']['group'])) {
    $group = node_load($group_nid);
    if ($group && og_is_group('node', $group)) {
      $node->og_group_ref = array(LANGUAGE_NONE => array(array('target_id' => $group_nid)));
    }
  }


  $node = node_submit($node);
  node_save($node);

  $_GET['destination'] = 'node/'.$node->nid.'/edit';

  return array('arbitrary_library_nid' => $node->nid);
}

function cluster_libraries_create(&$node, $context) {
  $library = node_load($context['arbitrary_library_nid']);
  $library_wrapper = entity_metadata_wrapper('node', $library);
  $values = $library_wrapper->field_arbitrary_document_ref->value();
  $values[] = $node;
  $library_wrapper->field_arbitrary_document_ref->set($values);
  $library_wrapper->save();
}
