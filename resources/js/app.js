require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

console.log('holla')

FilePond.registerPlugin(
    FilePondPluginImagePreview,
    FilePondPluginImageExifOrientation,
    FilePondPluginFileValidateSize
);
console.log(FilePond)
const filepondElm = document.querySelector('.filepond')
console.log('this the url '+ filepondElm.dataset.url)
FilePond.setOptions({
    server: {
        url: 'http://localhost:8000',
        process: {
            url: `/${filepondElm.dataset.url}`,
            method: 'POST',
            headers: {
                'Access-Control-Allow-Origin':'http://localhost:8000/upload | *',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                'Methods':'POST'
            }
        }
    } });
function deleteFile(fileName) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type : 'DELETE',
        url: "http://localhost:8000/delete",
        data : {filename : fileName},
        success: function(result){
            console.log(result)
            console.log('the file has been deleted')
        }});
}
// Select the file input and use
// create() to turn it into a pond
const filepond = FilePond.create(
    document.querySelector('.filepond') ,
    {
        onaddfile : (error , file)=>{
            if (error){
                console.error(error)
            }else {
                console.log(file.filename)
                console.log(file.fileExtention)
            }
} ,
        onremovefile : (error , file)=> {
            if (error){
                console.error(error)
            }else {
                console.log('the file will be '+file.filename)
                console.log(file.fileExtention)
                deleteFile(file.filename)
            }
        }
    }
);
document.querySelector('.filepond--credits').innerText = 'Powred By AOBC'
//create custom element

console.log(document.querySelector('popup-info') + ' pop-info')
