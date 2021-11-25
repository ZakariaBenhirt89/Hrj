"use strict";
var __read = (this && this.__read) || function (o, n) {
    var m = typeof Symbol === "function" && o[Symbol.iterator];
    if (!m) return o;
    var i = m.call(o), r, ar = [], e;
    try {
        while ((n === void 0 || n-- > 0) && !(r = i.next()).done) ar.push(r.value);
    }
    catch (error) { e = { error: error }; }
    finally {
        try {
            if (r && !r.done && (m = i["return"])) m.call(i);
        }
        finally { if (e) throw e.error; }
    }
    return ar;
};
var __spreadArray = (this && this.__spreadArray) || function (to, from, pack) {
    if (pack || arguments.length === 2) for (var i = 0, l = from.length, ar; i < l; i++) {
        if (ar || !(i in from)) {
            if (!ar) ar = Array.prototype.slice.call(from, 0, i);
            ar[i] = from[i];
        }
    }
    return to.concat(ar || Array.prototype.slice.call(from));
};
Object.defineProperty(exports, "__esModule", { value: true });
exports.getSplittedLines = exports.getOverPosition = exports.calcY = exports.calcX = exports.mm2pt = exports.hex2rgb = exports.uniq = void 0;
var uniq = function (array) { return Array.from(new Set(array)); };
exports.uniq = uniq;
var hex2rgb = function (hex) {
    if (hex.slice(0, 1) === "#")
        hex = hex.slice(1);
    if (hex.length === 3)
        hex =
            hex.slice(0, 1) +
                hex.slice(0, 1) +
                hex.slice(1, 2) +
                hex.slice(1, 2) +
                hex.slice(2, 3) +
                hex.slice(2, 3);
    return [hex.slice(0, 2), hex.slice(2, 4), hex.slice(4, 6)].map(function (str) {
        return parseInt(str, 16);
    });
};
exports.hex2rgb = hex2rgb;
var mm2pt = function (mm) {
    // https://www.ddc.co.jp/words/archives/20090701114500.html
    var ptRatio = 2.8346;
    return parseFloat(String(mm)) * ptRatio;
};
exports.mm2pt = mm2pt;
var calcX = function (x, alignment, boxWidth, textWidth) {
    var addition = 0;
    if (alignment === "center") {
        addition = (boxWidth - textWidth) / 2;
    }
    else if (alignment === "right") {
        addition = boxWidth - textWidth;
    }
    return (0, exports.mm2pt)(x) + addition;
};
exports.calcX = calcX;
var calcY = function (y, height, itemHeight) {
    return height - (0, exports.mm2pt)(y) - itemHeight;
};
exports.calcY = calcY;
/**
 * Incrementally check the current line for it's real length
 * and return the position where it exceeds the bbox width.
 *
 * return `null` to indicate if inputLine is shorter as the available bbox
 */
var getOverPosition = function (inputLine, isOverEval) {
    for (var i = 0; i <= inputLine.length; i++) {
        if (isOverEval(inputLine.substr(0, i))) {
            return i;
        }
    }
    return null;
};
exports.getOverPosition = getOverPosition;
/**
* Get position of the split. Split the exceeding line at
* the last whitepsace bevor it exceeds the bounding box width.
*/
var getSplitPosition = function (inputLine, isOverEval) {
    var overPos = (0, exports.getOverPosition)(inputLine, isOverEval);
    /**
     * if input line is shorter as the available space. We split at the end of the line
     */
    if (overPos === null)
        return inputLine.length;
    var overPosTmp = overPos;
    while (inputLine[overPosTmp] !== " " && overPosTmp >= 0)
        overPosTmp--;
    /**
     * for very long lines with no whitespace use the original overPos and
     * split one char bevor so we do not overfill the bbox
     */
    return overPosTmp > 0 ? overPosTmp : overPos - 1;
};
/**
* recursivly split the line at getSplitPosition.
* If there is some leftover, split the rest again in the same manner.
*/
var getSplittedLines = function (inputLine, isOverEval) {
    var splitPos = getSplitPosition(inputLine, isOverEval);
    var splittedLine = inputLine.substr(0, splitPos);
    var rest = inputLine.slice(splitPos).trimLeft();
    /**
     * end recursion if there is no rest, return single splitted line in an array
     * so we can join them over the recursion
     */
    if (rest.length === 0) {
        return [splittedLine];
    }
    else {
        return __spreadArray([splittedLine], __read((0, exports.getSplittedLines)(rest, isOverEval)), false);
    }
};
exports.getSplittedLines = getSplittedLines;
//# sourceMappingURL=util.js.map