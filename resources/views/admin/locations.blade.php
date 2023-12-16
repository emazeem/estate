@extends('admin.layouts.master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-5">
            <h4 class="page-title">Locations</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Locations</li>
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
                        <i class="fa fa-plus-circle"></i> Locations</button>
                </div>
                <div class="card-body" style="overflow-y: scroll">
                    <table id="example" class="table table-bordered table-hover display nowrap bg-white" width="100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Detail</th>
                            <th>Guide Title</th>
                            <th>Guide Detail</th>
                            <th>Guide Description</th>
                            <th>Growth</th>
                            <th>Location</th>
                            <th>Location Title</th>
                            <th>Location Description</th>
                            <th>Location Image</th>
                            <th>About Title</th>
                            <th>About Description</th>
                            <th>Around Location</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Detail</th>
                            <th>Guide Title</th>
                            <th>Guide Detail</th>
                            <th>Guide Description</th>
                            <th>Growth</th>
                            <th>Location</th>
                            <th>Location Title</th>
                            <th>Location Description</th>
                            <th>Location Image</th>
                            <th>About Title</th>
                            <th>About Description</th>
                            <th>Around Location</th>
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
                <h4 class="modal-title"><i class="fa fa-plus-circle"></i> Locations</h4>
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
                        <label for="detail" class="control-label">Detail</label>
                        <input type="text" class="form-control" name="detail" id="detail">
                    </div>
                    <div class="form-group">
                        <label for="guide_title" class="control-label">Guide Title</label>
                        <input type="text" class="form-control" name="guide_title" id="guide_title">
                    </div>
                    <div class="form-group">
                        <label for="guide_detail" class="control-label">Guide Detail</label>
                        <input type="text" class="form-control" name="guide_detail" id="guide_detail">
                    </div>

                    <div class="form-group">
                        <label for="guide_description" class="control-label">Guide Description</label>
                        <input type="text" class="form-control" name="guide_description" id="guide_description">
                    </div>
                    <div class="form-group">
                        <label for="growth" class="control-label">Growth</label>
                        <input type="text" class="form-control" name="growth" id="growth">
                    </div>
                    <div class="form-group">
                        <label for="location" class="control-label">Location</label>
                        <input type="text" class="form-control" name="location" id="location">
                    </div>
                    <div class="form-group">
                        <label for="location_title" class="control-label">Location Title</label>
                        <input type="text" class="form-control" name="location_title" id="location_title">
                    </div>
                    <div class="form-group">
                        <label for="location_description" class="control-label">Location Description</label>
                        <input type="text" class="form-control" name="location_description" id="location_description">
                    </div>
                    <div class="form-group">
                        <label for="about_title" class="control-label">About Title</label>
                        <input type="text" class="form-control" name="about_title" id="about_title">
                    </div>
                    <div class="form-group">
                        <label for="about_description" class="control-label">About Description</label>
                        <input type="text" class="form-control" name="about_description" id="about_description">
                    </div>
                    <div class="form-group">
                        <label for="around_location" class="control-label">Around Location</label>
                        <input type="text" class="form-control" name="around_location" id="around_location">
                    </div>
                    <div class="form-group">
                        <label for="location_image" class="control-label">Location Image</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="location_image" id="location_image">
                            <label class="custom-file-label" for="location_image">Image (opt)</label>
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
            {"data": "image"},
            {"data": "detail"},
            {"data": "guide_title"},
            {"data": "guide_detail"},
            {"data": "guide_description"},
            {"data": "growth"},
            {"data": "location"},
            {"data": "location_title"},
            {"data": "location_description"},
            {"data": "location_image"},
            {"data": "about_title"},
            {"data": "about_description"},
            {"data": "around_location"},
            {"data": "options", "orderable": false},
        ];
        InitTable('{{ route('locations.fetch')}}',columns,'{{csrf_token()}}');
        $(document).on('click', '.edit', function () {

            var id = $(this).attr('data-id');
            $.ajax({
                "url": "{{route('locations.edit')}}",
                type: "POST",
                data: {'id': id, _token: '{{csrf_token()}}'},
                dataType: "json",
                success: function (data) {
                    $('#modal').modal('toggle');
                    $('#edit_id').val(data.id);
                    $('#name').val(data.name);
                    $('#detail').val(data.detail);
                    $('#guide_title').val(data.guide_title);
                    $('#guide_detail').val(data.guide_detail);
                    $('#guide_description').val(data.guide_description);
                    $('#growth').val(data.growth);
                    $('#location').val(data.location);
                    $('#location_title').val(data.location_title);
                    $('#location_description').val(data.location_description);
                    $('#about_title').val(data.about_title);
                    $('#about_description').val(data.about_description);
                    CKEDITOR.instances['around_location'].setData(data.around_location);
                    CKEDITOR.instances['growth'].setData(data.around_location);
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
                url: "{{route('locations.store')}}",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {

                    button.attr('disabled', null).html(previous);
                    swal('success', data.success, 'success').then((value) => {
                        $('#modal').modal('hide');
                        InitTable('{{ route('locations.fetch')}}',columns,'{{csrf_token()}}');
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
            var route="{{route('locations.destroy')}}";
            deleted(id,token,route);
            InitTable('{{ route('locations.fetch')}}',columns,'{{csrf_token()}}');
        });



        CKEDITOR.replace('around_location', {
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
        CKEDITOR.replace('growth', {
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
