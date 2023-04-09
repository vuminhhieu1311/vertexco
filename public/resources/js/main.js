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

eval("// Logout button clicked\n$('#logout-btn').click(function (e) {\n  e.preventDefault();\n  $('#logout-form').submit();\n});\n\n// Show success toast message\nvar message = window.localStorage.getItem('success');\nif (message) {\n  window.localStorage.removeItem('success');\n  toastr.success(message);\n}\nif ($('#success-message').val()) {\n  toastr.success($('#success-message').val());\n}\n\n// Search\nvar urlParams = new URLSearchParams(window.location.search);\n$('.product-search-input').keyup(function (e) {\n  var keyword = $(this).val();\n  urlParams[\"delete\"]('name');\n  urlParams.append('name', keyword);\n  if (e.which === 13) {\n    window.location.href = \"?\".concat(urlParams.toString());\n  }\n});\n$('.product-search-btn').on('click', function (e) {\n  e.preventDefault();\n  window.location.href = \"?\".concat(urlParams.toString());\n});\n$(\".lang-select\").change(function () {\n  var lang = $(this).val();\n  window.location.href = \"/update-language/\".concat(lang);\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvbWFpbi5qcy5qcyIsIm5hbWVzIjpbIiQiLCJjbGljayIsImUiLCJwcmV2ZW50RGVmYXVsdCIsInN1Ym1pdCIsIm1lc3NhZ2UiLCJ3aW5kb3ciLCJsb2NhbFN0b3JhZ2UiLCJnZXRJdGVtIiwicmVtb3ZlSXRlbSIsInRvYXN0ciIsInN1Y2Nlc3MiLCJ2YWwiLCJ1cmxQYXJhbXMiLCJVUkxTZWFyY2hQYXJhbXMiLCJsb2NhdGlvbiIsInNlYXJjaCIsImtleXVwIiwia2V5d29yZCIsImFwcGVuZCIsIndoaWNoIiwiaHJlZiIsImNvbmNhdCIsInRvU3RyaW5nIiwib24iLCJjaGFuZ2UiLCJsYW5nIl0sInNvdXJjZVJvb3QiOiIiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvbWFpbi5qcz9mZGFjIl0sInNvdXJjZXNDb250ZW50IjpbIi8vIExvZ291dCBidXR0b24gY2xpY2tlZFxuJCgnI2xvZ291dC1idG4nKS5jbGljaygoZSkgPT4ge1xuICAgIGUucHJldmVudERlZmF1bHQoKTtcbiAgICAkKCcjbG9nb3V0LWZvcm0nKS5zdWJtaXQoKTtcbn0pO1xuXG4vLyBTaG93IHN1Y2Nlc3MgdG9hc3QgbWVzc2FnZVxuY29uc3QgbWVzc2FnZSA9IHdpbmRvdy5sb2NhbFN0b3JhZ2UuZ2V0SXRlbSgnc3VjY2VzcycpO1xuaWYgKG1lc3NhZ2UpIHtcbiAgICB3aW5kb3cubG9jYWxTdG9yYWdlLnJlbW92ZUl0ZW0oJ3N1Y2Nlc3MnKTtcbiAgICB0b2FzdHIuc3VjY2VzcyhtZXNzYWdlKTtcbn1cblxuaWYgKCQoJyNzdWNjZXNzLW1lc3NhZ2UnKS52YWwoKSkge1xuICAgIHRvYXN0ci5zdWNjZXNzKCQoJyNzdWNjZXNzLW1lc3NhZ2UnKS52YWwoKSk7XG59XG5cbi8vIFNlYXJjaFxudmFyIHVybFBhcmFtcyA9IG5ldyBVUkxTZWFyY2hQYXJhbXMod2luZG93LmxvY2F0aW9uLnNlYXJjaCk7XG5cbiQoJy5wcm9kdWN0LXNlYXJjaC1pbnB1dCcpLmtleXVwKGZ1bmN0aW9uIChlKSB7XG4gICAgY29uc3Qga2V5d29yZCA9ICQodGhpcykudmFsKCk7XG4gICAgdXJsUGFyYW1zLmRlbGV0ZSgnbmFtZScpO1xuICAgIHVybFBhcmFtcy5hcHBlbmQoJ25hbWUnLCBrZXl3b3JkKTtcblxuICAgIGlmIChlLndoaWNoID09PSAxMykge1xuICAgICAgICB3aW5kb3cubG9jYXRpb24uaHJlZiA9IGA/JHt1cmxQYXJhbXMudG9TdHJpbmcoKX1gO1xuICAgIH1cbn0pO1xuXG4kKCcucHJvZHVjdC1zZWFyY2gtYnRuJykub24oJ2NsaWNrJywgKGUpID0+IHtcbiAgICBlLnByZXZlbnREZWZhdWx0KCk7XG4gICAgd2luZG93LmxvY2F0aW9uLmhyZWYgPSBgPyR7dXJsUGFyYW1zLnRvU3RyaW5nKCl9YDtcbn0pO1xuXG4kKFwiLmxhbmctc2VsZWN0XCIpLmNoYW5nZShmdW5jdGlvbiAoKSB7XG4gICAgdmFyIGxhbmcgPSAkKHRoaXMpLnZhbCgpO1xuICAgIHdpbmRvdy5sb2NhdGlvbi5ocmVmID0gYC91cGRhdGUtbGFuZ3VhZ2UvJHtsYW5nfWA7XG59KTtcbiJdLCJtYXBwaW5ncyI6IkFBQUE7QUFDQUEsQ0FBQyxDQUFDLGFBQWEsQ0FBQyxDQUFDQyxLQUFLLENBQUMsVUFBQ0MsQ0FBQyxFQUFLO0VBQzFCQSxDQUFDLENBQUNDLGNBQWMsRUFBRTtFQUNsQkgsQ0FBQyxDQUFDLGNBQWMsQ0FBQyxDQUFDSSxNQUFNLEVBQUU7QUFDOUIsQ0FBQyxDQUFDOztBQUVGO0FBQ0EsSUFBTUMsT0FBTyxHQUFHQyxNQUFNLENBQUNDLFlBQVksQ0FBQ0MsT0FBTyxDQUFDLFNBQVMsQ0FBQztBQUN0RCxJQUFJSCxPQUFPLEVBQUU7RUFDVEMsTUFBTSxDQUFDQyxZQUFZLENBQUNFLFVBQVUsQ0FBQyxTQUFTLENBQUM7RUFDekNDLE1BQU0sQ0FBQ0MsT0FBTyxDQUFDTixPQUFPLENBQUM7QUFDM0I7QUFFQSxJQUFJTCxDQUFDLENBQUMsa0JBQWtCLENBQUMsQ0FBQ1ksR0FBRyxFQUFFLEVBQUU7RUFDN0JGLE1BQU0sQ0FBQ0MsT0FBTyxDQUFDWCxDQUFDLENBQUMsa0JBQWtCLENBQUMsQ0FBQ1ksR0FBRyxFQUFFLENBQUM7QUFDL0M7O0FBRUE7QUFDQSxJQUFJQyxTQUFTLEdBQUcsSUFBSUMsZUFBZSxDQUFDUixNQUFNLENBQUNTLFFBQVEsQ0FBQ0MsTUFBTSxDQUFDO0FBRTNEaEIsQ0FBQyxDQUFDLHVCQUF1QixDQUFDLENBQUNpQixLQUFLLENBQUMsVUFBVWYsQ0FBQyxFQUFFO0VBQzFDLElBQU1nQixPQUFPLEdBQUdsQixDQUFDLENBQUMsSUFBSSxDQUFDLENBQUNZLEdBQUcsRUFBRTtFQUM3QkMsU0FBUyxVQUFPLENBQUMsTUFBTSxDQUFDO0VBQ3hCQSxTQUFTLENBQUNNLE1BQU0sQ0FBQyxNQUFNLEVBQUVELE9BQU8sQ0FBQztFQUVqQyxJQUFJaEIsQ0FBQyxDQUFDa0IsS0FBSyxLQUFLLEVBQUUsRUFBRTtJQUNoQmQsTUFBTSxDQUFDUyxRQUFRLENBQUNNLElBQUksT0FBQUMsTUFBQSxDQUFPVCxTQUFTLENBQUNVLFFBQVEsRUFBRSxDQUFFO0VBQ3JEO0FBQ0osQ0FBQyxDQUFDO0FBRUZ2QixDQUFDLENBQUMscUJBQXFCLENBQUMsQ0FBQ3dCLEVBQUUsQ0FBQyxPQUFPLEVBQUUsVUFBQ3RCLENBQUMsRUFBSztFQUN4Q0EsQ0FBQyxDQUFDQyxjQUFjLEVBQUU7RUFDbEJHLE1BQU0sQ0FBQ1MsUUFBUSxDQUFDTSxJQUFJLE9BQUFDLE1BQUEsQ0FBT1QsU0FBUyxDQUFDVSxRQUFRLEVBQUUsQ0FBRTtBQUNyRCxDQUFDLENBQUM7QUFFRnZCLENBQUMsQ0FBQyxjQUFjLENBQUMsQ0FBQ3lCLE1BQU0sQ0FBQyxZQUFZO0VBQ2pDLElBQUlDLElBQUksR0FBRzFCLENBQUMsQ0FBQyxJQUFJLENBQUMsQ0FBQ1ksR0FBRyxFQUFFO0VBQ3hCTixNQUFNLENBQUNTLFFBQVEsQ0FBQ00sSUFBSSx1QkFBQUMsTUFBQSxDQUF1QkksSUFBSSxDQUFFO0FBQ3JELENBQUMsQ0FBQyJ9\n//# sourceURL=webpack-internal:///./resources/js/main.js\n");

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