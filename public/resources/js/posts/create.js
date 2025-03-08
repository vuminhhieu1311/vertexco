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

/***/ "./resources/js/posts/create.js":
/*!**************************************!*\
  !*** ./resources/js/posts/create.js ***!
  \**************************************/
/***/ (() => {

eval("// Description editor\nvar fullEditor = new Quill('#product-description-editor', {\n  modules: {\n    toolbar: [[{\n      header: [1, 2, false]\n    }], ['bold', 'italic', 'underline'], ['image', 'code-block']]\n  },\n  theme: 'snow' // or 'bubble'\n});\n\n// Add text-change event listener to update description field\nfullEditor.on('text-change', function () {\n  var description = fullEditor.root.innerHTML;\n  $('#product-description').val(description);\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvcG9zdHMvY3JlYXRlLmpzLmpzIiwibmFtZXMiOlsiZnVsbEVkaXRvciIsIlF1aWxsIiwibW9kdWxlcyIsInRvb2xiYXIiLCJoZWFkZXIiLCJ0aGVtZSIsIm9uIiwiZGVzY3JpcHRpb24iLCJyb290IiwiaW5uZXJIVE1MIiwiJCIsInZhbCJdLCJzb3VyY2VSb290IjoiIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2pzL3Bvc3RzL2NyZWF0ZS5qcz8zMzA3Il0sInNvdXJjZXNDb250ZW50IjpbIi8vIERlc2NyaXB0aW9uIGVkaXRvclxudmFyIGZ1bGxFZGl0b3IgPSBuZXcgUXVpbGwoJyNwcm9kdWN0LWRlc2NyaXB0aW9uLWVkaXRvcicsIHtcbiAgICBtb2R1bGVzOiB7XG4gICAgICAgIHRvb2xiYXI6IFtcbiAgICAgICAgICAgIFt7XG4gICAgICAgICAgICAgICAgaGVhZGVyOiBbMSwgMiwgZmFsc2VdXG4gICAgICAgICAgICB9XSxcbiAgICAgICAgICAgIFsnYm9sZCcsICdpdGFsaWMnLCAndW5kZXJsaW5lJ10sXG4gICAgICAgICAgICBbJ2ltYWdlJywgJ2NvZGUtYmxvY2snXVxuICAgICAgICBdXG4gICAgfSxcbiAgICB0aGVtZTogJ3Nub3cnIC8vIG9yICdidWJibGUnXG59KTtcblxuLy8gQWRkIHRleHQtY2hhbmdlIGV2ZW50IGxpc3RlbmVyIHRvIHVwZGF0ZSBkZXNjcmlwdGlvbiBmaWVsZFxuZnVsbEVkaXRvci5vbigndGV4dC1jaGFuZ2UnLCBmdW5jdGlvbigpIHtcbiAgICBjb25zdCBkZXNjcmlwdGlvbiA9IGZ1bGxFZGl0b3Iucm9vdC5pbm5lckhUTUw7XG4gICAgJCgnI3Byb2R1Y3QtZGVzY3JpcHRpb24nKS52YWwoZGVzY3JpcHRpb24pO1xufSk7XG4iXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0EsSUFBSUEsVUFBVSxHQUFHLElBQUlDLEtBQUssQ0FBQyw2QkFBNkIsRUFBRTtFQUN0REMsT0FBTyxFQUFFO0lBQ0xDLE9BQU8sRUFBRSxDQUNMLENBQUM7TUFDR0MsTUFBTSxFQUFFLENBQUMsQ0FBQyxFQUFFLENBQUMsRUFBRSxLQUFLO0lBQ3hCLENBQUMsQ0FBQyxFQUNGLENBQUMsTUFBTSxFQUFFLFFBQVEsRUFBRSxXQUFXLENBQUMsRUFDL0IsQ0FBQyxPQUFPLEVBQUUsWUFBWSxDQUFDO0VBRS9CLENBQUM7RUFDREMsS0FBSyxFQUFFLE1BQU0sQ0FBQztBQUNsQixDQUFDLENBQUM7O0FBRUY7QUFDQUwsVUFBVSxDQUFDTSxFQUFFLENBQUMsYUFBYSxFQUFFLFlBQVc7RUFDcEMsSUFBTUMsV0FBVyxHQUFHUCxVQUFVLENBQUNRLElBQUksQ0FBQ0MsU0FBUztFQUM3Q0MsQ0FBQyxDQUFDLHNCQUFzQixDQUFDLENBQUNDLEdBQUcsQ0FBQ0osV0FBVyxDQUFDO0FBQzlDLENBQUMsQ0FBQyJ9\n//# sourceURL=webpack-internal:///./resources/js/posts/create.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/posts/create.js"]();
/******/ 	
/******/ })()
;