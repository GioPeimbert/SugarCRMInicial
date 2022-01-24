({
    extendsFrom: 'RecordView',

    initialize: function(options) {
        this._super('initialize', [options]);

        this.model.on('change:title',this._doGetInfoAboutAuthor,this);   
    },

    _doGetInfoAboutAuthor:function(){

        var idAuthor = this.model.get('title');

        console.log('ID AUTOR A BUSCAR: '+idAuthor);

        var self = this;

        var url = app.api.buildURL('Authors/'+idAuthor);
            app.api.call('GET',url,{},{
                success:function(data){
                    if(!("title" in data)){
                        console.log('NOMBRE: '+ data['firstName']+', APELLIDO: '+data['lastName']);

                        self.model.set('first_name',data['firstName']);
                        self.model.set('last_name', data['lastName']);
                    }else{
                        if("errors" in data){
                            app.alert.show('invalid-id', {
                                level: 'warning',
                                messages: '</br><b>'+data['errors']['id']+'</b>: ID inválido, favor de ingresar un id valido'
                            });
                        }else{
                            app.alert.show('invalid-id', {
                                level: 'warning',
                                messages: '</br><b>'+data['title']+'</b>: ID inválido, favor de ingresar un id valido'
                            });
                        }
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

    },
})