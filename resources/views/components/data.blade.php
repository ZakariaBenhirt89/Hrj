<x-app-layout>
    <div class="app-content content">
        <div class="content-wrapper container-xxl p-0">
            <div class="content-body">
                <section id="basic-datatable">
                    <div class="d-flex justify-content-between">
                        <button id="tsiMob" type="button" class="btn btn-gradient-success waves-effect waves-float waves-light mb-2 w-20" >TSI Mobilisation <i data-feather='plus'></i></button>
                        <button id="tsiAcc" type="button" class="btn btn-gradient-danger waves-effect waves-float waves-light mb-2 w-20" >TSI Acceuil <i data-feather='plus'></i></button>
                        <button id="tsiOri" type="button" class="btn btn-gradient-secondary waves-effect waves-float waves-light mb-2 w-20" >TSI Orrientation <i data-feather='plus'></i></button>
                        <button id="tsiRfc" type="button" class="btn btn-gradient-warning waves-effect waves-float waves-light mb-2 w-20" >TSI RFC <i data-feather='plus'></i></button>
                        <button id="tsiPlacement" type="button" class="btn btn-gradient-info waves-effect waves-float waves-light mb-2 w-20" >TSI Placement <i data-feather='plus'></i></button>
                        <button id="tsiSuivi" type="button" class="btn btn-gradient-dark waves-effect waves-float waves-light mb-2 w-20" >TSI Suivi <i data-feather='plus'></i></button>

                    </div>


                    <div class="row">
                        @isset($mobi)
                        <div class="col-12">
                            <div class="card " style="width : fit-content;">
                                <h4 class="tsiTitle"> Tsi Mobilisation</h4>
                                <table id="example" class="display" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th> Date </th>
                                        <th>Nombre de jeunes mobilisés</th>
                                        <th>Nombre de sorties</th>
                                        <th>sorties par quartiers</th>
                                        <th>sorties par partenaire</th>
                                        <th>interne</th>
                                        <th>Nombre de nouveaux partenaires de mobilisation</th>
                                        <th>Nombre de partenaires visités</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($mobi as $m)
                                    <tr data-mobi="{{$m->id}}">
                                        <td class="date-mobi" id="{{ $m->id }}"> {{ $m->created_at }}</td>
                                        <td class="njmb">{{ $m->fields()->where('type', 'Nombre_de_jeunes_mobilisés')->first()->data }}</td>
                                        <td>{{ $m->fields()->where('type', 'Nombre_de_sorties')->first()->data }}</td>
                                        <td>{{ $m->fields()->where('type', 'Nombre_de_sorties_par_quartier')->first()->data }}</td>
                                        <td>{{ $m->fields()->where('type', 'Nombre_de_sorties_par_partenaire')->first()->data }}</td>
                                        <td class="njmc">{{ $m->fields()->where('type', 'Nombre_de_Mobilisation_interne')->first()->data }}</td>
                                        <td>{{ $m->fields()->where('type', 'Nombre_de_nouveaux_partenaires_de_mobilisation')->first()->data }}</td>
                                        <td>{{ $m->fields()->where('type', 'Nombre_de_partenaires_visités')->first()->data }}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @endisset
                            @isset($acc)
                                <div class="col-12 ">
                                    <div class="card accueil" style="width : fit-content;">
                                        <h4 class="tsiTitle acc"> Tsi Accueil</h4>
                                        <table id="example1" class="display" style="width:100%">
                                            <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Total des jeunes Accueillis</th>
                                                <th>Nombre de jeunes accueillis  Via le chargé de mobilisation</th>
                                                <th>Nombre de jeunes accueillis Via le bouche à oreille</th>
                                                <th>Nombre de jeunes accueillis Via les réseaux sociaux</th>
                                                <th>Nombre de jeunes accueillis Via les partenaires</th>
                                                <th>Nombre de jeunes accueillis Via les ambassadeurs de la COIP</th>
                                                <th>Nombre de jeunes accueillis Via d'autres sources de mobilisation</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($acc as $s)
                                            <tr data-acc="{{$s->id}}">
                                                <td class="date-acc" id="{{ $s->id }}"> {{ $s->created_at }}</td>
                                                <td>{{ $s->fields()->where('type', 'Total_des_jeunes_Accueillis')->first()->data }}</td>
                                                <td>{{ $s->fields()->where('type', 'Nombre_de_jeunes_accueillis__Via_le_chargé_de_mobilisation')->first()->data }}</td>
                                                <td>{{ $s->fields()->where('type', 'Nombre_de_jeunes_accueillis_Via_le_bouche_à_oreille')->first()->data }}</td>
                                                <td>{{ $s->fields()->where('type', 'Nombre_de_jeunes_accueillis_Via_les_réseaux_sociaux')->first()->data }}</td>
                                                <td>{{ $s->fields()->where('type', 'Nombre_de_jeunes_accueillis_Via_les_ambassadeurs_de_la_COIP')->first()->data }}</td>
                                                <td>{{ $s->fields()->where('type', 'Nombre_de_jeunes_accueillis_Via_les_partenaires')->first()->data }}</td>
                                                <td>{{ $s->fields()->where('type', "Nombre_de_jeunes_accueillis_Via_d'autres_sources_de_mobilisation")->first()->data }}</td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <hr>
                            @endisset
                    </div>

                    <!-- Modal to add new record -->
                    <div class="modal modal-slide-in fade" id="modals-slide-in">
                        <div class="modal-dialog sidebar-sm">
                            <form class="add-new-record modal-content pt-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                                <div class="modal-header mb-1">
                                    <h5 class="modal-title" id="exampleModalLabel">New Record</h5>
                                </div>
                                <div class="modal-body flex-grow-1">
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                                        <input type="text" class="form-control dt-full-name" id="basic-icon-default-fullname" placeholder="John Doe" aria-label="John Doe">
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-post">Post</label>
                                        <input type="text" id="basic-icon-default-post" class="form-control dt-post" placeholder="Web Developer" aria-label="Web Developer">
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-email">Email</label>
                                        <input type="text" id="basic-icon-default-email" class="form-control dt-email" placeholder="john.doe@example.com" aria-label="john.doe@example.com">
                                        <small class="form-text"> You can use letters, numbers &amp; periods </small>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-date">Joining Date</label>
                                        <input type="text" class="form-control dt-date flatpickr-input" id="basic-icon-default-date" placeholder="MM/DD/YYYY" aria-label="MM/DD/YYYY" readonly="readonly">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="basic-icon-default-salary">Salary</label>
                                        <input type="text" id="basic-icon-default-salary" class="form-control dt-salary" placeholder="$12000" aria-label="$12000">
                                    </div>
                                    <button type="button" class="btn btn-primary data-submit me-1 waves-effect waves-float waves-light">Submit</button>
                                    <button type="reset" class="btn btn-outline-secondary waves-effect" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="modal fade" id="mobilization" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
                <div class="modal-content">
                    <div class="modal-header bg-transparent">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pb-5 px-sm-5 pt-50">
                        <div class="text-center mb-2">
                            <h1 class="mb-1">Indicature de Mobilisation</h1>
                        </div>
                        <form id="mobForm" class="row gy-1 pt-75" method="POST" action="{{ route('admin.store.data' , ['type' => 'mobi']) }}" >
                            @csrf
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="chargéName">effectué par</label>
                                <input type="text" id="chargéName" name="chergéName" class="form-control" readonly="readonly" value="{{Auth::user()->name}}" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="dateMob">Heure et Date de d'operation</label>
                                <input type="text" id="dateMob" name="dateMob" class="form-control" readonly="readonly"  />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="numMob">Nombre de jeunes mobilisés</label>
                                <input type="number" id="numMob" name="Nombre de jeunes mobilisés" class="form-control"  />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="typeMob">Nombre de sorties 'globale'</label>
                                <input type="number" id="numMob" name="Nombre de sorties" class="form-control"  />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="typeMob">Nombre de sorties par quartier</label>
                                <input type="number" id="numMob" name="Nombre de sorties par quartier" class="form-control"  />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="typeMob">Nombre de sorties par partenaire</label>
                                <input type="number" id="numMob" name="Nombre de sorties par partenaire" class="form-control"  />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="typeMob">Nombre de Mobilisation interne </label>
                                <input type="number" id="numMob" name="Nombre de Mobilisation interne" class="form-control"  />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="typeMob">Nombre de nouveaux partenaires de mobilisation</label>
                                <input type="number" id="numMob" name="Nombre de nouveaux partenaires de mobilisation" class="form-control"  />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="typeMob">Nombre de partenaires visités</label>
                                <input type="number" id="numMob" name="Nombre de partenaires visités" class="form-control"  />
                            </div>

                            <div class="col-12 text-center mt-2 pt-50">
                                <button type="submit" class="btn btn-primary me-1">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="accueil" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
                <div class="modal-content">
                    <div class="modal-header bg-transparent">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pb-5 px-sm-5 pt-50">
                        <div class="text-center mb-2">
                            <h1 class="mb-1">Indicature d'acceuil</h1>
                        </div>
                        <form id="mobForm" class="row gy-1 pt-75" method="POST" action="{{ route('admin.store.data' , ['type' => 'acc']) }}" >
                            @csrf
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="chargéName">effectué par</label>
                                <input type="text" id="chargéName" name="chergéName" class="form-control" readonly="readonly" value="{{Auth::user()->name}}" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="dateMob">Heure et Date de d'operation</label>
                                <input type="text" id="dateMob" name="dateMob" class="form-control" readonly="readonly"  />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="numMob">Total des jeunes Accueillis</label>
                                <input type="number" id="numMob" name="Total des jeunes Accueillis" class="form-control"  />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="typeMob">Nombre de jeunes accueillis  Via le chargé de mobilisation</label>
                                <input type="number" id="numMob" name="Nombre de jeunes accueillis  Via le chargé de mobilisation" class="form-control"  />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="typeMob">Nombre de jeunes accueillis Via le bouche à oreille</label>
                                <input type="number" id="numMob" name="Nombre de jeunes accueillis Via le bouche à oreille" class="form-control"  />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="typeMob">Nombre de jeunes accueillis Via les réseaux sociaux</label>
                                <input type="number" id="numMob" name="Nombre de jeunes accueillis Via les réseaux sociaux" class="form-control"  />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="typeMob">Nombre de jeunes accueillis Via les ambassadeurs de la COIP</label>
                                <input type="number" id="numMob" name="Nombre de jeunes accueillis Via les ambassadeurs de la COIP" class="form-control"  />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="typeMob">Nombre de jeunes accueillis Via les partenaires</label>
                                <input type="number" id="numMob" name="Nombre de jeunes accueillis Via les partenaires" class="form-control"  />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="typeMob">Nombre de jeunes accueillis Via d'autres sources de mobilisation</label>
                                <input type="number" id="numMob" name="Nombre de jeunes accueillis Via d'autres sources de mobilisation" class="form-control"  />
                            </div>

                            <div class="col-12 text-center mt-2 pt-50">
                                <button type="submit" class="btn btn-primary me-1">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
   .tsiTitle{
       width: fit-content;
       margin: 14px;
       border-bottom: 1px solid #5316af;
   }


    </style>
    <script>
        $(document).ready(function() {
            $('.display').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                     'excel', 'pdf'
                ]
            } );
            // if ($('#example1').length){
            //     $('#example1').DataTable( {
            //         dom: 'Bfrtip',
            //         buttons: [
            //             'excel', 'pdf'
            //         ]
            //     } );
            // }

            const copyBtn = $('.buttons-copy')
            console.log(copyBtn)
            copyBtn.addClass('btn')
            copyBtn.addClass('btn-primary')
            copyBtn.addClass('waves-effect')
            copyBtn.addClass('waves-float')
            copyBtn.addClass('waves-light')
            copyBtn.append("&nbsp;<i data-feather='copy'></i>")
            $('[type="search"]').addClass("ml-10")
            $('.dataTables_info').hide()
            $('.dt-buttons').css('padding' , '26px')
            $('.dataTables_filter').css('padding' , '8px')
            // csv buttons
            const csvButton = $('.buttons-excel')
            csvButton.addClass('btn')
            csvButton.addClass('btn-primary')
            csvButton.addClass('waves-effect')
            csvButton.addClass('waves-float')
            csvButton.addClass('waves-light')
            csvButton.append("&nbsp;<i data-feather='file-plus'></i>")
            //pdf buttons
            const buttonPdf = $('.buttons-pdf')
            buttonPdf.addClass('btn')
            buttonPdf.addClass('btn-primary')
            buttonPdf.addClass('waves-effect')
            buttonPdf.addClass('waves-float')
            buttonPdf.addClass('waves-light')
            buttonPdf.append("&nbsp;<i data-feather='arrow-down'></i>")
            // print buttons



        } );


    </script>
    <script>
        $('#tsiMob').on('click' , function (evt) {
            $('#mobilization').modal('show')
        })
        $('#tsiAcc').on('click' , function (evt) {
            $('#accueil').modal('show')
        })
        const d = new Date()
        var date_format_str = d.getFullYear().toString()+"-"+((d.getMonth()+1).toString().length==2?(d.getMonth()+1).toString():"0"+(d.getMonth()+1).toString())+"-"+(d.getDate().toString().length==2?d.getDate().toString():"0"+d.getDate().toString())+" "+(d.getHours().toString().length==2?d.getHours().toString():"0"+d.getHours().toString())+":"+((parseInt(d.getMinutes()/5)*5).toString().length==2?(parseInt(d.getMinutes()/5)*5).toString():"0"+(parseInt(d.getMinutes()/5)*5).toString())+":00";
        $('[name="dateMob"]').val(date_format_str)
        let multiple =   $('.js-example-basic-multiple').select2();

        multiple.on('change' , function (evt) {
            console.log(evt.target.value)
            if (evt.target.value === 'AUTRES'){
                $('#quertierSpef').attr('hidden' , false)
            }else {
                $('#quertierSpef').attr('hidden' , true)
            }
        })
    </script>
    <script>
        $('#numMob').on('input' , function (evt) {
            const regex = new RegExp('[0-9]+')
            if (regex.test(evt.target.value)){
                $(this).hasClass('is-invalid') ? $(this).removeClass('is-invalid') : ''
                $(this).hasClass('is-valid') ? '' : $(this).addClass('is-valid')
            }else {
                $(this).hasClass('is-valid') ? $(this).removeClass('is-valid') : ''
                $(this).hasClass('is-invalid') ? '' :  $(this).addClass('is-invalid')
            }
        })
        $('#numMobHomme').on('input' , function (evt) {
            const regex = new RegExp('[0-9]+')
            if (regex.test(evt.target.value)){
                $(this).hasClass('is-invalid') ? $(this).removeClass('is-invalid') : ''
                $(this).hasClass('is-valid') ? '' : $(this).addClass('is-valid')
            }else {
                $(this).hasClass('is-valid') ? $(this).removeClass('is-valid') : ''
                $(this).hasClass('is-invalid') ? '' :  $(this).addClass('is-invalid')
            }
        })
        $('#numMobFemme').on('input' , function (evt) {
            const regex = new RegExp('[0-9]+')
            if (regex.test(evt.target.value)){
                $(this).hasClass('is-invalid') ? $(this).removeClass('is-invalid') : ''
                $(this).hasClass('is-valid') ? '' : $(this).addClass('is-valid')
            }else {
                $(this).hasClass('is-valid') ? $(this).removeClass('is-valid') : ''
                $(this).hasClass('is-invalid') ? '' :  $(this).addClass('is-invalid')
            }
        })
       $('[type="submit"]').on('click' , function (evt) {
           $(this).closest('form').submit()
       })
    </script>
    <script>
       $(document).ready(function () {
           const component = `<section id="genere">
                    <div class="row">

                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Generer les taux en %</h4>
                                </div>
                                <div class="card-body">

                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-column">données mobilisation</label>
                                                    <select class="form-select" id="basicSelect1">
                                             @isset($mobi)
           <option> </option>
@foreach($mobi as $ac)
           <option value="{{ $ac->created_at }}">{{ $ac->created_at }}</option>
                                            @endforeach
           @endisset
                                        </select>
                                                </div>
                                            </div>
                                         <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-column">données acceuil</label>
                                                    <select class="form-select" id="basicSelect2">
                                          @isset($acc)
               <option> </option>
                                          @foreach($acc as $ac)
                                            <option value="{{ $ac->created_at }}">{{ $ac->created_at }}</option>
                                            @endforeach
                                            @endisset
                                        </select>
                                                </div>
                                            </div>





                                            <div class="col-12">
                                                <button id="createTaux" class="btn btn-danger me-1 waves-effect waves-float waves-light">generé</button>
                                                <button id="exportTaux" class="btn btn-success me-1 waves-effect waves-float waves-light">export</button>
                                            </div>
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                     <div class="row" id="tauxHolder">
                     </div>
                     </div>
                </section>`
           $('.accueil').append(component)
           const mobi = new Map()
           const acc = new Map()
           const track1 = new Map()
           const track2 = new Map()
           let arr1 = []
           let arr2 = []
           $('.date-mobi').each(function () {
               mobi.set( (new Date($(this).text())).valueOf() , $(this).attr('id') )
           })
           $('.date-acc').each(function () {
               acc.set( (new Date($(this).text())).valueOf() , $(this).attr('id') )
           })
           console.table(mobi)
           console.table(acc)
           $('#basicSelect1').on('change' , function (evt) {
               arr1 = []
               if (track1.get('tr1') !== null){
                   const selector = '[data-mobi="'+track1.get('tr1')+'"]'
                   $(selector).removeClass('border-success')
               }
               console.log(new Date(evt.target.value))
               console.log('the id ', mobi.get((new Date(evt.target.value)).valueOf()))
               const id = "#" + mobi.get((new Date(evt.target.value)).valueOf())
               $(id).closest('tr').toggleClass('border-success')
               $(id).siblings().each(function () {
                   arr1.push($(this).text())
               })
               track1.set('tr1' ,  $(id).closest('tr').attr('data-mobi'))
               console.table(track1)
               console.log('the length ', arr1.length)
               console.log(arr1)

           })
           $('#basicSelect2').on('change' , function (evt) {
               arr2 = []
               if (track2.get('tr2') !== null){
                   const selector = '[data-acc="'+track2.get('tr2')+'"]'
                   $(selector).removeClass('border-success')
               }
               console.log(new Date(evt.target.value))
               console.log(' the id ', acc.get((new Date(evt.target.value)).valueOf()))
               const id = "#" + acc.get((new Date(evt.target.value)).valueOf())
               $(id).closest('tr').toggleClass('border-success')
               $(id).siblings().each(function () {
                   arr2.push($(this).text())
               })
               track2.set('tr2' , $(id).closest('tr').attr('data-acc') )
               console.table(track2)
               console.log('the lenght is ' , arr2.length)
               console.dir(arr2)
           })
           $('#createTaux').on('click' , function (evt) {
               evt.preventDefault()
               console.log('create table')
               const table = document.createElement('table')
               table.classList.add('display');
               table.setAttribute('id' , 'new')
               const thead = document.createElement('tr')
               const tr = document.createElement('thead')
               const tr1 = document.createElement('th')
               const tr2 = document.createElement('th')
               const tr3 = document.createElement('th')
               const tr4 = document.createElement('th')
               const tr5 = document.createElement('th')
               const tr6 = document.createElement('th')
               const tr7 = document.createElement('th')
               const tr8 = document.createElement('th')
               tr1.innerText = 'Taux de mobilisation via le chargé de mobilisation'
               tr2.innerText = 'Taux de mobilisation via le bouche à oreille'
               tr3.innerText = 'Taux de mobilisation via les réseaux sociaux'
               tr4.innerText = 'Taux de mobilisation via les partenaires'
               tr5.innerText = 'Taux de mobilisation via les ambassadeurs de la COIP'
               tr6.innerText = "Taux de mobilisation via d'autres sources de provenance"
               tr7.innerText = 'Taux de mobilisation'
               tr8.innerText = "Taux de Transformation"
               thead.appendChild(tr1)
               thead.appendChild(tr2)
               thead.appendChild(tr3)
               thead.appendChild(tr4)
               thead.appendChild(tr5)
               thead.appendChild(tr6)
               thead.appendChild(tr7)
               thead.appendChild(tr8)
               tr.append(thead)
               table.appendChild(tr)
               const body = document.createElement('tbody')
               body.setAttribute('id' , 'tauxAccId')
               if ($('#tauxAccId').length){
                   const row = document.createElement('tr')
                   for (let i = 0; i < 8 ; i++) {
                       const td = document.createElement('td')
                       if(i < 6){
                           let data = Math.floor(parseInt(arr2[i+1]) / parseInt(arr2[0]) * 100)
                           td.innerText = data+' %'
                           row.appendChild(td)
                       }
                       if (i === 6){
                           let data = Math.floor(parseInt(arr2[0]) / parseInt(arr1[4]) * 100)
                           td.innerText = data+' %'
                           row.appendChild(td)
                       }
                       if (i === 7){
                           let data = Math.floor(parseInt(arr2[0]) / parseInt(arr1[0]) * 100)
                           td.innerText = data+' %'
                           row.appendChild(td)
                       }
                   }
                   document.getElementById('tauxAccId').appendChild(row)

               }else {
                   const second = document.createElement('tr')
                   for (let i = 0; i < 8 ; i++) {
                       const td = document.createElement('td')
                       if(i < 6){
                           let data = Math.floor(parseInt(arr2[i+1]) / parseInt(arr2[0]) * 100)
                           td.innerText = data+' %'
                           second.appendChild(td)
                       }
                       if (i === 6){
                           let data = Math.floor(parseInt(arr2[0]) / parseInt(arr1[4]) * 100)
                           td.innerText = data+' %'
                           second.appendChild(td)
                       }
                       if (i === 7){
                           let data = Math.floor(parseInt(arr2[0]) / parseInt(arr1[0]) * 100)
                           td.innerText = data+' %'
                           second.appendChild(td)
                       }
                   }
                   body.appendChild(second)
                   table.appendChild(body)
                   document.getElementById('tauxHolder').appendChild(table)
                   $('#new').dataTable({
                       dom: 'Bfrtip',
                       buttons: [
                           'excel', 'pdf'
                       ] ,
                       select: true
                   } )
               }


           })
           $('#exportTaux').on('click' , function (evt) {
               evt.preventDefault()
               console.log("*******************")
               if ($('#new').length){
                   $("#new").table2excel({


                       exclude:".noExl",

                       name:"Worksheet Name",

                       filename:"SomeFile",//do not include extension

                       fileext:".xls" // file extension

                   });

               }else {
                   console.log('nothing to do ')
               }
           })
       })
    </script>

</x-app-layout>
