({
    isFirstReader:true,
    /**
     * Called when initializing the field
     * @param options
     */
    initialize: function(options) {
        this._super('initialize', [options]);

        //Variables
        //Esta bandera sirve para saber cuando el usuario va a editar una propiedad. 
        this.isEdit = false;
        //Esta bandera sirve para saber cuando la pagina se cargó por primera vez, para de esa manera, evitar que cuando se ejecute el evento sync, al momento de hacer el render,
        //Se vuelva a hacer otro consumo a la api de sugar para traer las imagenes. 
        this.isShowedFirstTime = true;

        //Events
        this.model.on('sync', this._doSetValuesOfImages, this);
        this.events['click button.button-styles'] = 'deleteImageChoosen';

    },

    /**
     * Called when rendering the field
     * @private
     */
    _render: function() {
        this._super('_render');
        $('div[data-name="images"]')[1].style.display = "none";

        console.log("RENDER DE IMÁGENES");
        if($('#images-input').length==1){
            self = this;
            $('#images-input').customFile({
                type:'image',
                maxFiles : 10,
                filePicker : '<h3>Arrastra las imágenes a esta caja</h3>'
                +'<p>O haz click aquí</p>'
                +'<div class="cif-icon-picker"></div>',
                    
                callbacks : {
                    onSuccess : function(item){
                        console.log("Se ingresó una imagen");
                        //Se le quita la extensión a la imagen
                        var imageName = item.file.name.split(".")[0];
                        console.log("Nombre imagen: "+imageName);
                        console.log("-------------------------");
                        console.log("Valor campo custom ANTES: "+self.model.get("images"));
                        console.log("-------------------------");
                        var base64String = item.fr.result;
                        console.log("-------------------------");
                        console.log("Valor BASE64: "+base64String);
                        console.log("-------------------------");

                        if(typeof self.model.get("images")=="undefined" || self.model.get("images")==""){
                            console.log("ES PRIMERA VEZ");
                            var imageInfo=[{
                                "name":imageName,
                                "base64":base64String
                                }];
                            self.model.set("images",imageInfo);  
                        }else{
                            console.log("NO ES PRIMERA VEZ");
                            console.log("TAMAÑO ARREGLO IMAGENES"+self.model.get("images").length);
                            var imageInfo={
                                "name":imageName,
                                "base64":base64String
                                };
                            var dataField = self.model.get("images");
                            dataField[dataField.length] = imageInfo;
                            self.model.set("images",dataField);
                        }
                    },
                    beforeRemove : function(item){
                        console.log('Se quitará una imagen '); 
                        //Se le quita la extensión a la imagen
                        var imageToRemove = item.file.name.split(".")[0];
                        console.log("Imagen a quitar: "+imageToRemove);
                        var dataField = self.model.get("images");
                        for(var i=0;i<dataField.length;i++){
                            if(dataField[i]["name"]==imageToRemove){
                                console.log("Se encontró imagen a remover");
                                dataField.splice(i,1);
                                break;
                            }
                        }
                        self.model.set("images",dataField);
                        console.log("ARREGLO: "+JSON.stringify(dataField));
                    },
                }
            });
        }
        if(typeof this.model.get("id")!="undefined"){
            console.log("RENDER IMAGENES CONSULTA");
            $("span[data-fieldname=images]").children().show()
            this.isEdit = true;
            //Seteamos las imagenes al arreglo para mostrarlas en la vista
            //El seteo también se hace en el render, dado que si el usuario edita una propiedad pero le da cancelar, al momento de que se muetre la vista detalles, no se mostrarán las imagenes que tiene el campo custom
            if(this.isFirstReader && !this.isShowedFirstTime){
                console.log("SETEO DE DATOS IMAGENES");
        
                self = this;
                var url = app.api.buildURL('E2_properties/'+this.model.get("id")+'/link/mi_images_e2_properties');
                            app.api.call('GET',url,{},{
                                
                                success:function(data){
                                    console.log("CONEXIÓN CORRECTA");
                                    self.images_array = data.records;
                                    self.model.set("images",self.images_array);
                                    self.isFirstReader = false;
                                    self.render();
                                },
                                error: function(){    
                                    console.log("NO FUNCIONÓ");
                                }
                            });
            }else{
                this.isFirstReader = true;
                this.isShowedFirstTime = false; 
            }
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

    _doSetValuesOfImages:function(){

        console.log("SETEO DE DATOS IMAGENES");
        
        self = this;
        var url = app.api.buildURL('E2_properties/'+this.model.get("id")+'/link/mi_images_e2_properties');
                    app.api.call('GET',url,{},{
                        
                        success:function(data){
                            console.log("CONEXIÓN CORRECTA");
                            self.images_array = data.records;
                            self.model.set("images",self.images_array);
                            self.render();
                        },
                        error: function(){    
                            console.log("NO FUNCIONÓ");
                        }
                    });
    
        if(typeof this.model.get("id")!="undefined"){
            this.isEdit = true;
        }
        
    },
    deleteImageChoosen:function(event){
        console.log("CLICK");
        imageName=$(event.currentTarget).attr("id").split("-/")[1]
        console.log("NOMBRE IMAGEN: "+imageName);
        for(var i=0;i<this.images_array.length;i++){
            if(this.images_array[i]["name"]==imageName){
                console.log("Se encontró imagen a eliminar");
                this.images_array.splice(i,1);
                this.model.set("images",this.images_array);
                break;
            }
        }
        this.isFirstReader = false; 
        this.render();
    }
})