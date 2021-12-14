require('./bootstrap');
import i18next from 'i18next';
import LanguageDetector from 'i18next-browser-languagedetector';


console.dir(i18next)
console.log('holla')
console.log('jquery')

const langDetector = new LanguageDetector()
const options = {
    order: ['querystring', 'cookie', 'localStorage', 'sessionStorage', 'navigator', 'htmlTag'],
    lookupQuerystring: 'lng',
    lookupCookie: 'i18next',
    lookupLocalStorage: 'i18nextLng',
    lookupSessionStorage: 'i18nextLng',

    // cache user language
    caches: ['localStorage'],
    excludeCacheFor: ['cimode'],
    //cookieMinutes: 10,
    //cookieDomain: 'myDomain'
}
langDetector.init(options);
console.dir(langDetector)
const i18n =  i18next.use(langDetector).init({
    lng: 'en', // if you're using a language detector, do not define the lng option
    debug: true,
    fallbackLng: ['en', 'ar'],
    resources: {
        en: {
            translation: {
                "key": "translate"
            }
        } ,
        ar : {
            translation: {
                "key": "ترجمة"
            }
        }
    }
});
// if (localStorage.getItem('lang') === 'ar'){
//     i18next
//         .changeLanguage('ar')
//         .then(() => {
//             transButton.innerText = i18next.t('key');
//             localStorage.setItem('lang' , 'ar')
//         });
//     $('.selected-language').text('Arabic')
//     $('.selected-language').prev().removeClass('flag-icon-fr').addClass('flag-icon-ma')
// }else {
//     i18next
//         .changeLanguage('en')
//         .then(() => {
//             transButton.innerText = i18next.t('key');
//         });
//     $('.selected-language').text('Francais')
//     $('.selected-language').prev().removeClass('flag-icon-ma').addClass('flag-icon-fr')
// }
// // initialized and ready to go!
// // i18next is already initialized, because the translation resources where passed via init function
// const transButton = document.querySelector('.trans')
// transButton.innerText = i18next.t('key');
//
// transButton.addEventListener("click" , function (evt) {
//     evt.preventDefault()
//     console.log("clicked")
//     if (i18next.resolvedLanguage === "en"){
//         i18next
//             .changeLanguage('ar')
//             .then(() => {
//                 transButton.innerText = i18next.t('key');
//                 localStorage.setItem('lang' , 'ar')
//             });
//     }else {
//         i18next
//             .changeLanguage('en')
//             .then(() => {
//                 transButton.innerText = i18next.t('key');
//             });
//         localStorage.setItem('lang' , 'en')
//     }
//
// })
// console.dir(i18next)
// $('[aria-labelledby="dropdown-flag"]').on('click' , function (evt) {
//     evt.preventDefault()
//     console.dir(evt.target.innerText)
//     if (evt.target.innerText === " Arabic" ){
//         i18next
//             .changeLanguage('ar')
//             .then(() => {
//                 transButton.innerText = i18next.t('key');
//                 localStorage.setItem('lang' , 'ar')
//             });
//     }else {
//         i18next
//             .changeLanguage('en')
//             .then(() => {
//                 transButton.innerText = i18next.t('key');
//             });
//         localStorage.setItem('lang' , 'en')
//     }
// })


