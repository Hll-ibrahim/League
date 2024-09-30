@extends('layouts.index')

@section('content')

    <div class="modal fade modal" id="add_sport_modal" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="myModal ">
                    <div class="modal-header">
                        <h4 style="color:#3F3F3F">Sport Information</h4>
                        <i class="fas fa-times modal-close" onclick="closeModal()"></i>
                    </div>
                    <div class="modal-body form-modal">
                        <form id="sport_form">
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
                        <button type="button" class="btn btn-secondary" onclick="closeModal()">Kapat</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="updateSportModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update Sport</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form id="update_sport_form">
                        <input type="hidden" id="update_id">
                        <div class="form-group">
                            <label for="name">Sport Name</label>
                            <input type="text" id="update_name" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label for="sport_description">Sport Description</label>
                            <textarea id="update_description" class="form-control" name="description"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="updatePost()">Save</button>
                </div>
            </div>
        </div>
    </div>


    <button class="btn btn-primary mb-4" onclick="create()">Add</button>
    <table id="sport_table" class="display nowrap dataTable cell-border"
           style="width:100%">
        <thead>
        <tr>
            <th>#</th>
            <th>Sport Name</th>
            <th>Description</th>
            <th>Detail</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>

        <tfoot>
        <tr>
            <th>#</th>
            <th>Sport Name</th>
            <th>Description</th>
            <th>Detail</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </tfoot>
    </table>

@endsection

@section('script')
    <script>
        dataTable = $('#sport_table').DataTable({
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
                url: '{{ route('sport.fetch') }}',
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
                {data: 'description', orderable: false},
                {data: 'detail', orderable: false, searchable: false},
                {data: 'update', orderable: false, searchable: false},
                {data: 'delete', orderable: false, searchable: false},
            ],
            success: function(data) {
                console.log('Data fetched successfully:', data); // Başarılı yanıt kontrolü
            }
        });


        function closeModal(){
            $('#add_sport_modal').modal('hide')
        }

        function openModal(){
            $('#add_sport_modal').modal('show')
        }

        function openUpdateModal(id, name, description){
            $('#update_id').val(id);
            $('#update_name').val(name);
            $('#update_description').val(description);

            $('#updateSportModal').modal('show');
        }

        function closeUpdateModal(){
            $('#update_sport_modal').modal('hide')
        }

        function create(){
            openModal()
            createUpdateButton('create')
            clearForm()
        }

        function createPost(){
            const type = 3; // Sport
            const process = 1; // Create
            const formData = new FormData(document.getElementById('sport_form'));

            formData.append('type', type);
            formData.append('process', process);

            $.ajax({
                url: '{{route('sport.create')}}',
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
                    });
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

        function deleteSport(id) {
            const type = 3; // Sport
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
                if (result.isConfirmed) { // 'result.value' yerine 'result.isConfirmed' kullanılıyor

                    const formData = new FormData();
                    formData.append('sport_id', id);
                    formData.append('type', type);
                    formData.append('process', process);

                    $.ajax({
                        url: '{{ route('sport.delete') }}',
                        type: 'DELETE',
                        headers: {'X-CSRF-TOKEN': "{{ csrf_token() }}"},
                        processData: false, // FormData kullanıldığında bu ayar false olmalıdır
                        contentType: false,  // FormData kullanıldığında bu ayar false olmalıdır
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
                                html: errorMap(xhr.responseJSON.errors), // Hatanın detaylarını gösterir
                                footer: `An error occurred: ${xhr.status} - ${xhr.statusText}`,
                                showConfirmButton: true,
                            });
                        }
                    });
                }
            });
        }

        function detailGet(sportId) {
            $.ajax({
                url: '{{ route('sport.detail', '') }}/' + sportId, // ID ile backend'e istek yap
                type: 'GET',
                success: function(response) {
                    // Eğer detay başarılı şekilde alındıysa yönlendir
                    window.location.href = '{{ route('sport.detail', '') }}/' + sportId;
                },
                error: function(xhr, status, error) {
                    // Hata durumunda yapılacak işlemler
                    console.error('An error occurred:', status, error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Could not fetch details!',
                    });
                }
            });
        }

        function updatePost() {
            const type = 3; // Sport
            const process = 3; // update
            const formData = new FormData(document.getElementById('update_sport_form'));
            const id = $('#update_id').val();

            formData.append('id', id);
            formData.append('type', type);
            formData.append('process', process);

            $.ajax({
                url: '{{ route('sport.update') }}',
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
                    });
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

        function clearForm(){
            $('#sport_form')[0].reset()
        }

        function createUpdateButton(type){
            if(type === 'update'){
                $('#createButton').addClass('d-none')
                $('#updateButton').removeClass('d-none')
            }
            else if(type === 'create'){
                $('#createButton').removeClass('d-none')
                $('#updateButton').addClass('d-none')
            }
        }
    </script>
@endsection

