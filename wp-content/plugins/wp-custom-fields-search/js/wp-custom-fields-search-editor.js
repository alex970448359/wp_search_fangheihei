var array2dict = function(arr,key_fun){
    if(!key_fun) key_fun = function(el){ return el.id };
    var output = {};
    arr.forEach(function(item){
        output[key_fun(item)] = item;
    });
    return output;
};
(function($){
	var handler_list = {
		"input":{},
		"comparison":{},
		"datatype":{},
	};
	$.widget("wpcfs.wp_custom_fields_search_editor",{
		"options":{
            "mode": "widget",
            "root_template": "form.html",
		},
		"save": function(){
			this.options.value_element.val(JSON.stringify(this.options.form_config));
		},
		"_create": function(){
			//Instantiate Angular App and pass config into the angular environment

            if(this.options.mode=="widget"){

                this.element.addClass("wp_custom_fields_search_editor");
                this.options.value_element = $("<input type='hidden' name='"+this.options.field_name+"' value=''/>").appendTo(this.element);

            }
			var angular_root = $("<div ng-controller='RootController' ng-include='partials+\"/"+this.options.root_template+"\"'></div>").appendTo(this.element);
            

			(function(widget){
                if(widget.options.mode=="widget"){
    				widget.save();
	    			$('.widget-control-actions input')
		    		.live('mouseenter',function(){ widget.save(); })
			    	.live('click',function(){ widget.save(); });
                }

				angular.module('WPCFS')
				.controller('RootController', ['$scope', function ($scope) {
					$scope.root = "/wp-content/plugins/wp-custom-fields-search/ng/"; //TODO: Feed this in from WP
					$scope.partials = $scope.root+"partials/";
					$scope.config = widget.options;
					$scope.handlers = widget.handlers;
					$scope.save = function(){
						widget.save();
					};
				}]);
			})(this);

			/* Render */
			angular.bootstrap(angular_root[0], ['WPCFS']);
		},
		"handlers": handler_list
	});
	$.wp_custom_fields_search_add_handler = function(type,name,handler){
		handler_list[type][name] = handler;
	};
})(jQuery);
