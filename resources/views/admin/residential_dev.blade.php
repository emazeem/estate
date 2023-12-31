@extends('admin.layouts.master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-5">
            <h4 class="page-title">Residential Developments</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Residential Developments</li>
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
                    <button type="button" class="btn btn-sm btn-primary shadow-sm float-right add" >
                        <i class="fa fa-plus-circle"></i> Residential Developments</button>
                </div>
                <div class="card-body" style="overflow-y: scroll">
                    <table id="example" class="table table-bordered table-hover display nowrap bg-white" width="100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Overview</th>
                            <th>Location</th>
                            <th>Apartments</th>
                            <th>Tag</th>
                            <th>Bedrooms</th>
                            <th>Prices</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Overview</th>
                            <th>Location</th>
                            <th>Apartments</th>
                            <th>Tag</th>
                            <th>Bedrooms</th>
                            <th>Prices</th>
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
                <h4 class="modal-title"><i class="fa fa-plus-circle"></i> Residential Developments</h4>
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
                        <label for="edit_description" class="control-label">Description</label>
                        <input type="text" class="form-control" name="description" id="edit_description">
                    </div>
                    <div class="form-group">
                        <label for="edit_location" class="control-label">Location</label>
                        <input type="text" class="form-control" name="location" id="edit_location">
                    </div>
                    <div class="form-group">
                        <label for="edit_apartments" class="control-label">Apartments</label>
                        <input type="text" class="form-control" name="apartments" id="edit_apartments">
                    </div>
                    <div class="form-group">
                        <label for="edit_tag" class="control-label">Tag</label>
                        <input type="text" class="form-control" name="tag" id="edit_tag">
                    </div>
                    <div class="form-group">
                        <label for="edit_bedrooms" class="control-label">Bedrooms</label>
                        <input type="text" class="form-control" name="bedrooms" id="edit_bedrooms">
                    </div>
                    <div class="form-group">
                        <label for="edit_prices" class="control-label">Prices</label>
                        <input type="text" class="form-control" name="prices" id="edit_prices">
                    </div>








                    
                    

                    <div class="form-group">
                        <label for="image" class="control-label">Image</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image" id="image">
                            <label class="custom-file-label" for="image">Image (opt)</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="overview" class="control-label">Overview</label>
                        <textarea class="form-control" name="overview" id="overview" rows="8"></textarea>
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
            {"data": "title"},
            {"data": "description"},
            {"data": "image"},
            {"data": "overview"},
            {"data": "location"},
            {"data": "apartments"},
            {"data": "tag"},
            {"data": "bedrooms"},
            {"data": "prices"},
            {"data": "options", "orderable": false},
        ];
        InitTable('{{ route('residential.dev.fetch')}}',columns,'{{csrf_token()}}');
        $(document).on('click', '.edit', function () {

            var id = $(this).attr('data-id');
            $.ajax({
                "url": "{{route('residential.dev.edit')}}",
                type: "POST",
                data: {'id': id, _token: '{{csrf_token()}}'},
                dataType: "json",
                success: function (data) {
                    $('#modal').modal('toggle');
                    $('#edit_id').val(data.id);
                    $('#edit_title').val(data.title);
                    $('#edit_description').val(data.description);
                    $('#edit_location').val(data.location);
                    $('#edit_apartments').val(data.apartments);
                    $('#edit_tag').val(data.tag);
                    $('#edit_bedrooms').val(data.bedrooms);
                    $('#edit_prices').val(data.prices);
                    CKEDITOR.instances['overview'].setData(data.overview);
                }
            });
        });
        $("#add_form").on('submit', (function (e) {
            for (instance in CKEDITOR.instances) {
                $('#' + instance).val(CKEDITOR.instances[instance].getData());
            }
            e.preventDefault();
            var button = $('#add_form_btn');
            var previous = $(button).html();
            button.attr('disabled', 'disabled').html('Processing..');
            $.ajax({
                url: "{{route('residential.dev.store')}}",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {

                    button.attr('disabled', null).html(previous);
                    swal('success', data.success, 'success').then((value) => {
                        $('#modal').modal('hide');
                        InitTable('{{ route('residential.dev.fetch')}}',columns,'{{csrf_token()}}');
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
            var route="{{route('residential.dev.destroy')}}";
            deleted(id,token,route);
            InitTable('{{ route('residential.dev.fetch')}}',columns,'{{csrf_token()}}');
        });



        CKEDITOR.replace('overview', {
            skin: 'moono',
            enterMode: CKEDITOR.ENTER_BR,
            shiftEnterMode:CKEDITOR.ENTER_P,
            toolbar: [{ name: 'basicstyles', groups: [ 'basicstyles' ], items: [ 'Bold', 'Italic', 'Underline', "-", 'TextColor', 'BGColor' ] },
                { name: 'styles', items: [ 'Format', 'Font', 'FontSize' ] },
                { name: 'scripts', items: [ 'Subscript', 'Superscript' ] },
                { name: 'justify', groups: [ 'blocks', 'align' ], items: [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
                { name: 'paragraph', groups: [ 'list', 'indent' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'] },
                { name: 'links', items: [ 'Link', 'Unlink' ] },
                { name: 'insert', items: [ 'Image'] },
                { name: 'spell', items: [ 'jQuerySpellChecker' ] },
                { name: 'table', items: [ 'Table' ] }
            ],
        });




    });
</script>
    <script src="https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
@endsection
