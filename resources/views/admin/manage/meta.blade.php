<form class="form" autocomplete="off" novalidate="novalidate" id="form_edit_meta">
<div class="card card-custom card-stretch">
<div class="card-header py-3">
<div class="card-title align-items-start flex-column">
<h3 class="card-label font-weight-bolder text-dark">{{ __('lang.meta') }}</h3>
<span class="text-muted font-weight-bold font-size-sm mt-1">{{ __('lang.meta_manager') }}</span>
</div>
<div class="card-toolbar">
<button type="button" id="update_meta" class="btn btn-success mr-2">{{ __('lang.save') }}</button>
<button type="reset" onclick="load_meta()" class="btn btn-secondary">{{ __('lang.reset') }}</button>
</div>
</div>
<div class="card-body">
<div class="card-body">
<div class="form-group row">
<label class="col-xl-3 col-lg-3 col-form-label">{{__('lang.meta_title')}}:</label>
<div class="col-lg-9 col-xl-6">
<input id="meta_title" name="title" class="form-control form-control-lg form-control-solid" type="text" />
</div>
</div>
<div class="form-group row">
<label class="col-xl-3 col-lg-3 col-form-label">{{__('lang.meta_keywords')}}:</label>
<div class="col-lg-9 col-xl-6">
<input class="form-control form-control-lg form-control-solid tagify" id="meta_keywords" name="keywords" />
</div>
</div>
<div class="form-group row">
<label class="col-xl-3 col-lg-3 col-form-label">{{__('lang.meta_desc')}}:</label>
<div class="col-lg-9 col-xl-6">
<textarea style="resize: none" id="meta_desc" name="desc" class="form-control form-control-lg form-control-solid" cols="30" rows="7"></textarea>
</div>
</div>
</div>
</div>
</div>
</form>
<script>
    var form = KTUtil.getById('form_edit_meta');
    var validation = FormValidation.formValidation(
        form, {
            fields: {
                title: {
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
                        stringLength: {
                            max: 255,
                            message: '{{ __('lang.stringLength') }}',
                        },
                    }
                },
                keywords: {
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
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap: new FormValidation.plugins.Bootstrap()
            }
        }
    );

    load_meta();
    function load_meta() {
        $.ajax({
            url: 'view-meta',
            method: 'GET',
            success: function(response) {
                $('#meta_title').val(response.data.meta_title);
                $('#meta_keywords').val(response.data.meta_keywords);
                $('#meta_desc').val(response.data.meta_desc);
                new Tagify(document.querySelector("#meta_keywords"));
                validation.validate();
            }
        })
    }
    $(document).ready(function() {
        $('#update_meta').click(function(e) {
            var meta_desc = $('#meta_desc').val();
            var meta_title = $('#meta_title').val();
            var meta_keywords = $('#meta_keywords').val();
            validation.validate().then(function(status) {
                if (status == 'Valid') {
                    $.ajax({
                        url: 'update-meta',
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name = "csrf-token" ]').attr(
                                'content')
                        },
                        data: {
                            meta_desc: meta_desc,
                            meta_title: meta_title,
                            meta_keywords: meta_keywords,
                        },
                        success: function(data) {
                            Swal.fire("", "Cập nhật thông tin thành công!","success");
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
    })
</script>
