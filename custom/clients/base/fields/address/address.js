({
    //Global variables
    timeToWaitState:null,
    /**
     * Called when initializing the field
     * @param options
     */
    initialize: function(options) {
        this._super('initialize', [options]);

        //Validation tasks
        this.model.addValidationTask('checkInputState',_.bind(this._doValidateEmptyInputState,this));
        this.model.addValidationTask('checkInputMunicipality',_.bind(this._doValidateEmptyInputMunicipality,this));
        this.model.addValidationTask('checkInputColony',_.bind(this._doValidateEmptyInputColony,this));
    
    
        //Events
        this.events['keyup input[name=states]'] = '_doGetStates';
        this.events['keyup input[name=municipalities]'] = '_doGetMunicipalities';
        this.events['keyup input[name=colonies]'] = '_doGetColonies';

        this.events['click select[name=select_option]'] = '_doGetStateChosen';
        this.events['click select[name=select_municipality_option]'] = '_doGetMunicipalityChosen';
        this.events['click select[name=select_colony_option]'] = '_doGetColonyChosen';

        this.model.on('sync', this._doSetDirectionValues, this);

    },

    /**
     * Called when rendering the field
     * @private
     */
    _render: function() {
        this._super('_render');

        console.log("RENDER DE DOMICILIO");

        $('div[data-name="address"]')[1].style.display="none";
        $('div[data-panelname="LBL_RECORDVIEW_PANEL20"]')[0].style.display = "none";

        if(this.model.get("ent_statea_txf_c")!=""){

            $('#txtStates').val(this.model.get("ent_statea_txf_c"));
            $('#txtMunicipality').val(this.model.get("ent_amunicipality_txf_c"));
            $('#txtColony').val(this.model.get("ent_acolony_txf_c"));
            $("span[data-fieldname=address]").children().show()

        }

        if($('#map').is(":visible")){

            this.initMap();

        }


    },

    /**
     * Called when formatting the value for display
     * @param value
     */
    format: function(value) {
        return this._super('format', [value]);
    },

    /**
     * Called when unformatting the value for storage
     * @param value
     */
    unformat: function(value) {
        return this._super('unformat', [value]);
    },

    bindDataChange: function () {
    
    },
    
    initMap:function(){
        // The location of Mexico City
        const uluru = { lat: 19.432015741818123, lng: -99.13823449135951 };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 4,
            center: uluru,
        });

        google.maps.event.addListener(map, 'click', function(event) {
            console.log("LONGITUD: "+event.latLng.lat());
            console.log("LATITUD:"+ event.latLng.lng());
            var marker = new google.maps.Marker({
                position: event.latLng, 
                map: map
            });
          
            map.setCenter(event.latLng);
        });
        
    },

    _doSetDirectionValues:function(){

        $('#txtStates').val(this.model.get("ent_statea_txf_c"));
        $('#txtMunicipality').val(this.model.get("ent_amunicipality_txf_c"));
        $('#txtColony').val(this.model.get("ent_acolony_txf_c"));

        if($(".detail.hide")[2]){
            $("span[data-fieldname=address]").children().show()
        }

    },

    _doValidateEmptyInputState: function(fields,errors,callback){

        if($('#txtStates').val()==""){

            app.alert.show('empty-states', {
                level: 'error',
                messages: 'Favor de seleccionar un estado'
            });

            $('#txtStates').css('border-color','red');

            errors['states'] =  errors['states'] || {};
            errors['states'].required = true;
        }

        callback(null, fields, errors);

    },

    _doValidateEmptyInputMunicipality: function(fields,errors,callback){

        if($('#txtMunicipality').val()=="" && !$('#txtMunicipality').prop("disabled")){

            app.alert.show('empty-municipality', {
                level: 'error',
                messages: 'Favor de seleccionar un municipio'
            });

            $('#txtMunicipality').css('border-color','red');

            errors['municipalities'] =  errors['municipalities'] || {};
            errors['municipalities'].required = true;
        }

        callback(null, fields, errors);

    },

    _doValidateEmptyInputColony: function(fields,errors,callback){

        if($('#txtColony').val()=="" && !$('#txtColony').prop("disabled")){

            app.alert.show('empty-colony', {
                level: 'error',
                messages: 'Favor de seleccionar una colonia'
            });

            $('#txtColony').css('border-color','red');

            errors['colonies'] =  errors['colonies'] || {};
            errors['colonies'].required = true;
        }

        callback(null, fields, errors);

    },

    _doGetStates: function(){
        console.log("CARACTER INGRESADO");

        var state_to_find = $("#txtStates").val();

        if(state_to_find != ""){

            $('#txtStates').css('border-color','transparent');

            clearTimeout(this.timeToWaitState)

            this.timeToWaitState = setTimeout(function(){var url = app.api.buildURL('States/'+state_to_find);
                app.alert.show('alert-search', {
                    level: 'process',
                    messages: 'Cargando'
                });
                app.api.call('GET',url,{},{
                    
                    success:function(data){
                        //Vaciamos select
                        $('#select_option').empty();
                        if(data.length>0){
                         
                            for(var i=0;i<data.length;i++){
                                console.log("ENTRO A FOR");
                                $("#select_option").append("<option value='"+data[i]['name']+"'>"+data[i]['name']+"</option>");
                            }
    
                            $('#select_option').attr('size',3);
                            
                        }else{
                            $("#select_option").append("<option value='NA'>No se encontraron resultados</option>");
                            $("#select_option option[value='NA']").attr("disabled","disabled");
                            $('#select_option').attr('size',2);
                        }

                        $('#select_option').css('display','block');
                        $('#select_option').css({'position': 'absolute', 'z-index':'2'});

                        app.alert.dismiss('alert-search');

                    },
                    error: function(){
                        
                        console.log("NO FUNCIONÓ");
                        app.alert.dismiss('alert-search');

                    }
                });},3000);

        }else{
            $('#select_option').css('display','none');
            this.model.set("ent_statea_txf_c","");

            if(!$('#txtMunicipality').prop("disabled") || $('#txtMunicipality').val()!=""){

                $('#select_municipality_option').css('display','none');
                $('#select_colony_option').css('display','none');

                $('#txtColony').val("");
                $('#txtMunicipality').val("");

                $('#txtColony').prop("disabled",true);
                $('#txtMunicipality').prop("disabled",true);

                this.model.set("ent_amunicipality_txf_c","");
                this.model.set("ent_acolony_txf_c","");
                this.model.set("ent_postalcode_txf_c","");

            }
        }
        
    },

    //Mostrar municipios
    _doGetMunicipalities: function(){

        var state = $("#txtStates").val();
        var municipality_to_find = $("#txtMunicipality").val();
        if(municipality_to_find != ""){
            $('#txtMunicipality').css('border-color','transparent');
            if(state != ""){

                var url = app.api.buildURL('Municipality/'+state+'/'+municipality_to_find);
                    app.alert.show('alert-search', {
                        level: 'process',
                        messages: 'Cargando'
                    });
                    app.api.call('GET',url,{},{
                        
                        success:function(data){

                            //Vaciamos select
                            $('#select_municipality_option').empty();
                            if(data.length>0){
                            
                                for(var i=0;i<data.length;i++){
                                    console.log("ENTRO A FOR");
                                    $("#select_municipality_option").append("<option value='"+data[i]['name']+"'>"+data[i]['name']+"</option>");
                                }
        
                                $('#select_municipality_option').attr('size',3);
                                
                            }else{
                                $("#select_municipality_option").append("<option value='NA'>No se encontraron resultados</option>");
                                $("#select_municipality_option option[value='NA']").attr("disabled","disabled");
                                $('#select_municipality_option').attr('size',2);
                            }

                            $('#select_municipality_option').css('display','block');
                            $('#select_municipality_option').css({'position': 'absolute', 'z-index':'2'});

                            app.alert.dismiss('alert-search');

                        },
                        error: function(){
                            
                            console.log("NO FUNCIONÓ");
                            app.alert.dismiss('alert-search');

                        }
                    });

            }else{
                app.alert.show('error-municipality', {
                    level: 'warning',
                    messages: 'Favor de seleccionar un estado'
                });
            }
        }else{
            $('#select_municipality_option').css('display','none');
            this.model.set("ent_amunicipality_txf_c","");

            if(!$('#txtColony').prop("disabled") || $('#txtColony').val()!=""){

                $('#txtColony').val("");
                $('#txtColony').prop("disabled",true);

                this.model.set("ent_acolony_txf_c","");
                this.model.set("ent_postalcode_txf_c","");

            }
        }
        
    },

    //Mostrar colonias
    _doGetColonies: function(){
        console.log("CARACTER INGRESADO COLONIA");

        var state = $("#txtStates").val();
        var municipality = $("#txtMunicipality").val();
        var colony_to_find = $("#txtColony").val();

        if(colony_to_find != ""){
            $('#txtColony').css('border-color','transparent');
            if(state != "" && municipality!=""){

                console.log("COLONIA A BUSCAR: "+colony_to_find);

                var url = app.api.buildURL('Colony/'+state+'/'+municipality+'/'+colony_to_find);
                    app.alert.show('alert-search', {
                        level: 'process',
                        messages: 'Cargando'
                    });
                    app.api.call('GET',url,{},{
                        
                        success:function(data){

                            console.log("CONEXIÓN CORRECTA");
                            console.log("DATA: "+data);

                            //Vaciamos select
                            $('#select_colony_option').empty();
                            if(data.length>0){
                            
                                for(var i=0;i<data.length;i++){
                                    console.log("ENTRO A FOR");
                                    $("#select_colony_option").append("<option value='"+data[i]['postal_code']+"'>"+data[i]['name']+"</option>");
                                }
        
                                $('#select_colony_option').attr('size',3);
                                
                            }else{
                                $("#select_colony_option").append("<option value='NA'>No se encontraron resultados</option>");
                                $("#select_colony_option option[value='NA']").attr("disabled","disabled");
                                $('#select_colony_option').attr('size',2);
                            }


                            $('#select_colony_option').css('display','block');
                            $('#select_colony_option').css({'position': 'absolute', 'z-index':'2'});

                            app.alert.dismiss('alert-search');

                        },
                        error: function(){
                            
                            console.log("NO FUNCIONÓ");
                            app.alert.dismiss('alert-search');

                        }
                    });

            }else{
                app.alert.show('error-colony', {
                    level: 'warning',
                    messages: 'Favor de seleccionar un estado y un municipio'
                });
            }
        }else{
            console.log("COLONIA VACÍA");
            $('#select_colony_option').css('display','none');
            this.model.set("ent_acolony_txf_c","");
            this.model.set("ent_postalcode_txf_c","");
        }
        
    },

    _doGetStateChosen:function(){
        console.log("CLICK SELECT");

        if($("#select_option option:selected").text() == "No se encontraron resultados"){
            console.log("BUG");
            $("#txtStates").val("");
        }
        if($("#txtStates").val()!="" && $("#select_option option:selected").text() !=""){
            console.log("SI HAY TEXTO");
            console.log("TEXT: "+$("#select_option option:selected").text());
            $("#txtStates").val($("#select_option option:selected").text());
            $('#txtMunicipality').prop("disabled",false);
            this.model.set("ent_statea_txf_c",$("#select_option option:selected").text());
        }else{
            $("#txtStates").val("");
        }
        $('#select_option').css('display','none');

    },
    _doGetMunicipalityChosen:function(){
        console.log("CLICK SELECT");

        if($("#select_municipality_option option:selected").text() == "No se encontraron resultados"){
            console.log("BUG");
            $("#select_municipality_option option:selected").text("");
        }
        if($("txtMunicipality").val()!="" && $("#select_municipality_option option:selected").text() !=""){

            $("#txtMunicipality").val($("#select_municipality_option option:selected").text());
            $('#txtColony').prop("disabled",false);
            this.model.set("ent_amunicipality_txf_c",$("#select_municipality_option option:selected").text());
        }else{
            $("#txtMunicipality").val("");
        }
        $('#select_municipality_option').css('display','none');

    },
    _doGetColonyChosen:function(){
        console.log("CLICK SELECT");
        
        if($("#select_colony_option option:selected").text() == "No se encontraron resultados"){
            console.log("BUG");
            $("#select_colony_option option:selected").text("");
        }
        if($("txtMunicipality").val()!="" && $("#select_colony_option option:selected").text()){

            $("#txtColony").val($("#select_colony_option option:selected").text());
            this.model.set("ent_acolony_txf_c",$("#select_colony_option option:selected").text());
            this.model.set("ent_postalcode_txf_c",$("#select_colony_option option:selected").val());

        }else{
            $("#txtColony").val("");
        }

        $('#select_colony_option').css('display','none');

    },
})