({
    /**
     * Called when initializing the field
     * @param options
     */
    initialize: function(options) {
        this._super('initialize', [options]);

        //Variables
        this.isEdit = false;

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
        console.log("VALOR A PASAR A FRONT: "+this.images_array);
        $('div[data-name="images"]')[1].style.display = "none";

        console.log("ID: "+this.model.get("id"));
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
                        var imageName = item.file.name.split(".")[0];
                        console.log("Nombre imagen: "+imageName);
                        var reader = new FileReader();
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
                            console.log("CONVERSIÓN A JSON: "+JSON.stringify(dataField));
                            dataField[dataField.length] = imageInfo;
                            self.model.set("images",dataField);
                        }
                    },
                    beforeRemove : function(item){
                        console.log('Se quitará una imagen '); 
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
                            //auxiliar_array = data.records;
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
        this.render();
    }
})