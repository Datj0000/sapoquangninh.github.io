<div class="card card-custom card-stretch">
    <div class="card-header py-3">
        <div class="card-title align-items-start flex-column">
            <h3 class="card-label font-weight-bolder text-dark">{{__('lang.editprofile')}}</h3>
            <span class="text-muted font-weight-bold font-size-sm mt-1">{{__('lang.edityourpersonal')}}</span>
        </div>
        <div class="card-toolbar">
            <button type="button" id="kt_edit_profile_submit" class="btn btn-success mr-2">{{__('lang.save')}}</button>
            <button onclick="view_profile();" type="reset" class="btn btn-secondary">{{__('lang.reset')}}</button>
        </div>
    </div>
    <form enctype="multipart/form-data" class="form" autocomplete="off" novalidate="novalidate"
        id="kt_edit_profile_form">
        <div class="card-body">
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">{{__('lang.avatar')}}:</label>
                <div class="col-lg-9 col-xl-6">
                    <div class="image-input image-input-outline" id="kt_profile_avatar">
                        @php
                            $admin_image = Auth::user()->admin_image;
                            if ($admin_image) {
                                echo '<div class="image-input-wrapper" style="background-image: url(uploads/avatar/'.$admin_image.')"></div>';
                            }
                            else {
                                echo '<div class="image-input-wrapper"></div>';
                            }
                        @endphp
                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                            data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                            <i class="fa fa-pen icon-sm text-muted"></i>
                            <input id="image" type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
                            <input type="hidden" name="profile_avatar_remove" />
                        </label>
                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                            data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                        </span>
                    </div>
                    <span class="form-text text-muted">{{__('lang.note')}}: png, jpg, jpeg.</span>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">{{__('lang.fullname')}}:</label>
                <div class="col-lg-9 col-xl-6">
                    <input id="name" name="name" class="form-control form-control-lg form-control-solid" type="text" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">{{__('lang.phone')}}:</label>
                <div class="col-lg-9 col-xl-6">
                    <div class="input-group input-group-lg input-group-solid">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="la la-phone"></i>
                            </span>
                        </div>
                        <input id="phone" name="phone" type="text"
                            class="form-control form-control-lg form-control-solid" />
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">Email</label>
                <div class="col-lg-9 col-xl-6">
                    <div class="input-group input-group-lg input-group-solid">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="la la-at"></i>
                            </span>
                        </div>
                        <input id="email" name="email" type="text"
                            class="form-control form-control-lg form-control-solid" />
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
</div>
<script src="{{ asset('backend/js/pages/custom/profile/profile.js') }}"></script>
<script>
    view_profile();
    function view_profile() {
        $.ajax({
            url: '{{ url('/view-profile') }}',
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name = "csrf-token" ]').attr('content')
            },
            success: function(response) {
                $('#name').val(response.data.admin_name);
                $('#phone').val(response.data.admin_phone);
                $('#email').val(response.data.admin_email);
                validation.validate();
            }
        })
    }
    var validation;
    var form = KTUtil.getById('kt_edit_profile_form');
    validation = FormValidation.formValidation(
        form, {
            fields: {
                name: {
                    validators: {
                        notEmpty: {
                            message: '{{__('lang.notempty')}}'
                        },
                        stringLength: {
                            max: 255,
                            message: '{{ __('lang.stringLength') }}',
                        },
                    }
                },
                phone: {
                    validators: {
                        notEmpty: {
                            message: '{{__('lang.notempty')}}'
                        },
                        phone: {
                            country: 'US',
                            message: '{{__('lang.notphone')}}'
                        },
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: '{{__('lang.notempty')}}'
                        },
                        emailAddress: {
                            message: '{{__('lang.notemail')}}'
                        }
                    }
                },
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap: new FormValidation.plugins.Bootstrap()
            }
        }
    );
    $('#kt_edit_profile_submit').on('click', function(e) {
        e.preventDefault();
        var image = $('#image').get(0).files[0];
        var name = $('#name').val();
        var phone = $('#phone').val();
        var email = $('#email').val();
        var form_data = new FormData();
        validation.validate().then(function(status) {
            if (status != 'Valid') {
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
            else {
                form_data.append("admin_image", image);
                form_data.append("admin_name", name);
                form_data.append("admin_phone", phone);
                form_data.append("admin_email", email);
                $.ajax({
                    url: '{{ url('/update-profile') }}',
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name = "csrf-token" ]').attr('content')
                    },
                    data: form_data,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        if (data == 0) {
                            Swal.fire("", "Email này đã được sử dụng rồi!", "warning");
                        } else if (data == 1) {
                            Swal.fire({
                                title: "Thành công",
                                text: "Tải lại trang để cập nhật thông tin?",
                                icon: "success",
                                showCancelButton: false,
                                confirmButtonText: "Đồng ý!",
                            })
                            .then(function(result) {
                                if (result.value) {
                                    location.reload();
                                }
                            });
                        }
                    }
                })
            }
        });
    });
</script>
