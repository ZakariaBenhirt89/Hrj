"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.isSubsetFont = exports.isPageSize = void 0;
var isPageSize = function (args) { return typeof args === "object" && "width" in args; };
exports.isPageSize = isPageSize;
var isSubsetFont = function (v) { return typeof v === "object" && !!v && "data" in v; };
exports.isSubsetFont = isSubsetFont;
//# sourceMappingURL=type.js.map