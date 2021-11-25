/// <reference types="node" />
import { BarCodeType } from "./type";
export declare const validateBarcodeInput: (type: BarCodeType, input: string) => boolean;
export declare const createBarCode: ({ type, input, width, height, }: {
    type: BarCodeType;
    input: string | null;
    width: number;
    height: number;
}) => Promise<Buffer | null>;
