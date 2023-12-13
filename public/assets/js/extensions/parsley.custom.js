/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!****************************************************!*\
  !*** ./src/assets/js/extensions/parsley.custom.js ***!
  \****************************************************/
Parsley.addValidator('restrictedCity', {
  requirementType: 'string',
  validateString: function validateString(value, requirement) {
    value = (value || "").trim();
    return value === "" || value.toLowerCase() === requirement.toLowerCase();
  },
  messages: {
    en: 'You have to live in <a href="https://www.google.com/maps/place/Jakarta">Jakarta</a>.'
  }
});
/******/ })()
;