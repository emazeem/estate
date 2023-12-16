@extends('admin.layouts.master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-5">
            <h4 class="page-title">Spotlight</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Spotlight</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-sm btn-primary shadow-sm float-right add" ><i class="fa fa-plus-circle"></i> Spotlight</button>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-bordered table-hover display nowrap bg-white" width="100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Location</th>
                            <th>Title</th>
                            <th>Icon</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Location</th>
                            <th>Title</th>
                            <th>Icon</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modal" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fa fa-plus-circle"></i> Spotlight</h4>
                <h4 style="cursor: pointer" class="float-right" onclick="$('#modal').modal('hide')">
                    <i class="fa fa-times-circle"></i>
                </h4>
            </div>
            <div class="modal-body">
                <form class="form" id="add_form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="edit_title" class="control-label">Title</label>
                        <input type="text" class="form-control" name="title" id="edit_title">
                    </div>
                    <div class="form-group">
                        <label for="edit_icon" class="control-label">Icon</label>
                        <input type="text" class="form-control" name="icon" id="edit_icon">
                    </div>
                    <div class="form-group">
                        <label for="edit_location_id" class="control-label">Location</label>
                        <select class="form-control" name=location_id id="edit_location_id">
                            <option selected disabled>-- Select Location</option>
                            @foreach($locs as $loc)
                                <option value="{{$loc->id}}">{{$loc->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="hidden" name="id" id="edit_id" value="0">
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" id="add_form_btn" value="Save">
            </div>
        </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        var columns=[
            {"data": "id"},
            {"data": "location"},
            {"data": "title"},
            {"data": "icon"},
            {"data": "options", "orderable": false},
        ];
        InitTable('{{ route('spotlight.fetch')}}',columns,'{{csrf_token()}}');
        $(document).on('click', '.edit', function () {

            var id = $(this).attr('data-id');
            $.ajax({
                "url": "{{route('spotlight.edit')}}",
                type: "POST",
                data: {'id': id, _token: '{{csrf_token()}}'},
                dataType: "json",
                success: function (data) {
                    $('#modal').modal('toggle');
                    $('#edit_id').val(data.id);
                    $('#edit_title').val(data.title);
                    $('#edit_icon').val(data.icon);
                    $('#edit_location_id').val(data.location_id);
                }
            });
        });
        $("#add_form").on('submit', (function (e) {
            e.preventDefault();
            var button = $('#add_form_btn');
            var previous = $(button).html();
            button.attr('disabled', 'disabled').html('Processing..');
            $.ajax({
                url: "{{route('spotlight.store')}}",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {

                    button.attr('disabled', null).html(previous);
                    swal('success', data.success, 'success').then((value) => {
                        $('#modal').modal('hide');
                        InitTable('{{ route('spotlight.fetch')}}',columns,'{{csrf_token()}}');
                    });

                },
                error: function (xhr) {
                    button.attr('disabled', null).html(previous);
                    if (typeof  xhr.responseJSON.errors === 'object'){
                        var error = '';
                        $.each(xhr.responseJSON.errors, function (key, item) {
                            error += item;
                        });
                        swal("Failed", error, "error");
                    }else{
                        swal("Failed", xhr.responseJSON.message, "error");
                    }
                }
            });
        }));
        $(document).on('click', '.delete', function (e) {
            var id = $(this).attr('data-id');
            var token = '{{csrf_token()}}';
            var route="{{route('spotlight.destroy')}}";
            deleted(id,token,route);
            InitTable('{{ route('spotlight.fetch')}}',columns,'{{csrf_token()}}');
        });
    });
</script>
@endsection
