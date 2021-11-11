<form class="form" autocomplete="off" novalidate="novalidate" id="form_edit_infomation">
    <div class="card card-custom card-stretch">
    <div class="card-header py-3">
    <div class="card-title align-items-start flex-column">
    <h3 class="card-label font-weight-bolder text-dark">{{ __('lang.infomation') }}</h3>
    <span class="text-muted font-weight-bold font-size-sm mt-1">{{ __('lang.infomation_manager') }}</span>
    </div>
    <div class="card-toolbar">
    <button type="button" id="update_infomation" class="btn btn-success mr-2">{{ __('lang.save') }}</button>
    <button type="reset" onclick="load_infomation()" class="btn btn-secondary">{{ __('lang.reset') }}</button>
    </div>
    </div>
    <div class="card-body">
    <div class="card-body">
    <div class="form-group row">
    <label class="col-xl-3 col-lg-3 col-form-label">Logo:</label>
    <div class="col-lg-9 col-xl-6">
    <div class="image-input image-input-outline" id="kt_profile_avatar">
    <div class="view_image image-input-wrapper"></div>
    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
    <i class="fa fa-pen icon-sm text-muted"></i>
    <input id="image" type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
    <input type="hidden" name="profile_avatar_remove" />
    </label>
    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
    <i class="ki ki-bold-close icon-xs text-muted"></i>
    </span>
    </div>
    <span class="form-text text-muted">{{ __('lang.note') }}: png, jpg, jpeg.</span>
    </div>
    </div>
    <div class="form-group row">
    <label class="col-xl-3 col-lg-3 col-form-label">Facebook:</label>
    <div class="col-lg-9 col-xl-6">
    <input id="infomation_facebook" class="form-control form-control-lg form-control-solid" type="text" placeholder="Link facebook" name="facebook" autocomplete="off" />
    </div>
    </div>
    <div class="form-group row">
    <label class="col-xl-3 col-lg-3 col-form-label">Youtube:</label>
    <div class="col-lg-9 col-xl-6">
    <input id="infomation_youtube" class="form-control form-control-lg form-control-solid" type="text" placeholder="Link youtube" name="youtube" autocomplete="off" />
    </div>
    </div>
    <div class="form-group row">
    <label class="col-xl-3 col-lg-3 col-form-label">Zalo:</label>
    <div class="col-lg-9 col-xl-6">
    <input id="infomation_zalo" class="form-control form-control-lg form-control-solid" type="text" placeholder="Link zalo" name="zalo" autocomplete="off" />
    </div>
    </div>
    <div class="form-group row">
    <label class="col-xl-3 col-lg-3 col-form-label">{{ __('lang.contact') }}:</label>
    <div class="col-lg-9 col-xl-6">
    <textarea class="form-control" placeholder="{{ __('lang.contact') }}" id="infomation_contact"></textarea>
    <input id="content" type="hidden" name="content">
    </div>
    </div>
    </div>
    </div>
    </div>
    </form>
<script src="{{ asset('backend/js/pages/custom/profile/profile.js') }}"></script>
<script>
    var form = KTUtil.getById('form_edit_infomation');
    var validation = FormValidation.formValidation(
        form, {
            fields: {
                content: {
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
                facebook: {
                    validators: {
                        notEmpty: {
                            message: '{{ __('lang.notempty') }}'
                        },
                        uri: {
                            message: '{{ __('lang.notweb') }}'
                        },
                    }
                },
                youtube: {
                    validators: {
                        notEmpty: {
                            message: '{{ __('lang.notempty') }}'
                        },
                        uri: {
                            message: '{{ __('lang.notweb') }}'
                        },
                    }
                },
                zalo: {
                    validators: {
                        notEmpty: {
                            message: '{{ __('lang.notempty') }}'
                        },
                        uri: {
                            message: '{{ __('lang.notweb') }}'
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
    ClassicEditor.create(document.querySelector('#infomation_contact'))
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
    load_infomation();

    function load_infomation() {
        $.ajax({
            url: 'view-infomation',
            method: 'GET',
            success: function(response) {
                myEditor.setData(response.data.infomation_contact);
                $('.view_image').css("background-image", "url(uploads/logo/" + response.data
                    .infomation_logo + ")");
                $('#infomation_facebook').val(response.data.infomation_facebook);
                $('#infomation_youtube').val(response.data.infomation_youtube);
                $('#infomation_zalo').val(response.data.infomation_zalo);
                validation.validate();
            }
        })
    }
    $(document).ready(function() {
        $('#update_infomation').click(function(e) {
            var infomation_logo = $('#image').get(0).files[0];
            var infomation_contact = myEditor.getData();
            var infomation_facebook = $('#infomation_facebook').val();
            var infomation_youtube = $('#infomation_youtube').val();
            var infomation_zalo = $('#infomation_zalo').val();
            var form_data = new FormData();
            validation.validate().then(function(status) {
                if (status == 'Valid' && infomation_contact != "") {
                    form_data.append("infomation_logo", infomation_logo);
                    form_data.append("infomation_contact", infomation_contact);
                    form_data.append("infomation_facebook", infomation_facebook);
                    form_data.append("infomation_youtube", infomation_youtube);
                    form_data.append("infomation_zalo", infomation_zalo);
                    $.ajax({
                        url: 'update-infomation',
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
    })
</script>
