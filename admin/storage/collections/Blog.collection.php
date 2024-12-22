<?php
 return array (
  'name' => 'Blog',
  'label' => 'Blog',
  '_id' => 'Blog66e1b5b1923cd',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'title',
      'label' => 'Blog Title',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
        'slug' => true,
        'is_unique' => true,
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
      'required' => true,
    ),
    1 => 
    array (
      'name' => 'sort_description',
      'label' => 'Sort Description',
      'type' => 'textarea',
      'default' => '',
      'info' => '',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
      'required' => false,
    ),
    2 => 
    array (
      'name' => 'description',
      'label' => 'Detail Description',
      'type' => 'wysiwyg',
      'default' => '',
      'info' => '',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
      'required' => false,
    ),
    3 => 
    array (
      'name' => 'image',
      'label' => 'Blog Image',
      'type' => 'image',
      'default' => '',
      'info' => '900 * 600',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
        'allowed' => '*.g',
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
      'required' => false,
    ),
    4 => 
    array (
      'name' => 'date',
      'label' => 'Date',
      'type' => 'date',
      'default' => '',
      'info' => '',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
        'format' => 'YYYY-MM-DD',
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
      'required' => false,
    ),
    5 => 
    array (
      'name' => 'tags',
      'label' => 'Blog HashTags ',
      'type' => 'text',
      'default' => '',
      'info' => 'Please add tages with seperated by commas " , "',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
      'required' => false,
    ),
    6 => 
    array (
      'name' => 'sort_order',
      'label' => 'Sort Order',
      'type' => 'text',
      'default' => '',
      'info' => '',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
      'required' => true,
    ),
    7 => 
    array (
      'name' => 'status',
      'label' => 'Status',
      'type' => 'select',
      'default' => '',
      'info' => '',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
        'options' => 'Enable,Disable',
        'default' => 'Enable',
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
      'required' => true,
    ),
  ),
  'sortable' => false,
  'in_menu' => false,
  '_created' => 1726068145,
  '_modified' => 1733458395,
  'color' => '#48CFAD',
  'acl' => 
  array (
  ),
  'sort' => 
  array (
    'column' => '_created',
    'dir' => -1,
  ),
  'rules' => 
  array (
    'create' => 
    array (
      'enabled' => false,
    ),
    'read' => 
    array (
      'enabled' => false,
    ),
    'update' => 
    array (
      'enabled' => false,
    ),
    'delete' => 
    array (
      'enabled' => false,
    ),
  ),
  'icon' => 'post.svg',
);