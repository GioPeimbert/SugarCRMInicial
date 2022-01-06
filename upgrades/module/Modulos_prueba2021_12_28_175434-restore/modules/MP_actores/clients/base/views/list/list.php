<?php
$module_name = 'MP_actores';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_DEFAULT',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
                'enabled' => true,
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'facebook',
                'label' => 'LBL_FACEBOOK',
                'enabled' => true,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'twitter',
                'label' => 'LBL_TWITTER',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'email',
                'label' => 'LBL_EMAIL_ADDRESS',
                'link' => true,
                'default' => true,
                'enabled' => true,
              ),
              4 => 
              array (
                'name' => 'phone_mobile',
                'label' => 'LBL_MOBILE_PHONE',
                'default' => false,
                'enabled' => true,
              ),
              5 => 
              array (
                'name' => 'primary_address_street',
                'label' => 'LBL_PRIMARY_ADDRESS_STREET',
                'enabled' => true,
                'sortable' => false,
                'default' => false,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
