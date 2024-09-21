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
                url:'{!! route('sport.fetch') !!}',
            },
            columns: [
                {data: 'DT_RowIndex', orderable: false, searchable: false},
                {data: 'name'},
                {data: 'description',orderable: false},
                {data: 'detail',orderable: false,searchable: false},
                {data: 'update',orderable: false,searchable: false},
                {data: 'delete',orderable: false,searchable: false},
            ],
            success: function () {
            }
        });


        function closeModal(){
            $('#add_sport_modal').modal('hide')
        }

        function openModal(){
            $('#add_sport_modal').modal('show')
        }

        function create(){
            openModal()
            createUpdateButton('create')
            clearForm()
        }

        function createPost(){
            post('{{route('sport.create')}}')
        }

        function deleteSport(id){

            Swal.fire({
                title: 'Are you sure?',
                text: "This is the last step!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes Delete!',
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: '{{route('sport.delete')}}',
                        type: 'DELETE',
                        headers: {'X-CSRF-TOKEN': "{{csrf_token()}} "},
                        processData: true,
                        data: {'sport_id':id},
                        success: () => {
                            Swal.fire({
                                icon: 'success',
                                title: 'Successfully',
                                text: 'Sport Deleted Successfully',
                                showConfirmButton: true,
                            })

                            dataTable.ajax.reload()
                        },
                        error: (xhr, status, error) => {
                            console.error(xhr,status,error);

                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                html: errorMap(xhr.responseJSON.errors),  // Hatanın detaylarını gösterir
                                footer: `An error occured : ${xhr.status} - ${xhr.statusText}`,
                                showConfirmButton: true,
                            });
                        }
                    })
                }
            });
        }

        function updateSport(id){
            $.ajax({
                url: '{{route('sport.get')}}',
                type: 'GET',
                processData: true,
                data: {'sport_id':id,},
                success: (response) => {
                    $('#name').val(response.name)
                    $('#description').val(response.description)
                    createUpdateButton('update')
                    $('#update_id').val(id)
                    openModal()
                },
                error: (xhr, status, error) => {
                    console.error(xhr,status,error);

                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        html: errorMap(xhr.responseJSON.errors),  // Hatanın detaylarını gösterir
                        footer: `An error occured: ${xhr.status} - ${xhr.statusText}`,
                        showConfirmButton: true,
                    });
                }
            })

        }

        function updatePost(){
            post('{{route('sport.update')}}')
        }

        function post(route){

            var formData =  new FormData(document.getElementById('sport_form'))
            $.ajax({
                url: route,
                type: 'POST',
                headers: {'X-CSRF-TOKEN': "{{csrf_token()}} "},
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
                    clearForm()
                    closeModal()
                    dataTable.ajax.reload()
                },
                error: (xhr, status, error) => {
                    console.error(xhr,status,error);

                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        html: errorMap(xhr.responseJSON.errors),
                        footer: `An error occured: ${xhr.status} - ${xhr.statusText}`,
                        showConfirmButton: true,
                    });
                }
            })
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

