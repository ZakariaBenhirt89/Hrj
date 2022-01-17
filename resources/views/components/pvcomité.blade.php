<x-app-layout>
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">

            <div class="content-body">
                <div class="row">
                    <div class="col-12">


                        <!-- profile -->
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title">Details de profile</h4>
                            </div>
                            <div class="card-body py-2 my-25">
                                <!-- header section -->
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="me-25">
                                        <img src="{{ $url }}" id="account-upload-img" class="uploadedAvatar rounded me-50" alt="profile image" height="100" width="100">
                                    </a>
                                    <!-- upload and reset button -->
                                    <div class="coipLogo">
                                        <div>
                                         <img  src="https://res.cloudinary.com/dy6vgsgr8/image/upload/v1640792373/Sans_titre_500_x_250_px_hqg4sn.png">
                                        </div>
                                    </div>
                                    <!--/ upload and reset button -->
                                </div>
                                <!--/ header section -->

                                <!-- form -->
                                <form class="validate-form mt-2 pt-50" action="{{ route('admin.store.pv' , ['id' =>$id]) }}" method="POST" novalidate="novalidate">
                                     @csrf
                                    <div class="row">
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="accountFirstName">nom</label>
                                            <input type="text" class="form-control" id="accountFirstName" name="firstName"  readonly="readonly" value="{{ $nom }}" >
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="accountLastName">prenom</label>
                                            <input type="text" class="form-control" id="accountLastName" name="lastName" readonly="readonly" value="{{ $prenom }}" >
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="accountEmail">Email</label>
                                            <input type="email" class="form-control" id="accountEmail" name="email" readonly="readonly" value="{{ $email }}">
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="accountOrganization">CIN</label>
                                            <input type="text" class="form-control" id="accountOrganization" name="cin" readonly="readonly" value="{{ $cin }}">
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="accountPhoneNumber">Adresse</label>
                                            <input type="text" class="form-control account-number-mask" id="accountPhoneNumber" name="adresse" readonly="readonly" value="{{ $address }}">
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="phone">Phone</label>
                                            <input type="text" class="form-control account-number-mask" id="phone" name="phone" readonly="readonly" value="{{ $phone }}">
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="niveau-scholaire">Niveau Scholaire</label>
                                            <input type="text" class="form-control account-number-mask" id="niveau-scholaire" name="niveau-scholaire" readonly="readonly" value="{{ $nscholaire }}">
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" >Situation actuelle</label>
                                            <select class=" form-select " id="select2-basic" name="Situation actuelle">
                                                <option value="" data-select2-id="2"></option>
                                                <option value="chômage" data-select2-id="2">chômage</option>
                                                <option value="formation" data-select2-id="2">formation</option>
                                                <option value="stage" data-select2-id="2">stage</option>
                                                <option value="emploi" data-select2-id="2">emploi</option>
                                                <option value="informel" data-select2-id="2">informel</option>
                                                <option value="projet personnel" data-select2-id="2">projet personnel</option>
                                            </select>
                                        </div>
                                        <hr>
                                        <h1> Pv de Comité</h1>
                                        <div class="col-12 col-sm-6 mb-1 " id="ori">
                                            <label class="form-label" >Orienté Vers</label>
                                            <select class=" form-select " id="orientationToo" name="Orientation-too">
                                                <option value="" data-select2-id="2"></option>
                                                <option value="coip" data-select2-id="2">RFC</option>
                                                <option value="hors-coip" data-select2-id="2">hors coip</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1 " id="lieu">
                                            <label class="form-label" >Lieu D'orientation</label>
                                            <select class=" form-select " id="locationOrient" name="oriLocation">
                                                <option value="" data-select2-id="2"></option>
                                                <option value="Siège de Belvédère" data-select2-id="2">Siège de Belvédère</option>
                                                <option value="Centre de Formation par Apprentissage de Mkanssa" data-select2-id="2">Centre de Formation par Apprentissage de Mkanssa</option>
                                                <option value="Centre de Formation par Apprentissage de Bouskoura" data-select2-id="2">Centre de Formation par Apprentissage de Bouskoura</option>
                                                <option value="Centre de Formation par Apprentissage de Chouhada" data-select2-id="2">Centre de Formation par Apprentissage de Chouhada</option>
                                                 <option value="autre">Autre</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1 ">
                                            <label class="form-label" >Membres de Comité</label>
                                            <select class="form-select js-example-basic-single"  name="comité-members[]" multiple="multiple">
                                            @if(\App\Models\Form::where('identifiant','member comite')->where('center_form' , Auth::user()->center)->count()  > 0)
                                            @foreach( \App\Models\Form::where('identifiant','member comite')->where('center_form' , Auth::user()->center)->get() as $com)
                                                    <option value="{{ $com->data }}"> {{ $com->data }} </option>
                                                @endforeach
                                                @else
                                                <option value=""> rien pas de chargé </option>
                                                @endif
                                            </select>
                                        </div>
                                        <hr>
                                        <div class="col-12 col-sm-6 mb-1 ">
                                            <label class="form-label" >Remarques</label>
                                            <textarea class="form-control" i rows="3" name="remarqueOrientation" placeholder="Remarques..........."></textarea>
                                        </div>


                                        <div class="col-12 d-flex justify-content-between">
                                            <button id="sbOri" type="submit" class="btn btn-gradient-success mt-1 me-1 waves-effect waves-float waves-light">Sauvegarder &nbsp;<i data-feather='save'></i></button>
                                            <button id="addMember" class="btn btn-primary mt-1 me-1 waves-effect waves-float waves-light">Ajouter un membre de comité &nbsp; <i data-feather='user-plus'></i></button>

                                        </div>
                                    </div>
                                </form>
                                <!--/ form -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="modal" id="addNewCard" tabindex="-1" aria-labelledby="addNewCardTitle"  aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-sm-5 mx-50 pb-5">
                    <h1 class="text-center mb-1" id="addNewCardTitle">Definire un membre de comité </h1>
                    <p class="text-center"> nom et prenom du membre</p>
                    <!-- form -->
                    <form id="addNewCardValidation" class="row gy-1 gx-2 mt-75" action="{{ route('admin.add.member') }}" method="POST" novalidate="novalidate">
                       @csrf
                        <div class="col-12">
                            <label class="form-label" for="modalAddCardNumber">Nom et Prenom</label>
                            <div class="input-group input-group-merge">
                                <input  name="nameDeMembre" class="form-control add-credit-card-mask" type="text" >
                                <input  name="id" class="form-control add-credit-card-mask" type="text" value="{{ $id }}" hidden>

                                <span class="input-group-text cursor-pointer p-25" id="modalAddCard2">
                                                <span class="add-card-type"></span>
                                            </span>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" id="modalCommité" class="btn btn-primary me-1 mt-1 waves-effect waves-float waves-light">Definir</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <style>
        .coipLogo{
            margin-right:-49px;
        }
    </style>
    <script>
        $('#orientationToo').on('change' , function (evt) {
            if (evt.target.value === 'hors-coip'){
                $('#ori').after(`
                 <div class="col-12 col-sm-6 mb-1 " id="target">
                                            <label class="form-label" >à pricisé</label>
                                            <select class=" form-select "  name="hors-coip">
                                                <option value="" data-select2-id="2"></option>
                                                <option value="formation" data-select2-id="2">formation</option>
                                                <option value="emploi" data-select2-id="2">emploi</option>
                                                <option value="stage" data-select2-id="2">stage</option>
                                                <option value="entrepreneuriat" data-select2-id="2">entrepreneuriat</option>
                                            </select>
                                        </div>
                `)
            }else {
                if ($('#target') !== 0){
                    $('#target').remove()

                }
            }
        })
        $('#locationOrient').on('change' , function (evt) {
            if (evt.target.value === 'autre'){
                $('#lieu').after(` <div class="col-12 col-sm-6 mb-1 " id="lieuPrecise">
                                            <label class="form-label" >à pricisé le lieu du formation</label>
                                             <input type="text" class="form-control" " name="lieu-de-formation"  >
                                        </div>`)
            }else {
                if ($('#lieuPrecise').length !== 0){
                    $('#lieuPrecise').remove()
                }
            }
        })
        $('.js-example-basic-single').select2();
        $("#addMember").on('click' , function (evt) {
            evt.preventDefault()
            $('#addNewCard').modal('show')
        })
        $('#modalCommité').on('click' , function (evt) {
            $(this).closest('form').submit()
        })
        $('#sbOri').on('click' , function (evt) {
            evt.preventDefault()
            $(this).closest('form').submit()
        })
    </script>
</x-app-layout>
