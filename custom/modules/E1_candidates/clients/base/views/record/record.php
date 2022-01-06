<?php
$module_name = 'E1_candidates';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'record' => 
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
              1 => 
              array (
                'type' => 'shareaction',
                'name' => 'share',
                'label' => 'LBL_RECORD_SHARE_BUTTON',
                'acl_action' => 'view',
              ),
              2 => 
              array (
                'type' => 'pdfaction',
                'name' => 'download-pdf',
                'label' => 'LBL_PDF_VIEW',
                'action' => 'download',
                'acl_action' => 'view',
              ),
              3 => 
              array (
                'type' => 'pdfaction',
                'name' => 'email-pdf',
                'label' => 'LBL_PDF_EMAIL',
                'action' => 'email',
                'acl_action' => 'view',
              ),
              4 => 
              array (
                'type' => 'divider',
              ),
              5 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:find_duplicates_button:click',
                'name' => 'find_duplicates_button',
                'label' => 'LBL_DUP_MERGE',
                'acl_action' => 'edit',
              ),
              6 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:duplicate_button:click',
                'name' => 'duplicate_button',
                'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
                'acl_module' => 'E1_candidates',
                'acl_action' => 'create',
              ),
              7 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:audit_button:click',
                'name' => 'audit_button',
                'label' => 'LNK_VIEW_CHANGE_LOG',
                'acl_action' => 'view',
              ),
              8 => 
              array (
                'type' => 'divider',
              ),
              9 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:delete_button:click',
                'name' => 'delete_button',
                'label' => 'LBL_DELETE_BUTTON_LABEL',
                'acl_action' => 'delete',
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
              2 => 
              array (
                'name' => 'favorite',
                'label' => 'LBL_FAVORITE',
                'type' => 'favorite',
                'readonly' => true,
                'dismiss_label' => true,
              ),
              3 => 
              array (
                'name' => 'follow',
                'label' => 'LBL_FOLLOW',
                'type' => 'follow',
                'readonly' => true,
                'dismiss_label' => true,
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'panel_body',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'placeholders' => true,
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'readonly' => false,
                'name' => 'ent_lastnamefat_txf',
                'label' => 'LBL_ENT_LASTNAMEFAT_TXF',
              ),
              1 => 
              array (
                'readonly' => false,
                'name' => 'ent_lastnamemot_txf',
                'label' => 'LBL_ENT_LASTNAMEMOT_TXF',
              ),
              2 => 
              array (
                'readonly' => false,
                'name' => 'ent_picture_img',
                'studio' => 'visible',
                'label' => 'LBL_ENT_PICTURE_IMG',
                'span' => 12,
              ),
              3 => 
              array (
                'readonly' => false,
                'name' => 'ent_birthday_dat',
                'label' => 'LBL_ENT_BIRTHDAY_DAT',
              ),
              4 => 
              array (
                'readonly' => true,
                'name' => 'ent_age_int',
                'label' => 'LBL_ENT_AGE_INT',
              ),
              5 => 
              array (
                'readonly' => false,
                'name' => 'ent_gender_ddw',
                'label' => 'LBL_ENT_GENDER_DDW',
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
                'name' => 'ent_email_txf',
                'label' => 'LBL_ENT_EMAIL_TXF',
                'span' => 12,
              ),
              1 => 
              array (
                'readonly' => false,
                'name' => 'ent_phone_mobile_phn',
                'label' => 'LBL_ENT_PHONE_MOBILE_PHN',
              ),
              2 => 
              array (
                'readonly' => false,
                'name' => 'ent_phone_home_phn',
                'label' => 'LBL_ENT_PHONE_HOME_PHN',
              ),
            ),
          ),
          3 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL1',
            'label' => 'LBL_RECORDVIEW_PANEL1',
            'columns' => 2,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'readonly' => false,
                'name' => 'ent_job_ddw',
                'label' => 'LBL_ENT_JOB_DDW',
              ),
              1 => 
              array (
                'readonly' => false,
                'name' => 'ent_university_ddw',
                'label' => 'LBL_ENT_UNIVERSITY_DDW',
              ),
              2 => 
              array (
                'readonly' => false,
                'name' => 'ent_score_dec',
                'label' => 'LBL_ENT_SCORE_DEC',
                'span' => 12,
              ),
              3 => 
              array (
                'readonly' => false,
                'name' => 'ent_graduated_ddw',
                'label' => 'LBL_ENT_GRADUATED_DDW',
              ),
              4 => 
              array (
                'readonly' => false,
                'name' => 'ent_semester_ddw',
                'label' => 'LBL_ENT_SEMESTER_DDW',
              ),
              5 => 
              array (
                'readonly' => false,
                'name' => 'ent_docvalidated_chk',
                'label' => 'LBL_ENT_DOCVALIDATED_CHK',
              ),
              6 => 
              array (
                'readonly' => false,
                'name' => 'ent_interview_dat',
                'label' => 'LBL_ENT_INTERVIEW_DAT',
              ),
              7 => 
              array (
                'readonly' => false,
                'name' => 'ent_notification_chk',
                'label' => 'LBL_ENT_NOTIFICATION_CHK',
                'span' => 12,
              ),
            ),
          ),
          4 => 
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
                'name' => 'ent_street_txf',
                'label' => 'LBL_ENT_STREET_TXF',
                'span' => 12,
              ),
              1 => 
              array (
                'readonly' => false,
                'name' => 'ent_number_txf',
                'label' => 'LBL_ENT_NUMBER_TXF',
              ),
              2 => 
              array (
                'readonly' => false,
                'name' => 'ent_colony_txf',
                'label' => 'LBL_ENT_COLONY_TXF',
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
                'readonly' => true,
                'name' => 'ent_counttask_int',
                'label' => 'LBL_ENT_COUNTTASK_INT',
              ),
              1 => 
              array (
                'readonly' => true,
                'name' => 'ent_averagetask_dec',
                'label' => 'LBL_ENT_AVERAGETASK_DEC',
              ),
              2 => 
              array (
                'name' => 'date_entered_by',
                'readonly' => true,
                'inline' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_ENTERED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_entered',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'created_by_name',
                  ),
                ),
              ),
              3 => 
              array (
                'name' => 'date_modified_by',
                'readonly' => true,
                'inline' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_MODIFIED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_modified',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'modified_by_name',
                  ),
                ),
              ),
              4 => 
              array (
                'name' => 'team_name',
                'studio' => 
                array (
                  'portallistview' => false,
                  'portalrecordview' => false,
                ),
                'label' => 'LBL_TEAMS',
              ),
              5 => 
              array (
                'name' => 'assigned_user_name',
                'related_fields' => 
                array (
                  0 => 'assigned_user_id',
                ),
                'label' => 'LBL_ASSIGNED_TO',
              ),
            ),
          ),
        ),
        'templateMeta' => 
        array (
          'useTabs' => false,
        ),
      ),
    ),
  ),
);
