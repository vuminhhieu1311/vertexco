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

/***/ "./resources/js/main.js":
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
/***/ (() => {

eval("// Logout button clicked\n$('#logout-btn').click(function (e) {\n  e.preventDefault();\n  $('#logout-form').submit();\n});\n\n// Show success toast message\nvar message = window.localStorage.getItem('success');\nif (message) {\n  window.localStorage.removeItem('success');\n  toastr.success(message);\n}\nif ($('#success-message').val()) {\n  toastr.success($('#success-message').val());\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyIkIiwiY2xpY2siLCJlIiwicHJldmVudERlZmF1bHQiLCJzdWJtaXQiLCJtZXNzYWdlIiwid2luZG93IiwibG9jYWxTdG9yYWdlIiwiZ2V0SXRlbSIsInJlbW92ZUl0ZW0iLCJ0b2FzdHIiLCJzdWNjZXNzIiwidmFsIl0sInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9qcy9tYWluLmpzP2ZkYWMiXSwic291cmNlc0NvbnRlbnQiOlsiLy8gTG9nb3V0IGJ1dHRvbiBjbGlja2VkXG4kKCcjbG9nb3V0LWJ0bicpLmNsaWNrKChlKSA9PiB7XG4gICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICQoJyNsb2dvdXQtZm9ybScpLnN1Ym1pdCgpO1xufSk7XG5cbi8vIFNob3cgc3VjY2VzcyB0b2FzdCBtZXNzYWdlXG5jb25zdCBtZXNzYWdlID0gd2luZG93LmxvY2FsU3RvcmFnZS5nZXRJdGVtKCdzdWNjZXNzJyk7XG5pZiAobWVzc2FnZSkge1xuICAgIHdpbmRvdy5sb2NhbFN0b3JhZ2UucmVtb3ZlSXRlbSgnc3VjY2VzcycpO1xuICAgIHRvYXN0ci5zdWNjZXNzKG1lc3NhZ2UpO1xufVxuXG5pZiAoJCgnI3N1Y2Nlc3MtbWVzc2FnZScpLnZhbCgpKSB7XG4gICAgdG9hc3RyLnN1Y2Nlc3MoJCgnI3N1Y2Nlc3MtbWVzc2FnZScpLnZhbCgpKTtcbn1cbiJdLCJtYXBwaW5ncyI6IkFBQUE7QUFDQUEsQ0FBQyxDQUFDLGFBQWEsQ0FBQyxDQUFDQyxLQUFLLENBQUMsVUFBQ0MsQ0FBQyxFQUFLO0VBQzFCQSxDQUFDLENBQUNDLGNBQWMsRUFBRTtFQUNsQkgsQ0FBQyxDQUFDLGNBQWMsQ0FBQyxDQUFDSSxNQUFNLEVBQUU7QUFDOUIsQ0FBQyxDQUFDOztBQUVGO0FBQ0EsSUFBTUMsT0FBTyxHQUFHQyxNQUFNLENBQUNDLFlBQVksQ0FBQ0MsT0FBTyxDQUFDLFNBQVMsQ0FBQztBQUN0RCxJQUFJSCxPQUFPLEVBQUU7RUFDVEMsTUFBTSxDQUFDQyxZQUFZLENBQUNFLFVBQVUsQ0FBQyxTQUFTLENBQUM7RUFDekNDLE1BQU0sQ0FBQ0MsT0FBTyxDQUFDTixPQUFPLENBQUM7QUFDM0I7QUFFQSxJQUFJTCxDQUFDLENBQUMsa0JBQWtCLENBQUMsQ0FBQ1ksR0FBRyxFQUFFLEVBQUU7RUFDN0JGLE1BQU0sQ0FBQ0MsT0FBTyxDQUFDWCxDQUFDLENBQUMsa0JBQWtCLENBQUMsQ0FBQ1ksR0FBRyxFQUFFLENBQUM7QUFDL0MiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvbWFpbi5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/main.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/main.js"]();
/******/ 	
/******/ })()
;