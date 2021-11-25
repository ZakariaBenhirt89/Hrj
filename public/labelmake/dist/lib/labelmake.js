"use strict";
var __awaiter = (this && this.__awaiter) || function (thisArg, _arguments, P, generator) {
    function adopt(value) { return value instanceof P ? value : new P(function (resolve) { resolve(value); }); }
    return new (P || (P = Promise))(function (resolve, reject) {
        function fulfilled(value) { try { step(generator.next(value)); } catch (e) { reject(e); } }
        function rejected(value) { try { step(generator["throw"](value)); } catch (e) { reject(e); } }
        function step(result) { result.done ? resolve(result.value) : adopt(result.value).then(fulfilled, rejected); }
        step((generator = generator.apply(thisArg, _arguments || [])).next());
    });
};
var __generator = (this && this.__generator) || function (thisArg, body) {
    var _ = { label: 0, sent: function() { if (t[0] & 1) throw t[1]; return t[1]; }, trys: [], ops: [] }, f, y, t, g;
    return g = { next: verb(0), "throw": verb(1), "return": verb(2) }, typeof Symbol === "function" && (g[Symbol.iterator] = function() { return this; }), g;
    function verb(n) { return function (v) { return step([n, v]); }; }
    function step(op) {
        if (f) throw new TypeError("Generator is already executing.");
        while (_) try {
            if (f = 1, y && (t = op[0] & 2 ? y["return"] : op[0] ? y["throw"] || ((t = y["return"]) && t.call(y), 0) : y.next) && !(t = t.call(y, op[1])).done) return t;
            if (y = 0, t) op = [op[0] & 2, t.value];
            switch (op[0]) {
                case 0: case 1: t = op; break;
                case 4: _.label++; return { value: op[1], done: false };
                case 5: _.label++; y = op[1]; op = [0]; continue;
                case 7: op = _.ops.pop(); _.trys.pop(); continue;
                default:
                    if (!(t = _.trys, t = t.length > 0 && t[t.length - 1]) && (op[0] === 6 || op[0] === 2)) { _ = 0; continue; }
                    if (op[0] === 3 && (!t || (op[1] > t[0] && op[1] < t[3]))) { _.label = op[1]; break; }
                    if (op[0] === 6 && _.label < t[1]) { _.label = t[1]; t = op; break; }
                    if (t && _.label < t[2]) { _.label = t[2]; _.ops.push(op); break; }
                    if (t[2]) _.ops.pop();
                    _.trys.pop(); continue;
            }
            op = body.call(thisArg, _);
        } catch (e) { op = [6, e]; y = 0; } finally { f = t = 0; }
        if (op[0] & 5) throw op[1]; return { value: op[0] ? op[1] : void 0, done: true };
    }
};
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
var __importDefault = (this && this.__importDefault) || function (mod) {
    return (mod && mod.__esModule) ? mod : { "default": mod };
};
Object.defineProperty(exports, "__esModule", { value: true });
var pdf_lib_1 = require("pdf-lib");
var fontkit_1 = __importDefault(require("@pdf-lib/fontkit"));
var barcode_1 = require("./barcode");
var util_1 = require("./util");
var type_1 = require("./type");
var constants_1 = require("./constants");
var labelmake = function (_a) {
    var inputs = _a.inputs, template = _a.template, font = _a.font, _b = _a.splitThreshold, splitThreshold = _b === void 0 ? 3 : _b;
    return __awaiter(void 0, void 0, void 0, function () {
        var fontNamesInSchemas, fontNames_1, pdfDoc, isUseMyfont, fontValues, _c, fontObj, _d, _e, inputImageCache, basePdf, schemas, isBlank, embeddedPages, embedPdfBoxes, embedPdf, embedPdfPages, boundingBoxes, transformationMatrices, i, inputObj, keys, _loop_1, j, author;
        var _f;
        return __generator(this, function (_g) {
            switch (_g.label) {
                case 0:
                    if (inputs.length < 1) {
                        throw Error("inputs should be more than one length");
                    }
                    fontNamesInSchemas = (0, util_1.uniq)(template.schemas
                        .map(function (s) { return Object.values(s).map(function (v) { return v.fontName; }); })
                        .reduce(function (acc, val) { return acc.concat(val); }, [])
                        .filter(Boolean));
                    if (font) {
                        fontNames_1 = Object.keys(font);
                        if (template.fontName && !fontNames_1.includes(template.fontName)) {
                            throw Error(template.fontName + " of template.fontName is not found in font");
                        }
                        if (fontNamesInSchemas.some(function (f) { return !fontNames_1.includes(f); })) {
                            throw Error(fontNamesInSchemas
                                .filter(function (f) { return !fontNames_1.includes(f); })
                                .join() + " of template.schemas is not found in font");
                        }
                    }
                    return [4 /*yield*/, pdf_lib_1.PDFDocument.create()];
                case 1:
                    pdfDoc = _g.sent();
                    pdfDoc.registerFontkit(fontkit_1.default);
                    isUseMyfont = font && (template.fontName || fontNamesInSchemas.length > 0);
                    if (!isUseMyfont) return [3 /*break*/, 3];
                    return [4 /*yield*/, Promise.all(Object.values(font).map(function (v) {
                            return pdfDoc.embedFont((0, type_1.isSubsetFont)(v) ? v.data : v, {
                                subset: (0, type_1.isSubsetFont)(v) ? v.subset : true,
                            });
                        }))];
                case 2:
                    _c = _g.sent();
                    return [3 /*break*/, 4];
                case 3:
                    _c = [];
                    _g.label = 4;
                case 4:
                    fontValues = _c;
                    if (!isUseMyfont) return [3 /*break*/, 5];
                    _d = Object.keys(font).reduce(function (acc, cur, i) {
                        var _a;
                        return Object.assign(acc, (_a = {}, _a[cur] = fontValues[i], _a));
                    }, {});
                    return [3 /*break*/, 7];
                case 5:
                    _f = {};
                    _e = pdf_lib_1.StandardFonts.Helvetica;
                    return [4 /*yield*/, pdfDoc.embedFont(pdf_lib_1.StandardFonts.Helvetica)];
                case 6:
                    _d = (_f[_e] = _g.sent(),
                        _f);
                    _g.label = 7;
                case 7:
                    fontObj = _d;
                    inputImageCache = {};
                    basePdf = template.basePdf, schemas = template.schemas;
                    isBlank = (0, type_1.isPageSize)(basePdf);
                    embeddedPages = [];
                    embedPdfBoxes = [];
                    if (!!(0, type_1.isPageSize)(basePdf)) return [3 /*break*/, 10];
                    return [4 /*yield*/, pdf_lib_1.PDFDocument.load(basePdf)];
                case 8:
                    embedPdf = _g.sent();
                    embedPdfPages = embedPdf.getPages();
                    embedPdfBoxes = embedPdfPages.map(function (p) {
                        var mediaBox = p.getMediaBox();
                        var bleedBox = p.getBleedBox();
                        var trimBox = p.getTrimBox();
                        return { mediaBox: mediaBox, bleedBox: bleedBox, trimBox: trimBox };
                    });
                    boundingBoxes = embedPdfPages.map(function (p) {
                        var _a = p.getMediaBox(), x = _a.x, y = _a.y, width = _a.width, height = _a.height;
                        return { left: x, bottom: y, right: width, top: height + y };
                    });
                    transformationMatrices = embedPdfPages.map(function () { return [1, 0, 0, 1, 0, 0]; });
                    return [4 /*yield*/, pdfDoc.embedPages(embedPdfPages, boundingBoxes, transformationMatrices)];
                case 9:
                    embeddedPages = _g.sent();
                    _g.label = 10;
                case 10:
                    i = 0;
                    _g.label = 11;
                case 11:
                    if (!(i < inputs.length)) return [3 /*break*/, 16];
                    inputObj = inputs[i];
                    keys = Object.keys(inputObj);
                    _loop_1 = function (j) {
                        var embeddedPage, pageWidth, pageHeight, page, _h, mb, bb, tb, _loop_2, l;
                        return __generator(this, function (_j) {
                            switch (_j.label) {
                                case 0:
                                    embeddedPage = embeddedPages[j];
                                    pageWidth = (0, type_1.isPageSize)(basePdf)
                                        ? (0, util_1.mm2pt)(basePdf.width)
                                        : embeddedPage.width;
                                    pageHeight = (0, type_1.isPageSize)(basePdf)
                                        ? (0, util_1.mm2pt)(basePdf.height)
                                        : embeddedPage.height;
                                    page = pdfDoc.addPage([pageWidth, pageHeight]);
                                    if (!isBlank) {
                                        page.drawPage(embeddedPage);
                                        _h = embedPdfBoxes[j], mb = _h.mediaBox, bb = _h.bleedBox, tb = _h.trimBox;
                                        page.setMediaBox(mb.x, mb.y, mb.width, mb.height);
                                        page.setBleedBox(bb.x, bb.y, bb.width, bb.height);
                                        page.setTrimBox(tb.x, tb.y, tb.width, tb.height);
                                    }
                                    if (!schemas[j])
                                        return [2 /*return*/, "continue"];
                                    _loop_2 = function (l) {
                                        var key, schema, input, rotate, boxWidth, boxHeight, _k, br, bg, bb, fontValue_1, _l, r_1, g_1, b_1, fontSize_1, alignment_1, lineHeight_1, characterSpacing_1, beforeLineOver_1, opt, inputImageCacheKey, image, isPng, imageBuf;
                                        return __generator(this, function (_m) {
                                            switch (_m.label) {
                                                case 0:
                                                    key = keys[l];
                                                    schema = schemas[j][key];
                                                    input = inputObj[key];
                                                    if (!schema || !input)
                                                        return [2 /*return*/, "continue"];
                                                    rotate = (0, pdf_lib_1.degrees)(schema.rotate ? schema.rotate : 0);
                                                    boxWidth = (0, util_1.mm2pt)(schema.width);
                                                    boxHeight = (0, util_1.mm2pt)(schema.height);
                                                    if (!(schema.type === "text")) return [3 /*break*/, 1];
                                                    if (schema.backgroundColor) {
                                                        _k = __read((0, util_1.hex2rgb)(schema.backgroundColor), 3), br = _k[0], bg = _k[1], bb = _k[2];
                                                        page.drawRectangle({
                                                            x: (0, util_1.calcX)(schema.position.x, "left", boxWidth, boxWidth),
                                                            y: (0, util_1.calcY)(schema.position.y, pageHeight, boxHeight),
                                                            width: boxWidth,
                                                            height: boxHeight,
                                                            color: (0, pdf_lib_1.rgb)(br / 255, bg / 255, bb / 255),
                                                        });
                                                    }
                                                    fontValue_1 = isUseMyfont
                                                        ? fontObj[schema.fontName ? schema.fontName : template.fontName]
                                                        : fontObj[pdf_lib_1.StandardFonts.Helvetica];
                                                    _l = __read((0, util_1.hex2rgb)(schema.fontColor ? schema.fontColor : "#000"), 3), r_1 = _l[0], g_1 = _l[1], b_1 = _l[2];
                                                    fontSize_1 = schema.fontSize ? schema.fontSize : 13;
                                                    alignment_1 = schema.alignment ? schema.alignment : "left";
                                                    lineHeight_1 = schema.lineHeight ? schema.lineHeight : 1;
                                                    characterSpacing_1 = schema.characterSpacing
                                                        ? schema.characterSpacing
                                                        : 0;
                                                    page.pushOperators((0, pdf_lib_1.setCharacterSpacing)(characterSpacing_1));
                                                    beforeLineOver_1 = 0;
                                                    input.split(/\r|\n|\r\n/g).forEach(function (inputLine, index) {
                                                        var isOverEval = function (testString) {
                                                            var testStringWidth = fontValue_1.widthOfTextAtSize(testString, fontSize_1) + ((testString.length - 1) * characterSpacing_1);
                                                            /**
                                                             * split if the difference is less then two pixel
                                                             * (found out / tested this threshold heuristically, most probably widthOfTextAtSize is unprecise)
                                                             */
                                                            return boxWidth - testStringWidth <= splitThreshold;
                                                        };
                                                        var splitedLine = (0, util_1.getSplittedLines)(inputLine, isOverEval);
                                                        splitedLine.forEach(function (inputLine2, index2) {
                                                            var textWidth = fontValue_1.widthOfTextAtSize(inputLine2, fontSize_1) + ((inputLine2.length - 1) * characterSpacing_1);
                                                            page.drawText(inputLine2, {
                                                                x: (0, util_1.calcX)(schema.position.x, alignment_1, boxWidth, textWidth),
                                                                y: (0, util_1.calcY)(schema.position.y, pageHeight, fontSize_1) -
                                                                    lineHeight_1 * fontSize_1 * (index + index2 + beforeLineOver_1) -
                                                                    (lineHeight_1 === 0 ? 0 : ((lineHeight_1 - 1) * fontSize_1) / 2),
                                                                rotate: rotate,
                                                                size: fontSize_1,
                                                                lineHeight: lineHeight_1 * fontSize_1,
                                                                maxWidth: boxWidth,
                                                                font: fontValue_1,
                                                                color: (0, pdf_lib_1.rgb)(r_1 / 255, g_1 / 255, b_1 / 255),
                                                                wordBreaks: [""],
                                                            });
                                                            if (splitedLine.length === index2 + 1)
                                                                beforeLineOver_1 += index2;
                                                        });
                                                    });
                                                    return [3 /*break*/, 7];
                                                case 1:
                                                    if (!(schema.type === "image" || constants_1.barcodes.includes(schema.type))) return [3 /*break*/, 7];
                                                    opt = {
                                                        x: (0, util_1.calcX)(schema.position.x, "left", boxWidth, boxWidth),
                                                        y: (0, util_1.calcY)(schema.position.y, pageHeight, boxHeight),
                                                        rotate: rotate,
                                                        width: boxWidth,
                                                        height: boxHeight,
                                                    };
                                                    inputImageCacheKey = "" + schema.type + input;
                                                    image = inputImageCache[inputImageCacheKey];
                                                    if (!(!image && schema.type === "image")) return [3 /*break*/, 3];
                                                    isPng = input.startsWith("data:image/png;");
                                                    return [4 /*yield*/, pdfDoc[isPng ? "embedPng" : "embedJpg"](input)];
                                                case 2:
                                                    image = _m.sent();
                                                    return [3 /*break*/, 6];
                                                case 3:
                                                    if (!(!image && schema.type !== "image")) return [3 /*break*/, 6];
                                                    return [4 /*yield*/, (0, barcode_1.createBarCode)({
                                                            type: schema.type,
                                                            width: schema.width,
                                                            height: schema.height,
                                                            input: input,
                                                        })];
                                                case 4:
                                                    imageBuf = _m.sent();
                                                    if (!imageBuf) return [3 /*break*/, 6];
                                                    return [4 /*yield*/, pdfDoc.embedPng(imageBuf)];
                                                case 5:
                                                    image = _m.sent();
                                                    _m.label = 6;
                                                case 6:
                                                    if (image) {
                                                        inputImageCache[inputImageCacheKey] = image;
                                                        page.drawImage(image, opt);
                                                    }
                                                    _m.label = 7;
                                                case 7: return [2 /*return*/];
                                            }
                                        });
                                    };
                                    l = 0;
                                    _j.label = 1;
                                case 1:
                                    if (!(l < keys.length)) return [3 /*break*/, 4];
                                    return [5 /*yield**/, _loop_2(l)];
                                case 2:
                                    _j.sent();
                                    _j.label = 3;
                                case 3:
                                    l++;
                                    return [3 /*break*/, 1];
                                case 4: return [2 /*return*/];
                            }
                        });
                    };
                    j = 0;
                    _g.label = 12;
                case 12:
                    if (!(j < (isBlank ? schemas : embeddedPages).length)) return [3 /*break*/, 15];
                    return [5 /*yield**/, _loop_1(j)];
                case 13:
                    _g.sent();
                    _g.label = 14;
                case 14:
                    j++;
                    return [3 /*break*/, 12];
                case 15:
                    i++;
                    return [3 /*break*/, 11];
                case 16:
                    author = "labelmake (https://github.com/hand-dot/labelmake)";
                    pdfDoc.setProducer(author);
                    pdfDoc.setCreator(author);
                    return [4 /*yield*/, pdfDoc.save()];
                case 17: return [2 /*return*/, _g.sent()];
            }
        });
    });
};
exports.default = labelmake;
//# sourceMappingURL=labelmake.js.map