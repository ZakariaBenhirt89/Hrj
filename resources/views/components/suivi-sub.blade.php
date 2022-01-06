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

                                        <hr>
                                        <h1> Suivi</h1>

                                        <hr>
                                        <section id="multiple-column-form">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="card-header">

                                                        </div>
                                                        <div class="card-body">
                                                            <form class="form" action="{{ route('admin.store.suivi' , ['id' => $id]) }}" method="POST">
                                                               @csrf
                                                                <div class="row">
                                                                    <div class="col-md-6 col-12">
                                                                        <div class="mb-1">
                                                                            <label class="form-label" for="first-name-column">Date de suivi</label>
                                                                            <input type="text" id="fp-default" class="form-control flatpickr-basic flatpickr-input" name="datedesuivi" placeholder="YYYY-MM-DD" readonly="readonly">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-12">
                                                                        <div class="mb-1">
                                                                            <label class="form-label" for="last-name-column">Moyen de suivi</label>
                                                                            <select class="form-select" name="Moyen de suivi">
                                                                                <option></option>
                                                                                <option value="Appel">Appel</option>
                                                                                <option value="SMS">SMS</option>
                                                                                <option value="WhatsApp">WhatsApp</option>
                                                                                <option value="Visite">Visite</option>
                                                                                <option value="Accueil à L'Hrj">Accueil à L'Hrj</option>
                                                                                 <option value="autres"> autres</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-12">
                                                                        <div class="mb-1">
                                                                            <label class="form-label" for="city-column">Situation à la date de suivi</label>
                                                                            <select class="form-select" name="Situation à la date de suivi">
                                                                                <option></option>
                                                                                <option value="Stage">Stage</option>
                                                                                <option value="Formation">Formation</option>
                                                                                <option value="Emploi">Emploi</option>
                                                                                <option value="entrepreneuriat">entrepreneuriat</option>
                                                                                <option value="recherche d’emploi">recherche d’emploi</option>
                                                                                <option value="chômage volontaire">chômage volontaire</option>
                                                                                <option value="autres"> autres</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <h4>Pérennité dans la même situation</h4>
                                                                        <div class="mb-1">
                                                                            <label class="form-label" >debut</label>
                                                                            <input type="text" id="debut" class="form-control flatpickr-basic flatpickr-input active" name="debutPerinité" placeholder="YYYY-MM-DD" readonly="readonly">                                                                        </div>
                                                                        <div class="mb-1">
                                                                            <label class="form-label" >fin</label>
                                                                            <input type="text" id="fin" class="form-control flatpickr-basic flatpickr-input active" name="finPerinité" placeholder="YYYY-MM-DD" readonly="readonly">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 d-flex justify-content-between">
                                                                    <button id="suivi" type="submit" class="btn btn-gradient-success mt-1 me-1 waves-effect waves-float waves-light">Sauvegarder &nbsp;<i data-feather='save'></i></button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>



                                    </div>

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
      function checkDate(date1 , date2) {
          const d1 = new Date(date1)
          const d2 = new Date(date2)
          const diff = d2 - d1
          if (diff < 0){
              $('#debut').hasClass('is-valid') ? $("#debut").removeClass('is-valid').addClass('is-invalid') : $('#debut').addClass('is-invalid')
              $('#fin').hasClass('is-valid') ? $("#fin").removeClass('is-valid').addClass('is-invalid') : $('#fin').addClass('is-invalid')

          }else {
              $('#debut').hasClass('is-invalid') ? $("#debut").removeClass('is-invalid').addClass('is-valid') : $('#debut').addClass('is-valid')
              $('#fin').hasClass('is-invalid') ? $("#fin").removeClass('is-invalid').addClass('is-valid') : $('#fin').addClass('is-valid')
          }
      }
      let date1 = ""
      let date2 = ""
      $('#debut').on('change' , function (evt) {
          date1 = evt.target.value
          if (date1 !=="" && date2 !== ""){
              checkDate(date1 , date2)
          }
      })
      $('#fin').on('change' , function (evt) {
          date2 = evt.target.value
          if (date1 !=="" && date2 !== ""){
              checkDate(date1 , date2)
          }
      })
      $('#suivi').on('click' , function (evt) {
          evt.preventDefault()
          $(this).closest('form').submit()
      })
    </script>
</x-app-layout>
