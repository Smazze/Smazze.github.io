"use strict";requirejs.config({paths:{backbone:"lib/backbone-0.9.2",bootstrap:"lib/bootstrap",jquery:"lib/jquery-1.11.0",underscore:"lib/underscore-1.3.3",ladda:"components/ladda/js/ladda",formValidator:"forms/formValidator",inputValidator:"forms/inputValidator",validations:"forms/validations",validator:"forms/validator",jqueryUI:"components/jQueryUI/ui/minified/jquery-ui.min",dust:"components/dustjs-linkedin/dist/dust-core.min",nativeDropdown:"forms/nativeDropdown"},useStrict:!0,shim:{underscore:{exports:"_"},backbone:{deps:["jquery","underscore"],exports:"Backbone"},dust:{exports:"dust"}}});