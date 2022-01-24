({
    extendsFrom: 'CreateView',

    initialize: function (options) {

        this._super('initialize', [options]);

        //add validation tasks
        this.model.addValidationTask('check_floor_type',_.bind(this._doValidateFloorType,this));
        this.model.addValidationTask('check_colony',_.bind(this._doValidateColony,this));
        this.model.addValidationTask('check_street',_.bind(this._doValidateStreet,this));
        this.model.addValidationTask('check_years',_.bind(this._doValidateYears,this));
        this.model.addValidationTask('check_date_and_year',_.bind(this._doValidateDateAndYear,this));
        this.model.addValidationTask('check_share_commission_pre',_.bind(this._doValidateShareCommissionPre,this));
        this.model.addValidationTask('check_share_commission_sale',_.bind(this._doValidateShareCommissionSale,this));
        this.model.addValidationTask('check_share_commission_inc',_.bind(this._doValidateShareCommissionInc,this));

        this.model.on('change:ent_operation_mlddw',this._doDisabledAndEnabledOptions,this);    

    },

    //Validación No. 1
    _doValidateFloorType: function(fields, errors, callback){

        if(this.model.get('ent_floor_mlddw') == 'habitacional' && (_.isEmpty(this.model.get('ent_landsize_dec')) || _.isEmpty(this.model.get('ent_built_dec')))){

            errors['ent_landsize_dec'] = errors['ent_landsize_dec'] || {};
            errors['ent_built_dec'] = errors['ent_built_dec'] || {};
            
            errors['ent_landsize_dec'].required = true;
            errors['ent_built_dec'].required = true;
 
        }

        callback(null, fields, errors);

    },

    //Validación No. 2
    _doValidateColony: function(fields, errors, callback){

        if(this.model.get('ent_state_ddw') != 'NE' && this.model.get('ent_municipality_ddw') != 'NE'){

            if(this.model.get('ent_colony_ddw') == 'NE'){

                errors['ent_colony_ddw'] = errors['ent_colony_ddw'] || {};
                errors['ent_colony_ddw'].required = true;

            }
 
        }

        callback(null, fields, errors);

    },

    //Validación No. 3
    _doValidateStreet: function(fields, errors, callback){

        if(this.model.get('ent_colony_ddw') != 'NE' && _.isEmpty(this.model.get('ent_street_txf'))){

            errors['ent_street_txf'] = errors['ent_street_txf'] || {};
            errors['ent_street_txf'].required = true;

        }

        callback(null, fields, errors);

    },

    //Validación No. 4
    _doValidateYears: function(fields, errors, callback){

        if(this.model.get('ent_agestatus_ddw') == 'usado' && _.isEmpty(this.model.get('ent_years_int')) && !_.isNumber(this.model.get('ent_years_int'))){

            console.log('ENTRO');

            errors['ent_years_int'] = errors['ent_years_int'] || {};
            errors['ent_years_int'].required = true;

        }

        callback(null, fields, errors);

    },

    //Validación No. 5
    _doValidateDateAndYear: function(fields, errors, callback){

        if(this.model.get('ent_agestatus_ddw') == 'construccion'){

            if(this.model.get('ent_deliverymonth_ddw') == 'ne'){

                errors['ent_deliverymonth_ddw'] = errors['ent_deliverymonth_ddw'] || {};
                errors['ent_deliverymonth_ddw'].required = true;

            }

            if(_.isEmpty(this.model.get('ent_deliveryyear_int')) && !_.isNumber(this.model.get('ent_deliveryyear_int'))){

                console.log("ENTRO CONSTRUCCIÓN");
                
                errors['ent_deliveryyear_int'] = errors['ent_deliveryyear_int'] || {};
                errors['ent_deliveryyear_int'].required = true;
            }

        }

        callback(null, fields, errors);

    },

    //Validación No. 6
    _doValidateShareCommissionPre: function(fields, errors, callback){

        if(this.model.get('ent_commission_ddw') == 'si' && _.isEmpty(this.model.get('ent_sharecommissionpre_dec')) && !_.isNumber(this.model.get('ent_sharecommissionpre_dec'))){

            errors['ent_sharecommissionpre_dec'] = errors['ent_sharecommissionpre_dec'] || {};
            errors['ent_sharecommissionpre_dec'].required = true;
 
        }

        callback(null, fields, errors);

    },

    //Validación No. 6.1
    _doValidateShareCommissionSale: function(fields, errors, callback){

        if(this.model.get('ent_sharecommission_ddw') == 'si' && _.isEmpty(this.model.get('ent_sharecommission_dec')) && !_.isNumber(this.model.get('ent_sharecommission_dec'))){

            errors['ent_sharecommission_dec'] = errors['ent_sharecommission_dec'] || {};
            errors['ent_sharecommission_dec'].required = true;
 
        }

        callback(null, fields, errors);

    },

    //Validación No. 6.2
    _doValidateShareCommissionInc: function(fields, errors, callback){

        if(this.model.get('ent_sharecommissionin_ddw') == 'si' && _.isEmpty(this.model.get('ent_sharecommissioninc_dec')) && !_.isNumber(this.model.get('ent_sharecommissioninc_dec'))){

            errors['ent_sharecommissioninc_dec'] = errors['ent_sharecommissioninc_dec'] || {};
            errors['ent_sharecommissioninc_dec'].required = true;
 
        }

        callback(null, fields, errors);

    },

    //Validación No. 7
    _doDisabledAndEnabledOptions: function(){

        if(this.model.get('ent_operation_mlddw').includes('preventa')){

            let pre_value = ['preventa'];

            this.model.set('ent_operation_mlddw',pre_value);

        }

    }

})