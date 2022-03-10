/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/dashboard.js":
/*!***********************************!*\
  !*** ./resources/js/dashboard.js ***!
  \***********************************/
/***/ (() => {

eval("/* globals Chart:false, feather:false */\n(function () {\n  'use strict';\n\n  feather.replace({\n    'aria-hidden': 'true'\n  }); // Graphs\n\n  var ctx = document.getElementById('myChart'); // eslint-disable-next-line no-unused-vars\n\n  var myChart = new Chart(ctx, {\n    type: 'line',\n    data: {\n      labels: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],\n      datasets: [{\n        data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],\n        lineTension: 0,\n        backgroundColor: 'transparent',\n        borderColor: '#007bff',\n        borderWidth: 4,\n        pointBackgroundColor: '#007bff'\n      }]\n    },\n    options: {\n      scales: {\n        yAxes: [{\n          ticks: {\n            beginAtZero: false\n          }\n        }]\n      },\n      legend: {\n        display: false\n      }\n    }\n  });\n})();//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvZGFzaGJvYXJkLmpzPzg3MmQiXSwibmFtZXMiOlsiZmVhdGhlciIsInJlcGxhY2UiLCJjdHgiLCJkb2N1bWVudCIsImdldEVsZW1lbnRCeUlkIiwibXlDaGFydCIsIkNoYXJ0IiwidHlwZSIsImRhdGEiLCJsYWJlbHMiLCJkYXRhc2V0cyIsImxpbmVUZW5zaW9uIiwiYmFja2dyb3VuZENvbG9yIiwiYm9yZGVyQ29sb3IiLCJib3JkZXJXaWR0aCIsInBvaW50QmFja2dyb3VuZENvbG9yIiwib3B0aW9ucyIsInNjYWxlcyIsInlBeGVzIiwidGlja3MiLCJiZWdpbkF0WmVybyIsImxlZ2VuZCIsImRpc3BsYXkiXSwibWFwcGluZ3MiOiJBQUFBO0FBRUEsQ0FBQyxZQUFZO0FBQ1g7O0FBRUFBLEVBQUFBLE9BQU8sQ0FBQ0MsT0FBUixDQUFnQjtBQUFFLG1CQUFlO0FBQWpCLEdBQWhCLEVBSFcsQ0FLWDs7QUFDQSxNQUFJQyxHQUFHLEdBQUdDLFFBQVEsQ0FBQ0MsY0FBVCxDQUF3QixTQUF4QixDQUFWLENBTlcsQ0FPWDs7QUFDQSxNQUFJQyxPQUFPLEdBQUcsSUFBSUMsS0FBSixDQUFVSixHQUFWLEVBQWU7QUFDM0JLLElBQUFBLElBQUksRUFBRSxNQURxQjtBQUUzQkMsSUFBQUEsSUFBSSxFQUFFO0FBQ0pDLE1BQUFBLE1BQU0sRUFBRSxDQUNOLFFBRE0sRUFFTixRQUZNLEVBR04sU0FITSxFQUlOLFdBSk0sRUFLTixVQUxNLEVBTU4sUUFOTSxFQU9OLFVBUE0sQ0FESjtBQVVKQyxNQUFBQSxRQUFRLEVBQUUsQ0FBQztBQUNURixRQUFBQSxJQUFJLEVBQUUsQ0FDSixLQURJLEVBRUosS0FGSSxFQUdKLEtBSEksRUFJSixLQUpJLEVBS0osS0FMSSxFQU1KLEtBTkksRUFPSixLQVBJLENBREc7QUFVVEcsUUFBQUEsV0FBVyxFQUFFLENBVko7QUFXVEMsUUFBQUEsZUFBZSxFQUFFLGFBWFI7QUFZVEMsUUFBQUEsV0FBVyxFQUFFLFNBWko7QUFhVEMsUUFBQUEsV0FBVyxFQUFFLENBYko7QUFjVEMsUUFBQUEsb0JBQW9CLEVBQUU7QUFkYixPQUFEO0FBVk4sS0FGcUI7QUE2QjNCQyxJQUFBQSxPQUFPLEVBQUU7QUFDUEMsTUFBQUEsTUFBTSxFQUFFO0FBQ05DLFFBQUFBLEtBQUssRUFBRSxDQUFDO0FBQ05DLFVBQUFBLEtBQUssRUFBRTtBQUNMQyxZQUFBQSxXQUFXLEVBQUU7QUFEUjtBQURELFNBQUQ7QUFERCxPQUREO0FBUVBDLE1BQUFBLE1BQU0sRUFBRTtBQUNOQyxRQUFBQSxPQUFPLEVBQUU7QUFESDtBQVJEO0FBN0JrQixHQUFmLENBQWQ7QUEwQ0QsQ0FsREQiLCJzb3VyY2VzQ29udGVudCI6WyIvKiBnbG9iYWxzIENoYXJ0OmZhbHNlLCBmZWF0aGVyOmZhbHNlICovXG5cbihmdW5jdGlvbiAoKSB7XG4gICd1c2Ugc3RyaWN0J1xuXG4gIGZlYXRoZXIucmVwbGFjZSh7ICdhcmlhLWhpZGRlbic6ICd0cnVlJyB9KVxuXG4gIC8vIEdyYXBoc1xuICB2YXIgY3R4ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ215Q2hhcnQnKVxuICAvLyBlc2xpbnQtZGlzYWJsZS1uZXh0LWxpbmUgbm8tdW51c2VkLXZhcnNcbiAgdmFyIG15Q2hhcnQgPSBuZXcgQ2hhcnQoY3R4LCB7XG4gICAgdHlwZTogJ2xpbmUnLFxuICAgIGRhdGE6IHtcbiAgICAgIGxhYmVsczogW1xuICAgICAgICAnU3VuZGF5JyxcbiAgICAgICAgJ01vbmRheScsXG4gICAgICAgICdUdWVzZGF5JyxcbiAgICAgICAgJ1dlZG5lc2RheScsXG4gICAgICAgICdUaHVyc2RheScsXG4gICAgICAgICdGcmlkYXknLFxuICAgICAgICAnU2F0dXJkYXknXG4gICAgICBdLFxuICAgICAgZGF0YXNldHM6IFt7XG4gICAgICAgIGRhdGE6IFtcbiAgICAgICAgICAxNTMzOSxcbiAgICAgICAgICAyMTM0NSxcbiAgICAgICAgICAxODQ4MyxcbiAgICAgICAgICAyNDAwMyxcbiAgICAgICAgICAyMzQ4OSxcbiAgICAgICAgICAyNDA5MixcbiAgICAgICAgICAxMjAzNFxuICAgICAgICBdLFxuICAgICAgICBsaW5lVGVuc2lvbjogMCxcbiAgICAgICAgYmFja2dyb3VuZENvbG9yOiAndHJhbnNwYXJlbnQnLFxuICAgICAgICBib3JkZXJDb2xvcjogJyMwMDdiZmYnLFxuICAgICAgICBib3JkZXJXaWR0aDogNCxcbiAgICAgICAgcG9pbnRCYWNrZ3JvdW5kQ29sb3I6ICcjMDA3YmZmJ1xuICAgICAgfV1cbiAgICB9LFxuICAgIG9wdGlvbnM6IHtcbiAgICAgIHNjYWxlczoge1xuICAgICAgICB5QXhlczogW3tcbiAgICAgICAgICB0aWNrczoge1xuICAgICAgICAgICAgYmVnaW5BdFplcm86IGZhbHNlXG4gICAgICAgICAgfVxuICAgICAgICB9XVxuICAgICAgfSxcbiAgICAgIGxlZ2VuZDoge1xuICAgICAgICBkaXNwbGF5OiBmYWxzZVxuICAgICAgfVxuICAgIH1cbiAgfSlcbn0pKClcbiJdLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvZGFzaGJvYXJkLmpzLmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/dashboard.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/dashboard.js"]();
/******/ 	
/******/ })()
;