@extends('admin.layouts.master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-5">
            <h4 class="page-title">Services</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Services</li>
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
                        <i class="fa fa-plus-circle"></i> services</button>
                </div>
                <div class="card-body" style="overflow-y: scroll">
                    <table id="example" class="table table-bordered table-hover display nowrap bg-white" width="100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Cover</th>
                            <th>Description</th>
                            <th>Slider Title</th>
                            <th>Slider Description</th>
                            <th>Key points title</th>
                            <th>Key points</th>
                            <th>Key points image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Cover</th>
                            <th>Description</th>
                            <th>Slider Title</th>
                            <th>Slider Description</th>
                            <th>Key points title</th>
                            <th>Key points</th>
                            <th>Key points image</th>
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
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fa fa-plus-circle"></i> Services</h4>
                <h4 style="cursor: pointer" class="float-right" onclick="$('#modal').modal('hide')">
                    <i class="fa fa-times-circle"></i>
                </h4>
            </div>
            <div class="modal-body">
                <form class="form" id="add_form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="control-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>

                    <div class="form-group">
                        <label for="image" class="control-label">Cover</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image" id="image">
                            <label class="custom-file-label" for="image">Image (opt)</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="title" class="control-label">Title</label>
                        <input type="text" class="form-control" name="title" id="title">
                    </div>
                    <div class="form-group">
                        <label for="description" class="control-label">Description</label>
                        <input type="text" class="form-control" name="description" id="description">
                    </div>

                    <div class="form-group">
                        <label for="slider_title" class="control-label">Slider Title</label>
                        <input type="text" class="form-control" name="slider_title" id="slider_title">
                    </div>
                    <div class="form-group">
                        <label for="slider_description" class="control-label">Slider Description</label>
                        <input type="text" class="form-control" name="slider_description" id="slider_description">
                    </div>

                    <div class="form-group">
                        <label for="key_points_title" class="control-label">Key Points Title</label>
                        <input type="text" class="form-control" name="key_points_title" id="key_points_title">
                    </div>
                    <div class="form-group">
                        <label for="key_points" class="control-label">Key Points</label>
                        <input type="text" class="form-control" name="key_points" id="key_points">
                    </div>

                    <div class="form-group">
                        <label for="key_points_image" class="control-label">Key Points Image</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="key_points_image" id="key_points_image">
                            <label class="custom-file-label" for="key_points_image">Image (opt)</label>
                        </div>
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
            {"data": "name"},
            {"data": "title"},
            {"data": "image"},
            {"data": "description"},
            {"data": "slider_title"},
            {"data": "slider_description"},
            {"data": "key_points_title"},
            {"data": "key_points"},
            {"data": "key_points_image"},
            {"data": "options", "orderable": false},
        ];
        InitTable('{{ route('services.fetch')}}',columns,'{{csrf_token()}}');
        $(document).on('click', '.edit', function () {

            var id = $(this).attr('data-id');
            $.ajax({
                "url": "{{route('services.edit')}}",
                type: "POST",
                data: {'id': id, _token: '{{csrf_token()}}'},
                dataType: "json",
                success: function (data) {
                    $('#modal').modal('toggle');
                    $('#edit_id').val(data.id);
                    $('#name').val(data.name);
                    $('#title').val(data.title);
                    $('#slider_title').val(data.slider_title);
                    $('#slider_description').val(data.slider_description);
                    $('#key_points_title').val(data.key_points_title);
                    CKEDITOR.instances['description'].setData(data.description);
                    CKEDITOR.instances['key_points'].setData(data.key_points);
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
                url: "{{route('services.store')}}",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {

                    button.attr('disabled', null).html(previous);
                    swal('success', data.success, 'success').then((value) => {
                        $('#modal').modal('hide');
                        InitTable('{{ route('services.fetch')}}',columns,'{{csrf_token()}}');
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
            var route="{{route('services.destroy')}}";
            deleted(id,token,route);
            InitTable('{{ route('services.fetch')}}',columns,'{{csrf_token()}}');
        });



        CKEDITOR.replace('description', {
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
        CKEDITOR.replace('key_points', {
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
