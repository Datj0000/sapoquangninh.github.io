<style>#name_excel{width:400px;outline:0;border:0;cursor:context-menu}input[type=checkbox]{position:relative;cursor:pointer;margin-right:3px}input[type=checkbox]:before{content:"";display:block;position:absolute;width:16px;height:16px;top:0;left:0;border:2px solid #555;border-radius:3px;background-color:white}input[type=checkbox]:checked:after{content:"";display:block;width:5px;height:10px;border:solid black;border-width:0 2px 2px 0;-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg);position:absolute;top:2px;left:6px}</style>
<div class="card card-custom">
<div class="card-header flex-wrap py-5">
<div class="card-title">
<h3 class="card-label">{{ __('lang.register') }}
<span class="d-block text-muted pt-2 font-size-sm">{{ __('lang.register_manager') }}</span>
</h3>
</div>
<?php
$admin_role = Auth::user()->admin_role;
if ($admin_role == '1') {
?>
<div class="card-toolbar">
<div class="dropdown dropdown-inline mr-2">
<button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="svg-icon svg-icon-md">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<rect x="0" y="0" width="24" height="24" />
<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
</g>
</svg>
</span>Excel</button>
<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
<ul class="navi flex-column navi-hover py-2">
<li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">
{{ __('lang.choose_an_option') }}:</li>
<li class="navi-item">
<a target="_blank" href="export-excel" class="navi-link">
<span class="navi-icon">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<rect x="0" y="0" width="24" height="24" />
<path d="M17,8 C16.4477153,8 16,7.55228475 16,7 C16,6.44771525 16.4477153,6 17,6 L18,6 C20.209139,6 22,7.790861 22,10 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,9.99305689 C2,7.7839179 3.790861,5.99305689 6,5.99305689 L7.00000482,5.99305689 C7.55228957,5.99305689 8.00000482,6.44077214 8.00000482,6.99305689 C8.00000482,7.54534164 7.55228957,7.99305689 7.00000482,7.99305689 L6,7.99305689 C4.8954305,7.99305689 4,8.88848739 4,9.99305689 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,10 C20,8.8954305 19.1045695,8 18,8 L17,8 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 8.000000) scale(1, -1) rotate(-180.000000) translate(-12.000000, -8.000000) " x="11" y="2" width="2" height="12" rx="1" />
<path d="M12,2.58578644 L14.2928932,0.292893219 C14.6834175,-0.0976310729 15.3165825,-0.0976310729 15.7071068,0.292893219 C16.0976311,0.683417511 16.0976311,1.31658249 15.7071068,1.70710678 L12.7071068,4.70710678 C12.3165825,5.09763107 11.6834175,5.09763107 11.2928932,4.70710678 L8.29289322,1.70710678 C7.90236893,1.31658249 7.90236893,0.683417511 8.29289322,0.292893219 C8.68341751,-0.0976310729 9.31658249,-0.0976310729 9.70710678,0.292893219 L12,2.58578644 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 2.500000) scale(1, -1) translate(-12.000000, -2.500000) " />
</g>
</svg>
</span>
<span class="navi-text">{{ __('lang.export') }} file excel</span>
</a>
</li>
<li class="navi-item">
<label style="cursor:pointer" class="navi-link" data-toggle="modal" data-target="#exampleModalPopovers2">
<span class="navi-icon">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<rect x="0" y="0" width="24" height="24" />
<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 7.000000) rotate(-180.000000) translate(-12.000000, -7.000000) " x="11" y="1" width="2" height="12" rx="1" />
<path d="M17,8 C16.4477153,8 16,7.55228475 16,7 C16,6.44771525 16.4477153,6 17,6 L18,6 C20.209139,6 22,7.790861 22,10 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,9.99305689 C2,7.7839179 3.790861,5.99305689 6,5.99305689 L7.00000482,5.99305689 C7.55228957,5.99305689 8.00000482,6.44077214 8.00000482,6.99305689 C8.00000482,7.54534164 7.55228957,7.99305689 7.00000482,7.99305689 L6,7.99305689 C4.8954305,7.99305689 4,8.88848739 4,9.99305689 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,10 C20,8.8954305 19.1045695,8 18,8 L17,8 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
<path d="M14.2928932,10.2928932 C14.6834175,9.90236893 15.3165825,9.90236893 15.7071068,10.2928932 C16.0976311,10.6834175 16.0976311,11.3165825 15.7071068,11.7071068 L12.7071068,14.7071068 C12.3165825,15.0976311 11.6834175,15.0976311 11.2928932,14.7071068 L8.29289322,11.7071068 C7.90236893,11.3165825 7.90236893,10.6834175 8.29289322,10.2928932 C8.68341751,9.90236893 9.31658249,9.90236893 9.70710678,10.2928932 L12,12.5857864 L14.2928932,10.2928932 Z" fill="#000000" fill-rule="nonzero" />
</g>
</svg>
</span>
<span class="navi-text">{{ __('lang.import') }} file excel</span>
</label>
</li>
</ul>
</div>
</div>
<span class="view_history btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#exampleModalPopovers3">
<span class="svg-icon svg-icon-md">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<rect x="0" y="0" width="24" height="24" />
<path d="M11.5,5 L18.5,5 C19.3284271,5 20,5.67157288 20,6.5 C20,7.32842712 19.3284271,8 18.5,8 L11.5,8 C10.6715729,8 10,7.32842712 10,6.5 C10,5.67157288 10.6715729,5 11.5,5 Z M5.5,17 L18.5,17 C19.3284271,17 20,17.6715729 20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 C4,17.6715729 4.67157288,17 5.5,17 Z M5.5,11 L18.5,11 C19.3284271,11 20,11.6715729 20,12.5 C20,13.3284271 19.3284271,14 18.5,14 L5.5,14 C4.67157288,14 4,13.3284271 4,12.5 C4,11.6715729 4.67157288,11 5.5,11 Z" fill="#000000" opacity="0.3" />
<path d="M4.82866499,9.40751652 L7.70335558,6.90006821 C7.91145727,6.71855155 7.9330087,6.40270347 7.75149204,6.19460178 C7.73690043,6.17787308 7.72121098,6.16213467 7.70452782,6.14749103 L4.82983723,3.6242308 C4.62230202,3.44206673 4.30638833,3.4626341 4.12422426,3.67016931 C4.04415337,3.76139218 4,3.87862714 4,4.00000654 L4,9.03071508 C4,9.30685745 4.22385763,9.53071508 4.5,9.53071508 C4.62084305,9.53071508 4.73759731,9.48695028 4.82866499,9.40751652 Z" fill="#000000" />
</g>
</svg>
</span>{{ __('lang.history') }}</span>
<span style="margin-left:5px" onclick="view_email()" class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#exampleModalPopovers">
<span class="svg-icon svg-icon-md">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<rect x="0" y="0" width="24" height="24" />
<path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000" />
</g>
</svg>
</span>{{ __('lang.setting') }}</span>
</div>
<?php
}
?>
</div>
<div class="modal fade" id="exampleModalPopovers" tabindex="-1" comment="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-lg" comment="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">{{ __('lang.setting_email') }}</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<i aria-hidden="true" class="ki ki-close"></i>
</button>
</div>
<div class="modal-body">
<form class="form" id="form_setting">
<div class="card-body">
<div class="form-group">
<label>Email:</label>
<input name="email" type="text" class="form-control form-control-solid" id="email" placeholder="Email" />
</div>
</div>
<div class="card-footer">
<button id="update_email" type="button" class="btn btn-primary mr-2">{{ __('lang.save') }}</button>
<button onclick="view_email()" type="reset" class="btn btn-secondary">{{ __('lang.reset') }}</button>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="modal fade" id="exampleModalPopovers2" tabindex="-1" comment="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-lg" comment="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">{{ __('lang.import') }} file excel</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<i aria-hidden="true" class="ki ki-close"></i>
</button>
</div>
<div class="modal-body">
<form class="form" id="form_export">
<div class="card-body">
<div class="form-group">
<label>File excel: <input readonly id="name_excel"/></label><br>
<input type="file" name="file_excel" id="file_excel" style="display:none" accept=".xlsx">
<label style="margin-top:20px" for="file_excel" class="btn btn-light-primary font-weight-bolder">
<span class="svg-icon menu-icon">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<rect x="0" y="0" width="24" height="24" />
<path d="M2,13 C2,12.5 2.5,12 3,12 C3.5,12 4,12.5 4,13 C4,13.3333333 4,15 4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 C2,15 2,13.3333333 2,13 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
<rect fill="#000000" opacity="0.3" x="11" y="2" width="2" height="14" rx="1" />
<path d="M12.0362375,3.37797611 L7.70710678,7.70710678 C7.31658249,8.09763107 6.68341751,8.09763107 6.29289322,7.70710678 C5.90236893,7.31658249 5.90236893,6.68341751 6.29289322,6.29289322 L11.2928932,1.29289322 C11.6689749,0.916811528 12.2736364,0.900910387 12.6689647,1.25670585 L17.6689647,5.75670585 C18.0794748,6.12616487 18.1127532,6.75845471 17.7432941,7.16896473 C17.3738351,7.57947475 16.7415453,7.61275317 16.3310353,7.24329415 L12.0362375,3.37797611 Z" fill="#000000" fill-rule="nonzero" />
</g>
</svg>
</span>{{ __('lang.upload') }}</label>
</div>
<div class="form-group">
<input type="checkbox" name="checkbox" id="checkbox-1" value="2" class="custom" />
<label style="cursor:pointer;user-select:none" for="checkbox-1">{{ __('lang.override') }}</label>
</div>
</div>
<div class="card-footer">
<button id="import_excel" type="button" class="btn btn-primary mr-2">{{ __('lang.save') }}</button>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="modal fade" id="exampleModalPopovers3" tabindex="-1" comment="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-lg" comment="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">{{ __('lang.history') }}</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<i aria-hidden="true" class="ki ki-close"></i>
</button>
</div>
<div class="modal-body">
    <div class="card-body">
    <table class="table-separate table-head-custom table-checkable" cellspacing="0" width="100%" id="kt_datatable1">
        <thead>
        <tr>
        <th>Thời gian</th>
        <th>Hoạt động</th>
        </tr>
        </thead>
    </table>
    </div>
    <div class="card-body">
        <button id="delete" type="button" class="btn btn-primary mr-2"><i class="fas fa-trash"></i>Xoá tất cả</button>
    </div>
</div>
</div>
</div>
</div>
<div class="card-body">
<table class="table table-separate table-head-custom table-checkable display nowrap" cellspacing="0" width="100%" id="kt_datatable">
<thead>
<tr>
<th>{{ __('lang.no') }}</th>
<th>{{ __('lang.time') }}</th>
<th>{{ __('lang.status') }}</th>
<th>{{ __('lang.product') }}</th>
<th>{{ __('lang.fullname') }}</th>
<th>{{ __('lang.phone') }}</th>
<th>{{ __('lang.store') }}</th>
<th>{{ __('lang.address') }}</th>
<th>{{ __('lang.function') }}</th>
</tr>
</thead>
</table>
</div>
</div>
<script type="text/javascript">
    var form = KTUtil.getById('form_setting');
    var validation = FormValidation.formValidation(
        form, {
            fields: {
                email: {
                    validators: {
                        notEmpty: {
                            message: '{{ __('lang.notempty') }}'
                        },
                        emailAddress: {
                            message: '{{ __('lang.notemail') }}'
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
    var form = KTUtil.getById('form_export');
    var validation2 = FormValidation.formValidation(
        form, {
            fields: {
                file_excel: {
                    validators: {
                        notEmpty: {
                            message: '{{ __('lang.notfile') }}'
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
    function view_email() {
        $.ajax({
            url: 'view-email',
            method: 'GET',
            success: function(response) {
                $('#email').val(response.data.setting_email);
                validation.validate();
            }
        })
    }
    $(document).ready(function() {
        var i = 0;
        var table = $('#kt_datatable').DataTable({
            ajax: '{{ url('/fetchdata-register') }}',
            columns: [{
                    'data': null,
                    render: function() {
                        return i = i + 1
                    }
                },
                {
                    'data': null,
                    width: '75px',
                    render: function(data, type, row) {
                        return moment(row.register_time).format('DD-MM-YYYY');
                    }
                },
                {
                    'data': null,
                    sortable: false,
                    width: '75px',
                    overflow: 'visible',
                    autoHide: false,
                    render: function(data, type, row) {
                        if (row.register_status == 0) {
                            return `\
                            <span style="cursor: pointer" data-id_register='${row.register_id}' id="update_register" class="label label-lg label-light-warning label-inline">\
								Chưa liên hệ</i>\
							</span>\
                            `;
                        } else {
                            return `\
                            <span class="label label-lg label-light-success label-inline">\
								Đã liên hệ</i>\
							</span>\
                            `;
                        }
                    }
                },
                {
                    'data': 'register_product',
                    width: '75px',
                },
                {
                    'data': 'register_name'
                },
                {
                    'data': 'register_phone',
                    width: '75px',
                },
                {
                    'data': 'register_store'
                },
                {
                    'data': 'register_address'
                },
                {
                    'data': null,
                    sortable: false,
                    width: '75px',
                    overflow: 'visible',
                    autoHide: false,
                    render: function(data, type, row) {
                        return `\
                            <span  data-id_register='${row.register_id}' class="delete btn btn-sm btn-clean btn-icon" title="Xoá">\
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
        var table2 = $('#kt_datatable1').DataTable({
            ajax: 'fetchdata-history',
            columns: [
                {
                    'data': null,
                    width: '15px',
                    render: function(data, type, row) {
                        return `\<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">${moment(row.history_time).format('H:mm DD-MM-YYYY')}</div>`;
                    }
                },
                {
                    'data': null,
                    sortable: false,
                    render: function(data, type, row) {
                        if (row.history_type == 0) {
                            return `\<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">${row.history_admin} đã liên hệ với khách hàng ${row.history_register_name} - ${row.history_register_phone}</div>`;
                        } else {
                            return `\<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">${row.history_admin} đã xoá thông tin khách hàng ${row.history_register_name} - ${row.history_register_phone}</div>`;
                        }
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
        $(document).on('click', '.delete', function(e) {
            var register_id = $(this).data('id_register');
            Swal.fire({
                    title: "Xoá thông tin",
                    text: "Bạn có chắc là muốn xóa thông tin không?",
                    icon: "question",
                    showCancelButton: true,
                    confirmButtonText: "Đồng ý!",
                    cancelButtonText: "Không"
                })
                .then(function(result) {
                    if (result.value) {
                        $.ajax({
                            url: 'delete-register/' + register_id,
                            method: 'GET',
                            success: function(data) {
                                Swal.fire({
                                    icon: "success",
                                    title: "Thành công",
                                    text: "Xoá thông tin thành công!",
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
        $(document).on('click', '#update_register', function(e) {
            e.preventDefault();
            var register_id = $(this).data('id_register');
            $.ajax({
                url: 'update-register/' + register_id,
                method: 'GET',
                success: function(data) {
                    Swal.fire({
                        icon: "success",
                        title: "Thành công",
                        text: "Cập nhật thành công!",
                        showConfirmButton: false,
                        timer: 1500
                    });
                    i = 0;
                    table.ajax.reload();
                },
            });
            e.preventDefault();
        });
        $('.view_history').click(function(e) {
            table2.ajax.reload();
        });
        $(document).on('click', '#delete', function(e) {
            e.preventDefault();
            Swal.fire({
                    title: "Xoá lịch sử",
                    text: "Bạn có chắc là muốn xóa lịch sử không?",
                    icon: "question",
                    showCancelButton: true,
                    confirmButtonText: "Đồng ý!",
                    cancelButtonText: "Không"
                })
                .then(function(result) {
                    if (result.value) {
                        $.ajax({
                            url: 'delete-history',
                            method: 'GET',
                            success: function(data) {
                                Swal.fire({
                                    icon: "success",
                                    title: "Thành công",
                                    text: "Xoá tất cả thành công!",
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                            },
                        });
                    }
                });
        });
        $('#update_email').click(function(e) {
            var setting_email = $('#email').val();
            validation.validate().then(function(status) {
                if (status == 'Valid') {
                    $.ajax({
                        url: 'update-email',
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name = "csrf-token" ]').attr(
                                'content')
                        },
                        data: {
                            setting_email: setting_email,
                        },
                        success: function(data) {
                            Swal.fire("",
                                "Cập nhật email nhận thông tin thành công!",
                                "success");
                        },
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
        $('#import_excel').click(function(e) {
            validation2.validate().then(function(status) {
                if (status == 'Valid') {
                    var value = $('input[name="checkbox"]:checked').val();
                    if (value != '2') {
                        value = '1';
                    }
                    var form_data = new FormData();
                    form_data.append("file_excel", document.getElementById("file_excel").files[
                        0]);
                    form_data.append("value", value);
                    $.ajax({
                        url: "{{ url('/import-excel') }}",
                        method: "POST",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: form_data,
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(data) {
                            Swal.fire("",
                                "Cập nhật danh sách khách hàng thành công!",
                                "success");
                            i = 0;
                            table.ajax.reload();
                        },
                        error: function(XMLHttpRequest, textStatus, errorThrown) {
                            Swal.fire("", "Vui lòng kiểm tra lại file excel!",
                                "error");
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
        $('#file_excel').change(function(e) {
            var excel = $('#file_excel').get(0).files[0];
            if(excel){
                if(excel.name != name_excel){
                    $('#name_excel').val(excel.name)
                }
            }
            else{
                    $('#name_excel').val('')
                }
        });
    })
</script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
