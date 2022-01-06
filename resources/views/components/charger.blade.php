<x-app-layout>
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">


            </div>
            <div class="content-body">
                <button type="button" class="btn btn-primary waves-effect waves-float waves-light" data-bs-toggle="modal" data-bs-target="#createAppModal">
                    Ajouté un chargé&nbsp;<i data-feather='user-plus'></i>
                </button>
                <div class="container">
                    <div class="card card-company-table">
                        <div class="card-body p-0">
                            @isset($charge)
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>photo</th>
                                        <th>nom et prenom</th>
                                        <th>email</th>
                                        <th>telephone</th>
                                        <th>center</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($charge as $ch)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar rounded">
                                                    <div class="avatar-content">
                                                        <img src="{{$ch->fields()->where('type' , 'photoCharger')->first()->data}}" alt="Toolbar svg">
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="dd-flex flex-column">

                                                        <span class="fw-bolder mb-25">{{ $ch->fields()->where('type' , 'nomcharger')->first()->data  }} {{ $ch->fields()->where('type' , 'prenomcharger')->first()->data }}</span>

                                            </div>
                                        </td>
                                        <td class="text-nowrap">
                                            <div class="d-flex flex-column">
                                                <span class="fw-bolder mb-25">{{ $ch->fields()->where('type' , 'emailcharger')->first()->data }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <span class="fw-bolder mb-25">{{ $ch->fields()->where('type' , 'phonecharger')->first()->data }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <span class="fw-bolder me-1">{{ Auth::user()->center }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    @endisset
                    @empty($charge)
                        <h1>Désole il n'y a pas de chargé pour le moment</h1>
                    @endempty
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="createAppModal" tabindex="-1" aria-labelledby="createAppTitle" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Chargé d’accompagnement </h4>
                        </div>
                        <div class="card-body">
                            <form class="form form-horizontal" action="{{ route('admin.store.charger') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-1 row">
                                            <div class="col-sm-3">
                                                <label class="col-form-label" for="photoChergé">photo</label>
                                            </div>
                                            <div class="col-sm-9" id="pic">
                                                <input type="file" id="photoChergé"  class="form-control filepond" name="filepond" accept="image/png, image/jpeg, image/gif">
                                                <input type="text"   name="photoCharger" hidden>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-1 row">
                                            <div class="col-sm-3">
                                                <label class="col-form-label" for="first-name">nom</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text"  class="form-control" name="nomcharger" placeholder="First Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-1 row">
                                            <div class="col-sm-3">
                                                <label class="col-form-label" for="email-id">prenom</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text"  class="form-control" name="prenomcharger" placeholder="Last Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-1 row">
                                            <div class="col-sm-3">
                                                <label class="col-form-label" for="contact-info">Télephone</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="number" id="contact-info" class="form-control" name="phonecharger" placeholder="Mobile">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-1 row">
                                            <div class="col-sm-3">
                                                <label class="col-form-label" for="contact-info">Email</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="email" id="contact-info" class="form-control" name="emailcharger" placeholder="email">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-9 offset-sm-3">
                                        <button id="addCharger" type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">Ajouter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <style>
        .filepond--root {
            max-height: 100px;
            max-width: 100px;

        }
        td {
            height : 64px;
        }
        .container {
            margin-top: 18px;
        }
    </style>
    <script>
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
        FilePond.create(
            document.querySelector('#photoChergé'),
            {
                labelIdle: `Drag & Drop your picture or <span class="filepond--label-action">Browse</span>`,
                imagePreviewHeight: 50,
                imageCropAspectRatio: '1:1',
                imageResizeTargetWidth: 60,
                imageResizeTargetHeight: 60,
                stylePanelLayout: 'compact circle',
                styleLoadIndicatorPosition: 'center bottom',
                styleProgressIndicatorPosition: 'right bottom',
                styleButtonRemoveItemPosition: 'left bottom',
                styleButtonProcessItemPosition: 'right bottom',
                server: {
                    process: {
                        url: '{{ route('admin.image.store') }}',
                        method: 'POST',
                        headers: {
                            'Access-Control-Allow-Origin':'{{ route('admin.image.store') }} | *',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}' ,
                            'Methods':'POST'
                        }
                    }
                    ,
                    revert: {
                        url: '{{ route('admin.image.delete') }}',
                        method: 'POST',
                        headers: {
                            'Access-Control-Allow-Origin':'{{ route('admin.image.delete') }} | *',
                            'X-CSRF-TOKEN':'{{ csrf_token() }}',
                            '_method': 'DELETE'
                        }
                    }
                },
                onaddfile : (error , file)=>{
                    if (error){
                        console.error(error)
                    }else {
                        console.dir(file)
                        console.log(file.filename)

                    }
                },
                onremovefile : (error , file)=> {
                    if (error){
                        console.error(error)
                    }else {
                        console.log('the file will be '+file.filename)
                        console.log(file.fileExtention)

                    }
                } ,
                onprocessfile : (error , file) => {
                    if (error){
                        console.log(error)
                    }else {
                        console.log('*************************')
                        console.dir(JSON.parse(file.serverId)['result'])
                        const urlPhoto = "https://aobcrhrn2.eu-central-1.linodeobjects.com/"+JSON.parse(file.serverId)['result']
                        console.log(urlPhoto)
                        $('[name="photoCharger"]').val(urlPhoto)
                        console.log('*************************')

                    }
                }
            }
        );
        $(document).ready(function() {
            const width = $('#pic').width()
            const result = (width - 100)/2
            $('.filepond--root').css('transform' , 'translate('+result+'px, 10px)')
        })
        $('#addCharger').on('click' , function (evt) {
            evt.preventDefault()
            $(this).closest('form').submit()
        })
    </script>
    <script>
        $('.filepond').on('change' , function (evt) {
            const result = $(this).val()
            console.log('the result is ',result)
        })
    </script>
</x-app-layout>
