<x-app-layout>
    <div class="app-content content">
        <div class="content-wrapper container-xxl p-0">
            <div class="content-body">
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <table id="example" class="display nowrap" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>nom et prénom</th>
                                        <th>center</th>
                                        <th>genre</th>
                                        <th>age</th>
                                        <th>data d'inscription</th>
                                        <th>nationalité</th>
                                        <th>PV de comité</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(\App\Models\Form::all()->count() > 0)

                                        @foreach( \App\Models\Form::where('center_form' , Auth::user()->center)->get() as $form)
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
                                                <td><div class="d-inline-flex"><a class="pe-1 dropdown-toggle hide-arrow text-primary" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical font-small-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></a><div class="dropdown-menu dropdown-menu-end"><a href="{{ route('admin.user.comite' , ['id' => $form->id]) }}" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text me-50 font-small-4"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>Details</a></div></div></td>

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
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                        <th>Pv de comité</th>
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
    </div>
    <style>
        [input='search']{
            margin-left: 12px;
        }
        .form-label-rtl{
            float: right;
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
</x-app-layout>
