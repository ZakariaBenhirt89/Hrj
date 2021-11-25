export declare const uniq: <T>(array: T[]) => T[];
export declare const hex2rgb: (hex: string) => number[];
export declare const mm2pt: (mm: number) => number;
export declare const calcX: (x: number, alignment: "left" | "right" | "center", boxWidth: number, textWidth: number) => number;
export declare const calcY: (y: number, height: number, itemHeight: number) => number;
declare type IsOverEval = (testString: string) => boolean;
/**
 * Incrementally check the current line for it's real length
 * and return the position where it exceeds the bbox width.
 *
 * return `null` to indicate if inputLine is shorter as the available bbox
 */
export declare const getOverPosition: (inputLine: string, isOverEval: IsOverEval) => number | null;
/**
* recursivly split the line at getSplitPosition.
* If there is some leftover, split the rest again in the same manner.
*/
export declare const getSplittedLines: (inputLine: string, isOverEval: IsOverEval) => string[];
export {};
