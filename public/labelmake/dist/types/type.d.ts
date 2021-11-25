declare type TemplateType = "text" | "image" | "qrcode" | "japanpost" | "ean13" | "ean8" | "code39" | "code128" | "nw7" | "itf14" | "upca" | "upce";
export declare type BarCodeType = Exclude<TemplateType, "text" | "image">;
export declare type Alignment = "left" | "right" | "center";
export interface PageSize {
    height: number;
    width: number;
}
export interface TemplateSchema {
    type: TemplateType;
    position: {
        x: number;
        y: number;
    };
    width: number;
    height: number;
    rotate?: number;
    alignment?: Alignment;
    fontSize?: number;
    fontName?: string;
    fontColor?: string;
    backgroundColor?: string;
    characterSpacing?: number;
    lineHeight?: number;
}
interface SubsetFont {
    data: string | Uint8Array | ArrayBuffer;
    subset: boolean;
}
interface Font {
    [key: string]: string | Uint8Array | ArrayBuffer | SubsetFont;
}
export interface Args {
    inputs: {
        [key: string]: string;
    }[];
    template: Template;
    font?: Font;
    splitThreshold?: number;
}
export declare const isPageSize: (args: PageSize | string | Uint8Array | ArrayBuffer) => args is PageSize;
export declare const isSubsetFont: (v: string | Uint8Array | ArrayBuffer | SubsetFont) => v is SubsetFont;
export interface Template {
    schemas: {
        [key: string]: TemplateSchema;
    }[];
    basePdf: PageSize | string | Uint8Array | ArrayBuffer;
    fontName?: string;
}
export declare type _Template = Template & {
    sampledata: {
        [key: string]: string;
    }[];
};
export {};
