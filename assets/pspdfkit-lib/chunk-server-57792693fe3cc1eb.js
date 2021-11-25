/*!
 * PSPDFKit for Web 2021.6.1 (https://pspdfkit.com/web)
 *
 * Copyright (c) 2016-2021 PSPDFKit GmbH. All rights reserved.
 *
 * THIS SOURCE CODE AND ANY ACCOMPANYING DOCUMENTATION ARE PROTECTED BY INTERNATIONAL COPYRIGHT LAW
 * AND MAY NOT BE RESOLD OR REDISTRIBUTED. USAGE IS BOUND TO THE PSPDFKIT LICENSE AGREEMENT.
 * UNAUTHORIZED REPRODUCTION OR DISTRIBUTION IS SUBJECT TO CIVIL AND CRIMINAL PENALTIES.
 * This notice may not be removed from this file.
 *
 * PSPDFKit uses several open source third-party components: https://pspdfkit.com/acknowledgements/web/
 */
(self.webpackChunkPSPDFKit=self.webpackChunkPSPDFKit||[]).push([[6377],{73723:function(t,e,n){"use strict";n.r(e),n.d(e,{default:function(){return tt}});var r=n(81253),a=n(92137),o=n(90484),s=n(6610),i=n(5991),c=n(63349),u=n(10379),l=n(46070),d=n(77608),h=n(96156),f=n(87757),p=n.n(f),m=n(70545);function v(t,e,n){return y.apply(this,arguments)}function y(){return(y=(0,a.Z)(p().mark((function t(e,n,r){var a;return p().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.next=2,fetch("".concat(e,"/auth"),{method:"POST",headers:{"Content-Type":"application/json","PSPDFKit-Platform":"web","PSPDFKit-Version":"protocol=".concat(4,", client=").concat("2021.6.1",", client-git=").concat("dc40b30708")},body:JSON.stringify({jwt:n.jwt,origin:window.location.href,password:r}),credentials:"include"});case 2:if(!(a=t.sent).ok){t.next=7;break}return t.abrupt("return",a.json());case 7:return t.abrupt("return",a.text().then((function(t){throw"INVALID_PASSWORD"===t?new m.p2(t):new m.p2("An error occurred while connecting to PSPDFKit Server: ".concat(t||a.statusText))})));case 8:case"end":return t.stop()}}),t)})))).apply(this,arguments)}var g=n(33502),w=n(19491),b=n(14968),k=n(50893),P=n(89595),_=n(35369),S=n(80614),x=n(89777),R=n(85596),F=n(33423),O=n(12130);function A(t){var e="The supplied JWT is invalid. Please refer to our guides on how to set up authentication:\n  https://pspdfkit.com/guides/web/current/server-backed/client-authentication/";if(-1===t.indexOf('{"internal":')){var n;(0,m.kG)("string"==typeof t&&3===t.split(".").length,e);try{var r=O.Base64.decode(t.split(".")[1]);n=JSON.parse(r)}catch(t){throw new m.p2(e)}(0,m.kG)("string"==typeof n.document_id,"The supplied JWT is invalid. The field 'document_id' has to be a string value.\n  Please refer to our guides for further information: https://pspdfkit.com/guides/web/current/server-backed/client-authentication/")}}var Z=n(51534),T=n(1367),D=n(49029);function U(t){var e=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}();return function(){var n,r=(0,d.Z)(t);if(e){var a=(0,d.Z)(this).constructor;n=Reflect.construct(r,arguments,a)}else n=r.apply(this,arguments);return(0,l.Z)(this,n)}}var j=function(t){(0,u.Z)(n,t);var e=U(n);function n(){return(0,s.Z)(this,n),e.apply(this,arguments)}return n}(_.WV({authPayload:null,serverUrl:null,documentId:null,backendPermissions:null,documentURL:null,imageToken:null,instantSettings:null,token:null,features:(0,_.aV)(),signatureFeatureAvailability:D.H.NONE,isFormsEnabled:!0,minSearchQueryLength:1,documentHandle:null,isDocumentHandleOutdated:!1,digitalSignatures:null,defaultGroup:void 0,hasCollaborationPermissions:!1,forceLegacySignaturesFeature:!1})),I=n(11278),E=n(50809),L=n(16396),C="The image can not be rendered because of an unknown error.",N=function(){function t(e){var n=e.identifier,r=e.url,a=e.token,o=e.payload,i=e.doNotRequestWebP,c=void 0!==i&&i;(0,s.Z)(this,t),this.identifier=n,this.url=r,this.token=a,this.payload=o,this.doNotRequestWebP=c}return(0,i.Z)(t,[{key:"abort",value:function(){this.httpRequest&&this.httpRequest.abort()}},{key:"request",value:function(){var t=this;return new Promise((function(e,n){var r=new XMLHttpRequest;t.httpRequest=r,r.open(t.payload?"POST":"GET",t.url,!0),r.setRequestHeader("X-PSPDFKit-Image-Token",t.token),E.Zy&&!t.doNotRequestWebP&&r.setRequestHeader("Accept","image/webp,*/*"),r.responseType="blob",r.onreadystatechange=(0,a.Z)(p().mark((function t(){var a,o,s,i,c;return p().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:if(4===r.readyState){t.next=2;break}return t.abrupt("return");case 2:if(!r.response||!r.response.type.startsWith("application/json")){t.next=8;break}return(a=new FileReader).onload=function(t){var r,a=JSON.parse(null===(r=t.target)||void 0===r?void 0:r.result);a.attachments_not_found?e({attachmentsNotFound:a.attachments_not_found}):a.error?n(new m.p2("The server could not render the requested image (".concat(a.error,")"))):n(new m.p2(C))},a.onerror=function(){return n(new m.p2(C))},a.readAsText(r.response),t.abrupt("return");case 8:if((0,I.v)(r.status)){t.next=11;break}return n(new m.p2(C)),t.abrupt("return");case 11:return o=r.response,s=URL.createObjectURL(o),(i=new Image).onerror=function(){return n(new m.p2(C))},i.src=s,c="function"==typeof i.decode?i.decode():new Promise((function(t){return setTimeout(t,200)})),t.next=19,c;case 19:e(new L.Z(i,(function(){return URL.revokeObjectURL(s)})));case 20:case"end":return t.stop()}}),t)}))).bind(t),r.send(t.payload)}))}}]),t}(),q=n(34997),H=n(94290),J=n(47291),K=n(67117),W=n(63880),B=n(29412),V=n(46232),G=n(42457),M=n(24956),Q=n(5164),X=["color","fillColor","outlineColor"];function z(t,e){var n=Object.keys(t);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(t);e&&(r=r.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),n.push.apply(n,r)}return n}function Y(t){for(var e=1;e<arguments.length;e++){var n=null!=arguments[e]?arguments[e]:{};e%2?z(Object(n),!0).forEach((function(e){(0,h.Z)(t,e,n[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(n)):z(Object(n)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(n,e))}))}return t}function $(t){var e=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}();return function(){var n,r=(0,d.Z)(t);if(e){var a=(0,d.Z)(this).constructor;n=Reflect.construct(r,arguments,a)}else n=r.apply(this,arguments);return(0,l.Z)(this,n)}}var tt=function(t){(0,u.Z)(ct,t);var e,l,d,f,y,O,U,I,L,C,H,B,z,tt,rt,ot,st,it=$(ct);function ct(t){var e,n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:window;(0,s.Z)(this,ct),e=it.call(this),(0,h.Z)((0,c.Z)(e),"_password",null),(0,h.Z)((0,c.Z)(e),"type","SERVER"),(0,h.Z)((0,c.Z)(e),"_requestRenderAnnotation",(function(t,n,r,a,o,s){var i,c,u="".concat(e._state.documentURL,"/render_annotation"),l="render-annotation-".concat(s?(0,q.SK)():t.id),d=JSON.stringify({data:(0,F.Hs)(t),width:a,height:o,detached:s||void 0,formFieldValue:n?(0,F.kr)(n):void 0}),h=!1,f=[],p=new Promise((function(t,e){i=t,c=e}));return function n(){var s=arguments.length>0&&void 0!==arguments[0]?arguments[0]:[],p=new FormData;p.append("render",d),s.length>0&&t.imageAttachmentId&&r&&r.data&&p.append(t.imageAttachmentId,r.data);var v=new N({identifier:l,url:u,token:e._state.imageToken,payload:p,doNotRequestWebP:a>S.pt||o>S.pt}),y=e._requestQueue.enqueue(v,!1);y.promise.then((function(t){h||(t.attachmentsNotFound?n(t.attachmentsNotFound):t.attachmentsNotFound?c(new m.p2("Attachment could not be found.")):i(t))})).catch((function(t){h||c(t)})),f.push(y)}(),{promise:p,cancel:function(){h=!0,f.forEach((function(t){t.cancel()}))}}})),(0,h.Z)((0,c.Z)(e),"_requestRenderAnnotations",(function(t,n,r,a,o){var s,i,c="".concat(e._state.documentURL,"/render_annotations"),u=JSON.stringify({annotations:n.map((function(e,n){return{pageIndex:t,pdfObjectId:e,width:r[n],height:a[n]}})),formFieldValues:o}),l=!1,d=new Promise((function(t,e){s=t,i=e}));return e._fetch(c,{method:"post",body:u,credentials:"include",headers:{"X-PSPDFKit-Image-Token":e._state.imageToken,"Content-Type":"application/json",Accept:"multipart/form-data"}}).then((function(t){return t.formData()})).then((function(t){l||s(Array.from(t.values()))})).catch((function(t){l||i(t)})),{promise:d,cancel:function(){l=!0}}})),(0,h.Z)((0,c.Z)(e),"handleDocumentHandleConflict",(function(){e._state=e._state.set("isDocumentHandleOutdated",!0),e.cancelRequests(),e._destroyProvider()}));var r=t.serverUrl||(0,b.SV)(n.document);if("/"!==r.substr(-1))throw new m.p2("`serverUrl` must have a slash at the end (e.g. `https://pspdfkit.example.com/`).");if(!t.serverUrl){var a="".concat(n.location.protocol,"//").concat(n.location.host,"/");if(r===a)throw new m.p2('PSPDFKit automatically infers the URL of PSPDFKit Server from the current `<script>` tag.\nIn the current case, this URL is set to the same as the current browser\'s location.\nThis can happen when you bundle pspdfkit.js with your custom JavaScript for example.\n\nTo make sure everything works as expected, please set the `serverUrl` to the URL of PSPDFKit Server:\n\nPSPDFKit.load({\n  serverUrl: "https://pspdfkit-server.example.com/",\n  ...,\n});')}if("string"!=typeof t.documentId)throw new m.p2("`documentId` must be of type string.");if("object"!==(0,o.Z)(t.authPayload)||"string"!=typeof t.authPayload.jwt)throw new m.p2("authPayload must be an object that contains the `jwt`. For example: `authPayload: { jwt: 'xxx.xxx.xxx'}`");A(t.authPayload.jwt),at(t.instant);var i=null;if(t.instant)if((0,m.PO)(t.instant)){var u=t.instant;i={clientsPresenceEnabled:!1!==u.clientsPresenceEnabled,listenToServerChangesEnabled:!1!==u.listenToServerChangesEnabled}}else i=J.q;e._requestQueue=new T.Z(S.Qc);var l=!!t.electronicSignatures&&Boolean(t.electronicSignatures.forceLegacySignaturesFeature);return e._state=new j({serverUrl:r,documentId:t.documentId,instantSettings:i,documentURL:"".concat(r,"i/d/").concat(t.documentId),authPayload:t.authPayload,isFormsEnabled:!t.disableForms,forceLegacySignaturesFeature:l}),t.trustedCAsCallback&&(0,m.ZK)("PSPDFKit.Configuration#trustedCAsCallback is only used on Standalone deployments. On a Server-backed deployment, please follow the instructions at https://pspdfkit.com/guides/web"),e}return(0,i.Z)(ct,[{key:"isUsingInstantProvider",value:function(){return null!=this._state.instantSettings}},{key:"hasClientsPresence",value:function(){var t=this._state.instantSettings;return null!=t&&!1!==t.clientsPresenceEnabled}},{key:"load",value:(st=(0,a.Z)(p().mark((function t(){var e,n,r,a,o,s,i,c,u,l,d,h,f,y,w,b,k=this,P=arguments;return p().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return e=P.length>0&&void 0!==P[0]?P[0]:{},t.next=3,v("".concat(this._state.serverUrl,"i/d/").concat(this._state.documentId),this._state.authPayload,e.password);case 3:if(n=t.sent,r=n.imageToken,a=n.token,o=n.permissions,s=n.features,i=n.signatureFeatureAvailability,c=n.hasPassword,u=n.minSearchQueryLength,l=n.layerHandle,d=n.allowedTileScales,h=n.digitalSignatures,f=n.defaultGroup,y=n.collaborationPermissions,w=n.creatorName,this._password=e.password,!this._state.instantSettings||s.includes(g.sw.INSTANT)){t.next=20;break}throw new m.p2("Instant feature is not enabled on this server. Please set `instant` to `false`.\n\nFor more information about PSPDFKit Instant please visit:\nhttps://pspdfkit.com/guides/web/current/instant/overview/");case 20:if(b=i===D.H.ELECTRONIC_SIGNATURES&&s.includes(g.sw.WEB_ANNOTATION_EDITING)&&this._state.forceLegacySignaturesFeature?D.H.LEGACY_SIGNATURES:i,this._state=this._state.withMutations((function(t){return t.set("imageToken",r).set("token",a).set("features",(0,_.aV)(s)).set("signatureFeatureAvailability",b).set("backendPermissions",new g.Fm({readOnly:-1===o.indexOf("write"),downloadingAllowed:o.indexOf("download")>=0})).set("documentURL","".concat(k._state.serverUrl,"i/d/").concat(k._state.documentId,"/h/").concat(l)).set("documentHandle",l).set("isDocumentHandleOutdated",!1).set("digitalSignatures",(0,F.rS)(h))})),!y||this._state.instantSettings){t.next=24;break}throw new m.p2("Collaboration Permissions is not supported when `instant` is disabled. Please make sure `configuration#instant` is set to `true`.");case 24:return this._state=this._state.withMutations((function(t){t.defaultGroup=f,t.hasCollaborationPermissions=Boolean(y)})),this.provider&&this.provider.destroy(),t.next=28,this._initProvider();case 28:return this.provider=t.sent,this._state.instantSettings&&this.provider.setDocumentHandleConflictCallback(this.handleDocumentHandleConflict),t.abrupt("return",{features:this._state.features,signatureFeatureAvailability:this._state.signatureFeatureAvailability,hasPassword:c,minSearchQueryLength:u,allowedTileScales:d,jsActionChanges:[],creatorName:w,defaultGroup:f});case 31:case"end":return t.stop()}}),t,this)}))),function(){return st.apply(this,arguments)})},{key:"_initProvider",value:(ot=(0,a.Z)(p().mark((function t(){var e,r,a,o,s,i;return p().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:if(!this._state.instantSettings){t.next=9;break}return e="".concat(this._state.serverUrl,"i/d/").concat(this._state.documentId,"/h/").concat(this._state.documentHandle),t.next=4,n.e(2333).then(n.bind(n,20251));case 4:return r=t.sent,a=r.InstantProvider,t.abrupt("return",new a("".concat(this._state.serverUrl,"i/d/").concat(this._state.documentId),e,{auth_token:this._state.token},this._state.instantSettings));case 9:return o=this._state.isFormsEnabled&&this._state.features.includes(g.sw.FORMS),t.next=12,n.e(4099).then(n.bind(n,82450));case 12:return s=t.sent,i=s.RESTProvider,t.abrupt("return",new i(this._state.documentURL,{token:this._state.token},{isFormsEnabled:o}));case 15:case"end":return t.stop()}}),t,this)}))),function(){return ot.apply(this,arguments)})},{key:"destroy",value:function(){this._destroyProvider(),this._requestQueue&&this._requestQueue.destroy()}},{key:"documentInfo",value:function(){return this._fetch("".concat(this._state.documentURL,"/document.json")).then((function(t){return t.json()})).then((function(t){return t.data}))}},{key:"getFormJSON",value:function(){return this._fetch("".concat(this._state.documentURL,"/form.json")).then((function(t){return 403===t.status?{v:1,type:"pspdfkit/form",annotations:[],fields:[]}:t.json().then((function(t){return t.data}))}))}},{key:"evalFormValuesActions",value:(rt=(0,a.Z)(p().mark((function t(){return p().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:throw new Error("not implemented");case 1:case"end":return t.stop()}}),t)}))),function(){return rt.apply(this,arguments)})},{key:"evalScript",value:(tt=(0,a.Z)(p().mark((function t(){return p().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:throw new Error("not implemented");case 1:case"end":return t.stop()}}),t)}))),function(){return tt.apply(this,arguments)})},{key:"permissions",value:function(){return Promise.resolve(this._state.backendPermissions)}},{key:"getDefaultGroup",value:function(){return this._state.defaultGroup}},{key:"isCollaborationPermissionsEnabled",value:function(){return this._state.hasCollaborationPermissions}},{key:"textForPageIndex",value:function(t){var e="".concat(this._state.documentURL,"/page-").concat(t,"-text"),n=new(this._getJSONRequestHandler())(e,this._state.token),r=this._requestQueue.enqueue(n,!0);return{promise:r.promise.then((function(e){return(0,P.T)(e,t)})),cancel:function(){r.cancel()}}}},{key:"getTextFromRects",value:function(t,e){var n=encodeURIComponent(JSON.stringify(e.map(R.u).toArray()));return this._fetch("".concat(this._state.documentURL,"/page-").concat(t,"-highlighted?rects=").concat(n)).then((function(t){return t.json()})).then((function(t){return t.text}))}},{key:"_getJSONRequestHandler",value:function(){return Z.Z}},{key:"renderTile",value:function(t,e,n,r,a){var o=this;if(this._state.isDocumentHandleOutdated)return{promise:new Promise((function(){})),cancel:function(){}};var s,i,c="".concat(this._state.documentURL,"/page-").concat(t,"-dimensions-").concat(e.width,"-").concat(e.height,"-tile-").concat(n.left,"-").concat(n.top,"-").concat(n.width,"-").concat(n.height).concat(r?"-print":""),u=e.width===n.width&&e.height===n.height,l=n.width>S.pt||n.height>S.pt,d=!1,h=!1,f=[],p=[],v=new Promise((function(t,e){s=t,i=e}));return function t(){var e,n=arguments.length>0&&void 0!==arguments[0]?arguments[0]:[];if(a){var r=new FormData;r.append("data",JSON.stringify({annotations:a.annotations.filter(k.d).map(F.Hs).toJS().map((function(t){return{content:t}})),formFieldValues:a.formFieldValues.map(F.kr).toJS(),formFields:a.formFields.map(F.vD).toJS(),signatures:a.signatures||[]})),n.length>0&&n.forEach((function(t){var e=a.attachments.get(t);(0,V.k)(e&&e.data,"Attachment data could not be found."),r.append(t,e.data)})),e=new N({identifier:c,url:c,token:o._state.imageToken,payload:r,doNotRequestWebP:l})}else e=new N({identifier:c,url:c,token:o._state.imageToken,doNotRequestWebP:l});p.push(e);var v=o._requestQueue.enqueue(e,u);v.promise.then((function(e){if(!d)return e.attachmentsNotFound&&!h?(h=!0,void t(e.attachmentsNotFound)):void(e.attachmentsNotFound?i(new m.p2("Attachment could not be found.")):s(e))})).catch((function(t){d||i(t)})),f.push(v)}(),{promise:v,cancel:function(){d=!0,p.forEach((function(t){t.abort&&"function"==typeof t.abort&&t.abort()})),f.forEach((function(t){t.cancel()}))}}}},{key:"renderAnnotation",value:function(t,e,n,r,a){return this._requestRenderAnnotation(t,e,n,r,a)}},{key:"renderPageAnnotations",value:function(t,e,n){var r=this;if(!E.Rh){var o=Promise.resolve();return this.pageAPStreamsPromises=this.pageAPStreamsPromises.set(t,o),o}var s=this.provider,i=[],c=e.filter((function(t){var e=s._readStateCallbacks.getAnnotationWithFormField(t.id).formField,n=(0,k._R)(t,e);if(n&&e){var r,a,o=e instanceof g.XQ||e instanceof g.rF?null===(r=(0,Q.g6)(e,t.id,!0))||void 0===r?void 0:r.toArray():null;i.push(Y({value:"string"==typeof e.value?e.value:null===(a=e.values)||void 0===a?void 0:a.toArray(),name:e.name,v:1,type:"pspdfkit/form-field-value"},o?{optionIndexes:o}:null))}return n})),u=new Promise((function(e,o){var s=r._requestRenderAnnotations(t,c.map((function(t){return t.pdfObjectId})).filter((function(t){return"number"==typeof t})).toArray(),c.map((function(t){return Math.floor(t.boundingBox.width*n)})).toArray(),c.map((function(t){return Math.floor(t.boundingBox.height*n)})).toArray(),i),u=s.promise,l=s.cancel;u.then((function(t){var n=t.map((function(t){return t&&(0,M.R4)(t)}));n.forEach(function(){var t=(0,a.Z)(p().mark((function t(e,n){var a,o,s;return p().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.next=2,e;case 2:a=t.sent,(o=c.get(n))&&((s=r.annotationAPStreamPromises.get(o.id))&&(r.annotationAPStreamPromises=r.annotationAPStreamPromises.delete(o.id),s(a)),a&&r.cacheAPStream(a,o));case 5:case"end":return t.stop()}}),t)})));return function(e,n){return t.apply(this,arguments)}}()),Promise.all(n).then((function(){return e()}))})).catch((function(t){l(),o(t)}))}));return this.pageAPStreamsPromises=this.pageAPStreamsPromises.set(t,u),u}},{key:"renderDetachedAnnotation",value:function(t,e,n,r){return this._requestRenderAnnotation(t,null,e,n,r,!0)}},{key:"getAttachment",value:(z=(0,a.Z)(p().mark((function t(e){var n;return p().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.prev=0,t.next=3,this._fetch("".concat(this._state.documentURL,"/attachments/").concat(e));case 3:n=t.sent,t.t0=n.status,t.next=404===t.t0?7:200===t.t0?8:11;break;case 7:throw new m.p2("Attachment not Found.");case 8:return t.next=10,n.blob();case 10:return t.abrupt("return",t.sent);case 11:throw new m.p2("Bad Request.");case 12:t.next=17;break;case 14:throw t.prev=14,t.t1=t.catch(0),new m.p2("Could not fetch attachment from PSPDFKit Server. ".concat(t.t1));case 17:case"end":return t.stop()}}),t,this,[[0,14]])}))),function(t){return z.apply(this,arguments)})},{key:"search",value:(B=(0,a.Z)(p().mark((function t(e,n,r,a){var o,s,i,c,u,l=arguments;return p().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return o=l.length>4&&void 0!==l[4]&&l[4],s=l.length>5&&void 0!==l[5]?l[5]:W.S.TEXT,i="q=".concat(s===W.S.PRESET?e.replace(/_/g,"-"):encodeURIComponent(e),"&start=").concat(n,"&limit=").concat(r,"&type=").concat(s,"&include_annotations=").concat(o.toString(),"&case_sensitive=").concat(a.toString()),c="".concat(this._state.documentURL,"/search?").concat(i),t.next=6,new Z.Z(c,this._state.token).request();case 6:return u=t.sent,t.abrupt("return",(0,x.E)(u.data));case 8:case"end":return t.stop()}}),t,this)}))),function(t,e,n,r){return B.apply(this,arguments)})},{key:"searchAndRedact",value:(H=(0,a.Z)(p().mark((function t(e,n){var a,o,s,i,c,u,l,d,f,m,v,y;return p().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return o=n.searchType,s=n.annotationPreset,i=n.searchInAnnotations,c=n.caseSensitive,u=s.color,l=s.fillColor,d=s.outlineColor,f=(0,r.Z)(s,X),t.next=4,this._fetch("".concat(this._state.documentURL,"/redactions"),{method:"post",credentials:"include",headers:{"Content-Type":"application/json"},body:JSON.stringify({strategy:o,strategyOptions:(a={},(0,h.Z)(a,o,o===W.S.PRESET?e.replace(/_/g,"-"):e),(0,h.Z)(a,"includeAnnotations",i),(0,h.Z)(a,"caseSensitive",c),a),content:Y(Y({},f),{},{color:u&&u.toHex(),fillColor:l&&l.toHex(),outlineColor:d&&d.toHex()})})});case 4:return m=t.sent,t.next=7,m.json();case 7:return v=t.sent,y=v.data,t.abrupt("return",(0,_.aV)(y&&y.annotations?y.annotations.map((function(t){return K.Z.fromJSON(t.id,t.content)})):[]));case 10:case"end":return t.stop()}}),t,this)}))),function(t,e){return H.apply(this,arguments)})},{key:"exportPDF",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},e=t.flatten,n=void 0!==e&&e,r=t.includeComments,a=void 0===r||r,o="".concat(this._state.documentURL,"/pdf?token=").concat(this._state.token,"&flatten=").concat(String(n),"&comments=").concat(String(a),"&render_ap_streams=").concat(String(!n));return fetch(o,{method:"GET",credentials:"include"}).then((function(t){return t.arrayBuffer()}))}},{key:"exportXFDF",value:function(){return this._fetch("".concat(this._state.documentURL,"/document.xfdf")).then((function(t){return t.text()}))}},{key:"exportInstantJSON",value:function(){return this._fetch("".concat(this._state.documentURL,"/instant.json")).then((function(t){return t.json()}))}},{key:"getPDFURL",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},e=t.includeComments,n=void 0===e||e;return{promise:Promise.resolve("".concat(this._state.documentURL,"/pdf?token=").concat(this._state.token,"&flatten=true&comments=").concat(String(n))),revoke:function(){}}}},{key:"generatePDFObjectURL",value:function(){var t,e=this,n=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},r=n.includeComments,a=void 0===r||r,o=!1,s=new Promise((function(n){e.exportPDF({flatten:!0,includeComments:a}).then((function(e){if(!o){var r=new Blob([e],{type:"application/pdf"});t=window.URL.createObjectURL(r),n(t)}}))}));return{promise:s,revoke:function(){t&&window.URL.revokeObjectURL(t),o=!0}}}},{key:"getDocumentOutline",value:(C=(0,a.Z)(p().mark((function t(){var e,n,r;return p().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.prev=0,t.next=3,this._fetch("".concat(this._state.documentURL,"/outline.json")).then((function(t){return t.json()}));case 3:n=t.sent,e=n.data,t.next=10;break;case 7:t.prev=7,t.t0=t.catch(0),e={};case 10:return r=Array.isArray(e.outline)?e.outline:[],t.abrupt("return",(0,_.aV)(r.map(w.i)));case 12:case"end":return t.stop()}}),t,this,[[0,7]])}))),function(){return C.apply(this,arguments)})},{key:"onKeystrokeEvent",value:function(){throw new Error("not implemented")}},{key:"applyOperationsAndReload",value:(L=(0,a.Z)(p().mark((function t(e){var n;return p().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.prev=0,t.next=3,nt(e);case 3:return n=t.sent,this._destroyProvider(),t.next=7,this._fetch("".concat(this._state.documentURL,"/apply-operations"),{method:"post",body:n,credentials:"include"});case 7:t.next=12;break;case 9:throw t.prev=9,t.t0=t.catch(0),new m.p2("Applying operations failed: ".concat(t.t0));case 12:return t.abrupt("return",this.reloadDocument());case 13:case"end":return t.stop()}}),t,this,[[0,9]])}))),function(t){return L.apply(this,arguments)})},{key:"applyRedactionsAndReload",value:(I=(0,a.Z)(p().mark((function t(){return p().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.prev=0,this._destroyProvider(),t.next=4,this._fetch("".concat(this._state.documentURL,"/redact"),{method:"post",credentials:"include"});case 4:return t.abrupt("return",this.reloadDocument());case 7:throw t.prev=7,t.t0=t.catch(0),this.provider.load(),new m.p2("Applying redactions failed: ".concat(t.t0));case 11:case"end":return t.stop()}}),t,this,[[0,7]])}))),function(){return I.apply(this,arguments)})},{key:"reloadDocument",value:(U=(0,a.Z)(p().mark((function t(){return p().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.prev=0,t.next=3,this.load({password:this._password});case 3:return t.abrupt("return",t.sent);case 6:throw t.prev=6,t.t0=t.catch(0),new m.p2("Reloading the document failed: ".concat(t.t0));case 9:case"end":return t.stop()}}),t,this,[[0,6]])}))),function(){return U.apply(this,arguments)})},{key:"exportPDFWithOperations",value:(O=(0,a.Z)(p().mark((function t(e){var n;return p().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.prev=0,t.next=3,nt(e);case 3:return n=t.sent,t.abrupt("return",this._fetch("".concat(this._state.documentURL,"/pdf-with-operations"),{method:"post",body:n,credentials:"include"}).then((function(t){return t.arrayBuffer()})));case 7:throw t.prev=7,t.t0=t.catch(0),new m.p2("Exporting PDF with operations failed: ".concat(t.t0));case 10:case"end":return t.stop()}}),t,this,[[0,7]])}))),function(t){return O.apply(this,arguments)})},{key:"getSignaturesInfo",value:(y=(0,a.Z)(p().mark((function t(){return p().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:if(!this._refreshSignaturesInfoPromise){t.next=3;break}return t.next=3,this._refreshSignaturesInfoPromise;case 3:return t.abrupt("return",this._state.digitalSignatures);case 4:case"end":return t.stop()}}),t,this)}))),function(){return y.apply(this,arguments)})},{key:"refreshSignaturesInfo",value:function(){var t=this;return this._refreshSignaturesInfoPromise||(this._refreshSignaturesInfoPromise=new Promise((function(e,n){t._fetch("".concat(t._state.documentURL,"/signatures"),{method:"get",credentials:"include"}).then((function(t){return t.json()})).then((function(n){var r=n.data;t._state=t._state.set("digitalSignatures",(0,F.rS)(r)),t._refreshSignaturesInfoPromise=null,e()})).catch((function(e){t._state=t._state.set("digitalSignatures",null),t._refreshSignaturesInfoPromise=null,n(e)}))}))),this._refreshSignaturesInfoPromise}},{key:"signDocumentAndReload",value:(f=(0,a.Z)(p().mark((function t(e,n){var r,a;return p().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:if(t.prev=0,void 0===n||"object"===(0,o.Z)(n)){t.next=3;break}throw new m.p2("Signing service data must be an object if specified.");case 3:return r={},e&&"placeholderSize"in e&&(r.signerDataSource={estimatedSize:e.placeholderSize}),e&&"flatten"in e&&(r.flatten=e.flatten),a=Y(Y({},n?{signingToken:n.signingToken}:null),r),this._destroyProvider(),t.next=10,this._fetch("".concat(this._state.documentURL,"/sign"),{method:"post",headers:{"Content-Type":"application/json"},body:JSON.stringify(a),credentials:"include"});case 10:return t.next=12,this.reloadDocument();case 12:t.next=18;break;case 14:throw t.prev=14,t.t0=t.catch(0),this.provider.load(),new m.p2("Adding digital signature failed: ".concat(t.t0.message||t.t0));case 18:case"end":return t.stop()}}),t,this,[[0,14]])}))),function(t,e){return f.apply(this,arguments)})},{key:"getDocumentHandle",value:function(){return this._state.documentHandle}},{key:"getEmbeddedFiles",value:(d=(0,a.Z)(p().mark((function t(){var e,n,r,a;return p().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.next=2,this._fetch("".concat(this._state.documentURL,"/embedded-files"),{method:"get",credentials:"include"});case 2:return r=t.sent,t.next=5,r.json();case 5:return a=t.sent,t.abrupt("return",(0,_.aV)(null!=a&&null!==(e=a.data)&&void 0!==e&&null!==(n=e.embeddedFiles)&&void 0!==n&&n.length?a.data.embeddedFiles.map((function(t){var e=t.id,n=t.content;return(0,G.i)(e,n)})):[]));case 7:case"end":return t.stop()}}),t,this)}))),function(){return d.apply(this,arguments)})},{key:"cancelRequests",value:function(){this._requestQueue.cancelAll()}},{key:"_destroyProvider",value:function(){this.provider&&(this.provider._clients&&this.provider._clients.disconnect(),this.provider.destroy())}},{key:"_fetch",value:(l=(0,a.Z)(p().mark((function t(e,n){var r,a,s;return p().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.next=2,fetch(e,Y(Y({},n),{},{headers:Y(Y({},null==n?void 0:n.headers),{},{"X-PSPDFKit-Token":this._state.token,"PSPDFKit-Platform":"web","PSPDFKit-Version":"protocol=".concat(4,", client=").concat("2021.6.1",", client-git=").concat("dc40b30708")})}));case 2:if((r=t.sent).ok){t.next=10;break}return t.next=6,et(r);case 6:throw a=t.sent,a="object"===(0,o.Z)(a)?a.reason:a,s=a||"".concat(r.status," ").concat(r.statusText),new m.p2(s);case 10:return t.abrupt("return",r);case 11:case"end":return t.stop()}}),t,this)}))),function(t,e){return l.apply(this,arguments)})},{key:"syncChanges",value:function(){return this.provider.syncChanges()}},{key:"clearAPStreamCache",value:(e=(0,a.Z)(p().mark((function t(){return p().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:case"end":return t.stop()}}),t)}))),function(){return e.apply(this,arguments)})}]),ct}(B.W);function et(t){return t.clone().json().catch((function(){return t.text()}))}function nt(t){return rt.apply(this,arguments)}function rt(){return(rt=(0,a.Z)(p().mark((function t(e){var n,r,s,i,c;return p().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return n={},r=new WeakMap,t.next=4,Promise.all(e.map(function(){var t=(0,a.Z)(p().mark((function t(e,a){var s,i,c,u,l,d;return p().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:if("importDocument"!==e.type){t.next=6;break}return s=e.document,(0,V.k)(s instanceof File||s instanceof Blob,"Wrong `importDocument` operation `document` value: it must be a File or a Blob"),t.abrupt("return",(0,H.M)(r,n,s,e,a,"document"));case 6:if("applyInstantJson"!==e.type){t.next=14;break}return i=e.instantJson,(0,V.k)("object"===(0,o.Z)(i)&&null!==i,"Wrong `applyInstantJson` operation `instantJson` value: it must be an object"),c=JSON.stringify(i),u=new Blob([c],{type:"application/json"}),t.abrupt("return",(0,H.M)(r,n,u,e,a,"dataFilePath"));case 14:if("applyXfdf"!==e.type){t.next=19;break}return l=e.xfdf,(0,V.k)("string"==typeof l,"Wrong `applyXfdf` operation `xfdf` value: it must be a string"),d=new Blob([l],{type:"application/vnd.adobe.xfdf"}),t.abrupt("return",(0,H.M)(r,n,d,e,a,"dataFilePath"));case 19:return t.abrupt("return",e);case 20:case"end":return t.stop()}}),t)})));return function(e,n){return t.apply(this,arguments)}}()));case 4:for(c in s=t.sent,(i=new FormData).append("operations",JSON.stringify({operations:s})),n)i.append(c,n[c]);return t.abrupt("return",i);case 9:case"end":return t.stop()}}),t)})))).apply(this,arguments)}function at(t){var e="";if("boolean"!=typeof t&&((0,m.PO)(t)?(t.hasOwnProperty("clientsPresenceEnabled")&&"boolean"!=typeof t.clientsPresenceEnabled&&(e+="`clientsPresenceEnabled` in instance settings is not valid. Must be `true` or `false`.\n"),t.hasOwnProperty("listenToServerChangesEnabled")&&"boolean"!=typeof t.listenToServerChangesEnabled&&(e+="`listenToServerChangesEnabled` in instance settings is not valid. Must be `true` or `false`.\n")):e="`instant` flag must either be set to `true` or `false`\n",e))throw new m.p2("".concat(e,"\nFor more information about PSPDFKit Instant please visit:\nhttps://pspdfkit.com/guides/web/current/instant/overview/"))}},47291:function(t,e,n){"use strict";n.d(e,{q:function(){return r}});var r={clientsPresenceEnabled:!0,listenToServerChangesEnabled:!0}}}]);