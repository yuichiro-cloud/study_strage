/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
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
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/time_variable.js":
/*!***************************************!*\
  !*** ./resources/js/time_variable.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(function () {
  function study_start_cal(h, m) {
    $('#start-input').val(h + m);
    console.log(h);
    console.log(m);
  }

  function study_end_cal(h, m) {
    $('#end-input').val(h + m);
    console.log(h);
    console.log(m);
  }

  $('#study_start_h').on('change', function () {
    var styStrH = $("#study_start_h option:selected").text();
    var styStrM = $('#start-input').val().slice(2, 4);
    study_start_cal(styStrH, styStrM);
  });
  $('#study_start_m').on('change', function () {
    var styStrH = $('#start-input').val().slice(0, 2);
    var styStrM = $("#study_start_m option:selected").text();
    study_start_cal(styStrH, styStrM);
  });
  $('#study_end_h').on('change', function () {
    var styEndH = $("#study_end_h option:selected").text();
    var styEndM = $('#end-input').val().slice(2, 4);
    study_end_cal(styEndH, styEndM);
  });
  $('#study_end_m').on('change', function () {
    var styEndH = $('#end-input').val().slice(0, 2);
    var styEndM = $("#study_end_m option:selected").text();
    study_end_cal(styEndH, styEndM);
  });
});
$(function () {
  $('#add-btn').on('click', function () {
    var lan_input = $(".add-lan").val();
    $(".add-lan").remove();
    $("#lan-input-form").append("<input type=\"text\" class=\"form-control mb-2 add-lan\" id=\"inlineFormInput\" placeholder=\"\u65B0\u898F\u8A00\u8A9E\u3092\u5165\u529B\">");

    if (lan_input == "") {
      alert('value is null');
    } else {
      $(".language-select").append("<option>".concat(lan_input, "</option>"));
      alert("".concat(lan_input, "\u3092\u8A00\u8A9E\u306B\u8FFD\u52A0\u3057\u307E\u3057\u305F"));
    }
  });
});

/***/ }),

/***/ 2:
/*!*********************************************!*\
  !*** multi ./resources/js/time_variable.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/macdonalds/laravel/study_strage/resources/js/time_variable.js */"./resources/js/time_variable.js");


/***/ })

/******/ });