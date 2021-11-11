<style>
    input[type="file"] {
        display: none;
    }

</style>

<form class="form" autocomplete="off" novalidate="novalidate" id="form_edit_introduce">
    <div class="card card-custom card-stretch">
        <div class="card-header py-3">
            <div class="card-title align-items-start flex-column">
                <h3 class="card-label font-weight-bolder text-dark">{{ __('lang.introduce') }}</h3>
                <span class="text-muted font-weight-bold font-size-sm mt-1">{{ __('lang.introduce_manager') }}</span>
            </div>
            <div class="card-toolbar">
                <button type="button" id="update_introduce" class="btn btn-success mr-2">{{ __('lang.save') }}</button>
                <button type="reset" onclick="load_introduce()"
                    class="btn btn-secondary">{{ __('lang.reset') }}</button>
            </div>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">{{ __('lang.introduce') }}:</label>
                    <div class="col-lg-9 col-xl-6">
                        <textarea class="form-control" placeholder="{{ __('lang.introduce') }}"
                            id="introduce_desc"></textarea>
                        <input id="content" type="hidden" name="content">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">{{ __('lang.image') }}:</label>
                    <div class="col-lg-9 col-xl-6">
                        <label class="btn btn-light-primary font-weight-bolder" data-toggle="modal"
                            data-target="#exampleModalPopovers">
                            <span class="svg-icon menu-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path
                                            d="M2,13 C2,12.5 2.5,12 3,12 C3.5,12 4,12.5 4,13 C4,13.3333333 4,15 4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 C2,15 2,13.3333333 2,13 Z"
                                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                        <rect fill="#000000" opacity="0.3" x="11" y="2" width="2" height="14" rx="1" />
                                        <path
                                            d="M12.0362375,3.37797611 L7.70710678,7.70710678 C7.31658249,8.09763107 6.68341751,8.09763107 6.29289322,7.70710678 C5.90236893,7.31658249 5.90236893,6.68341751 6.29289322,6.29289322 L11.2928932,1.29289322 C11.6689749,0.916811528 12.2736364,0.900910387 12.6689647,1.25670585 L17.6689647,5.75670585 C18.0794748,6.12616487 18.1127532,6.75845471 17.7432941,7.16896473 C17.3738351,7.57947475 16.7415453,7.61275317 16.3310353,7.24329415 L12.0362375,3.37797611 Z"
                                            fill="#000000" fill-rule="nonzero" />
                                    </g>
                                </svg>
                            </span>{{ __('lang.image_manager') }}</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
{{-- Gallery --}}
<div class="modal fade" id="exampleModalPopovers" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">{{ __('lang.image_manager') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form class="form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>{{ __('lang.image') }}:</label><br>
                            <input type="file" id="gallery_image" multiple />
                            <label for="gallery_image" class="btn btn-primary mr-2">
                                <span class="svg-icon menu-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M2,13 C2,12.5 2.5,12 3,12 C3.5,12 4,12.5 4,13 C4,13.3333333 4,15 4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 C2,15 2,13.3333333 2,13 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <rect fill="#000000" opacity="0.3" x="11" y="2" width="2" height="14"
                                                rx="1" />
                                            <path
                                                d="M12.0362375,3.37797611 L7.70710678,7.70710678 C7.31658249,8.09763107 6.68341751,8.09763107 6.29289322,7.70710678 C5.90236893,7.31658249 5.90236893,6.68341751 6.29289322,6.29289322 L11.2928932,1.29289322 C11.6689749,0.916811528 12.2736364,0.900910387 12.6689647,1.25670585 L17.6689647,5.75670585 C18.0794748,6.12616487 18.1127532,6.75845471 17.7432941,7.16896473 C17.3738351,7.57947475 16.7415453,7.61275317 16.3310353,7.24329415 L12.0362375,3.37797611 Z"
                                                fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg>
                                </span>{{ __('lang.upload') }}</label>
                        </div>
                    </form>
                    <table class="table table-separate table-head-custom table-checkable display nowrap" cellspacing="0"
                        width="100%" id="kt_datatable">
                        <thead>
                            <tr>
                                <th style="width: 25%;">{{ __('lang.no') }}</th>
                                <th>{{ __('lang.image') }}</th>
                                <th>{{ __('lang.function') }}</th>
                            </tr>
                        </thead>
                        <tbody id="gallery_location">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('backend/js/pages/custom/profile/profile.js') }}"></script>
<script>
    var form = KTUtil.getById('form_edit_introduce');
    var validation = FormValidation.formValidation(
        form, {
            fields: {
                content: {
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
    ClassicEditor.create(document.querySelector('#introduce_desc'))
        .then(editor => {
            myEditor = editor;
            myEditor.model.document.on('change', () => {
                $('#content').val(myEditor.getData());
                validation.validate();
            });
        })
        .catch(error => {
            console.error(error);
        });
    load_introduce();

    function load_introduce() {
        $.ajax({
            url: 'view-introduce',
            method: 'GET',
            success: function(response) {
                myEditor.setData(response.data.introduce_desc);
                validation.validate();
            }
        })
    }
    $(document).ready(function() {
        var i = 0;
        var table = $('#kt_datatable').DataTable({
            ajax: '{{ url('/fetchdata-gallery') }}',
            columns: [{
                    'data': null,
                    render: function() {
                        return i = i + 1
                    }
                },
                {
                    'data': null,
                    sortable: false,
                    width: '150px',
                    overflow: 'visible',
                    autoHide: false,
                    render: function(data, type, row) {
                        return `\
                            <img style="width: 150px"
                            src="{{ asset('uploads/gallery/${row.gallery_image}') }}" />
                            `
                    }
                },
                {
                    'data': null,
                    sortable: false,
                    width: '75px',
                    overflow: 'visible',
                    autoHide: false,
                    render: function(data, type, row) {
                        return `\
                            <input type="file" class="file_image" data-id_gallery='${row.gallery_id}' id="file-${row.gallery_id}" name="file" accept="image/*" />
                            <label style="margin: 0" data-id_gallery='${row.gallery_id}' for="file-${row.gallery_id}" class="btn btn-sm btn-clean btn-icon" title="Sửa">\
								<i class="la la-edit"></i>\
							</label>\
                            <span data-id_gallery='${row.gallery_id}' class="delete-gallery btn btn-sm btn-clean btn-icon" title="Xoá">\
								<i class="la la-trash"></i>\
							</span>\
                            `
                    }
                },
            ],
            responsive: true,
            searching: false,
            paging: false,
            info: false,
        });
        $('#update_introduce').click(function(e) {
            var introduce_desc = myEditor.getData();
            var form_data = new FormData();
            validation.validate().then(function(status) {
                if (status == 'Valid') {
                    form_data.append("introduce_desc", introduce_desc);
                    $.ajax({
                        url: 'update-introduce',
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
                            Swal.fire("", "Cập nhật thông tin thành công!",
                                "success");
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
        $('#gallery_image').change(function() {
            var gallery_image = $('#gallery_image')[0].files;
            for (var c = 0; c < gallery_image.length; c++) {
                var name = document.getElementById('gallery_image').files[c].name;
                var oFReader = new FileReader();
                oFReader.readAsDataURL(document.getElementById('gallery_image').files[c]);
                var fsize = gallery_image.size;
                if (fsize > 2000000) {
                    Swal.fire("Thất bại", "Ảnh quá lớn!", "error");
                } else {
                    var form_data = new FormData();
                    form_data.append("gallery_image[]", document.getElementById(
                        'gallery_image').files[c]);
                    $.ajax({
                        url: "{{ url('/insert-gallery') }}",
                        method: 'POST',
                        data: form_data,
                        contentType: false,
                        cache: false,
                        processData: false,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name = "csrf-token" ]').attr('content')
                        },
                        success: function(data) {
                            if (data == 1) {
                                Swal.fire({
                                    icon: "success",
                                    title: "Thành công",
                                    text: "Thêm ảnh thành công!",
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                                i = 0;
                                table.ajax.reload();
                            } else {
                                Swal.fire("", "Chỉ hiện thị được 3 ảnh!",
                                    "warning");
                            }
                        }
                    })
                }
            }
        });
        $(document).on('click', '.delete-gallery', function() {
            var gallery_id = $(this).data('id_gallery');
            Swal.fire({
                    title: "Xoá ảnh",
                    text: "Bạn có chắc là muốn xóa ảnh không?",
                    icon: "question",
                    showCancelButton: true,
                    confirmButtonText: "Đồng ý!",
                    cancelButtonText: "Không"
                })
                .then(function(result) {
                    if (result.value) {
                        $.ajax({
                            url: "{{ url('/delete-gallery') }}",
                            method: "POST",
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name = "csrf-token" ]').attr(
                                    'content')
                            },
                            data: {
                                gallery_id: gallery_id,
                            },
                            success: function(data) {
                                i = 0;
                                table.ajax.reload();
                            }
                        });
                    }
                });
        });
        $(document).on('change', '.file_image', function() {
            var gallery_id = $(this).data('id_gallery');
            var image = document.getElementById("file-" + gallery_id).files[0];
            var form_data = new FormData();
            form_data.append("file", document.getElementById("file-" + gallery_id).files[0]);
            form_data.append("gallery_id", gallery_id);
            $.ajax({
                url: "{{ url('/update-gallery') }}",
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: form_data,
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    i = 0;
                    table.ajax.reload();
                }
            });

        });
        $('#gallery_location').sortable({
            placeholder: 'ui-state-highlight',
            update: function(event, ui) {
                var page_id_array = new Array();
                $('#gallery_location label').each(function() {
                    page_id_array.push($(this).data('id_gallery'));
                });

                $.ajax({
                    url: "{{ url('/arrange-gallery') }}",
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
    })
</script>
