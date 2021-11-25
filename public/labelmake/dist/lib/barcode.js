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
var __importDefault = (this && this.__importDefault) || function (mod) {
    return (mod && mod.__esModule) ? mod : { "default": mod };
};
Object.defineProperty(exports, "__esModule", { value: true });
exports.createBarCode = exports.validateBarcodeInput = void 0;
var bwip_js_1 = __importDefault(require("bwip-js"));
var validateBarcodeInput = function (type, input) {
    if (!input)
        return false;
    if (type === "qrcode") {
        // 漢字を含まない500文字以下
        var regexp = /([\u{3005}\u{3007}\u{303b}\u{3400}-\u{9FFF}\u{F900}-\u{FAFF}\u{20000}-\u{2FFFF}][\u{E0100}-\u{E01EF}\u{FE00}-\u{FE02}]?)/mu;
        return !regexp.test(input) && input.length < 500;
    }
    else if (type === "japanpost") {
        // 郵便番号は数字(0-9)のみ。住所表示番号は英数字(0-9,A-Z)とハイフン(-)が使用可能です。
        var regexp = /^(\d{7})(\d|[A-Z]|-)+$/;
        return regexp.test(input);
    }
    else if (type === "ean13") {
        // 有効文字は数値(0-9)のみ。チェックデジットを含まない12桁orチェックデジットを含む13桁。
        var regexp = /^\d{12}$|^\d{13}$/;
        return regexp.test(input);
    }
    else if (type === "ean8") {
        // 有効文字は数値(0-9)のみ。チェックデジットを含まない7桁orチェックデジットを含む8桁。
        var regexp = /^\d{7}$|^\d{8}$/;
        return regexp.test(input);
    }
    else if (type === "code39") {
        // 有効文字は数字(0-9)。アルファベット大文字(A-Z)、記号(-.$/+%)、半角スペース。
        var regexp = /^(\d|[A-Z]|\-|\.|\$|\/|\+|\%|\s)+$/;
        return regexp.test(input);
    }
    else if (type === "code128") {
        // 有効文字は漢字、ひらがな、カタカナ以外。
        // https://qiita.com/graminume/items/2ac8dd9c32277fa9da64
        return input.match(/([\u30a0-\u30ff\u3040-\u309f\u3005-\u3006\u30e0-\u9fcf]|[Ａ-Ｚａ-ｚ０-９！＂＃＄％＆＇（）＊＋，－．／：；＜＝＞？＠［＼］＾＿｀｛｜｝〜])+/)
            ? false
            : true;
    }
    else if (type === "nw7") {
        // 有効文字はNW-7は数字(0-9)と記号(-.$:/+)。
        // スタートコード／ストップコードとして、コードの始まりと終わりはアルファベット(A-D)のいずれかを使用してください。
        var regexp = /^[A-Da-d]([0-9\-\.\$\:\/\+])+[A-Da-d]$/;
        return regexp.test(input);
    }
    else if (type === "itf14") {
        // 有効文字は数値(0-9)のみ。 チェックデジットを含まない13桁orチェックデジットを含む14桁。
        var regexp = /^\d{13}$|^\d{14}$/;
        return regexp.test(input);
    }
    else if (type === "upca") {
        // 有効文字は数値(0-9)のみ。 チェックデジットを含まない11桁orチェックデジットを含む12桁。
        var regexp = /^\d{11}$|^\d{12}$/;
        return regexp.test(input);
    }
    else if (type === "upce") {
        // 有効文字は数値(0-9)のみ。 1桁目に指定できる数字(ナンバーシステムキャラクタ)は0のみ。
        // チェックデジットを含まない7桁orチェックデジットを含む8桁。
        var regexp = /^0(\d{6}$|\d{7}$)/;
        return regexp.test(input);
    }
    return false;
};
exports.validateBarcodeInput = validateBarcodeInput;
var createBarCode = function (_a) {
    var type = _a.type, input = _a.input, width = _a.width, height = _a.height;
    return __awaiter(void 0, void 0, void 0, function () {
        var bwipjsArg, buffer;
        return __generator(this, function (_b) {
            switch (_b.label) {
                case 0:
                    if (!(input && (0, exports.validateBarcodeInput)(type, input))) return [3 /*break*/, 2];
                    bwipjsArg = {
                        bcid: type === "nw7" ? "rationalizedCodabar" : type,
                        text: input,
                        scale: 5,
                        width: width,
                        height: height,
                        includetext: true,
                    };
                    return [4 /*yield*/, bwip_js_1.default.toBuffer(bwipjsArg).catch(function () { return null; })];
                case 1:
                    buffer = _b.sent();
                    return [2 /*return*/, buffer];
                case 2: return [2 /*return*/, null];
            }
        });
    });
};
exports.createBarCode = createBarCode;
//# sourceMappingURL=barcode.js.map