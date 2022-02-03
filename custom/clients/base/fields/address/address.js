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
        this.model.addValidationTask('checkIfAddressIsDifferent',_.bind(this._doValidateEmptyDifferentAddress,this));
        //this.model.addValidationTask('checkInputMunicipality',_.bind(this._doValidateEmptyInputMunicipality,this));
        //this.model.addValidationTask('checkInputColony',_.bind(this._doValidateEmptyInputColony,this));
    
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

        //$("input[name='ent_postalcode_txf_c']").prop('disabled', true);

        $('div[data-name="address"]')[1].style.display="none";
        $('div[data-panelname="LBL_RECORDVIEW_PANEL20"]')[0].style.display = "none";

        if(this.model.get("ent_statea_txf_c")!=""){

            $('#txtStates').val(this.model.get("ent_statea_txf_c"));
            $('#txtMunicipality').val(this.model.get("ent_amunicipality_txf_c"));
            $('#txtColony').val(this.model.get("ent_acolony_txf_c"));
            $("span[data-fieldname=address]").children().show()

        }

        if($('#map').length>0){

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
        
        var isMapDefined = false; 
        var gMarkers = [];
        var map;
        console.log("ID: "+this.model.get("id"));
        console.log("VISTA: "+this.view.action);
        if(typeof this.model.get("id")!="undefined"){
            if(typeof this.model.get("ent_alatitude_txf_c") !="undefined"  && typeof this.model.get("ent_alongitude_txf_c") !="undefined"){

                console.log("VISTA DETALLES");
                // The properties location
                console.log("LATITUD RENDER: "+this.model.get("ent_alatitude_txf_c"));
                console.log("LONGITUD: "+this.model.get("ent_alongitude_txf_c"));
                const uluru = {lat: Number(this.model.get("ent_alatitude_txf_c")), lng: Number(this.model.get("ent_alongitude_txf_c"))}

                if(this.view.action == "edit"){
                    // The map, centered at Uluru
                    map = new google.maps.Map(document.getElementById("map"), {
                        zoom: 15,
                        center: uluru,
                    });
                }else{
                    if(this.view.action == "detail"){
                        // The map, centered at Uluru
                        map = new google.maps.Map(document.getElementById("map"), {
                            zoom: 15,
                            center: uluru,
                            disableDefaultUI: true,
                        });
                    }
                }

                var marker = new google.maps.Marker({
                    position: uluru, 
                    map: map
                });

                gMarkers.push(marker);

                isMapDefined = true;

            }
        }else{
            console.log("VISTA CREACIÓN");
            

            // The location of Mexico City
            const uluru = { lat: 19.43254612420808, lng: -99.13237855973854 };
            // The map, centered at Uluru
            map = new google.maps.Map(document.getElementById("map"), {
                zoom: 13,
                center: uluru,
            });

            isMapDefined = true;

        }

        if(isMapDefined){
            self = this; 
            google.maps.event.addListener(map, 'click', function(event) {

                console.log("LATITUD: "+event.latLng.lat());
                console.log("LONGITUD: "+event.latLng.lng());
                console.log("TIPO LONGITUD: "+typeof event.latLng.lng());

                self.model.set("ent_alatitude_txf_c",event.latLng.lat());
                self.model.set("ent_alongitude_txf_c",event.latLng.lng());

                //Borramos los valores de los campos (hay veces en que no existe una colonia y para evitar que se quede el valor anterior, se borra)
                if($('#txtStates').val()!=""){
                    $('#txtStates').val("");
                    $('#txtMunicipality').val("");
                    $('#txtColony').val("");

                    self.model.set("ent_statea_txf_c","");
                    self.model.set("ent_amunicipality_txf_c","");
                    self.model.set("ent_acolony_txf_c","");
                    self.model.set("ent_postalcode_txf_c","");
                    //$("input[name='ent_postalcode_txf_c']").val("");
                }

                //Removemos el marcador seleccionado anteriormente, en caso de estar 
                if(gMarkers.length>0){
                    gMarkers[0].setMap(null);
                    gMarkers.splice(0,1);
                }

                var marker = new google.maps.Marker({
                    position: event.latLng, 
                    map: map
                });

                gMarkers.push(marker);
            
                map.setCenter(event.latLng);

                var url = app.api.buildURL('Coordinates/'+event.latLng.lat()+'/'+event.latLng.lng());
                        app.api.call('GET',url,{},{
                                
                            success:function(data){
                                console.log("CONEXIÓN CORRECTA");
                                //Cuando se consume el servicio de geocoding, la dirección no siempre viene con un código postal, en ese caso, se habilita el campo de código postal para que el usuario pueda ingresarlo
                                var isPostCode = false;
                                for(var i=0;i<data.results.length;i++){
                                    if(data.results[i].types == 'street_address' || data.results[i].types == 'premise' /*|| data.results[i].types == 'route'*/){
                                        console.log("ENTRO STREET ADDRESS");

                                        for(var j=data.results[i].address_components.length-1;j>=0;j--){
                                            if(data.results[i].address_components[j].types.includes('administrative_area_level_1')){$('#txtStates').val(data.results[i].address_components[j].long_name);self.model.set("ent_statea_txf_c",data.results[i].address_components[j].long_name);}
                                            if(data.results[i].address_components[j].types.includes('sublocality') || data.results[i].address_components[j].types.includes('neighborhood')){$('#txtColony').val(data.results[i].address_components[j].long_name);self.model.set("ent_acolony_txf_c",data.results[i].address_components[j].long_name);}
                                            if(data.results[i].address_components[j].types.includes('postal_code')){self.model.set('ent_postalcode_txf_c',data.results[i].address_components[j].long_name);isPostCode=true;}
                                        }

                                        //Seteamos el valor de municipio/delegación
                                        var address_array = data.results[i].formatted_address.split(',');
                                        console.log("ARREGLO DIRECCIÓN: "+address_array);

                                        //Si es mayor igual a 7, quiere decir que es un caso especial, donde hay mas datos antes de llegar a la delegación/municipio
                                        if(address_array.length>=7){
                                            //Quitamos el código postal que viene en algunos casos en el municipio/delegación. 
                                            municipality_array = address_array[address_array.length-4].split(" ");
                                            //Si es mayor a dos (todos los valores vienen con un espacio en blanco antes) la longitud del arreglo, existe la posibilidad de que tenga el código postal incluído
                                            if(municipality_array.length>2){
                                                for(var i=0; i<municipality_array.length;i++){
                                                    if(parseInt(municipality_array[i])!="NaN" && municipality_array[i].length==5){
                                                        municipality_array.splice(i,1);
                                                        break; 
                                                    }
                                                }
                                                console.log("MUNICIPIO/DELEGACIÓN: "+municipality_array.toString());
                                                $('#txtMunicipality').val(municipality_array.toString().replace(/,/g," "));
                                                self.model.set("ent_amunicipality_txf_c",$('#txtMunicipality').val());
                                            }else{
                                                //Si no, solamente setea los valores al input
                                                $('#txtMunicipality').val(address_array[address_array.length-4]);
                                                self.model.set("ent_amunicipality_txf_c",address_array[address_array.length-4]);
                                            }
                                        }else{
                                            var municipality = "";
                                            //Quitamos el código postal que viene en algunos casos en el municipio/delegación. 
                                            municipality_array = address_array[address_array.length-3].split(" ");
                                            console.log("ARREGLO MUNICIPIO: "+municipality_array);
                                            if(municipality_array.length>2){
                                                for(var i=0; i<municipality_array.length;i++){
                                                    if(parseInt(municipality_array[i])!="NaN" && municipality_array[i].length==5){
                                                        municipality_array.splice(i,1);
                                                        break;
                                                    }
                                                }
                                                municipality = municipality_array.splice(1).toString().replace(/,/g," ");
                                                
                                            }else{
                                                municipality = address_array[address_array.length-3];
                                            }
                                            console.log("MUNICIPIO DELEGACIÓN: "+municipality);
                                            if(municipality == $('#txtStates').val()){
                                                console.log("EL MUNICIPIO/DELEGACIÓN ES IGUAL AL ESTADO");
                                                $('#txtMunicipality').val(address_array[address_array.length-4]);
                                                self.model.set("ent_amunicipality_txf_c",$('#txtMunicipality').val());
                                            }else{
                                                console.log("EL MUNICIPIO/DELEGACIÓN NO ES IGUAL AL ESTADO");
                                                $('#txtMunicipality').val(municipality);
                                                self.model.set("ent_amunicipality_txf_c",$('#txtMunicipality').val());
                                            }
                                        }

                                        break;
                                    }
                                }
                                if(!isPostCode){
                                    //$("input[name='ent_postalcode_txf_c']").removeAttr("disabled");
                                    $("input[name='ent_postalcode_txf_c']").prop('disabled', false);
                                }
                            },
                            error: function(){    
                                console.log("NO FUNCIONÓ");
                            }
                        });
            });
        }

    },

    _doSetDirectionValues:function(){

        $('#txtStates').val(this.model.get("ent_statea_txf_c"));
        $('#txtMunicipality').val(this.model.get("ent_amunicipality_txf_c"));
        $('#txtColony').val(this.model.get("ent_acolony_txf_c"));


        if($(".detail.hide")[2]){
            $("span[data-fieldname=address]").children().show()
        }

        this._render();

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

    _doValidateEmptyDifferentAddress:function(fields,errors,callback){
        console.log("VALIDATION TASK DIRECCIÓN DIFERENTE");

        if(this.view.action=="edit" && Number(this.context.attributes.model._syncedAttributes.ent_alatitude_txf_c) != this.model.get("ent_alatitude_txf_c") && Number(this.context.attributes.model._syncedAttributes.ent_alongitude_txf_c) != this.model.get("ent_alongitude_txf_c")){
            console.log("LA DIRECCIÓN ES DISTINTA");
            self = this;
            app.alert.show('different-address', {
                level: 'confirmation',
                messages: '¿Está seguro de editar la dirección?',
                autoClose: false,
                onCancel: function () {
                    errors['address'] =  errors['address'] || {};
                    /*app.alert.show('not-save', {
                        level: 'error',
                        messages: 'No se pudieron guardar los cambios'
                    });*/
                    callback(null, fields, errors);
                },
                onConfirm: function () {
                    callback(null, fields, errors);
                }
            });
        }else{
            callback(null, fields, errors);
        }

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