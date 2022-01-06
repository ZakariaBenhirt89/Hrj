<x-app-layout>
    <div class="app-content content">
        <div class="content-wrapper container-xxl p-0">
            <div class="content-body">
                <section id="basic-datatable">

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <h1 class="coip-title">Susceptibilité Placement</h1>
                                <table id="example" class="display nowrap" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>nom et prénom</th>
                                        <th>center</th>
                                        <th>genre</th>
                                        <th>age</th>
                                        <th>data d'inscription</th>
                                        <th>nationalité</th>
                                        <th>action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($forms) > 0)

                                        @foreach( $forms as $form)
                                            <tr>
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
                                                <td><div class="d-inline-flex"><a class="pe-1 dropdown-toggle hide-arrow text-primary" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical font-small-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></a><div class="dropdown-menu dropdown-menu-end"><a href="{{ route('admin.user.placement' , ['id' => $form->id]) }}" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text me-50 font-small-4"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>Placement</a></div></div></td>
                                            </tr>

                                        @endforeach
                                    @else

                                    @endif
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Modal to add new record -->

                </section>
                <section id="basic-datatable">

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <h1 class="coip-title">Résultats du Placement</h1>
                                <table id="example1" class="display nowrap" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>nom et prénom</th>
                                        <th>center</th>
                                        <th>genre</th>
                                        <th>age</th>
                                        <th>data d'inscription</th>
                                        <th>nationalité</th>
                                        <th>placement</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @isset($place)

                                        @foreach( $place as $p)
                                            <tr>
                                                <td>{{ $p->fields()->where('type' , 'nom')->first()->data }} &nbsp; {{ $p->fields()->where('type' , 'prenom')->first()->data  }}</td>
                                                <td>{{ Auth::user()->center }}</td>
                                                <td>{{ $p->fields()->where('type' , 'sex')->first()->data }}</td>
                                                <td>{{  $p->fields()->where('type' , 'age')->first()->data }}</td>
                                                <td>{{ (new DateTime($p->created_at))->format('Y-m-d') }}</td>
                                                <td>{{ $p->fields()->where('type' , 'nation')->first()->data }}</td>
                                                <td><span class="badge badge-glow bg-success">Placé</span></td>
                                            </tr>

                                        @endforeach
                                    @endisset
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Modal to add new record -->

                </section>
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
        .coip-title{
            width: fit-content;
            margin-top : 8px;
            margin-left: 8px;
            border-bottom: 1px solid white;
        }
        th {
            height: 35px;
        }
        td {
            height: 42px;
        }

    </style>
    <script>
        $(document).ready(function() {
            $('#example').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'excel', 'pdf', 'print'
                ]
            } );
            $('#example1').DataTable( {
                dom: 'Bfrtip',
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

    </script>
</x-app-layout>
