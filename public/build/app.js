(self["webpackChunkpim"] = self["webpackChunkpim"] || []).push([["app"],{

/***/ "./assets/app.js":
/*!***********************!*\
  !*** ./assets/app.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _js_app_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./js/app.js */ "./assets/js/app.js");
/* harmony import */ var _js_app_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_js_app_js__WEBPACK_IMPORTED_MODULE_0__);


/***/ }),

/***/ "./assets/js/app.js":
/*!**************************!*\
  !*** ./assets/js/app.js ***!
  \**************************/
/***/ (() => {

document.addEventListener("DOMContentLoaded", function () {
  var urlParams = new URLSearchParams(window.location.search);
  var activeTab = urlParams.get("tab") || "home"; // fallback default

  // Hide all tab contents
  document.querySelectorAll(".tab-content").forEach(function (tab) {
    tab.classList.remove("active");
  });

  // Show the one that matches the slug
  var showTab = document.querySelector(".tab-content[data-tab=\"".concat(activeTab, "\"]"));
  if (showTab) showTab.classList.add("active");

  // Set active class on sidebar links
  document.querySelectorAll(".sidebar-icon").forEach(function (link) {
    link.classList.remove("active");
  });
  var activeLink = document.getElementById("".concat(activeTab, "-tab"));
  if (activeLink) activeLink.classList.add("active");
});

/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ var __webpack_exports__ = (__webpack_exec__("./assets/app.js"));
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiYXBwLmpzIiwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7QUNBQUEsUUFBUSxDQUFDQyxnQkFBZ0IsQ0FBQyxrQkFBa0IsRUFBRSxZQUFZO0VBQ3hELElBQU1DLFNBQVMsR0FBRyxJQUFJQyxlQUFlLENBQUNDLE1BQU0sQ0FBQ0MsUUFBUSxDQUFDQyxNQUFNLENBQUM7RUFDN0QsSUFBTUMsU0FBUyxHQUFHTCxTQUFTLENBQUNNLEdBQUcsQ0FBQyxLQUFLLENBQUMsSUFBSSxNQUFNLENBQUMsQ0FBQzs7RUFFbEQ7RUFDQVIsUUFBUSxDQUFDUyxnQkFBZ0IsQ0FBQyxjQUFjLENBQUMsQ0FBQ0MsT0FBTyxDQUFDLFVBQUFDLEdBQUcsRUFBSTtJQUN2REEsR0FBRyxDQUFDQyxTQUFTLENBQUNDLE1BQU0sQ0FBQyxRQUFRLENBQUM7RUFDaEMsQ0FBQyxDQUFDOztFQUVGO0VBQ0EsSUFBTUMsT0FBTyxHQUFHZCxRQUFRLENBQUNlLGFBQWEsNEJBQUFDLE1BQUEsQ0FBMkJULFNBQVMsUUFBSSxDQUFDO0VBQy9FLElBQUlPLE9BQU8sRUFBRUEsT0FBTyxDQUFDRixTQUFTLENBQUNLLEdBQUcsQ0FBQyxRQUFRLENBQUM7O0VBRTVDO0VBQ0FqQixRQUFRLENBQUNTLGdCQUFnQixDQUFDLGVBQWUsQ0FBQyxDQUFDQyxPQUFPLENBQUMsVUFBQVEsSUFBSSxFQUFJO0lBQ3pEQSxJQUFJLENBQUNOLFNBQVMsQ0FBQ0MsTUFBTSxDQUFDLFFBQVEsQ0FBQztFQUNqQyxDQUFDLENBQUM7RUFDRixJQUFNTSxVQUFVLEdBQUduQixRQUFRLENBQUNvQixjQUFjLElBQUFKLE1BQUEsQ0FBSVQsU0FBUyxTQUFNLENBQUM7RUFDOUQsSUFBSVksVUFBVSxFQUFFQSxVQUFVLENBQUNQLFNBQVMsQ0FBQ0ssR0FBRyxDQUFDLFFBQVEsQ0FBQztBQUNwRCxDQUFDLENBQUMsQyIsInNvdXJjZXMiOlsid2VicGFjazovL3BpbS8uL2Fzc2V0cy9hcHAuanMiLCJ3ZWJwYWNrOi8vcGltLy4vYXNzZXRzL2pzL2FwcC5qcyJdLCJzb3VyY2VzQ29udGVudCI6WyJcbmltcG9ydCAnLi9qcy9hcHAuanMnOyIsImRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoXCJET01Db250ZW50TG9hZGVkXCIsIGZ1bmN0aW9uICgpIHtcbiAgY29uc3QgdXJsUGFyYW1zID0gbmV3IFVSTFNlYXJjaFBhcmFtcyh3aW5kb3cubG9jYXRpb24uc2VhcmNoKTtcbiAgY29uc3QgYWN0aXZlVGFiID0gdXJsUGFyYW1zLmdldChcInRhYlwiKSB8fCBcImhvbWVcIjsgLy8gZmFsbGJhY2sgZGVmYXVsdFxuXG4gIC8vIEhpZGUgYWxsIHRhYiBjb250ZW50c1xuICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKFwiLnRhYi1jb250ZW50XCIpLmZvckVhY2godGFiID0+IHtcbiAgICB0YWIuY2xhc3NMaXN0LnJlbW92ZShcImFjdGl2ZVwiKTtcbiAgfSk7XG5cbiAgLy8gU2hvdyB0aGUgb25lIHRoYXQgbWF0Y2hlcyB0aGUgc2x1Z1xuICBjb25zdCBzaG93VGFiID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihgLnRhYi1jb250ZW50W2RhdGEtdGFiPVwiJHthY3RpdmVUYWJ9XCJdYCk7XG4gIGlmIChzaG93VGFiKSBzaG93VGFiLmNsYXNzTGlzdC5hZGQoXCJhY3RpdmVcIik7XG5cbiAgLy8gU2V0IGFjdGl2ZSBjbGFzcyBvbiBzaWRlYmFyIGxpbmtzXG4gIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoXCIuc2lkZWJhci1pY29uXCIpLmZvckVhY2gobGluayA9PiB7XG4gICAgbGluay5jbGFzc0xpc3QucmVtb3ZlKFwiYWN0aXZlXCIpO1xuICB9KTtcbiAgY29uc3QgYWN0aXZlTGluayA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKGAke2FjdGl2ZVRhYn0tdGFiYCk7XG4gIGlmIChhY3RpdmVMaW5rKSBhY3RpdmVMaW5rLmNsYXNzTGlzdC5hZGQoXCJhY3RpdmVcIik7XG59KTtcbiJdLCJuYW1lcyI6WyJkb2N1bWVudCIsImFkZEV2ZW50TGlzdGVuZXIiLCJ1cmxQYXJhbXMiLCJVUkxTZWFyY2hQYXJhbXMiLCJ3aW5kb3ciLCJsb2NhdGlvbiIsInNlYXJjaCIsImFjdGl2ZVRhYiIsImdldCIsInF1ZXJ5U2VsZWN0b3JBbGwiLCJmb3JFYWNoIiwidGFiIiwiY2xhc3NMaXN0IiwicmVtb3ZlIiwic2hvd1RhYiIsInF1ZXJ5U2VsZWN0b3IiLCJjb25jYXQiLCJhZGQiLCJsaW5rIiwiYWN0aXZlTGluayIsImdldEVsZW1lbnRCeUlkIl0sInNvdXJjZVJvb3QiOiIifQ==