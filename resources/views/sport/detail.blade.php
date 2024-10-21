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

    <table id="league_table" class="display nowrap dataTable cell-border" style="width:100%">
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
                error: function(xhr, error, thrown) {
                    console.error('Ajax error:', error);
                    console.error('XHR Response:', xhr.responseText);
                    alert('An error occurred: ' + xhr.responseText); // Hata mesajını uyarı olarak göster
                }
            },
            columns: [
                {data: 'DT_RowIndex', orderable: false, searchable: false},
                {data: 'name'},
                {data: 'season_id', orderable: false},
                {data: 'league_type_id', orderable: false, searchable: false},
            ],
            success: function(data) {
                console.log('Data fetched successfully:', data); // Başarılı yanıt kontrolü
            }
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

        function createPost() {
            const formData = new FormData($('#league_form')[0]);

            $.ajax({
                url: '{{ route('league.create') }}',
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
