
@extends('layouts.index')
@section('content')
    <select id="season_filter" class="form-control">
        @foreach($seasons as $season)
            <option value="{{ $season->id }}">{{ $season->name }}</option>
        @endforeach
    </select>

    <div class="modal fade" id="add_league_team_modal" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="myModal">
                    <div class="modal-header">
                        <h4 style="color:#3F3F3F">League Team</h4>
                        <i class="fas fa-times modal-close" onclick="closeModal()"></i>
                    </div>
                    <div class="modal-body form-modal">
                        <form id="league_form">
                            <div class="row w-100 m-0 mb-3">
                                <div class="col">
                                    <h5 style="color:#3F3F3F">Team</h5>
                                </div>
                                <div class="col">
                                    <div class="inp-group">
                                        <select class="form-control" name="team_id">
                                                <option value="-1">There is no team available</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" id="league_id" name="league_id" value="{{$league->id}}">
                            <input type="hidden" id="update_id" name="id">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button id="createButton" class="btn btn-success" onclick="createPost()">Add</button>
                        <button id="updateButton" class="btn btn-success d-none" onclick="updatePost()">Update</button>
                        <button type="button" class="btn btn-secondary" onclick="closeModal()">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="add_league_modal" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="myModal">
                    <div class="modal-header">
                        <h4 style="color:#3F3F3F">League Information</h4>
                        <i class="fas fa-times modal-close" onclick="closeModal('add_league_modal')"></i>
                    </div>
                    <div class="modal-body form-modal">
                        <form id="league_form">
                            <input type="hidden" name="operation_mode" id="operation_mode" value="create"><!--operation -->
                            <div class="row w-100 m-0 mb-3">
                                <div class="col">
                                    <h5 style="color:#3F3F3F">Name</h5>
                                </div>
                                <div class="col">
                                    <div class="inp-group">
                                        <input type="text" value="{{$league->name}}" name="name" id="name" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                            </div>
                            <div class="row w-100 m-0 mb-3">
                                <div class="col">
                                    <h5 style="color:#3F3F3F">Description</h5>
                                </div>
                                <div class="col">
                                    <div class="inp-group">
                                        <input type="text" value="{{$league->description}}" name="description" id="description" class="form-control" placeholder="Description">
                                    </div>
                                </div>
                            </div>
                            <div class="row w-100 m-0 mb-3">
                                <div class="col">
                                    <h5 style="color:#3F3F3F">Sport Name</h5>
                                </div>
                                <div class="col">
                                    <div class="inp-group">
                                        <select name="sport_id" id="sport_id" class="form-control">
                                            <option value="">Select Sport</option>
                                            @if(count($sports))
                                                @foreach($sports as $sport)
                                                    <option {{$league->sport_id == $sport->id  ? 'selected' : ''}} value="{{ $sport->id }}" selected>{{ $sport->name}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- League Type -->
                            <div class="row w-100 m-0 mb-3">
                                <div class="col">
                                    <h5 style="color:#3F3F3F">
                                        League Type
                                    </h5>
                                </div>
                                <div class="col">
                                    <div class="inp-group">
                                        <select name="league_type_id" id="type_id" class="form-control">
                                            <option value="">Select League Type</option>
                                            @foreach($league_types as $league_type)
                                                <option {{$league->league_type_id == $league_type->id  ? 'selected' : ''}} value="{{ $league_type->id }}" selected>{{ $league_type->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" id="update_id" name="id">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button id="createButton" class="btn btn-success" onclick="createPost()">Add</button>
                        <button id="updateButton" class="btn btn-success d-none" onclick="updatePost()">Update</button>
                        <button type="button" class="btn btn-secondary" onclick="closeModal('add_league_modal')">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @if(auth()->user() && auth()->user()->hasRole('admin'))
        <button class="btn btn-primary mb-4" onclick="create()">Add</button>

        <button class="btn btn-warning mb-4" onclick="detail()">League Settings</button>

        <button class="btn btn-success mb-4 d-none" id="league_start_button" onclick="start()">Start League</button>


    @endif
    <div class="my-5">
        <table id="team_table" class=" display nowrap dataTable cell-border"
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
                <th>Process</th>
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
                <th>Process</th>
            </tr>
            </tfoot>
        </table>

    </div>

    <div class="my-5">
        <table id="game_table" class=" display nowrap dataTable cell-border"
               style="width:100%">
            <thead>
            <tr>
                <th>#</th>
                <th>Home Team</th>
                <th>Away Team</th>
                <th>Home Score</th>
                <th>Away Score</th>
                <th>Referee</th>
                <th>Date</th>
                <th>Detail</th>
            </tr>
            </thead>

            <tfoot>
            <tr>
                <th>#</th>
                <th>Home Team</th>
                <th>Away Team</th>
                <th>Home Score</th>
                <th>Away Score</th>
                <th>Referee</th>
                <th>Date</th>
                <th>Detail</th>
            </tr>
            </tfoot>
        </table>

    </div>


@endsection
@section('script')
    <script>

        var SEASON_LEAGUE

        dataTable = $('#team_table').DataTable({
            order: [
                [0, 'ASC']
            ],

            processing: true,
            serverSide: true,
            scrollX: true,
            scrollY: true,
            ajax: {
                url:'{!! route('fetch') !!}',
                data: function (d) {
                    d.league_id = '{{ $league->id }}'; // Lig ID'si
                    d.season_id = $('#season_filter').val(); // Sezon ID'si
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
                {data: 'process',orderable: false,searchable: false},
            ],
            success: function () {
            }
        });

        dataTable2 = $('#game_table').DataTable({
            order: [
                [0, 'ASC']
            ],

            processing: true,
            serverSide: true,
            scrollX: true,
            scrollY: true,
            ajax: {
                url:'{!! route('sport.league.game.fetch') !!}',
                data: function (d) {
                    d.league_id = '{{ $league->id }}'; // Lig ID'si
                    d.season_id = $('#season_filter').val(); // Sezon ID'si
                }
            },
            columns: [
                {data: 'DT_RowIndex', orderable: false, searchable: false},
                {data: 'home_team_id'},
                {data: 'away_team_id'},
                {data: 'home_score'},
                {data: 'away_score'},
                {data: 'referee_id'},
                {data: 'date'},
                {data: 'detail',orderable: false,searchable: false},
            ],
            success: function () {
            }
        });

        $(document).ready(function () {

            change_season_league()

            // Elementlerin seçimi
            var updateButton = $('#updateButton');
            var nameField = $('#name');
            var descriptionField = $('#description');
            var sportSelect = $('#sport_id');
            var seasonSelect = $('#season_id');
            var typeSelect = $('#type_id');

            // Butonların görünürlüğünün güncellenmesi
            updateButton.addClass('disabled');
            updateButton.attr('onclick', '');

            function checkForChanges() {
                if (descriptionField.val() || sportSelect.val() || seasonSelect.val() || typeSelect.val() || nameField.val())  {
                    updateButton.removeClass('disabled');
                    updateButton.attr('onclick', 'updatePost()');
                } else {
                    updateButton.addClass('disabled');
                    updateButton.attr('onclick', '');
                }
            }

            nameField.on('input',checkForChanges)
            descriptionField.on('input', checkForChanges);
            sportSelect.on('change', checkForChanges);
            seasonSelect.on('change', checkForChanges);
            typeSelect.on('change', checkForChanges);

            checkForChanges();

            function populateForm(data) {
                nameField.val(data.name);
                descriptionField.val(data.description);
                sportSelect.val(data.sport_id);
                seasonSelect.val(data.season_id);
                typeSelect.val(data.league_type_id);

                // Show the update button and hide the add button
                $('#createButton').addClass('d-none');
                updateButton.removeClass('d-none');  // Show the update button

                // Disable the update button initially
                updateButton.addClass('disabled');
                updateButton.attr('onclick', '');  // Remove onclick function for now

                // Run the change check to enable the button if there are any changes
                checkForChanges();

            }
            $(document).keydown(function (e) {
                if (e.key === "Enter") {
                    if ($('#add_league_team_modal').is(':visible') && !$('#updateButton').hasClass('disabled')) {
                        e.preventDefault();
                        createPost();
                    }else if ($('#update_league_team_modal').is(':visible') && !$('#updateButton').hasClass('disabled')) {
                        updatePost();
                    }
                }
            });

            // Example of function to populate the form when updating
            function populateFormForUpdate(data) {
                populateForm(data);
            }

            // Optional: Reset the form for a fresh "create" mode
            function resetForm() {
                $('#league_form')[0].reset();  // Reset all fields
                updateButton.addClass('disabled');  // Disable the update button
                updateButton.attr('onclick', '');  // Remove onclick functionality
                $('#createButton').removeClass('d-none');  // Show the create button
                updateButton.addClass('d-none');  // Hide the update button
            }

            // Call this when you open the modal for a new item (for creating)
            resetForm();  // Reset the form on modal open
        });

        function closeModal(id=null) {
            if(id){
                $('#'+id).modal('hide');
            }
            $('#add_league_team_modal').modal('hide');
            $('body').css('padding-right', '');
            clearForm();
            fetchTeams();
        }

        function openModal() {
            $('#add_league_team_modal').modal('show');
            $('body').css('padding-right', '15px');
            $('#add_league_team_modal').one('shown.bs.modal', function () {
                $('#name').focus(); // 'name' alanına odaklan
            });
            fetchTeams()
        }

        function create() {
            openModal();
            createUpdateButton('create');
            clearForm();
        }

        function editLeague(id) {
            $.get('{{ url("sport/league") }}/' + id, function (data) {
                $('#update_id').val(data.id);
                $('#name').val(data.name);
                $('#description').val(data.description);
                $('#season_id').val(data.season_id);
                $('#type_id').val(data.league_type_id);

                createUpdateButton('update');
                openModal();
            });
        }

        function openUpdateModal(id, name, description, sportId, seasonId, leagueTypeId) {
            $('#update_id').val(id);
            $('#name').val(name);
            $('#description').val(description);
            $('#sport_id').val(sportId || '');
            $('#season_id').val(seasonId || '');
            $('#type_id').val(leagueTypeId || '');


            createUpdateButton('update');
            openModal();
        }

        function fetchTeams() {
            $.ajax({
                url: '{{ route('sport.league.team.fetch_available') }}', // AJAX çağrısı yapılacak URL
                type: 'GET',
                dataType: 'json',
                data: {
                    league_id: '{{$league->id}}',
                },
                success: function(response) {
                    let select = $('select[name="team_id"]');
                    select.empty();


                    if (response.length > 0) {
                        response.forEach(function(team) {
                            select.append(`<option value="${team.id}">${team.name}</option>`);
                        });
                    } else {
                        select.append('<option value="-1">There is no team available</option>');
                    }
                    //populateSeasonsDropdown(response); // Başarılı yanıt geldiğinde dropdown'u doldur
                },
                error: function(xhr) {
                    console.error('Error fetching seasons:', xhr.responseText); // Hata durumunu yönet
                }
            });
        }

        function createPost() {
            const formData = new FormData($('#league_form')[0]);

            $.ajax({
                url: '{{ route('sport.league.team.add') }}',
                type: 'POST',
                headers: {'X-CSRF-TOKEN': "{{ csrf_token() }}"},
                processData: false,
                contentType: false,
                data: formData,
                success: () => {
                    Swal.fire('Success', 'Team added successfully!', 'success');
                    closeModal();
                    dataTable.ajax.reload();
                },
                error: (xhr,status,error) => {
                    console.log(xhr,status,error)
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        html: errorMap(xhr.responseJSON.errors),
                        footer: `An error occurred: ${xhr.status} - ${xhr.statusText}`,
                        showConfirmButton: true,
                    });
                }
            });
        }

        function deleteLeague(id) {

            Swal.fire({
                title: 'Are you sure?',
                text: "This is the last step!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes Delete!',
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        url: '{{ route('sport.league.team.delete') }}',
                        type: 'DELETE',  // DELETE yerine POST kullanıyoruz
                        headers: {'X-CSRF-TOKEN': "{{ csrf_token() }}"},
                        data: {
                            'league_team_id': id,
                        },
                        success: () => {
                            Swal.fire({
                                icon: 'success',
                                title: 'Successfully',
                                text: 'Team Removed Successfully',
                                showConfirmButton: true,
                            });
                            dataTable.ajax.reload();
                        },
                        error: (xhr, status, error) => {
                            console.error(xhr, status, error);

                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                html: errorMap(xhr.responseJSON.errors),
                                footer: `An error occurred: ${xhr.status} - ${xhr.statusText}`,
                                showConfirmButton: true,
                            });
                        }
                    });
                }
            });
        }

        function clearForm() {
            $('#league_form')[0].reset();
            $('#update_id').val('');
        }

        function createUpdateButton(type) {
            if (type === 'update') {
                $('#createButton').addClass('d-none');
                $('#updateButton').removeClass('d-none');
                $('#updateButton').addClass('disabled');//remove disabled class when data changed
                $('#updateButton').attr('onclick','');
            } else {
                $('#createButton').removeClass('d-none');
                $('#updateButton').addClass('d-none');
            }
        }

        $('#season_filter').change(function () {
            dataTable.draw();
            dataTable2.draw();

            change_season_league()

        });

        function start(){
            var league_id = {{$league->id}};
            var season_id = $('#season_filter').val();

            Swal.fire({
                title: 'League is starting...',
                text: 'Please wait.',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading()
                }
            });

            $.ajax({
                url: '{{ route('sport.league.start') }}',
                type: 'POST',
                headers: {'X-CSRF-TOKEN': "{{ csrf_token() }}"},
                data: {
                    'league_id': league_id,
                    'season_id': season_id
                },
                success: () => {
                    Swal.fire('Success!', 'League started successfully.', 'success');
                    closeModal();
                    dataTable2.ajax.reload();
                    change_season_league()
                },
                error: (xhr, status, error) => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Hata Oluştu',
                        html: errorMap(xhr.responseJSON?.errors || 'An unknown error'),
                        footer: `HTTP ${xhr.status} - ${xhr.statusText}`,
                    });
                }
            });
        }

        function detail(){
            $('#add_league_modal').modal('show');
        }

        function change_season_league(){
            var season_id = $('#season_filter').val()
            var league_id = {{$league->id}};
            var league_start_button = $('#league_start_button');
            $.ajax({
                url: '{{route('sport.season_league.get_by_foreign')}}',
                data: {
                    'league_id':league_id,
                    'season_id': season_id
                },
                success: (response)=>{
                    SEASON_LEAGUE = response;
                    console.log(response.status)
                    if(response.status === 'waiting'){
                        $(league_start_button).removeClass('d-none');
                    }
                    else{
                        $(league_start_button).addClass('d-none')
                    }
                },
            })
        }
    </script>
@endsection




