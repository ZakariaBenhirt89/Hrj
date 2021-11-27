require('./bootstrap');


import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

console.log('holla')
console.dir(DataTable)
console.log(document.querySelector('#mobilization'))
console.log('jquery')
$(document).ready(function() {
    console.dir(document)
    console.log('jquery')
    $('#mobilization').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
