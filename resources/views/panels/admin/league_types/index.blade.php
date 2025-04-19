@extends('layouts.index')
@section('content')


    <button class="btn btn-primary mb-4" onclick="create()">Add</button>

    <table id="player_table" class="display nowrap dataTable cell-border"
           style="width:100%">
        <thead>
        <tr>
            <th>#</th>
            <th></th>
            <th>Played</th>
            <th>Goals</th>
            <th>Assist</th>
        </tr>
        </thead>

        <tfoot>
        <tr>
            <th>#</th>
            <th>Player Name</th>
            <th>Played</th>
            <th>Goals</th>
            <th>Assist</th>
        </tr>
        </tfoot>
    </table>
@endsection
@section('script')
    <script>
        dataTable = $('#player_table').DataTable({
            order: [
                [0, 'ASC']
            ],

            processing: true,
            serverSide: true,
            scrollX: true,
            scrollY: true,
            ajax: {
                url:'{!! route('sport.league.team.player.fetch') !!}',
                data: {
                    'team_id':'{{$team_id}}',
                }
            },
            columns: [
                {data: 'DT_RowIndex', orderable: false, searchable: false},
                {data: 'name'},
                {data: 'played',orderable: false},
                {data: 'goals',orderable: false},
                {data: 'assists',orderable: false},
            ],
            success: function () {
            }
        });

    </script>
@endsection




