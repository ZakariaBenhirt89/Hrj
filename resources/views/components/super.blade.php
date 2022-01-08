<x-app-layout>
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Liste des admins</h2>
                            <div class="breadcrumb-wrapper">
                                <button id="add" type="button" class="btn btn-outline-success waves-effect">Ajouter un admin <i data-feather='user-plus'></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">

                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic Tables start -->
                <div class="row" id="basic-table">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Admin par centre</h4>
                            </div>
                            <div class="card-body">
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>identifiant</th>
                                        <th>center</th>
                                        <th>image</th>
                                        <th>Status</th>
                                        <th>action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(\App\Models\User::where('is_super' , null)->where('is_res' , false)->get() as $admin)
                                    <tr>
                                        <td>
                                            <span class="fw-bold">{{ $admin->name }}</span>
                                        </td>
                                        <td>{{ $admin->center }}</td>
                                        <td>
                                            <div class="avatar-group">
                                                @if($admin->profile_photo_path !== null)
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="" data-bs-original-title="{{ $admin->name }}">
                                                    <img src="{{ $admin->profile_photo_path }}" alt="Avatar" height="26" width="26">
                                                </div>
                                                @else
                                                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="" data-bs-original-title="{{ $admin->name }}">
                                                        <img src="https://res.cloudinary.com/dy6vgsgr8/image/upload/v1641386003/admin_cguqvn.svg" alt="Avatar" height="26" width="26">
                                                    </div>
                                                @endif

                                            </div>
                                        </td>
                                        <td>
                                            @if($admin->is_active)
                                            <span class="badge rounded-pill badge-light-success me-1">Activé</span>
                                            @else
                                                <span class="badge rounded-pill badge-light-primary me-1"> Désactivé</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0 waves-effect waves-float waves-light" data-bs-toggle="dropdown">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    @if($admin->is_active)
                                                        <a class="dropdown-item" href="{{ route('admin.dc.user' , ['id' => $admin->id]) }}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash me-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                                            <span>Désactivé</span>
                                                        </a>
                                                    @else
                                                        <a class="dropdown-item" href="{{ route('admin.ac.user' , ['id' => $admin->id]) }}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 me-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                            <span>Activé</span>
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Basic Tables end -->


            </div>
        </div>
    </div>
    <div class="modal fade" id="shareProject" tabindex="-1" aria-labelledby="shareProjectTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-sm-5 mx-50 pb-4">
                    <div class="">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Ajouté un Admin</h4>
                            </div>
                            <div class="card-body">
                                <form class="form form-horizontal" action="{{ route('admin.store.user') }}" method="POST">
                                   @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label" for="first-name">photo</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="file"  class="form-control filepond" name="filepond" accept="image/*" >
                                                    <input type="text" id="image" name="image" hidden>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label" for="first-name">First Name</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" id="first-name" class="form-control" name="fname" placeholder="First Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label" for="email-id">username</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="email" id="email-id" class="form-control" name="email-id" placeholder="Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label" for="contact-info">Mobile</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="number" id="contact-info" class="form-control" name="contact" placeholder="Mobile">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label" for="password">Password</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="password" id="password" class="form-control" name="password" placeholder="Password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label" >center</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <select class="form-select" id="" name="center">
                                                        <option value="BN">Belveder</option>
                                                        <option value="BO">Bouskoura</option>
                                                        <option value="SD">Sidi Maarouf</option>
                                                        <option value="PJN">PJN</option>
                                                        <option value="MK">Mkanssa</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 offset-sm-3">
                                            <div class="mb-1">
                                                <div class="form-check">
                                                    <button id="copy" type="button" class="btn btn-outline-success waves-effect">copy <i data-feather='copy'></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 offset-sm-3">
                                            <button id="add" type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .filepond--root{
            width : 100px;
        }
    </style>
    <script>

        $('#email-id').on('change' , function (evt) {
            if (evt.target.value.includes("@")){
                $(this).hasClass('is-valid') ? $(this).removeClass("is-valid") : ""
                $(this).hasClass('is-invalid') ? "" :  $(this).addClass("is-invalid")
                $('[type="submit"]').attr('disabled' , true)
            }else {
                $(this).hasClass('is-invalid') ? $(this).removeClass("is-invalid") : ""
                $(this).hasClass('is-valid') ? "" :  $(this).addClass("is-valid")
                $(this).val(evt.target.value+'@hrj.com')
                $('[type="submit"]').attr('disabled' , false)
            }
        })
        $('#add').on('click' , function(evt){
            $('#shareProject').modal('show')
        })

        $(document).ready(function () {
            FilePond.registerPlugin(
                FilePondPluginFileValidateType,
                FilePondPluginImageExifOrientation,
                FilePondPluginImagePreview,
                FilePondPluginImageCrop,
                FilePondPluginImageResize,
                FilePondPluginImageTransform,
                FilePondPluginImageEdit
            );
            FilePond.create(
                document.querySelector('.filepond'),
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
                            console.log('************ its there *************')
                            console.dir(file.id)
                            console.dir(file.file)
                            console.dir(file.serverId)
                            console.dir(JSON.parse(file.serverId)['result'])
                            const urlPhoto = "https://aobcrhrn2.eu-central-1.linodeobjects.com/"+JSON.parse(file.serverId)['result']
                            console.log(urlPhoto)
                            $('#image').val(urlPhoto)
                            console.log('*************************')

                        }
                    }
                }
            )

          function myFunction() {
                /* Get the text field */
                console.log('hello')
                var username = document.getElementById("email-id");
                var password = document.getElementById("password");

                /* Select the text field */
                let firstLine = ' username : '+ username.value
                //password

                let secondLine = ' password : '+ password.value
                let total = firstLine + '\n' + secondLine

                /* Copy the text inside the text field */
                navigator.clipboard.writeText(total).then(function() {
                    /* clipboard successfully set */
                    console.log()
                }, function() {
                    /* clipboard write failed */
                    console.log('failure copied')
                })

                /* Alert the copied text */
            }
            $('#copy').on('click' , function (evt) {
                console.log("copied")
                myFunction()
            })
            $('#id').on('click' , function (evt) {
                $(this).closest('form').submit()
            })
        })

    </script>
</x-app-layout>
