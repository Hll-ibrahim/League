@extends('layouts.index')

@section('content')
    <div class="modal fade" id="add_league_modal" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="myModal">
                    <div class="modal-header">
                        <h4 style="color:#3F3F3F">League Information</h4>
                        <i class="fas fa-times modal-close" onclick="closeModal()"></i>
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
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                            </div>
                            <div class="row w-100 m-0 mb-3">
                                <div class="col">
                                    <h5 style="color:#3F3F3F">Description</h5>
                                </div>
                                <div class="col">
                                    <div class="inp-group">
                                        <input type="text" name="description" id="description" class="form-control" placeholder="Description">
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
                                            @if(isset($sport_name))
                                                <option value="{{ $sport_id }}" selected>{{ $sport_name }}</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Season Name -->
                            <div class="row w-100 m-0 mb-3">
                                <div class="col">
                                    <h5 style="color:#3F3F3F">Season Name</h5>
                                </div>
                                <div class="col">
                                    <div class="inp-group">
                                        <select name="season_id" id="season_id" class="form-control">
                                            <option value="">Select Season</option>
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
                        <button type="button" class="btn btn-secondary" onclick="closeModal()">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button class="btn btn-primary mb-4" onclick="create()">Add</button>

    <table id="league_table" class="display nowrap cell-border" style="width:100%">
        <thead>
        <tr>
            <th>#</th>
            <th>League Name</th>
            <th>Description</th>
            <th>Season</th>
            <th>League Type</th>
            <th>Detail</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
    </table>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            fetchSeasons();
            fetchLeagueTypes();
            const sportId = '{{ $sport_id }}';
            dataTable = $('#league_table').DataTable({
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
                    url: '{{ route('sport.league.fetch') }}',
                    type: 'GET',
                    dataType: 'json',
                    data: function(d) {
                        d.sport_id = sportId; // Sport ID'yi gönder
                    },
                    error: function(xhr, error, thrown) {
                        console.error('Ajax error:', error);
                        console.error('XHR Response:', xhr.responseText);
                        alert('An error occurred: ' + xhr.responseText); // Hata mesajını uyarı olarak göster
                    }
                },
                columns: [
                    {data: 'DT_RowIndex', orderable: false, searchable: false},
                    {data: 'name'},
                    {data: 'description', orderable: false},
                    {data: 'season_id', orderable: false},
                    {data: 'league_type_id', orderable: false},
                    {data: 'detail', orderable: false, searchable: false},
                    {data: 'update', orderable: false, searchable: false},
                    {data: 'delete', orderable: false, searchable: false},
                ],
                success: function(data) {
                    console.log('Data fetched successfully:', data);
                }
            });

        });

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                const topSwal = Swal.getPopup(); // SweetAlert modali varsa bunu alır
                if (topSwal && Swal.isVisible()) { // SweetAlert modali açıkken
                    Swal.close(); // Sadece SweetAlert error modalını kapat
                    event.stopPropagation(); // Diğer modalın kapanmasını engelle
                }
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
                    if ($('#add_league_modal').is(':visible') && !$('#updateButton').hasClass('disabled')) {
                        e.preventDefault();
                        createPost();
                    }else if ($('#update_league_modal').is(':visible') && !$('#updateButton').hasClass('disabled')) {
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
            $('#add_league_modal').modal('hide');
            $('body').css('padding-right', '');
            clearForm();
        }

        function openModal() {
            $('#add_league_modal').modal('show');
            $('body').css('padding-right', '15px');
            $('#add_league_modal').one('shown.bs.modal', function () {
                $('#name').focus(); // 'name' alanına odaklan
            });
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

        function fetchSeasons() {
            $.ajax({
                url: '{{ route('sport.season.fetch') }}', // AJAX çağrısı yapılacak URL
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    populateSeasonsDropdown(response); // Başarılı yanıt geldiğinde dropdown'u doldur
                },
                error: function(xhr) {
                    console.error('Error fetching seasons:', xhr.responseText); // Hata durumunu yönet
                }
            });
        }

        // Populate the seasons dropdown
        function populateSeasonsDropdown(seasons) {
            let seasonSelect = $('#season_id');
            seasonSelect.empty();
            seasonSelect.append('<option value="">Select Season</option>');

            $.each(seasons, function (index, season) {
                seasonSelect.append(`<option value="${season.id}">${season.name}</option>`);
            });
        }

        function fetchLeagueTypes() {
            $.ajax({
                url: '{{ route('sport.league.type.fetch') }}', // AJAX çağrısı yapılacak URL
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    populateLeagueTypesDropdown(response); // Başarılı yanıt geldiğinde dropdown'u doldur
                },
                error: function(xhr) {
                    console.error('Error fetching league types:', xhr.responseText); // Hata durumunu yönet
                }
            });
        }
        function populateLeagueTypesDropdown(leagueTypes) {
            let leagueTypeSelect = $('#type_id');
            leagueTypeSelect.empty();
            leagueTypeSelect.append('<option value="">Select League Type</option>');

            $.each(leagueTypes, function (index, leagueType) {
                leagueTypeSelect.append(`<option value="${leagueType.id}">${leagueType.name}</option>`);
            });
        }

        function createPost() {
            const formData = new FormData($('#league_form')[0]);

            $.ajax({
                url: '{{ route('sport.league.create') }}',
                type: 'POST',
                headers: {'X-CSRF-TOKEN': "{{ csrf_token() }}"},
                processData: false,
                contentType: false,
                data: formData,
                success: () => {
                    Swal.fire('Success', 'League added successfully!', 'success');
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

        function updatePost() {
            const formData = new FormData(document.getElementById('league_form'));
            const id = $('#update_id').val();

            formData.append('id', id);

            $.ajax({
                url: '{{ route('sport.league.update') }}',
                type: 'POST',
                headers: {'X-CSRF-TOKEN': "{{ csrf_token() }}"},
                processData: false,
                contentType: false,
                data: formData,
                success: (response) => {
                    Swal.fire({
                        icon: 'success',
                        title: 'Successfully',
                        text: response.success,
                        showConfirmButton: true,
                    })
                    clearForm();
                    closeModal();
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

                    const formData = new FormData();
                    formData.append('id', id);
                    formData.append('_method', 'DELETE');  // Laravel'e DELETE isteği gibi işlem yapması için ekleniyor

                    $.ajax({
                        url: '{{ route('sport.league.delete') }}',
                        type: 'POST',  // DELETE yerine POST kullanıyoruz
                        headers: {'X-CSRF-TOKEN': "{{ csrf_token() }}"},
                        processData: false,
                        contentType: false,
                        data: formData,
                        success: () => {
                            Swal.fire({
                                icon: 'success',
                                title: 'Successfully',
                                text: 'Sport Deleted Successfully',
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
