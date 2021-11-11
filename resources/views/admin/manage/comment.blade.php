<style>.comment__shape{width:5rem;height:5rem;-webkit-clip-path:circle(50% at 50% 50%);clip-path:circle(50% at 50% 50%);shape-outside:circle(50% at 50% 50%);border-radius:50%;margin-right:.5rem}.comment__img{width:100%;height:100%}</style>
<div class="card card-custom">
<div class="card-header flex-wrap py-5">
<div class="card-title">
<h3 class="card-label">{{ __('lang.comment') }}
<span class="d-block text-muted pt-2 font-size-sm">{{ __('lang.comment_manager') }}</span>
</h3>
</div>
<div class="card-toolbar">
<span class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#exampleModalPopovers">
<span class="svg-icon svg-icon-md">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<rect x="0" y="0" width="24" height="24" />
<circle fill="#000000" cx="9" cy="15" r="6" />
<path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
</g>
</svg>
</span>{{ __('lang.new') }}</span>
</div>
</div>
{{-- Add --}}
<div class="modal fade" id="exampleModalPopovers" tabindex="-1" comment="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-lg" comment="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">{{ __('lang.new') }}</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<i aria-hidden="true" class="ki ki-close"></i>
</button>
</div>
<div class="modal-body">
<form class="form" id="form_add_comment" enctype="multipart/form-data">
<div class="card-body">
<div class="form-group">
<label>{{ __('lang.avatar') }}:</label><br>
<div class="col-lg-9 col-xl-6">
<div class="image-input image-input-outline image-input-circle" id="kt_image_1">
<div class="image-input-wrapper"></div>
<label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
<i class="fa fa-pen icon-sm text-muted"></i>
<input id="comment_image" type="file" name="image" accept=".png, .jpg, .jpeg" />
<input type="hidden" name="profile_avatar_remove" />
</label>
<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
<i class="ki ki-bold-close icon-xs text-muted"></i>
</span>
</div>
<span class="form-text text-muted">{{ __('lang.note') }}: png, jpg, jpeg.</span>
</div>
</div>
<div class="form-group">
<label>{{ __('lang.fullname') }}:</label>
<input name="name" type="text" class="form-control form-control-solid" id="comment_name" placeholder="{{ __('lang.fullname') }}" />
</div>
<div class="form-group">
<label>{{ __('lang.comment_role') }}:</label>
<input name="role" type="text" class="form-control form-control-solid" id="comment_role" placeholder="{{ __('lang.comment_role') }}" />
</div>
<div class="form-group">
<label>{{ __('lang.comment_desc') }}:</label>
<textarea name="desc" rows="5" class="form-control form-control-solid" id="comment_desc" placeholder="{{ __('lang.comment_desc') }}"></textarea>
</div>
</div>
<div class="card-footer">
<button id="add_comment" type="button" class="btn btn-primary mr-2">{{ __('lang.save') }}</button>
<button type="reset" class="btn btn-secondary">{{ __('lang.reset') }}</button>
</div>
</form>
</div>
</div>
</div>
</div>
{{-- Edit --}}
<div class="modal fade" id="exampleModalPopovers2" tabindex="-1" comment="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-lg" comment="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">{{ __('lang.edit') }}</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<i aria-hidden="true" class="ki ki-close"></i>
</button>
</div>
<div class="modal-body">
<form class="form" id="form_edit_comment">
<div class="card-body">
<input type="hidden" id="edit_comment_id">
<div class="form-group">
<label>{{ __('lang.avatar') }}:</label><br>
<div class="col-lg-9 col-xl-6">
<div class="image-input image-input-outline image-input-circle" id="kt_image_2">
<div class="view_image image-input-wrapper"></div>
<label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
<i class="fa fa-pen icon-sm text-muted"></i>
<input id="edit_comment_image" type="file" name="image" accept=".png, .jpg, .jpeg" />
<input type="hidden" name="profile_avatar_remove" />
</label>
<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
<i class="ki ki-bold-close icon-xs text-muted"></i>
</span>
</div>
<span class="form-text text-muted">{{ __('lang.note') }}: png, jpg, jpeg.</span>
</div>
</div>
<div class="form-group">
<label>{{ __('lang.fullname') }}:</label>
<input name="name" type="text" class="form-control form-control-solid" id="edit_comment_name" placeholder="{{ __('lang.fullname') }}" />
</div>
<div class="form-group">
<label>{{ __('lang.comment_role') }}:</label>
<input name="role" type="text" class="form-control form-control-solid" id="edit_comment_role" placeholder="{{ __('lang.comment_role') }}" />
</div>
<div class="form-group">
<label>{{ __('lang.comment_desc') }}:</label>
<textarea name="desc" rows="5" class="form-control form-control-solid" id="edit_comment_desc" placeholder="{{ __('lang.comment_desc') }}"></textarea>
</div>
</div>
<div class="card-footer">
<button id="update_comment" type="button" class="btn btn-primary mr-2">{{ __('lang.save') }}</button>
<button type="reset" class="btn btn-secondary">{{ __('lang.reset') }}</button>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="card-body">
<table class="table table-separate table-head-custom table-checkable display nowrap" cellspacing="0" width="100%" id="kt_datatable">
<thead>
<tr>
<th>{{ __('lang.no') }}</th>
<th>{{ __('lang.avatar') }}</th>
<th>{{ __('lang.fullname') }}</th>
<th>{{ __('lang.comment_role') }}</th>
<th>{{ __('lang.function') }}</th>
</tr>
</thead>
<tbody id="comment_location">
</tbody>
</table>
</div>
</div>
<script src="{{ asset('backend/js/pages/crud/file-upload/image-input.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        var i = 0;
        var table = $('#kt_datatable').DataTable({
            ajax: '{{ url('/fetchdata-comment') }}',
            columns: [{
                    'data': null,
                    render: function() {
                        return i = i + 1
                    }
                },
                {
                    'data': null,
                    sortable: false,
                    width: '60px',
                    overflow: 'visible',
                    autoHide: false,
                    render: function(data, type, row) {
                        return `\
                            <div class="comment__shape">
                                <img class="comment__img" src="{{ asset('uploads/khachhang/${row.comment_image}') }}">
                            </div>
                            `
                    }
                },
                {
                    'data': 'comment_name'
                },
                {
                    'data': 'comment_role'
                },
                {
                    'data': null,
                    sortable: false,
                    width: '75px',
                    overflow: 'visible',
                    autoHide: false,
                    render: function(data, type, row) {
                        return `\
                            <span data-toggle="modal" data-target="#exampleModalPopovers2" data-id_comment='${row.comment_id}' class="edit btn btn-sm btn-clean btn-icon" title="Sửa">\
        						<i class="la la-edit"></i>\
        					</span>\
                            <span data-id_comment='${row.comment_id}' class="delete btn btn-sm btn-clean btn-icon" title="Xoá">\
        						<i class="la la-trash"></i>\
        					</span>\
                            `
                    }
                },
            ],
            responsive: true,
            language: {
                processing: "{{ __('lang.loading') }}",
                search: "{{ __('lang.search') }}:",
                lengthMenu: "{{ __('lang.lengthMenu') }} _MENU_ {{ __('lang.lengthMenu2') }}",
                info: "{{ __('lang.info') }} _START_ {{ __('lang.info2') }} _END_ {{ __('lang.info3') }} _TOTAL_ {{ __('lang.info4') }}",
                infoEmpty: "{{ __('lang.infoEmpty') }}",
                loadingRecords: "{{ __('lang.loading') }}",
                zeroRecords: "{{ __('lang.zeroRecords') }}",
                emptyTable: "{{ __('lang.infoEmpty') }}",
            },
        });
        var form = KTUtil.getById('form_add_comment');
        var validation = FormValidation.formValidation(
            form, {
                fields: {
                    image: {
                        validators: {
                            notEmpty: {
                                message: '{{ __('lang.notemptyimage') }}'
                            },
                        }
                    },
                    name: {
                        validators: {
                            notEmpty: {
                                message: '{{ __('lang.notempty') }}'
                            },
                            stringLength: {
                                max: 255,
                                message: '{{ __('lang.stringLength') }}',
                            },
                        }
                    },
                    role: {
                        validators: {
                            notEmpty: {
                                message: '{{ __('lang.notempty') }}'
                            },
                            stringLength: {
                                max: 255,
                                message: '{{ __('lang.stringLength') }}',
                            },
                        }
                    },
                    desc: {
                        validators: {
                            notEmpty: {
                                message: '{{ __('lang.notempty') }}'
                            },
                        }
                    },
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap()
                }
            }
        );
        var form2 = KTUtil.getById('form_edit_comment');
        var validation2 = FormValidation.formValidation(
            form2, {
                fields: {
                    name: {
                        validators: {
                            notEmpty: {
                                message: '{{ __('lang.notempty') }}'
                            },
                            stringLength: {
                                max: 255,
                                message: '{{ __('lang.stringLength') }}',
                            },
                        }
                    },
                    role: {
                        validators: {
                            notEmpty: {
                                message: '{{ __('lang.notempty') }}'
                            },
                            stringLength: {
                                max: 255,
                                message: '{{ __('lang.stringLength') }}',
                            },
                        }
                    },
                    desc: {
                        validators: {
                            notEmpty: {
                                message: '{{ __('lang.notempty') }}'
                            },
                        }
                    },
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap()
                }
            }
        );
        $('#comment_location').sortable({
            placeholder: 'ui-state-highlight',
            update: function(event, ui) {
                var page_id_array = new Array();
                console.log(page_id_array);
                $('#comment_location span').each(function() {
                    page_id_array.push($(this).data('id_comment'));
                });

                $.ajax({
                    url: "{{ url('/arrange-comment') }}",
                    method: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name = "csrf-token" ]').attr(
                            'content')
                    },
                    data: {
                        page_id_array: page_id_array,
                    },
                    success: function(data) {
                        i = 0;
                        table.ajax.reload();
                    }
                });
            }
        });
        $(document).on('click', '.edit', function(e) {
            e.preventDefault();
            var comment_id = $(this).data('id_comment');
            $.ajax({
                url: 'view-comment/' + comment_id,
                method: 'GET',
                success: function(response) {
                    $('#edit_comment_id').val(response.data.comment_id);
                    $('#edit_comment_name').val(response.data.comment_name);
                    $('#edit_comment_role').val(response.data.comment_role);
                    $('#edit_comment_desc').val(response.data.comment_desc);
                    $('.view_image').css("background-image", "url(uploads/khachhang/" +
                        response.data.comment_image + ")");
                    validation2.validate();
                }
            })
        });
        $('#update_comment').click(function(e) {
            var comment_id = $('#edit_comment_id').val();
            var comment_image = $('#edit_comment_image').get(0).files[0];
            var comment_name = $('#edit_comment_name').val();
            var comment_role = $('#edit_comment_role').val();
            var comment_desc = $('#edit_comment_desc').val();
            var form_data = new FormData();
            validation2.validate().then(function(status) {
                if (status == 'Valid') {
                    form_data.append("comment_image", comment_image);
                    form_data.append("comment_name", comment_name);
                    form_data.append("comment_role", comment_role);
                    form_data.append("comment_desc", comment_desc);
                    $.ajax({
                        url: 'update-comment/' + comment_id,
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name = "csrf-token" ]').attr(
                                'content')
                        },
                        data: form_data,
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(data) {
                            if (data == 0) {
                                Swal.fire("", "Đánh giá này đã tồn tại rồi!",
                                    "warning");
                            } else if (data == 1) {
                                Swal.fire("", "Sửa đánh giá thành công!",
                                    "success");
                                i = 0;
                                table.ajax.reload();
                            }
                        }
                    })
                } else {
                    swal.fire({
                        text: "Xin lỗi, có vẻ như đã phát hiện thấy một số lỗi, vui lòng thử lại .",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Đồng ý!",
                        customClass: {
                            confirmButton: "btn font-weight-bold btn-light-primary"
                        }
                    }).then(function() {
                        KTUtil.scrollTop();
                    });
                }
            });
        });
        $('#add_comment').click(function(e) {
            var comment_image = $('#comment_image').get(0).files[0];
            var comment_name = $('#comment_name').val();
            var comment_role = $('#comment_role').val();
            var comment_desc = $('#comment_desc').val();
            var form_data = new FormData();
            validation.validate().then(function(status) {
                if (status == 'Valid') {
                    form_data.append("comment_image", comment_image);
                    form_data.append("comment_name", comment_name);
                    form_data.append("comment_role", comment_role);
                    form_data.append("comment_desc", comment_desc);
                    $.ajax({
                        url: '{{ url('/add-comment') }}',
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name = "csrf-token" ]').attr(
                                'content')
                        },
                        data: form_data,
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(data) {
                            if (data == 0) {
                                Swal.fire("", "Đánh giá này đã tồn tại rồi!",
                                    "warning");
                            } else if (data == 1) {
                                Swal.fire("", "Thêm đánh giá thành công!",
                                    "success");
                                i = 0;
                                table.ajax.reload();
                            }
                        }
                    });
                } else {
                    swal.fire({
                        text: "Xin lỗi, có vẻ như đã phát hiện thấy một số lỗi, vui lòng thử lại .",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Đồng ý!",
                        customClass: {
                            confirmButton: "btn font-weight-bold btn-light-primary"
                        }
                    }).then(function() {
                        KTUtil.scrollTop();
                    });
                }
            });
        });
        $(document).on('click', '.delete', function(e) {
            e.preventDefault();
            var comment_id = $(this).data('id_comment');
            Swal.fire({
                    title: "Xoá đánh giá",
                    text: "Bạn có chắc là muốn xóa đánh giá không?",
                    icon: "question",
                    showCancelButton: true,
                    confirmButtonText: "Đồng ý!",
                    cancelButtonText: "Không"
                })
                .then(function(result) {
                    if (result.value) {
                        $.ajax({
                            url: 'delete-comment/' + comment_id,
                            method: 'GET',
                            success: function(data) {
                                Swal.fire({
                                    icon: "success",
                                    title: "Thành công",
                                    text: "Xoá đánh giá thành công!",
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                                i = 0;
                                table.ajax.reload();
                            },
                        });
                    }
                });
            e.preventDefault();
        });
    })
</script>
