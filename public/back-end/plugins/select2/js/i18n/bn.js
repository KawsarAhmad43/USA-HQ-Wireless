/*! Select2 4.0.10 | https://github.com/select2/select2/blob/master/LICENSE.md */

!function(){if(jQuery&&jQuery.fn&&jQuery.fn.select2&&jQuery.fn.select2.amd)var n=jQuery.fn.select2.amd;n.define("select2/i18n/bn",[],function(){return{errorLoading:function(){return"Results could not loaded successfully"},inputTooLong:function(n){var e=n.input.length-n.maximum,u="Please Remove "+e+" Words";return 1!=e&&(u="Please Remove "+e+" Words"),u},inputTooShort:function(n){return n.minimum-n.input.length+" words or more"},loadingMore:function(){return"Loading More Results ..."},maximumSelected:function(n){var e=n.maximum+" pieces can be purchased";return 1!=n.maximum&&(e=n.maximum+" pieces can be purchased maximum "),e},noResults:function(){return"No Results Found!"},searching:function(){return"Searching ..."}}}),n.define,n.require}();