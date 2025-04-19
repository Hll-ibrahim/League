
@extends('layouts.index')
@section('content')

    <div class="modal fade" id="add_team_player_modal" role="dialog">
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
                                            <option value="-1"> Geçerli Takım Bulunamadı</option>
                                            <option value="{}}">{}}</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" id="league_id" name="league_id" value="{{$team_id}}">
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

    <button class="btn btn-primary mb-4" onclick="create()">Add</button>

    <table id="player_table" class="display nowrap dataTable cell-border"
           style="width:100%">
        <thead>
        <tr>
            <th>#</th>
            <th>Player Name</th>
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

        $(document).ready(function () {
            // Select elements
            var updateButton = $('#updateButton');
            var nameField = $('#name');  // Name field (do not consider for enabling update button)
            var descriptionField = $('#description');
            var sportSelect = $('#sport_id');
            var seasonSelect = $('#season_id');
            var typeSelect = $('#type_id');

            // Disable the update button by default
            updateButton.addClass('disabled');  // Disable the button
            updateButton.attr('onclick', '');  // Remove onclick functionality

            // Function to detect changes and enable/disable the update button
            function checkForChanges() {
                // Check if any of the fields other than name have been modified
                if (descriptionField.val() || sportSelect.val() || seasonSelect.val() || typeSelect.val() || nameField.val())  {
                    // Enable the update button and set the onclick function
                    updateButton.removeClass('disabled');  // Remove 'disabled' class
                    updateButton.attr('onclick', 'updatePost()');  // Set onclick function
                } else {
                    // If no changes, keep the update button disabled
                    updateButton.addClass('disabled');  // Add 'disabled' class
                    updateButton.attr('onclick', '');  // Remove onclick function
                }
            }

            // Bind change event to fields (excluding the name field)
            nameField.on('input',checkForChanges)
            descriptionField.on('input', checkForChanges);
            sportSelect.on('change', checkForChanges);
            seasonSelect.on('change', checkForChanges);
            typeSelect.on('change', checkForChanges);

            // You may want to run the checkForChanges function to initialize the state
            checkForChanges();

            // Initialize the form with the current data when updating (e.g., if you're editing a league)
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

        function closeModal() {
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
                    team_id: '{{$team_id}}',
                },
                success: function(response) {
                    let select = $('select[name="team_id"]');
                    select.empty();

                    // Eğer gelen takımlar varsa ekle
                    if (response.length > 0) {
                        response.forEach(function(team) {
                            select.append(`<option value="${team.id}">${team.name}</option>`);
                        });
                    } else {
                        // Takım yoksa geçerli mesajı ekle
                        select.append('<option value="-1">Geçerli Takım Bulunamadı</option>');
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
            const type = 2; // Sport
            const process = 4; // Delete

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
    </script>
@endsection




