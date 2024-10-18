
@extends('layouts.index')
@section('content')
        <table id="team_table" class="display nowrap dataTable cell-border"
               style="width:100%">
            <thead>
            <tr>
                <th>#</th>
                <th>Team Name</th>
                <th>Games</th>
                <th>Win</th>
                <th>Draw</th>
                <th>Lose</th>
                <th>Point</th>
                <th>Detail</th>
            </tr>
            </thead>

            <tfoot>
            <tr>
                <th>#</th>
                <th>Team Name</th>
                <th>Win</th>
                <th>Draw</th>
                <th>Lose</th>
                <th>Point</th>
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
                url:'{!! route('fetch') !!}',
                data: {
                    'league_id':'{{$league->id}}',
                }
            },
            columns: [
                {data: 'DT_RowIndex', orderable: false, searchable: false},
                {data: 'name'},
                {data: 'games',orderable: false},
                {data: 'win',orderable: false},
                {data: 'draw',orderable: false},
                {data: 'lose',orderable: false},
                {data: 'point',orderable: false},
                {data: 'detail',orderable: false,searchable: false},
            ],
            success: function () {
            }
        });

    </script>
@endsection




