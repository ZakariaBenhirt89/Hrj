<x-app-layout>
    <div class="app-content content">
        <div class="content-wrapper container-xxl p-0">
            <div class="content-body">
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <h1 class="coip-title"> Orrienté Coip</h1>
                                <table id="example" class="display nowrap" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>nom et prénom</th>
                                        <th>center</th>
                                        <th>genre</th>
                                        <th>age</th>
                                        <th>data d'inscription</th>
                                        <th>nationalité</th>
                                        <th>etat</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if( count($forms) > 0)

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
                                                <td><span class="badge badge-glow bg-danger">coip</span></td>
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
                <section id="basic-datatable1">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <h1 class="coip-title"> Orrienté Hors-Coip</h1>
                                <table id="example2" class="display nowrap" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>nom et prénom</th>
                                        <th>center</th>
                                        <th>genre</th>
                                        <th>age</th>
                                        <th>data d'inscription</th>
                                        <th>nationalité</th>
                                        <th>accès</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if( count($hors) > 0)

                                        @foreach( $hors as $form)
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
                                                <td><span class="badge badge-glow bg-warning">hors-coip</span></td>
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

    </style>
    <script>
        $(document).ready(function() {
            $('#example').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'excel', 'pdf', 'print'
                ]
            } );
            $('#example2').DataTable( {
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
