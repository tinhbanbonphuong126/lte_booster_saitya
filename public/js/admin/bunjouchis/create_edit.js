/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// identity function for calling harmony imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 9);
/******/ })
/************************************************************************/
/******/ ({

/***/ 1:
/***/ (function(module, exports) {

$(function () {
    // jQuery goes here...

    //Get base url base sent to Google Map API
    var API_KEY = "AIzaSyCwlkTA1L6lLnp76nr6LZ22ebIXMXNxxUY";

    reset();

    handleAddBlock();
    handleDeleteBlock();

    getLocationAPI();

    function reset() {

        $.each($(".prices_bangou"), function (index, element) {
            $(element).attr("name", "prices[" + index + "][bangou]");
        });

        $.each($(".prices_description"), function (index, element) {
            $(element).attr("name", "prices[" + index + "][description]");
        });
    }

    function handleAddBlock() {
        $(".bound_price").on("click", ".ion-md-add", function () {

            var source = $("#price-template").html();
            var template = Handlebars.compile(source);

            var $current = $(this).closest(".m_line");
            $(template({})).insertAfter($current);

            reset();
        });
    }

    function handleDeleteBlock() {
        $(".bound_price").on("click", ".ion-md-remove", function () {
            var $current = $(this).closest(".m_line");

            if ($(".m_line").length > 1) {
                $current.remove();

                reset();
            }
        });
    }

    //Function handle send and get Ajax Google Map API XML
    function getLocationAPI() {

        geoLocatorConfig();

        $("#address[name='address']").on("focusout", function (event) {
            var address = $(this).val();

            if (address = address.trim()) {

                console.log(address);

                geolocator.geocode(address, function (err, location) {
                    console.log(location);
                    console.log(location.address.country);

                    if ((location.address.country == "日本")) {
                        $("#address[name='address']").css("border", "1px solid green");
                        $("#latitude[name='latitude']").val(location.coords.latitude);
                        $("#longitude[name='longitude']").val(location.coords.longitude);
                    } else {
                        $("#address[name='address']").css("border", "1px solid red");
                        $("#latitude[name='latitude']").val("");
                        $("#longitude[name='longitude']").val("");

                    }
                });
            }
        });
    }

    function geoLocatorConfig() {
        geolocator.config({
            language: "ja",
            https: true,
            google: {
                version: 3,
                key: API_KEY || '' // YOUR-GOOGLE-API-KEY
            }
        });
    }
});

/***/ }),

/***/ 9:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(1);


/***/ })

/******/ });
//# sourceMappingURL=create_edit.js.map