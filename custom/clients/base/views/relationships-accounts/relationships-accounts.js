({
    plugins: ['Dashlet'],

    /**
     * Default options used when none are supplied through metadata.
     *
     * Supported options:
     * - timer: How often (minutes) should refresh the data collection.
     * - limit: Limit imposed to the number of records pulled.
     *
     * @property {Object}
     * @protected
     */
    _defaultOptions: {
        limit: 5,
        auto_refresh: 0
    },

    /**
     * @inheritdoc
     */
    initialize: function(options) {
        this._super('initialize', [options]);
        console.log("INITIALIZE DASHLET RELACIONES");

        //Handlebars conditions 
        Handlebars.registerHelper('ifStatus', function(v1, v2, options) {
            if(v1 === v2) {
              return options.fn(this);
            }else{
              return options.inverse(this);
            }
        });
        Handlebars.registerHelper('getDate', function(dateTime) {
            if(dateTime!=""){
                return dateTime.split('T')[0];
            }
        });
        Handlebars.registerHelper('getTime', function(dateTime) {
            if(dateTime!=""){
                var period = "";
                var hour = parseInt(dateTime.split("T")[1].split(":")[0]);
                var minutes = dateTime.split("T")[1].split(":")[1];
                if(hour>12){
                    hour = hour - 12;
                }
                var time_to_decrement = hour-6;
                if(time_to_decrement<0){
                    //Leyes de signos +- = -
                    time_to_decrement = 24+time_to_decrement;
                }
                if(time_to_decrement>0 && time_to_decrement<13){
                    period = "am";
                }else{
                    period = "pm";
                }
                if(time_to_decrement.toString().length == 1){
                    time_to_decrement = "0"+time_to_decrement;
                }
                time_to_decrement = time_to_decrement+":"+minutes+period;
                return time_to_decrement;
            }
        });

        //Variables
        this.status_calls_array = App.lang.getAppListStrings('call_status_dom');
        this.status_meetings_array = App.lang.getAppListStrings('meeting_status_dom');
        this.status_tasks_array = App.lang.getAppListStrings('task_status_dom');

        //Events 
        this.events['click button.buttonCall-delete-styles'] = 'deleteCallChoosen';
        this.events['click button.buttonCall-edit-styles'] = 'editRecordChoosen';

        this.events['click button.buttonMeetings-delete-styles'] = 'deleteMeetingChoosen';
        this.events['click button.buttonMeetings-edit-styles'] = 'editRecordChoosen';

        this.events['click button.buttonTasks-delete-styles'] = 'deleteTaskChoosen';
        this.events['click button.buttonTasks-edit-styles'] = 'editRecordChoosen';

        this._super('initialize', [options]);
        this.loadData(options.meta);
    },

    /**
         * Called when rendering the field
         * @private
         */
    _render: function() {
        this._super('_render');

        console.log("RENDER DASHLET RELACIONES");

        if($('input.date-input').is(':visible')){
            $('input.date-input').datepicker({
                format:'yyyy-mm-dd'
            });
        }
        if($('input.time-input').is(':visible')){
            $('input.time-input').timepicker();
        }
        if($('select.status-select').is(':visible')){
            $('select.status-select').select2();
        }
    },

    /**
     * Init dashlet settings
     */
    initDashlet: function() {
        console.log("initDashlet DASHLET RELACIONES");
        // We only need to handle this if we are NOT in the configure screen
        if (!this.meta.config) {
            var options = {};
            var self = this;
            var refreshRate;

            // Get and set values for limits and refresh
            options.limit = this.settings.get('limit') || this._defaultOptions.limit;
            this.settings.set('limit', options.limit);

            options.auto_refresh = this.settings.get('auto_refresh') || this._defaultOptions.auto_refresh;
            this.settings.set('auto_refresh', options.auto_refresh);

            // There is no default for this so there's no pointing in setting from it
            options.feed_url = this.settings.get('feed_url');

            // Set the refresh rate for setInterval so it can be checked ahead
            // of time. 60000 is 1000 miliseconds times 60 seconds in a minute.
            refreshRate = options.auto_refresh * 60000;

            // Only set up the interval handler if there is a refreshRate higher
            // than 0
            if (refreshRate > 0) {
                if (this.timerId) {
                    clearInterval(this.timerId);
                }
                this.timerId = setInterval(_.bind(function() {
                    if (self.context) {
                        self.context.resetLoadFlag();
                        self.loadData(options);
                    }
                }, this), refreshRate);
            }
        }

        // Validation handling for individual fields on the config
        this.layout.before('dashletconfig:save', function() {
            // Fields on the metadata
            var fields = _.flatten(_.pluck(this.meta.panels, 'fields'));

            // Grab all non-valid fields from the model
            var notValid = _.filter(fields, function(field) {
                return field.required && !this.dashModel.get(field.name);
            }, this);

            // If there no invalid fields we are good to go
            if (notValid.length === 0) {
                return true;
            }

            // Otherwise handle notification of invalidation
            _.each(notValid, function(field) {
                 var fieldOnView = _.find(this.fields, function(comp, cid) { 
                    return comp.name === field.name;
                 });

                 fieldOnView.model.trigger('error:validation:' + field.name, {required: true});
            }, this);

            // False return tells the drawer that it shouldn't close
            return false;
        }, this);
    },

    /**
     * Handles the response of the feed consumption request and sets data from 
     * the result
     * 
     * @param {Object} data Response from the rssfeed API call
     */
    handleFeed: function (data) {
        console.log("handleFeed DASHLET RELACIONES");
        if (this.disposed) {
            return;
        }

        // Load up the template
        _.extend(this, data);
        this.render();
    },

    /**
     * Loads an RSS feed from the RSS Feed endpoint.
     * 
     * @param {Object} options The metadata that drives this request
     */
    loadData: function(options) {
        console.log("loadData DASHLET RELACIONES");
        //Get calls related to accounts
        self = this;
        var url = app.api.buildURL('Calls/filter',null,null,{
            "filter":[
                {
                    "$and":[
                        {
                            "parent_type":"Accounts"
                        },
                        {
                            "parent_id":this.model.get("id")
                        }
                    ]
                }
             ],
             "max_num":-1
        });
        app.api.call('GET', url, {},{
            success:function(data){
                console.log("CONEXIÓN CORRECTA");
                self.calls = data.records;
                self.render()
            },
            error: function(){    
                console.log("NO FUNCIONÓ");
            }
        });
        //Reuniones
        var url = app.api.buildURL('Meetings/filter',null,null,{
            "filter":[
                {
                    "$and":[
                        {
                            "parent_type":"Accounts"
                        },
                        {
                            "parent_id":this.model.get("id")
                        }
                    ]
                }
             ],
             "max_num":-1
        });
        app.api.call('GET', url, {},{
            success:function(data){
                console.log("CONEXIÓN CORRECTA");
                self.meetings = data.records;
                self.render()
            },
            error: function(){    
                console.log("NO FUNCIONÓ");
            }
        });
        //Tareas
        var url = app.api.buildURL('Tasks/filter',null,null,{
            "filter":[
                {
                    "$and":[
                        {
                            "parent_type":"Accounts"
                        },
                        {
                            "parent_id":this.model.get("id")
                        }
                    ]
                }
             ],
             "max_num":-1
        });
        app.api.call('GET', url, {},{
            success:function(data){
                console.log("CONEXIÓN CORRECTA");
                self.tasks = data.records;
                self.render()
            },
            error: function(){    
                console.log("NO FUNCIONÓ");
            }
        });
    },

    deleteCallChoosen:function(event){
        console.log("BOTON ELIMINAR LLAMADA");

        self = this;
        app.alert.show('delete-call', {
            level: 'confirmation',
            messages: '¿Está seguro de eliminar la llamada?',
            autoClose: false,
            onCancel: function () {

            },
            onConfirm: function () {
                var idCall = $(event.currentTarget).attr("id").split('_')[1];

                var url = app.api.buildURL('Calls/'+idCall);
                console.log("URL: "+url);
                app.api.call('delete', url, {},{
                    success:function(data){
                        if(!data.hasOwnProperty('error')){
                            app.alert.show('call-deleted', {
                                level: 'success',
                                messages: 'Llamada '+idCall+' eliminada',
                                autoClose: true
                            });
                            for(var i=0;i<self.calls.length;i++){
                                if(self.calls[i]['id']==idCall){
                                    self.calls.splice(i,1);
                                    break;
                                }
                            }
                            self.render();
                        }else{
                            app.alert.show('error-call-deleted', {
                                level: 'error',
                                messages: 'Ocurrió un error al eliminar la llamada, favor de intentarlo mas tarde'
                            });
                        }                 
                    },
                    error: function(){    
                        console.log("NO FUNCIONÓ");
                    }
                });     
            }
        });

    },

    deleteMeetingChoosen:function(event){
        console.log("BOTON ELIMINAR REUNIÓN");

        self = this;
        app.alert.show('delete-meeting', {
            level: 'confirmation',
            messages: '¿Está seguro de eliminar la reunión?',
            autoClose: false,
            onCancel: function () {

            },
            onConfirm: function () {
                var idMeeting = $(event.currentTarget).attr("id").split('_')[1];

                var url = app.api.buildURL('Meetings/'+idMeeting);
                console.log("URL: "+url);
                app.api.call('delete', url, {},{
                    success:function(data){
                        if(!data.hasOwnProperty('error')){
                            app.alert.show('meeting-deleted', {
                                level: 'success',
                                messages: 'Reunión '+idMeeting+' eliminada',
                                autoClose: true
                            });
                            for(var i=0;i<self.meetings.length;i++){
                                if(self.meetings[i]['id']==idMeeting){
                                    self.meetings.splice(i,1);
                                    break;
                                }
                            }
                            self.render();
                        }else{
                            app.alert.show('error-meeting-deleted', {
                                level: 'error',
                                messages: 'Ocurrió un error al eliminar la reunión, favor de intentarlo mas tarde'
                            });
                        }                 
                    },
                    error: function(){    
                        console.log("NO FUNCIONÓ");
                    }
                });     
            }
        });

    },

    deleteTaskChoosen:function(event){
        console.log("BOTON ELIMINAR TAREA");

        self = this;
        app.alert.show('delete-task', {
            level: 'confirmation',
            messages: '¿Está seguro de eliminar la tarea?',
            autoClose: false,
            onCancel: function () {

            },
            onConfirm: function () {
                var idTask = $(event.currentTarget).attr("id").split('_')[1];

                var url = app.api.buildURL('Tasks/'+idTask);
                console.log("URL: "+url);
                app.api.call('delete', url, {},{
                    success:function(data){
                        if(!data.hasOwnProperty('error')){
                            app.alert.show('task-deleted', {
                                level: 'success',
                                messages: 'Tarea '+idTask+' eliminada',
                                autoClose: true
                            });
                            for(var i=0;i<self.tasks.length;i++){
                                if(self.tasks[i]['id']==idTask){
                                    self.tasks.splice(i,1);
                                    break;
                                }
                            }
                            self.render();
                        }else{
                            app.alert.show('error-meeting-deleted', {
                                level: 'error',
                                messages: 'Ocurrió un error al eliminar la tarea, favor de intentarlo mas tarde'
                            });
                        }                 
                    },
                    error: function(){    
                        console.log("NO FUNCIONÓ");
                    }
                });     
            }
        });

    },

    editRecordChoosen:function(event){
        console.log("BOTON EDITAR REGISTRO");
        var regExTime = new RegExp('^(?:0?[1-9]|1[0-2]):[0-5][0-9]\s?(?:[aApP](\.?)[mM])?$');
        var isTimeStartChanged = false; 
        var isTimeEndChanged = false;
        var isTimeDueChanged = false;
        var isTimeEmpty = false;
        var name_array_modules
        var data_to_update = {};
        var idRecord = $(event.currentTarget).attr("id").split('_')[1];
        var module = $(event.currentTarget).attr("id").split('-')[1].split("_")[0];
        if(module == 'Calls'){
            name_array_modules = this.calls; 
        }
        if(module == 'Meetings'){
            name_array_modules = this.meetings;
        }
        if(module == 'Tasks'){
            name_array_modules = this.tasks;
        }

        if(regExTime.test($("input[name=timeStart_"+module+"_"+idRecord+"]").val()) && regExTime.test($("input[name=timeEnd_"+module+"_"+idRecord+"]").val())){
            if($("input[name=name_"+module+"_"+idRecord+"]").val() != ""){
                for(var i=0;i<name_array_modules.length;i++){
                    if(name_array_modules[i]['id'] == idRecord){
                        var date_start = name_array_modules[i]['date_start'].split('T')[0];
        
                        var time_start_from_database = this.convertHourIn24SystemTo12System(this.decrementTime(name_array_modules[i]['date_start'].split('T')[1].substr(0,5)));
                        if(module == 'Tasks'){
                            var date_due = name_array_modules[i]['date_due'].split('T')[0];
                            var time_due_from_database = this.convertHourIn24SystemTo12System(this.decrementTime(name_array_modules[i]['date_due'].split('T')[1].substr(0,5)));
                        }else{
                            var date_end = name_array_modules[i]['date_end'].split('T')[0];
                            var time_end_from_database = this.convertHourIn24SystemTo12System(this.decrementTime(name_array_modules[i]['date_end'].split('T')[1].substr(0,5)));
                        }
        
                        if(name_array_modules[i]['name'] != $("input[name=name_"+module+"_"+idRecord+"]").val()){
                            data_to_update['name'] = $("input[name=name_"+module+"_"+idRecord+"]").val();
                        }
                        if(name_array_modules[i]['status'] != $("select[name=status_"+module+"_"+idRecord+"] option:selected").val()){
                            data_to_update['status'] = $("select[name=status_"+module+"_"+idRecord+"] option:selected").val();
                        }
    
                        if(time_start_from_database != $("input[name=timeStart_"+module+"_"+idRecord+"]").val()){
                            time_start_from_database = this.incrementTime($("input[name=timeStart_"+module+"_"+idRecord+"]").val());
                            data_to_update['date_start'] = date_start+"T"+time_start_from_database+":00";
                            isTimeStartChanged = true; 
                        }
                        if(date_start != $("input[name=dateStart_"+module+"_"+idRecord+"]").val()){
                            if(isTimeStartChanged){
                                var hour = time_start_from_database.split(':')[0];
                                var minutes = time_start_from_database.split(':')[1].substr(0,2);
                                if(hour.length == 1){
                                    hour = "0"+hour;
                                }
                                time_start_from_database = hour+":"+minutes;
                                data_to_update['date_start'] = $("input[name=dateStart_"+module+"_"+idRecord+"]").val()+"T"+time_start_from_database+":00";
                            }else{
                                time_start_from_database = this.incrementTime(time_start_from_database);
                                data_to_update['date_start'] = $("input[name=dateStart_"+module+"_"+idRecord+"]").val()+"T"+time_start_from_database+":00";
                            }
                        }
    
                        if(module=="Tasks"){
                            if(time_due_from_database != $("input[name=timeEnd_"+module+"_"+idRecord+"]").val()){
                                time_due_from_database = this.incrementTime($("input[name=timeEnd_"+module+"_"+idRecord+"]").val());
                                data_to_update['date_due'] = date_due+"T"+time_due_from_database+":00";
                                isTimeDueChanged = true;
                            }
                            if($("input[name=dateEnd_"+module+"_"+idRecord+"]").val() != date_due){
                                
                                if(isTimeDueChanged){
                                    var hour = time_due_from_database.split(':')[0];
                                    var minutes = time_due_from_database.split(':')[1].substr(0,2);
                                    if(hour.length == 1){
                                        hour = "0"+hour;
                                    }
                                    time_due_from_database = hour+":"+minutes;
                                    data_to_update['date_due'] = $("input[name=dateEnd_"+module+"_"+idRecord+"]").val()+"T"+time_due_from_database+":00";
                                }else{
                                    time_due_from_database = this.incrementTime(time_due_from_database);
                                    data_to_update['date_due'] = $("input[name=dateEnd_"+module+"_"+idRecord+"]").val()+"T"+time_due_from_database+":00";
                                }
                            }
                        }else{
                            if(time_end_from_database != $("input[name=timeEnd_"+module+"_"+idRecord+"]").val()){
                                time_end_from_database = this.incrementTime($("input[name=timeEnd_"+module+"_"+idRecord+"]").val());
                                data_to_update['date_end'] = date_end+"T"+time_end_from_database+":00";
                                isTimeEndChanged = true;
                            }
                            if($("input[name=dateEnd_"+module+"_"+idRecord+"]").val() != date_end){
                                if(isTimeEndChanged){
                                    var hour = time_end_from_database.split(':')[0];
                                    var minutes = time_end_from_database.split(':')[1].substr(0,2);
                                    if(hour.length == 1){
                                        hour = "0"+hour;
                                    }
                                    time_end_from_database = hour+":"+minutes;
                                    data_to_update['date_end'] = $("input[name=dateEnd_"+module+"_"+idRecord+"]").val()+"T"+time_end_from_database+":00";
                                }else{
                                    time_end_from_database = this.incrementTime(time_end_from_database);
                                    data_to_update['date_end'] = $("input[name=dateEnd_"+module+"_"+idRecord+"]").val()+"T"+time_end_from_database+":00";
                                }
                            }
                        }
                        break;
        
                    }
                }
    
                console.log(data_to_update);
        
                if(Object.keys(data_to_update).length>0){
                    var url = app.api.buildURL(module+'/'+idRecord);
                    self = this;
                    app.api.call('update', url, data_to_update,{
                        success:function(data){
                            console.log("CONEXIÓN CORRECTA");
                            console.log("DATA: "+JSON.stringify(data));
                            if(!data.hasOwnProperty('error')){
                                app.alert.show('record-updated', {
                                    level: 'success',
                                    messages: 'Se ha actualizado correctamente el registro: '+idRecord,
                                    autoClose: true
                                });
                                self.getRecords(module);
                            }else{
                                app.alert.show('error-record-updated', {
                                    level: 'error',
                                    messages: 'Ocurrió un error al actualizar el registro, favor de intentarlo mas tarde'
                                });
                            }
                        },
                        error: function(){    
                            console.log("NO FUNCIONÓ");
                        }
                    });  
                }else{
                    app.alert.show('error-empty-data-array', {
                        level: 'error',
                        messages: 'Favor de actualizar al menos un campo'
                    });
                }
            }else{
                app.alert.show('error-empty-name', {
                    level: 'error',
                    messages: 'No se permiten campos vacíos'
                });
            }
        }else{
            app.alert.show('error-wrong-hour', {
                level: 'error',
                messages: 'Favor de ingresar un formato de hora correcto'
            });
        }

    },
    incrementTime:function(time){
        var period = time.substr(-2)
        var hour = parseInt(time.split(":")[0]);
        var minutes = time.split(":")[1].substr(-4,2);
        if(period == "pm"){
            hour = hour + 12;
        }
        var time_to_increment = hour+6;
        if(time_to_increment>24){
            time_to_increment = time_to_increment-24;
        }
        if(time_to_increment.toString().length == 1){
            time_to_increment = "0"+time_to_increment;
        }
        time_to_increment = time_to_increment+":"+minutes;
        return time_to_increment;
    },
    decrementTime:function(time){
        var period = "";
        var hour = parseInt(time.split(":")[0]);
        var minutes = time.split(":")[1];
        if(hour>12){
            hour = hour - 12;
        }
        var time_to_decrement = hour-6;
        if(time_to_decrement<0){
            //Leyes de signos +- = -
            time_to_decrement = 24+time_to_decrement;
        }
        if(time_to_decrement>0 && time_to_decrement<13){
            period = "am";
        }else{
            period = "pm";
        }
        time_to_decrement = time_to_decrement+":"+minutes+period;
        return time_to_decrement;
    },
    convertHourIn24SystemTo12System:function(time){
        var hour = time.split(':')[0];
        var complement = time.split(':')[1];
        if(parseInt(hour)>12){
            hour = hour - 12;
        }
        return hour+":"+complement;
    },
    getRecords:function(module){
        var url = app.api.buildURL(module+'/filter',null,null,{
            "filter":[
                {
                    "$and":[
                        {
                            "parent_type":"Accounts"
                        },
                        {
                            "parent_id":this.model.get("id")
                        }
                    ]
                }
             ],
             "max_num":-1
        });
        app.api.call('GET', url, {},{
            success:function(data){
                console.log("CONEXIÓN CORRECTA");
                if(module=="Calls"){
                    self.calls = data.records;
                }
                if(module=="Meetings"){
                    self.meetings = data.records;
                }
                if(module =="Tasks"){
                    self.tasks = data.records;
                }
                self.render()
            },
            error: function(){    
                console.log("NO FUNCIONÓ");
            }
        });
    }
})