({
    extendsFrom: 'CreateView',

    initialize: function (options) {

        this._super('initialize', [options]);

        this.model.on('change:tct_id_libro_txf',this._doGetInfoAboutBooks,this);   
         
    },

    _doGetInfoAboutBooks:function(){

        var id_book = this.model.get('tct_id_libro_txf');

        console.log("ID LIBRO A BUSCAR: "+id_book);
        if(id_book != ""){

            self = this;
            var url = app.api.buildURL('Books/'+id_book);
                app.api.call('GET',url,{},{
                    success:function(data){

                        if(data['title'] != 'Not Found' && data['title'] != 'One or more validation errors occurred.'){

                            console.log('SI SE ENCONTRÓ LIBRO');

                            //Llenado de campos
                            self.model.set('name',data['title']);
                            self.model.set('tct_titulo_txf', data['title']);
                            self.model.set('description', data['description']);
                            self.model.set('tct_num_pags_txf', data['pageCount']);

                            var date = data['publishDate'].split('T')[0];

                            console.log('FECHA: '+date);
                            console.log('DESCRIPCIÓN: '+data['description']);
                            console.log('RESUMEN: '+data['excerpt']);

                            self.model.set('tct_publicacion_dat', date);
                            self.model.set('tct_resumen_txa', data['excerpt']);

                        }else{
                            self.model.set('name','Título no encontrado');
                            self.model.set('tct_titulo_txf', 'Título no encontrado');
                            self.model.set('description','Descripción no encontrada');
                            self.model.set('tct_num_pags_txf','Número de páginas no encontrado');
                            //self.model.set('tct_publicacion_dat','Fecha de publicación no encontrada');
                            //self.model.set('tct_publicacion_dat','1000-01-01');
                            self.model.set('tct_resumen_txa','Resumen no encontrado');
                        }
                        
                    },
                    error: function(){
                        console.log('ERROR AL CONECTARSE CON EL SERVICIO');

                        app.alert.show('error-connection', {
                            level: 'warning',
                            messages: 'Ha ocurrido un error al conectarse al servicio'
                        });
                        
                    }
                });

        }else{
            self.model.set('name',"");
            self.model.set('tct_titulo_txf', "");
            self.model.set('tct_publicacion_dat',"");
            self.model.set('description', "");
            self.model.set('tct_num_pags_txf', "");
            self.model.set('tct_resumen_txa', "");
        }

    },
})