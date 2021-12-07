<label class="form-label" for="customFileLabel">Image</label>
<div class="form-control-wrap">
    <div class="custom-file">
        <button class="upload-widget btn btn-primary"> <em class="icon ni ni-upload"></em>&nbsp;Upload Image</button>
    </div>
    <div id="accordion" class="accordion" hidden>

    <div class="accordion-item">
        <a href="#" class="accordion-head collapsed" data-toggle="collapse" data-target="#accordion-item-1" aria-expanded="false">
            <span class="hide-accordion" style="position: absolute;right: 49px;"><em class="icon ni ni-power"></em></span>
            <h6 class="title">Preview</h6>
            <span class="accordion-icon"></span>

        </a>
        <div class="accordion-body collapse" id="accordion-item-1" data-parent="#accordion" style="">
            <div class="accordion-inner">
                <div class="imgPrev">

                </div>
                <button class="btn-success crop"> crop <em class="icon ni ni-crop"></em></button>
            </div>
        </div>
    </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" id="modalDefault">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header">
                <h5 class="modal-title">Modal Title</h5>
            </div>
            <div class="modal-body">
                <img src="" class="cropPreview">
            </div>
            <div class="modal-footer bg-light">

            </div>
        </div>
    </div>
</div>
<script>
    $('.upload-widget').on('click' , function (evt) {
        evt.preventDefault()
        if (document.querySelector('.my-image') !== undefined){
            $('.imgPrev').html('')
        }else {
            console.log('no image for the moment')
        }

        var myWidget =  cloudinary.openUploadWidget({    cloudName: "daog54j96",    uploadPreset: "ml_default",    sources: [ "local"],   showAdvancedOptions: true,    cropping: true,    multiple: false,    defaultSource: "local",    styles: {        palette: {            window: "#FFFFFF",            windowBorder: "#90A0B3",            tabIcon: "#0078FF",            menuIcons: "#5A616A",            textDark: "#000000",            textLight: "#FFFFFF",            link: "#0078FF",            action: "#FF620C",            inactiveTabIcon: "#0E2F5A",            error: "#F44235",            inProgress: "#0078FF",            complete: "#20B832",            sourceBg: "#E4EBF1"        },        fonts: {            default: {                active: true            }        }    }}, (err, result) => {   if (!err && result && result.event === 'success' ) {         console.log("Upload Widget event - ", result.info.secure_url); $('.cropPreview').attr('src' , result.info.secure_url) ; $('#modalDefault').modal('show') ; $('.custom-file').html(`<div class="user-avatar xl">
                                                                    <img src=${result.info.secure_url} alt="">
                                                                </div>`) }  });
        myWidget.open();
        let blobOne= ''
        console.dir(evt.target.value)

       if (document.querySelector('.my-image').isConnected){

       }else {
           console.log('no image for the moment')
       }

    })
    $('.hide-accordion').on('click' , function (evt) {
        $('#accordion').hide()
    })


</script>
