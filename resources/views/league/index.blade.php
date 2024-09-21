@extends('layouts.index')

@section('content')


    <table id="team_table" class="display nowrap dataTable cell-border"
           style="width:100%">
        <thead>
        <tr>
            <th>#</th>
            <th>League Name</th>
            <th>Season name</th>
            <th>Detail</th>
        </tr>
        </thead>

        <tfoot>
        <tr>
            <th>#</th>
            <th>League Name</th>
            <th>Season name</th>
            <th>Detail</th>
        </tr>
        </tfoot>
    </table>

@endsection

@section('script')
    <script>
        dataTable = $('#team_table').DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/1.10.21/i18n/Turkish.json'
            },
            order: [
                [0, 'ASC']
            ],

            processing: true,
            serverSide: true,
            scrollX: true,
            scrollY: true,
            ajax: {
                url:'{!! route('league.fetch') !!}',
            },
            columns: [
                {data: 'DT_RowIndex', orderable: false, searchable: false},
                {data: 'name'},
                {data: 'season_id',orderable: false},
                {data: 'detail',orderable: false,searchable: false},
            ],
            success: function () {
            }
        });

    </script>
@endsection

