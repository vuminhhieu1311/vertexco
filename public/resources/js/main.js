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

eval("// Logout button clicked\n$('#logout-btn').click(function (e) {\n  e.preventDefault();\n  $('#logout-form').submit();\n});\n\n// Show success toast message\nvar message = window.localStorage.getItem('success');\nif (message) {\n  window.localStorage.removeItem('success');\n  toastr.success(message);\n}\nif ($('#success-message').val()) {\n  toastr.success($('#success-message').val());\n}\n\n// Search\nvar urlParams = new URLSearchParams(window.location.search);\n$('#product-search-input').keyup(function (e) {\n  var keyword = $(this).val();\n  urlParams[\"delete\"]('name');\n  urlParams.append('name', keyword);\n  if (e.which === 13) {\n    window.location.href = \"?\".concat(urlParams.toString());\n  }\n});\n$('#product-search-btn').on('click', function (e) {\n  e.preventDefault();\n  window.location.href = \"?\".concat(urlParams.toString());\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyIkIiwiY2xpY2siLCJlIiwicHJldmVudERlZmF1bHQiLCJzdWJtaXQiLCJtZXNzYWdlIiwid2luZG93IiwibG9jYWxTdG9yYWdlIiwiZ2V0SXRlbSIsInJlbW92ZUl0ZW0iLCJ0b2FzdHIiLCJzdWNjZXNzIiwidmFsIiwidXJsUGFyYW1zIiwiVVJMU2VhcmNoUGFyYW1zIiwibG9jYXRpb24iLCJzZWFyY2giLCJrZXl1cCIsImtleXdvcmQiLCJhcHBlbmQiLCJ3aGljaCIsImhyZWYiLCJjb25jYXQiLCJ0b1N0cmluZyIsIm9uIl0sInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9qcy9tYWluLmpzP2ZkYWMiXSwic291cmNlc0NvbnRlbnQiOlsiLy8gTG9nb3V0IGJ1dHRvbiBjbGlja2VkXG4kKCcjbG9nb3V0LWJ0bicpLmNsaWNrKChlKSA9PiB7XG4gICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICQoJyNsb2dvdXQtZm9ybScpLnN1Ym1pdCgpO1xufSk7XG5cbi8vIFNob3cgc3VjY2VzcyB0b2FzdCBtZXNzYWdlXG5jb25zdCBtZXNzYWdlID0gd2luZG93LmxvY2FsU3RvcmFnZS5nZXRJdGVtKCdzdWNjZXNzJyk7XG5pZiAobWVzc2FnZSkge1xuICAgIHdpbmRvdy5sb2NhbFN0b3JhZ2UucmVtb3ZlSXRlbSgnc3VjY2VzcycpO1xuICAgIHRvYXN0ci5zdWNjZXNzKG1lc3NhZ2UpO1xufVxuXG5pZiAoJCgnI3N1Y2Nlc3MtbWVzc2FnZScpLnZhbCgpKSB7XG4gICAgdG9hc3RyLnN1Y2Nlc3MoJCgnI3N1Y2Nlc3MtbWVzc2FnZScpLnZhbCgpKTtcbn1cblxuLy8gU2VhcmNoXG52YXIgdXJsUGFyYW1zID0gbmV3IFVSTFNlYXJjaFBhcmFtcyh3aW5kb3cubG9jYXRpb24uc2VhcmNoKTtcblxuJCgnI3Byb2R1Y3Qtc2VhcmNoLWlucHV0Jykua2V5dXAgKGZ1bmN0aW9uIChlKSB7XG4gICAgY29uc3Qga2V5d29yZCA9ICQodGhpcykudmFsKCk7XG4gICAgdXJsUGFyYW1zLmRlbGV0ZSgnbmFtZScpO1xuICAgIHVybFBhcmFtcy5hcHBlbmQoJ25hbWUnLCBrZXl3b3JkKTtcblxuICAgIGlmIChlLndoaWNoID09PSAxMykge1xuICAgICAgICB3aW5kb3cubG9jYXRpb24uaHJlZiA9IGA/JHt1cmxQYXJhbXMudG9TdHJpbmcoKX1gO1xuICAgIH1cbn0pO1xuXG4kKCcjcHJvZHVjdC1zZWFyY2gtYnRuJykub24oJ2NsaWNrJywgKGUpID0+IHtcbiAgICBlLnByZXZlbnREZWZhdWx0KCk7XG4gICAgd2luZG93LmxvY2F0aW9uLmhyZWYgPSBgPyR7dXJsUGFyYW1zLnRvU3RyaW5nKCl9YDtcbn0pO1xuIl0sIm1hcHBpbmdzIjoiQUFBQTtBQUNBQSxDQUFDLENBQUMsYUFBYSxDQUFDLENBQUNDLEtBQUssQ0FBQyxVQUFDQyxDQUFDLEVBQUs7RUFDMUJBLENBQUMsQ0FBQ0MsY0FBYyxFQUFFO0VBQ2xCSCxDQUFDLENBQUMsY0FBYyxDQUFDLENBQUNJLE1BQU0sRUFBRTtBQUM5QixDQUFDLENBQUM7O0FBRUY7QUFDQSxJQUFNQyxPQUFPLEdBQUdDLE1BQU0sQ0FBQ0MsWUFBWSxDQUFDQyxPQUFPLENBQUMsU0FBUyxDQUFDO0FBQ3RELElBQUlILE9BQU8sRUFBRTtFQUNUQyxNQUFNLENBQUNDLFlBQVksQ0FBQ0UsVUFBVSxDQUFDLFNBQVMsQ0FBQztFQUN6Q0MsTUFBTSxDQUFDQyxPQUFPLENBQUNOLE9BQU8sQ0FBQztBQUMzQjtBQUVBLElBQUlMLENBQUMsQ0FBQyxrQkFBa0IsQ0FBQyxDQUFDWSxHQUFHLEVBQUUsRUFBRTtFQUM3QkYsTUFBTSxDQUFDQyxPQUFPLENBQUNYLENBQUMsQ0FBQyxrQkFBa0IsQ0FBQyxDQUFDWSxHQUFHLEVBQUUsQ0FBQztBQUMvQzs7QUFFQTtBQUNBLElBQUlDLFNBQVMsR0FBRyxJQUFJQyxlQUFlLENBQUNSLE1BQU0sQ0FBQ1MsUUFBUSxDQUFDQyxNQUFNLENBQUM7QUFFM0RoQixDQUFDLENBQUMsdUJBQXVCLENBQUMsQ0FBQ2lCLEtBQUssQ0FBRSxVQUFVZixDQUFDLEVBQUU7RUFDM0MsSUFBTWdCLE9BQU8sR0FBR2xCLENBQUMsQ0FBQyxJQUFJLENBQUMsQ0FBQ1ksR0FBRyxFQUFFO0VBQzdCQyxTQUFTLFVBQU8sQ0FBQyxNQUFNLENBQUM7RUFDeEJBLFNBQVMsQ0FBQ00sTUFBTSxDQUFDLE1BQU0sRUFBRUQsT0FBTyxDQUFDO0VBRWpDLElBQUloQixDQUFDLENBQUNrQixLQUFLLEtBQUssRUFBRSxFQUFFO0lBQ2hCZCxNQUFNLENBQUNTLFFBQVEsQ0FBQ00sSUFBSSxPQUFBQyxNQUFBLENBQU9ULFNBQVMsQ0FBQ1UsUUFBUSxFQUFFLENBQUU7RUFDckQ7QUFDSixDQUFDLENBQUM7QUFFRnZCLENBQUMsQ0FBQyxxQkFBcUIsQ0FBQyxDQUFDd0IsRUFBRSxDQUFDLE9BQU8sRUFBRSxVQUFDdEIsQ0FBQyxFQUFLO0VBQ3hDQSxDQUFDLENBQUNDLGNBQWMsRUFBRTtFQUNsQkcsTUFBTSxDQUFDUyxRQUFRLENBQUNNLElBQUksT0FBQUMsTUFBQSxDQUFPVCxTQUFTLENBQUNVLFFBQVEsRUFBRSxDQUFFO0FBQ3JELENBQUMsQ0FBQyIsImZpbGUiOiIuL3Jlc291cmNlcy9qcy9tYWluLmpzLmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/main.js\n");

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