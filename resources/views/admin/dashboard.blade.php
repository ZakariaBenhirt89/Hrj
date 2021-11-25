<x-app-layout>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <!-- This example requires Tailwind CSS v2.0+ -->
 <x-main></x-main>
    <script>
        function showAnimation() {
            $('.animation-search').html('<div class="animate-spin rounded-full h-32 w-32 border-b-2 border-gray-900"></div>');
            return false;
        }

        console.log('this will be hidded')
        $('.animation-search').hide()
        $('.search-button').click(function() {
            showAnimation();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                }
            });

            $.ajax({
                type : 'GET',
                url: "http://localhost:8000/search",
                data : {filename : 'dajoxflLcX1PboXgfFXyuvN8IM0Ms17Bw4vOTRX3.png'},
                success: function(result){
                    console.log(result)
                    $('.animation-search').hide()
                    $(".search-results").html(`<h2> the result is ${result.result} </h2>`);
                }});

        });


    </script>
    <script>
        PSPDFKit.load({
            container: "#pspdfkit",
            document: window.location.protocol +'//'+window.location.host+'/storage/invoice.pdf'
        })
            .then(function(instance) {
                console.log("PSPDFKit loaded", instance);
            })
            .catch(function(error) {
                console.error(error.message);
            });
    </script>
</x-app-layout>
