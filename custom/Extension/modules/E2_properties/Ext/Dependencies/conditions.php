<?php

$dependencies['E2_properties']['age_status_new_conditions'] = array(
    'hooks' => array("edit"),
    'trigger' => 'true',
    //Optional, the trigger for the dependency. Defaults to 'true'.
    'triggerFields' => array('ent_agestatus_ddw'),
    'onload' => true,
    //Actions is a list of actions to fire when the trigger is true
    // You could list multiple fields here each in their own array under 'actions'
    'actions' => array(
        array(
            'name' => 'ReadOnly',
            //The parameters passed in will depend on the action type set in 'name'
            'params' => array(
                'target' => 'ent_years_int',
                'value' => 'or(equal($ent_agestatus_ddw,"nuevo"),equal($ent_agestatus_ddw,"construccion"))',
            ),
        ),
        array(
            'name' => 'ReadOnly',
            //The parameters passed in will depend on the action type set in 'name'
            'params' => array(
                'target' => 'ent_deliverymonth_ddw',
                'value' => 'or(equal($ent_agestatus_ddw,"nuevo"),equal($ent_agestatus_ddw,"usado"))',
            ),
        ),
        array(
            'name' => 'ReadOnly',
            //The parameters passed in will depend on the action type set in 'name'
            'params' => array(
                'target' => 'ent_deliveryyear_int',
                'value' => 'or(equal($ent_agestatus_ddw,"nuevo"),equal($ent_agestatus_ddw,"usado"))',
            ),
        ),
    ),
);

/*
$dependencies['E2_properties']['presale_commission_conditions'] = array(
    'hooks' => array("edit"),
    'trigger' => 'true',
    //Optional, the trigger for the dependency. Defaults to 'true'.
    'triggerFields' => array('ent_commission_ddw'),
    'onload' => true,
    //Actions is a list of actions to fire when the trigger is true
    // You could list multiple fields here each in their own array under 'actions'
    'actions' => array(
        array(
            'name' => 'ReadOnly',
            //The parameters passed in will depend on the action type set in 'name'
            'params' => array(
                'target' => 'ent_sharecommissionpre_dec',
                'value' => 'equal($ent_commission_ddw,"no")',
            ),
        ),
    ),
);*/

$dependencies['E2_properties']['sale_commission_conditions'] = array(
    'hooks' => array("edit"),
    'trigger' => 'true',
    //Optional, the trigger for the dependency. Defaults to 'true'.
    'triggerFields' => array('ent_sharecommission_ddw'),
    'onload' => true,
    //Actions is a list of actions to fire when the trigger is true
    // You could list multiple fields here each in their own array under 'actions'
    'actions' => array(
        array(
            'name' => 'ReadOnly',
            //The parameters passed in will depend on the action type set in 'name'
            'params' => array(
                'target' => 'ent_sharecommission_dec',
                'value' => 'equal($ent_sharecommission_ddw,"no")',
            ),
        ),
    ),
);

$dependencies['E2_properties']['income_commission_conditions'] = array(
    'hooks' => array("edit"),
    'trigger' => 'true',
    //Optional, the trigger for the dependency. Defaults to 'true'.
    'triggerFields' => array('ent_sharecommissionin_ddw'),
    'onload' => true,
    //Actions is a list of actions to fire when the trigger is true
    // You could list multiple fields here each in their own array under 'actions'
    'actions' => array(
        array(
            'name' => 'ReadOnly',
            //The parameters passed in will depend on the action type set in 'name'
            'params' => array(
                'target' => 'ent_sharecommissioninc_dec',
                'value' => 'equal($ent_sharecommissionin_ddw,"no")',
            ),
        ),
    ),
);

$dependencies['E2_properties']['presale_panel__visibility'] = array(
    'hooks' => array("edit","view"),
    'trigger' => 'isInList("preventa",$ent_operation_mlddw)',
    'triggerFields' => array('ent_operation_mlddw'),
    'onload' => true,
    //Actions is a list of actions to fire when the trigger is true
    'actions' => array(
        array(
            'name' => 'SetPanelVisibility',
            'params' => array(
                'target' => 'LBL_RECORDVIEW_PANEL14',
                'value' => 'true',
            ),
        )
    ),
    //notActions is a list of actions to fire when the trigger is false
    'notActions' => array(
        array(
            'name' => 'SetPanelVisibility',
            'params' => array(
                'target' => 'LBL_RECORDVIEW_PANEL14',
                'value' => 'false',
            ),
        ),
    ),
);

$dependencies['E2_properties']['sale_panel__visibility'] = array(
    'hooks' => array("edit","view"),
    'trigger' => 'isInList("venta",$ent_operation_mlddw)',
    'triggerFields' => array('ent_operation_mlddw'),
    'onload' => true,
    //Actions is a list of actions to fire when the trigger is true
    'actions' => array(
        array(
            'name' => 'SetPanelVisibility',
            'params' => array(
                'target' => 'LBL_RECORDVIEW_PANEL17',
                'value' => 'true',
            ),
        )
    ),
    //notActions is a list of actions to fire when the trigger is false
    'notActions' => array(
        array(
            'name' => 'SetPanelVisibility',
            'params' => array(
                'target' => 'LBL_RECORDVIEW_PANEL17',
                'value' => 'false',
            ),
        ),
    ),
);

$dependencies['E2_properties']['income_panel__visibility'] = array(
    'hooks' => array("edit","view"),
    'trigger' => 'isInList("renta",$ent_operation_mlddw)',
    'triggerFields' => array('ent_operation_mlddw'),
    'onload' => true,
    //Actions is a list of actions to fire when the trigger is true
    'actions' => array(
        array(
            'name' => 'SetPanelVisibility',
            'params' => array(
                'target' => 'LBL_RECORDVIEW_PANEL18',
                'value' => 'true',
            ),
        )
    ),
    //notActions is a list of actions to fire when the trigger is false
    'notActions' => array(
        array(
            'name' => 'SetPanelVisibility',
            'params' => array(
                'target' => 'LBL_RECORDVIEW_PANEL18',
                'value' => 'false',
            ),
        ),
    ),
);

?>