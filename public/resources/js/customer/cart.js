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

/***/ "./resources/js/customer/cart.js":
/*!***************************************!*\
  !*** ./resources/js/customer/cart.js ***!
  \***************************************/
/***/ (() => {

eval("$(\"#quantity-input\").on(\"input\", function () {\n  var quantity = $(this).val();\n  var url = $(this).data('url');\n  if (quantity) {\n    $.ajax({\n      type: 'PUT',\n      url: url,\n      data: {\n        quantity: quantity\n      },\n      success: function success(res) {\n        window.location.href = '/cart';\n      }\n    });\n  }\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyIkIiwib24iLCJxdWFudGl0eSIsInZhbCIsInVybCIsImRhdGEiLCJhamF4IiwidHlwZSIsInN1Y2Nlc3MiLCJyZXMiLCJ3aW5kb3ciLCJsb2NhdGlvbiIsImhyZWYiXSwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2pzL2N1c3RvbWVyL2NhcnQuanM/NDM1YyJdLCJzb3VyY2VzQ29udGVudCI6WyIkKFwiI3F1YW50aXR5LWlucHV0XCIpLm9uKFwiaW5wdXRcIiwgZnVuY3Rpb24oKSB7XG4gICAgY29uc3QgcXVhbnRpdHkgPSAkKHRoaXMpLnZhbCgpO1xuICAgIGNvbnN0IHVybCA9ICQodGhpcykuZGF0YSgndXJsJyk7XG5cbiAgICBpZiAocXVhbnRpdHkpIHtcbiAgICAgICAgJC5hamF4KHtcbiAgICAgICAgICAgIHR5cGU6ICdQVVQnLFxuICAgICAgICAgICAgdXJsLFxuICAgICAgICAgICAgZGF0YToge1xuICAgICAgICAgICAgICAgIHF1YW50aXR5LFxuICAgICAgICAgICAgfSxcbiAgICAgICAgICAgIHN1Y2Nlc3M6IGZ1bmN0aW9uKHJlcykge1xuICAgICAgICAgICAgICAgIHdpbmRvdy5sb2NhdGlvbi5ocmVmID0gJy9jYXJ0JztcbiAgICAgICAgICAgIH0sXG4gICAgICAgIH0pO1xuICAgIH1cbn0pO1xuIl0sIm1hcHBpbmdzIjoiQUFBQUEsQ0FBQyxDQUFDLGlCQUFpQixDQUFDLENBQUNDLEVBQUUsQ0FBQyxPQUFPLEVBQUUsWUFBVztFQUN4QyxJQUFNQyxRQUFRLEdBQUdGLENBQUMsQ0FBQyxJQUFJLENBQUMsQ0FBQ0csR0FBRyxFQUFFO0VBQzlCLElBQU1DLEdBQUcsR0FBR0osQ0FBQyxDQUFDLElBQUksQ0FBQyxDQUFDSyxJQUFJLENBQUMsS0FBSyxDQUFDO0VBRS9CLElBQUlILFFBQVEsRUFBRTtJQUNWRixDQUFDLENBQUNNLElBQUksQ0FBQztNQUNIQyxJQUFJLEVBQUUsS0FBSztNQUNYSCxHQUFHLEVBQUhBLEdBQUc7TUFDSEMsSUFBSSxFQUFFO1FBQ0ZILFFBQVEsRUFBUkE7TUFDSixDQUFDO01BQ0RNLE9BQU8sRUFBRSxTQUFBQSxRQUFTQyxHQUFHLEVBQUU7UUFDbkJDLE1BQU0sQ0FBQ0MsUUFBUSxDQUFDQyxJQUFJLEdBQUcsT0FBTztNQUNsQztJQUNKLENBQUMsQ0FBQztFQUNOO0FBQ0osQ0FBQyxDQUFDIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL2N1c3RvbWVyL2NhcnQuanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/customer/cart.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/customer/cart.js"]();
/******/ 	
/******/ })()
;