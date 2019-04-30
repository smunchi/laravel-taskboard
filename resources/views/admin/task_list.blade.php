@extends('admin.master', ['menu' => 'tasks'])
@section('title', __('Tasks'))

@section('content')
    @include('admin.widget.page-title', ['title' => __('Tasks')])
    <div class="main-content-inner">
        <div class="row">
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="data-tables datatable-primary">
                                    <table class="table table-responsive text-center" id="tasks" width="100%">
                                        <thead class="text-capitalize primary">
                                        <tr class="primary">
                                            <th class="desktop">{{__('Title')}}</th>
                                            <th class="desktop modal-lg">{{__('Type')}}</th>
                                            
                                        </tr>
                                        <tr id="searchable">
                                            <th class="desktop"></th>
                                            <th class="desktop modal-lg"></th>                                            
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('#tasks').DataTable({
            bSortCellsTop: true,
            processing: true,
            serverSide: true,
            pageLength: 25,
            responsive: true,
            ajax: 'tasks',
            order: [2, 'desc'],
            autoWidth:false,
            columns: [
                {"data": "title"},               
                {"data": "type"},               
                { orderable: false, searchable: false}
            ],
            "dom": "<'row'" +               
                "<'col-md-4'f>" +
                ">" +
                "rt" +
                "<'row'" +              
                ">",
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'pdfHtml5'
            ]
        });

        $('#tasks #searchable th').each( function () {
            var title = $(this).closest('table').find('th').eq($(this).index()).text();
            $(this).html( '<input class="datatable-column-search" style="padding: 6px 4px; width:100%; max-width: 100%" type="text" placeholder="Search ' + title + '" />' );
        });

        var table = $('#tasks').DataTable();

        table.columns().every( function () {
            var that = this;

            $("#tasks thead input").on( 'keyup change', function () {
                if ( that.search() !== this.value ) {
                    that
                        .column( $(this).parent().index() )
                        .search( this.value )
                        .draw();
                }
            } );
        } );
    </script>
@endsection