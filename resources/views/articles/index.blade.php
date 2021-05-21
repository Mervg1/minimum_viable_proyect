@extends('articles.layout')

@section('style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
@endsection
@include('includes.navbar')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title mt-5 text-center">
                        <h1>Tabla de Respuestas cuestionario de Salud Mental</h1>
                        
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered datatable">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>FourWeeks</th>
                                    <th>MentalHealth</th>
                                    <th>Depressed</th>
                                    <th>Activity</th>
                                    <th>WorkEnviroment</th>
                                    <th>Tasks</th>
                                    <th>Help</th>
                                    <th width="100" class="text-center">Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- Delete Article Modal -->
<div class="modal" id="DeleteArticleModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Delete</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <h4>Esta seguro que quiere borrar esta respuesta?</h4>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="SubmitDeleteArticleForm">Si</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // init datatable.
        var dataTable = $('.datatable').DataTable({
            processing: true,
            serverSide: true,
            autoWidth: true,
            
            // scrollX: true,
            "order": [[ 0, "desc" ]],
            ajax: '{{ route('get-articles') }}',
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'age', name: 'age'},
                {data: 'fourWeeks', name: 'fourWeeks'},
                {data: 'mentalHealth', name: 'mentalHealth'},
                {data: 'depressed', name: 'depressed'},
                {data: 'activity', name: 'activity'},
                {data: 'workEnviroment', name: 'workEnviroment'},
                {data: 'tasks', name: 'tasks'},
                {data: 'help', name: 'help'},
                {data: 'Actions', name: 'Actions',orderable:false,serachable:false,sClass:'text-center'},
            ]
        });

        // Delete article Ajax request.
        var deleteID;
        $('body').on('click', '#getDeleteId', function(){
            deleteID = $(this).data('id');
        })
        $('#SubmitDeleteArticleForm').click(function(e) {
            e.preventDefault();
            var id = deleteID;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "articles/"+id,
                method: 'DELETE',
                success: function(result) {
                    $('#DeleteArticleModal').modal('hide');
                    setInterval(function(){ 
                        $('.datatable').DataTable().ajax.reload();
                    }, 1000);
                }
            });
        });

        
    });
</script>
@endsection