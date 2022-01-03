/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/util.js":
/*!******************************!*\
  !*** ./resources/js/util.js ***!
  \******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "srand": () => (/* binding */ srand),
/* harmony export */   "rand": () => (/* binding */ rand),
/* harmony export */   "numbers": () => (/* binding */ numbers),
/* harmony export */   "points": () => (/* binding */ points),
/* harmony export */   "bubbles": () => (/* binding */ bubbles),
/* harmony export */   "labels": () => (/* binding */ labels),
/* harmony export */   "months": () => (/* binding */ months),
/* harmony export */   "color": () => (/* binding */ color),
/* harmony export */   "transparentize": () => (/* binding */ transparentize),
/* harmony export */   "CHART_COLORS": () => (/* binding */ CHART_COLORS),
/* harmony export */   "namedColor": () => (/* binding */ namedColor),
/* harmony export */   "newDate": () => (/* binding */ newDate),
/* harmony export */   "newDateString": () => (/* binding */ newDateString),
/* harmony export */   "parseISODate": () => (/* binding */ parseISODate)
/* harmony export */ });
Object(function webpackMissingModule() { var e = new Error("Cannot find module '@kurkle/color'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());
Object(function webpackMissingModule() { var e = new Error("Cannot find module 'luxon'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());
Object(function webpackMissingModule() { var e = new Error("Cannot find module 'chartjs-adapter-luxon'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());
Object(function webpackMissingModule() { var e = new Error("Cannot find module '../../dist/helpers.esm'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());



 // Adapted from http://indiegamr.com/generate-repeatable-random-numbers-in-js/

var _seed = Date.now();

function srand(seed) {
  _seed = seed;
}
function rand(min, max) {
  min = Object(function webpackMissingModule() { var e = new Error("Cannot find module '../../dist/helpers.esm'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(min, 0);
  max = Object(function webpackMissingModule() { var e = new Error("Cannot find module '../../dist/helpers.esm'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(max, 0);
  _seed = (_seed * 9301 + 49297) % 233280;
  return min + _seed / 233280 * (max - min);
}
function numbers(config) {
  var cfg = config || {};
  var min = Object(function webpackMissingModule() { var e = new Error("Cannot find module '../../dist/helpers.esm'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(cfg.min, 0);
  var max = Object(function webpackMissingModule() { var e = new Error("Cannot find module '../../dist/helpers.esm'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(cfg.max, 100);
  var from = Object(function webpackMissingModule() { var e = new Error("Cannot find module '../../dist/helpers.esm'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(cfg.from, []);
  var count = Object(function webpackMissingModule() { var e = new Error("Cannot find module '../../dist/helpers.esm'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(cfg.count, 8);
  var decimals = Object(function webpackMissingModule() { var e = new Error("Cannot find module '../../dist/helpers.esm'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(cfg.decimals, 8);
  var continuity = Object(function webpackMissingModule() { var e = new Error("Cannot find module '../../dist/helpers.esm'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(cfg.continuity, 1);
  var dfactor = Math.pow(10, decimals) || 0;
  var data = [];
  var i, value;

  for (i = 0; i < count; ++i) {
    value = (from[i] || 0) + this.rand(min, max);

    if (this.rand() <= continuity) {
      data.push(Math.round(dfactor * value) / dfactor);
    } else {
      data.push(null);
    }
  }

  return data;
}
function points(config) {
  var xs = this.numbers(config);
  var ys = this.numbers(config);
  return xs.map(function (x, i) {
    return {
      x: x,
      y: ys[i]
    };
  });
}
function bubbles(config) {
  var _this = this;

  return this.points(config).map(function (pt) {
    pt.r = _this.rand(config.rmin, config.rmax);
    return pt;
  });
}
function labels(config) {
  var cfg = config || {};
  var min = cfg.min || 0;
  var max = cfg.max || 100;
  var count = cfg.count || 8;
  var step = (max - min) / count;
  var decimals = cfg.decimals || 8;
  var dfactor = Math.pow(10, decimals) || 0;
  var prefix = cfg.prefix || '';
  var values = [];
  var i;

  for (i = min; i < max; i += step) {
    values.push(prefix + Math.round(dfactor * i) / dfactor);
  }

  return values;
}
var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
function months(config) {
  var cfg = config || {};
  var count = cfg.count || 12;
  var section = cfg.section;
  var values = [];
  var i, value;

  for (i = 0; i < count; ++i) {
    value = MONTHS[Math.ceil(i) % 12];
    values.push(value.substring(0, section));
  }

  return values;
}
var COLORS = ['#4dc9f6', '#f67019', '#f53794', '#537bc4', '#acc236', '#166a8f', '#00a950', '#58595b', '#8549ba'];
function color(index) {
  return COLORS[index % COLORS.length];
}
function transparentize(value, opacity) {
  var alpha = opacity === undefined ? 0.5 : 1 - opacity;
  return Object(function webpackMissingModule() { var e = new Error("Cannot find module '@kurkle/color'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(value).alpha(alpha).rgbString();
}
var CHART_COLORS = {
  red: 'rgb(255, 99, 132)',
  orange: 'rgb(255, 159, 64)',
  yellow: 'rgb(255, 205, 86)',
  green: 'rgb(75, 192, 192)',
  blue: 'rgb(54, 162, 235)',
  purple: 'rgb(153, 102, 255)',
  grey: 'rgb(201, 203, 207)'
};
var NAMED_COLORS = [CHART_COLORS.red, CHART_COLORS.orange, CHART_COLORS.yellow, CHART_COLORS.green, CHART_COLORS.blue, CHART_COLORS.purple, CHART_COLORS.grey];
function namedColor(index) {
  return NAMED_COLORS[index % NAMED_COLORS.length];
}
function newDate(days) {
  return Object(function webpackMissingModule() { var e = new Error("Cannot find module 'luxon'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())().plus({
    days: days
  }).toJSDate();
}
function newDateString(days) {
  return Object(function webpackMissingModule() { var e = new Error("Cannot find module 'luxon'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())().plus({
    days: days
  }).toISO();
}
function parseISODate(str) {
  return Object(function webpackMissingModule() { var e = new Error("Cannot find module 'luxon'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(str);
}

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!******************************!*\
  !*** ./resources/js/char.js ***!
  \******************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _util__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./util */ "./resources/js/util.js");

console.dir(_util__WEBPACK_IMPORTED_MODULE_0__["default"]);
var ctx = document.getElementById('myChart').getContext('2d');
var DATA_COUNT = 7;
var NUMBER_CFG = {
  count: DATA_COUNT,
  min: -100,
  max: 100
};
var labels = _util__WEBPACK_IMPORTED_MODULE_0__["default"].months({
  count: 7
});
var data = {
  labels: labels,
  datasets: [{
    label: 'Dataset 1',
    data: _util__WEBPACK_IMPORTED_MODULE_0__["default"].numbers(NUMBER_CFG),
    borderColor: _util__WEBPACK_IMPORTED_MODULE_0__["default"].CHART_COLORS.red,
    backgroundColor: _util__WEBPACK_IMPORTED_MODULE_0__["default"].transparentize(_util__WEBPACK_IMPORTED_MODULE_0__["default"].CHART_COLORS.red, 0.5),
    yAxisID: 'y'
  }, {
    label: 'Dataset 2',
    data: _util__WEBPACK_IMPORTED_MODULE_0__["default"].numbers(NUMBER_CFG),
    borderColor: _util__WEBPACK_IMPORTED_MODULE_0__["default"].CHART_COLORS.blue,
    backgroundColor: _util__WEBPACK_IMPORTED_MODULE_0__["default"].transparentize(_util__WEBPACK_IMPORTED_MODULE_0__["default"].CHART_COLORS.blue, 0.5),
    yAxisID: 'y1'
  }]
};
var config = {
  type: 'line',
  data: data,
  options: {
    responsive: true,
    interaction: {
      mode: 'index',
      intersect: false
    },
    stacked: false,
    plugins: {
      title: {
        display: true,
        text: 'Chart.js Line Chart - Multi Axis'
      }
    },
    scales: {
      y: {
        type: 'linear',
        display: true,
        position: 'left'
      },
      y1: {
        type: 'linear',
        display: true,
        position: 'right',
        // grid line settings
        grid: {
          drawOnChartArea: false // only want the grid lines for one axis to show up

        }
      }
    }
  }
};
var myChart = new Chart(ctx, config);
var actions = [{
  name: 'Randomize',
  handler: function handler(chart) {
    chart.data.datasets.forEach(function (dataset) {
      dataset.data = _util__WEBPACK_IMPORTED_MODULE_0__["default"].numbers({
        count: chart.data.labels.length,
        min: -100,
        max: 100
      });
    });
    chart.update();
  }
}];
})();

/******/ })()
;