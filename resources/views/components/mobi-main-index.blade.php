<x-app-layout>
    <div class="app-content content">
        <div class="content-wrapper container-xxl p-0">
            <div class="content-body">
                <section id="basic-datatable">
                    <button id="addMob" type="button" class="btn btn-success waves-effect waves-float waves-light mb-2 w-20" >Ajouter Mobilisation <i data-feather='plus'></i></button>
                    <div class="row">
                        <div class="col-12">
                            <div class="card" style="width : fit-content;">
                                    <table id="example" class="display nowrap" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>reférence</th>
                                            <th>nom et prénom</th>
                                            <th>center</th>
                                            <th>genre</th>
                                            <th>age</th>
                                            <th>data d'inscription</th>
                                            <th>nationalité</th>
                                            <th>lieu de naissance</th>
                                            <th>niveau scholaire</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(\App\Models\Form::all()->count() > 0)

                                        @foreach( \App\Models\Form::where('center_form' , Auth::user()->center)->where('identifiant','like' , 'acceuil%')->distinct()->get() as $form)
                                            <tr>
                                                @foreach( $form->fields()->where('type' , 'ref')->get() as $f)
                                                    <td>{{ $f->data }}</td>
                                                @endforeach
                                                @foreach( $form->fields()->where('type' , 'nom')->get() as $f)
                                                    @foreach( $form->fields()->where('type' , 'prenom')->get() as $p )
                                                        <td>{{ $f->data }} &nbsp; {{ $p->data }}</td>
                                                    @endforeach
                                                @endforeach
                                                        <td>{{ Auth::user()->center }}</td>
                                                    @foreach( $form->fields()->where('type' , 'sex')->get() as $f)
                                                        <td>{{ $f->data }}</td>
                                                    @endforeach
                                                    @foreach($form->fields()->where('type' , 'age')->get() as $f)
                                                        <td>{{ $f->data }}</td>
                                                    @endforeach
                                                        <td>{{ (new DateTime($form->created_at))->format('Y-m-d') }}</td>
                                                    @foreach( $form->fields()->where('type' , 'nation')->get() as $f)
                                                        <td>{{ $f->data }}</td>
                                                    @endforeach
                                                    @foreach( $form->fields()->where('type' , 'lieu-naissance')->get() as $f)
                                                        <td>{{ $f->data }}</td>
                                                    @endforeach
                                                    @foreach( $form->fields()->where('type' , 'niveauScholaire')->get() as $f)
                                                        <td>{{ $f->data }}</td>
                                                    @endforeach
                                                <td><div class="d-inline-flex"><a class="pe-1 dropdown-toggle hide-arrow text-primary" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical font-small-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></a><div class="dropdown-menu dropdown-menu-end"><a href="{{ route('admin.user.detail' , ['id' => $form->id]) }}" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text me-50 font-small-4"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>Details</a></div></div></td>

                                            </tr>

                                        @endforeach
                                        @else
                                         <div class="nothing">
                                             <h1>Désole rien à afficher</h1>
                                         </div>
                                        @endif
                                        </tbody>
                                        <tfoot>
                                        <tr>

                                        </tr>
                                        </tfoot>
                                    </table>
                            </div>
                        </div>
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
                            <h1 class="mb-1">Formulaire de Mobilisation</h1>
                        </div>
                        <form id="mobForm" class="row gy-1 pt-75" method="POST" action="{{ route('admin.mobi.create') }}" >
                            @csrf
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="chargéName">Nom du Chargé</label>
                                <label class="form-label form-label-rtl" for="chargéName">إسم المسؤول</label>
                                <input type="text" id="chargéName" name="chergéName" class="form-control" readonly="readonly" value="{{Auth::user()->name}}" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="dateMob">Heure et Date de mobilisation</label>
                                <label class="form-label form-label-rtl" for="dateMob">تاريخ و ساعة عملية التعبئة </label>
                                <input type="text" id="dateMob" name="dateMob" class="form-control" readonly="readonly"  />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="numMob">Nombre de sortie</label>
                                <label class="form-label form-label-rtl" for="numMob">عدد الخرجات التعبئة </label>
                                <input type="text" id="numMob" name="numMob" class="form-control"  />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="typeMob">Type de sortie</label>
                                <label class="form-label form-label-rtl" for="typeMob">نوع التعبئة </label>
                                <select class="form-select" name="typeMob">
                                    <option value="chez partenaire">chez partenaire</option>
                                    <option value="porte à porte">porte à porte</option>
                                    <option value="mobilisation interne">mobilisation interne</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="quartierMob">Quartiers</label>
                                <label class="form-label form-label-rtl" for="quartierMob">أحياء التعبئة</label>
                                <select id="quartierMob" class="js-example-basic-multiple" name="states[]" multiple="multiple">
                                    @if( Auth::user()->center == 'BN')
                                        <option value="AIN DEYAB">AIN DEYAB</option>
                                        <option value="AIN SEBAA">AIN SEBAA</option>
                                        <option value="AL FIDA">AL FIDA</option>
                                        <option value="HAY MOHAMEDI">HAY MOHAMEDI</option>
                                        <option value="LAHRAOUINE">LAHRAOUINE</option>
                                        <option value="L'ANCIENNE VILLE">L'ANCIENNE VILLE</option>
                                        <option value="MERS SELTAN">MERS SELTAN</option>
                                        <option value="MOULAY RACHID">MOULAY RACHID </option>
                                        <option value="ROCHES NOIRES">ROCHES NOIRES </option>
                                        <option value="SIDI BERNOUSSI">SIDI BERNOUSSI </option>
                                        <option value="SIDI OTHMAN ">SIDI OTHMAN  </option>
                                        <option value="AUTRES">AUTRES</option>
                                    @elseif( Auth::user()->center == 'PJN')
                                        <option value="BEN ABID">BEN ABID</option>
                                        <option value="TAMARIS">TAMARIS</option>
                                        <option value="DAR BOUAZZA LE CENTRE">DAR BOUAZZA LE CENTRE</option>
                                        <option value="OULAD HMED 1">OULAD HMED 1</option>
                                        <option value="OULAD HMED 2">OULAD HMED 2</option>
                                        <option value="OULAD AZZOUZ">OULAD AZZOUZ</option>
                                        <option value="HART LGHABA">HART LGHABA</option>
                                        <option value="OULAD ABOU OULAD HMIDA 1">OULAD ABOU OULAD HMIDA 1</option>
                                        <option value="OULAD ABOU OULAD HMIDA 2">OULAD ABOU OULAD HMIDA 2</option>
                                        <option value="HARET HAMRI 1">HARET HAMRI 1</option>
                                        <option value="HARET HAMRI 2">HARET HAMRI 2</option>
                                        <option value="ERRAHMA">ERRAHMA</option>
                                        <option value="AUTRES">AUTRES</option>
                                    @elseif( Auth::user()->center == 'MK')
                                        <option value="AIN HALOUF">AIN HALOUF</option>
                                        <option value="DAOURATE LOUZE">DAOURATE LOUZE</option>
                                        <option value="DOUAR EL HISSEN">DOUAR EL HISSEN</option>
                                        <option value="DOUAR MHIRCHA">DOUAR MHIRCHA</option>
                                        <option value="DOUAR MZABIYINE">DOUAR MZABIYINE</option>
                                        <option value="DOUAR SANYA">DOUAR SANYA</option>
                                        <option value="DOUAR ZITOUNA">DOUAR ZITOUNA</option>
                                        <option value="MKANSSA 1">MKANSSA 1</option>
                                        <option value="MKANSSA 2">MKANSSA 2</option>
                                        <option value="MKANSSA 3">MKANSSA 3</option>
                                        <option value="MKANSSA 4">MKANSSA 4</option>
                                        <option value="MKANSSA 5">MKANSSA 5</option>
                                        <option value="AUTRES">AUTRES</option>
                                    @elseif( Auth::user()->center == 'SD')
                                        <option value="AIN CHOCK">AIN CHOCK</option>
                                        <option value="BACHKOU">BACHKOU</option>
                                        <option value="BIN LEMDOUN">BIN LEMDOUN</option>
                                        <option value="BOUSKOURA">BOUSKOURA</option>
                                        <option value="CSEC-SM-HJ">CSEC-SM-HJ</option>
                                        <option value="DERB EL KHEIR">DERB EL KHEIR</option>
                                        <option value="DERB SULTAN">DERB SULTAN</option>
                                        <option value="EL OULFA">EL OULFA</option>
                                        <option value="HAY MOULAY ABDELLAH">HAY MOULAY ABDELLAH</option>
                                        <option value="INARA">INARA</option>
                                        <option value="LISSASFA">LISSASFA</option>
                                        <option value="NASSIM">NASSIM</option>
                                        <option value="SBATA">SBATA</option>
                                        <option value="SIDI MAAROUF">SIDI MAAROUF</option>
                                        <option value="AUTRES">AUTRES</option>
                                    @elseif( Auth::user()->center == 'BO')
                                        <option value="AL IZDIHAR">AL IZDIHAR</option>
                                        <option value="BOUSKOURA">BOUSKOURA</option>
                                        <option value="CHRAKA">CHRAKA</option>
                                        <option value="DRABNA">DRABNA</option>
                                        <option value="LAHOUAMI">LAHOUAMI</option>
                                        <option value="LAMSALHA">LAMSALHA</option>
                                        <option value="LGWASSAM 1">LGWASSAM 1</option>
                                        <option value="LGWASSAM 2">LGWASSAM 2</option>
                                        <option value="OULED BEN AMER">OULED BEN AMER</option>
                                        <option value="OULED MALEK">OULED MALEK</option>
                                        <option value="OULED SALEH">OULED SALEH</option>
                                        <option value="RMEL LAHLAL">RMEL LAHLAL</option>
                                        <option value="VICTORIA">VICTORIA</option>
                                        <option value="AUTRES">AUTRES</option>
                                    @endif
                                </select>
                            </div>
                            <div class="col-12 col-md-6" id="quertierSpef" hidden>
                                <label class="form-label" for="quertierAutre">Spécifier quartier</label>
                                <label class="form-label form-label-rtl" for="quertierAutre"> تحديد الشارع</label>
                                <input type="text" id="quertierAutre" name="quertierAutre" class="form-control" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="numMobHomme">nombre de mobilisé par homme</label>
                                <label class="form-label form-label-rtl" for="numMobHomme">عدد الدكور  </label>
                                <input type="text" id="numMobHomme" name="numMobHomme" class="form-control"   />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="numMobFemme">nombre de mobilisé par femme</label>
                                <label class="form-label form-label-rtl" for="numMobFemme">عدد اﻹناث  </label>
                                <input type="text" id="numMobFemme" name="numMobFemme" class="form-control"   />
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
        [input='search']{
            margin-left: 12px;
        }
        .form-label-rtl{
            float: right;
        }
        tr {
            border-top : solid 1px cornsilk;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('#example').DataTable( {
                dom: 'Bfrtip',
                "order": [[ 5, "desc" ]],
                buttons: [
                    'copy', 'excel', 'pdf', 'print'
                ]
            } );
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
            const printPrint = $('.buttons-print')
            printPrint.addClass('btn')
            printPrint.addClass('btn-primary')
            printPrint.addClass('waves-effect')
            printPrint.addClass('waves-float')
            printPrint.addClass('waves-light')
            printPrint.append("&nbsp;<i data-feather='printer'></i>")


        } );


    </script>
    <script>
        $('#addMob').on('click' , function (evt) {
            $('#mobilization').modal('show')
        })
        const d = new Date()
        var date_format_str = d.getFullYear().toString()+"-"+((d.getMonth()+1).toString().length==2?(d.getMonth()+1).toString():"0"+(d.getMonth()+1).toString())+"-"+(d.getDate().toString().length==2?d.getDate().toString():"0"+d.getDate().toString())+" "+(d.getHours().toString().length==2?d.getHours().toString():"0"+d.getHours().toString())+":"+((parseInt(d.getMinutes()/5)*5).toString().length==2?(parseInt(d.getMinutes()/5)*5).toString():"0"+(parseInt(d.getMinutes()/5)*5).toString())+":00";
        $('#dateMob').val(date_format_str)
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

    </script>
</x-app-layout>
