<?php
$module_name = 'E2_properties';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'recorddashlet' => 
      array (
        'buttons' => 
        array (
          0 => 
          array (
            'type' => 'button',
            'name' => 'cancel_button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
            'showOn' => 'edit',
            'events' => 
            array (
              'click' => 'button:cancel_button:click',
            ),
          ),
          1 => 
          array (
            'type' => 'rowaction',
            'event' => 'button:save_button:click',
            'name' => 'save_button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'css_class' => 'btn btn-primary',
            'showOn' => 'edit',
            'acl_action' => 'edit',
          ),
          2 => 
          array (
            'type' => 'actiondropdown',
            'name' => 'main_dropdown',
            'primary' => true,
            'showOn' => 'view',
            'buttons' => 
            array (
              0 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:edit_button:click',
                'name' => 'edit_button',
                'label' => 'LBL_EDIT_BUTTON_LABEL',
                'acl_action' => 'edit',
              ),
            ),
          ),
          3 => 
          array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_header',
            'label' => 'LBL_RECORD_HEADER',
            'header' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'picture',
                'type' => 'avatar',
                'width' => 42,
                'height' => 42,
                'dismiss_label' => true,
                'readonly' => true,
                'size' => 'large',
              ),
              1 => 'name',
            ),
          ),
          1 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL5',
            'label' => 'LBL_RECORDVIEW_PANEL5',
            'columns' => 2,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'span' => 12,
              ),
            ),
          ),
          2 => 
          array (
            'name' => 'panel_hidden',
            'label' => 'LBL_SHOW_MORE',
            'hide' => true,
            'columns' => 2,
            'placeholders' => true,
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'readonly' => false,
                'name' => 'ent_propertietitle_txf',
                'label' => 'LBL_ENT_PROPERTIETITLE_TXF',
                'span' => 12,
              ),
              1 => 
              array (
                'readonly' => false,
                'name' => 'ent_propertietype_ddw',
                'label' => 'LBL_ENT_PROPERTIETYPE_DDW',
                'span' => 12,
              ),
              2 => 
              array (
                'readonly' => false,
                'name' => 'ent_floor_mlddw',
                'label' => 'LBL_ENT_FLOOR_MLDDW',
                'span' => 12,
              ),
            ),
          ),
          3 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL2',
            'label' => 'LBL_RECORDVIEW_PANEL2',
            'columns' => 2,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'readonly' => false,
                'name' => 'ent_landsize_dec',
                'label' => 'LBL_ENT_LANDSIZE_DEC',
                'span' => 12,
              ),
              1 => 
              array (
                'readonly' => false,
                'name' => 'ent_built_dec',
                'label' => 'LBL_ENT_BUILT_DEC',
                'span' => 12,
              ),
              2 => 
              array (
                'readonly' => false,
                'name' => 'ent_width_dec',
                'label' => 'LBL_ENT_WIDTH_DEC',
                'span' => 12,
              ),
              3 => 
              array (
                'readonly' => false,
                'name' => 'ent_bottom_dec',
                'label' => 'LBL_ENT_BOTTOM_DEC',
                'span' => 12,
              ),
              4 => 
              array (
                'readonly' => false,
                'name' => 'ent_shape_ddw',
                'label' => 'LBL_ENT_SHAPE_DDW',
                'span' => 12,
              ),
              5 => 
              array (
                'readonly' => false,
                'name' => 'ent_relief_ddw',
                'label' => 'LBL_ENT_RELIEF_DDW',
                'span' => 12,
              ),
            ),
          ),
          4 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL19',
            'label' => 'LBL_RECORDVIEW_PANEL19',
            'columns' => 2,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'address',
                'studio' => 'visible',
                'label' => 'address',
                'span' => 12,
              ),
              1 => 
              array (
                'readonly' => false,
                'name' => 'ent_street_txf',
                'label' => 'LBL_ENT_STREET_TXF',
                'span' => 12,
              ),
              2 => 
              array (
                'readonly' => false,
                'name' => 'ent_code_int',
                'label' => 'LBL_ENT_CODE_INT',
                'span' => 12,
              ),
              3 => 
              array (
                'readonly' => false,
                'name' => 'ent_number_txf',
                'label' => 'LBL_ENT_NUMBER_TXF',
              ),
              4 => 
              array (
                'readonly' => false,
                'name' => 'ent_interior_txf',
                'label' => 'LBL_ENT_INTERIOR_TXF',
              ),
              5 => 
              array (
                'readonly' => false,
                'name' => 'ent_reference_txa',
                'studio' => 'visible',
                'label' => 'LBL_ENT_REFERENCE_TXA',
                'span' => 12,
              ),
            ),
          ),
          5 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL3',
            'label' => 'LBL_RECORDVIEW_PANEL3',
            'columns' => 2,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'readonly' => false,
                'name' => 'ent_state_ddw',
                'label' => 'LBL_ENT_STATE_DDW',
                'span' => 12,
              ),
              1 => 
              array (
                'readonly' => false,
                'name' => 'ent_municipality_ddw',
                'label' => 'LBL_ENT_MUNICIPALITY_DDW',
                'span' => 12,
              ),
              2 => 
              array (
                'readonly' => false,
                'name' => 'ent_colony_ddw',
                'label' => 'LBL_ENT_COLONY_DDW',
                'span' => 12,
              ),
            ),
          ),
          6 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL8',
            'label' => 'LBL_RECORDVIEW_PANEL8',
            'columns' => 2,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'span' => 12,
              ),
            ),
          ),
          7 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL4',
            'label' => 'LBL_RECORDVIEW_PANEL4',
            'columns' => 2,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'readonly' => false,
                'name' => 'ent_agestatus_ddw',
                'label' => 'LBL_ENT_AGESTATUS_DDW',
                'span' => 12,
              ),
              1 => 
              array (
                'readonly' => false,
                'name' => 'ent_years_int',
                'label' => 'LBL_ENT_YEARS_INT',
                'span' => 12,
              ),
              2 => 
              array (
                'readonly' => false,
                'name' => 'ent_deliverymonth_ddw',
                'label' => 'LBL_ENT_DELIVERYMONTH_DDW',
              ),
              3 => 
              array (
                'readonly' => false,
                'name' => 'ent_deliveryyear_int',
                'label' => 'LBL_ENT_DELIVERYYEAR_INT',
              ),
            ),
          ),
          8 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL6',
            'label' => 'LBL_RECORDVIEW_PANEL6',
            'columns' => 2,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'readonly' => false,
                'name' => 'ent_informationplace_ddw',
                'label' => 'LBL_ENT_INFORMATIONPLACE_DDW',
                'span' => 12,
              ),
              1 => 
              array (
                'readonly' => false,
                'name' => 'ent_levels_int',
                'label' => 'LBL_ENT_LEVELS_INT',
              ),
              2 => 
              array (
                'readonly' => false,
                'name' => 'ent_rooms_int',
                'label' => 'LBL_ENT_ROOMS_INT',
              ),
              3 => 
              array (
                'readonly' => false,
                'name' => 'ent_bathrooms_int',
                'label' => 'LBL_ENT_BATHROOMS_INT',
              ),
              4 => 
              array (
                'readonly' => false,
                'name' => 'ent_halfbathroom_int',
                'label' => 'LBL_ENT_HALFBATHROOM_INT',
              ),
              5 => 
              array (
                'readonly' => false,
                'name' => 'ent_parking_int',
                'label' => 'LBL_ENT_PARKING_INT',
              ),
              6 => 
              array (
                'readonly' => false,
                'name' => 'ent_roof_chk',
                'label' => 'LBL_ENT_ROOF_CHK',
              ),
              7 => 
              array (
                'readonly' => false,
                'name' => 'ent_service_ddw',
                'label' => 'LBL_ENT_SERVICE_DDW',
                'span' => 12,
              ),
            ),
          ),
          9 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL9',
            'label' => 'LBL_RECORDVIEW_PANEL9',
            'columns' => 2,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'readonly' => false,
                'name' => 'ent_preservation_ddw',
                'label' => 'LBL_ENT_PRESERVATION_DDW',
                'span' => 12,
              ),
            ),
          ),
          10 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL10',
            'label' => 'LBL_RECORDVIEW_PANEL10',
            'columns' => 2,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'readonly' => false,
                'name' => 'ent_speech_txa',
                'studio' => 'visible',
                'label' => 'LBL_ENT_SPEECH_TXA',
                'span' => 12,
              ),
            ),
          ),
          11 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL15',
            'label' => 'LBL_RECORDVIEW_PANEL15',
            'columns' => 2,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
              ),
              1 => 
              array (
              ),
            ),
          ),
          12 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL16',
            'label' => 'LBL_RECORDVIEW_PANEL16',
            'columns' => 2,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'readonly' => false,
                'name' => 'ent_characteristics_mlddw',
                'label' => 'LBL_ENT_CHARACTERISTICS_MLDDW',
                'span' => 12,
              ),
            ),
          ),
          13 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL11',
            'label' => 'LBL_RECORDVIEW_PANEL11',
            'columns' => 2,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'span' => 12,
              ),
            ),
          ),
          14 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL12',
            'label' => 'LBL_RECORDVIEW_PANEL12',
            'columns' => 2,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'readonly' => false,
                'name' => 'ent_operation_mlddw',
                'label' => 'LBL_ENT_OPERATION_MLDDW',
                'span' => 12,
              ),
            ),
          ),
          15 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL13',
            'label' => 'LBL_RECORDVIEW_PANEL13',
            'columns' => 2,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'readonly' => false,
                'name' => 'ent_free_ddw',
                'label' => 'LBL_ENT_FREE_DDW',
                'span' => 12,
              ),
              1 => 
              array (
                'readonly' => false,
                'name' => 'ent_legal_txa',
                'studio' => 'visible',
                'label' => 'LBL_ENT_LEGAL_TXA',
                'span' => 12,
              ),
            ),
          ),
          16 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL14',
            'label' => 'LBL_RECORDVIEW_PANEL14',
            'columns' => 2,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'readonly' => false,
                'name' => 'ent_price_dec',
                'label' => 'LBL_ENT_PRICE_DEC',
              ),
              1 => 
              array (
                'readonly' => false,
                'name' => 'ent_currency_ddw',
                'label' => 'LBL_ENT_CURRENCY_DDW',
              ),
              2 => 
              array (
                'readonly' => false,
                'name' => 'ent_cost_dec',
                'label' => 'LBL_ENT_COST_DEC',
              ),
              3 => 
              array (
                'readonly' => false,
                'name' => 'ent_currencycost_ddw',
                'label' => 'LBL_ENT_CURRENCYCOST_DDW',
              ),
              4 => 
              array (
                'readonly' => false,
                'name' => 'ent_payment_ddw',
                'label' => 'LBL_ENT_PAYMENT_DDW',
                'span' => 12,
              ),
              5 => 
              array (
                'readonly' => false,
                'name' => 'ent_details_txa',
                'studio' => 'visible',
                'label' => 'LBL_ENT_DETAILS_TXA',
                'span' => 12,
              ),
              6 => 
              array (
                'readonly' => false,
                'name' => 'ent_commissionpre_dec',
                'label' => 'LBL_ENT_COMMISSIONPRE_DEC',
                'span' => 12,
              ),
              7 => 
              array (
                'readonly' => false,
                'name' => 'ent_commission_ddw',
                'label' => 'LBL_ENT_COMMISSION_DDW',
                'span' => 12,
              ),
              8 => 
              array (
                'readonly' => false,
                'name' => 'ent_sharecommissionpre_dec',
                'label' => 'LBL_ENT_SHARECOMMISSIONPRE_DEC',
                'span' => 12,
              ),
            ),
          ),
          17 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL17',
            'label' => 'LBL_RECORDVIEW_PANEL17',
            'columns' => 2,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'readonly' => false,
                'name' => 'ent_saleprice_dec',
                'label' => 'LBL_ENT_SALEPRICE_DEC',
              ),
              1 => 
              array (
                'readonly' => false,
                'name' => 'ent_currencysale_ddw',
                'label' => 'LBL_ENT_CURRENCYSALE_DDW',
              ),
              2 => 
              array (
                'readonly' => false,
                'name' => 'ent_maintenancecostsale_dec',
                'label' => 'LBL_ENT_MAINTENANCECOSTSALE_DEC',
              ),
              3 => 
              array (
                'readonly' => false,
                'name' => 'ent_currencymainsale_ddw',
                'label' => 'LBL_ENT_CURRENCYMAINSALE_DDW',
              ),
              4 => 
              array (
                'readonly' => false,
                'name' => 'ent_paymentsale_mlddw',
                'label' => 'LBL_ENT_PAYMENTSALE_MLDDW',
                'span' => 12,
              ),
              5 => 
              array (
                'readonly' => false,
                'name' => 'ent_detailssale_txa',
                'studio' => 'visible',
                'label' => 'LBL_ENT_DETAILSSALE_TXA',
                'span' => 12,
              ),
              6 => 
              array (
                'readonly' => false,
                'name' => 'ent_commissionsale_dec',
                'label' => 'LBL_ENT_COMMISSIONSALE_DEC',
                'span' => 12,
              ),
              7 => 
              array (
                'readonly' => false,
                'name' => 'ent_sharecommission_ddw',
                'label' => 'LBL_ENT_SHARECOMMISSION_DDW',
                'span' => 12,
              ),
              8 => 
              array (
                'readonly' => false,
                'name' => 'ent_sharecommission_dec',
                'label' => 'LBL_ENT_SHARECOMMISSION_DEC',
                'span' => 12,
              ),
            ),
          ),
          18 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL18',
            'label' => 'LBL_RECORDVIEW_PANEL18',
            'columns' => 2,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'readonly' => false,
                'name' => 'ent_incomeprice_dec',
                'label' => 'LBL_ENT_INCOMEPRICE_DEC',
              ),
              1 => 
              array (
                'readonly' => false,
                'name' => 'ent_currencyincome_ddw',
                'label' => 'LBL_ENT_CURRENCYINCOME_DDW',
              ),
              2 => 
              array (
                'readonly' => false,
                'name' => 'ent_maintenancecostinc_dec',
                'label' => 'LBL_ENT_MAINTENANCECOSTINC_DEC',
              ),
              3 => 
              array (
                'readonly' => false,
                'name' => 'ent_currencymainpre_ddw',
                'label' => 'LBL_ENT_CURRENCYMAINPRE_DDW',
              ),
              4 => 
              array (
                'readonly' => false,
                'name' => 'ent_deposit_ddw',
                'label' => 'LBL_ENT_DEPOSIT_DDW',
                'span' => 12,
              ),
              5 => 
              array (
                'readonly' => false,
                'name' => 'ent_previewincome_ddw',
                'label' => 'LBL_ENT_PREVIEWINCOME_DDW',
                'span' => 12,
              ),
              6 => 
              array (
                'readonly' => false,
                'name' => 'ent_contract_ddw',
                'label' => 'LBL_ENT_CONTRACT_DDW',
                'span' => 12,
              ),
              7 => 
              array (
                'readonly' => false,
                'name' => 'ent_aval_ddw',
                'label' => 'LBL_ENT_AVAL_DDW',
                'span' => 12,
              ),
              8 => 
              array (
                'readonly' => false,
                'name' => 'ent_investigation_ddw',
                'label' => 'LBL_ENT_INVESTIGATION_DDW',
                'span' => 12,
              ),
              9 => 
              array (
                'readonly' => false,
                'name' => 'ent_restrictions_txa',
                'studio' => 'visible',
                'label' => 'LBL_ENT_RESTRICTIONS_TXA',
                'span' => 12,
              ),
              10 => 
              array (
                'readonly' => false,
                'name' => 'ent_commissionincome_dec',
                'label' => 'LBL_ENT_COMMISSIONINCOME_DEC',
                'span' => 12,
              ),
              11 => 
              array (
                'readonly' => false,
                'name' => 'ent_sharecommissionin_ddw',
                'label' => 'LBL_ENT_SHARECOMMISSIONIN_DDW',
                'span' => 12,
              ),
              12 => 
              array (
                'readonly' => false,
                'name' => 'ent_sharecommissioninc_dec',
                'label' => 'LBL_ENT_SHARECOMMISSIONINC_DEC',
                'span' => 12,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
