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
                            <!-- Sport Name -->
                            <div class="row w-100 m-0 mb-3">
                                <div class="col">
                                    <h5 style="color:#3F3F3F">Sport Name</h5>
                                </div>
                                <div class="col">
                                    <div class="inp-group">
                                        <select name="sport_id" id="sport_id" class="form-control">
                                            <option value="">Select Sport</option>
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
            <th>Season</th>
            <th>League Type</th>
        </tr>
        </thead>
    </table>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            fetchSeasons();
            const sportId = '{{ $sport_id }}';

            // DataTable'ı başlat
            dataTable = $('#league_table').DataTable({
                ajax: {
                    url: '{{ route('sport.league.fetch') }}',
                    type: 'GET',
                    data: function(d) {
                        d.sport_id = sportId; // Sport ID'yi gönder
                    },
                    dataType: 'json',
                },
                columns: [
                    {data: 'DT_RowIndex', orderable: false, searchable: false},
                    {data: 'name'},
                    {data: 'description', orderable: false , searchable: false},
                    {data: 'season_id', orderable: false},
                    {data: 'league_type_id', orderable: false, searchable: false},
                ],

            });

        });

        function closeModal() {
            $('#add_league_modal').modal('hide');
            clearForm();
        }

        function openModal() {
            $('#add_league_modal').modal('show');
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

                createUpdateButton('update');
                openModal();
            });
        }
        function fetchSeasons() {
            $.ajax({
                url: '{{ route('sport.league.season.fetch') }}',
                type: 'GET',
                data: {
                    type: '2',
                    process: '2.02'
                },
                success: function (response) {
                    populateSeasonsDropdown(response);
                },
                error: function (xhr) {
                    console.error('Error fetching seasons:', xhr.responseText);
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

        function createPost() {
            const type = 2; // League
            const process = 1; // Create
            const formData = new FormData($('#league_form')[0]);

            formData.append('type', type);
            formData.append('process', process);

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
                error: (xhr) => {
                    Swal.fire('Error', xhr.responseText, 'error');
                }
            });
        }

        function updatePost() {
            const id = $('#update_id').val();
            const formData = new FormData($('#league_form')[0]);

            $.ajax({
                url: '{{ url("sport/league") }}/' + id,
                type: 'POST',
                headers: {'X-CSRF-TOKEN': "{{ csrf_token() }}"},
                processData: false,
                contentType: false,
                data: formData,
                success: () => {
                    Swal.fire('Success', 'League updated successfully!', 'success');
                    closeModal();
                    dataTable.ajax.reload();
                },
                error: (xhr) => {
                    Swal.fire('Error', xhr.responseText, 'error');
                }
            });
        }

        function deleteLeague(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '{{ url("sport/league") }}/' + id,
                        type: 'DELETE',
                        headers: {'X-CSRF-TOKEN': "{{ csrf_token() }}"},
                        success: () => {
                            Swal.fire('Deleted!', 'League has been deleted.', 'success');
                            dataTable.ajax.reload();
                        },
                        error: (xhr) => {
                            Swal.fire('Error', xhr.responseText, 'error');
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
            } else {
                $('#createButton').removeClass('d-none');
                $('#updateButton').addClass('d-none');
            }
        }
    </script>
@endsection
