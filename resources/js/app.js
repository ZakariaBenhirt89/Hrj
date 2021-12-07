require('./bootstrap');

console.log('holla')
console.log('jquery')
$('#fw-mobile-number').on('keyup' , function (evt) {
    evt.preventDefault()
    console.log('on key up')
})
/* FilePond handling upload */
console.log(FilePond)
console.log('image preview')
console.dir(FilePondPluginImagePreview)

FilePond.registerPlugin(
    FilePondPluginFileValidateType,
    FilePondPluginImageExifOrientation,
    FilePondPluginImagePreview,
    FilePondPluginImageCrop,
    FilePondPluginImageResize,
    FilePondPluginImageTransform,
    FilePondPluginImageEdit
);

// Select the file input and use
// create() to turn it into a pond
 const piclement = FilePond.create(
    document.querySelector('.filepond'), {
         labelIdle: `Drag & Drop your picture or <span class="filepond--label-action">Browse</span>`,
         imageCropAspectRatio: '1:1',

         stylePanelLayout: 'compact circle',
         styleLoadIndicatorPosition: 'center bottom',
         styleProgressIndicatorPosition: 'right bottom',
         styleButtonRemoveItemPosition: 'left bottom',
         styleButtonProcessItemPosition: 'right bottom',
     }
);
 console.dir(piclement)
