<!DOCTYPE html>
<html lang=en>
<head>
<base href>
<meta charset=utf-8 />
<title>@lang('lang.admin')</title>
<meta name=viewport content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name=csrf-token content="{{ csrf_token() }}">
<link rel=stylesheet href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
<link href="{{ asset('backend/css/themes/layout/header/base/light.css') }}" rel=stylesheet type=text/css />
<link href="{{ asset('backend/css/themes/layout/header/menu/light.css') }}" rel=stylesheet type=text/css />
<link href="{{ asset('backend/css/themes/layout/brand/dark.css') }}" rel=stylesheet type=text/css />
<link href="{{ asset('backend/css/themes/layout/aside/dark.css') }}" rel=stylesheet type=text/css />
<link href="{{ asset('backend/plugins/global/plugins.bundle.css') }}" rel=stylesheet type=text/css />
<link href="{{ asset('backend/css/style.bundle.css') }}" rel=stylesheet type=text/css />
<link href="{{ asset('backend/plugins/custom/datatables/datatables.bundle.css') }}" rel=stylesheet type=text/css />
<link rel="shortcut icon" href="{{ asset('backend/media/logos/favicon.ico') }}" />
</head>
<body id=kt_body class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
<div id=kt_header_mobile class="header-mobile align-items-center header-mobile-fixed">
@foreach ($infomation as $key => $infomation)
<a href="{{ URL::to('/admin') }}" class=header__logo>
<img style=max-height:40px alt=Logo src="{{ asset('uploads/logo/' . $infomation->infomation_logo . '') }}" />
</a>
@endforeach
<div class="d-flex align-items-center">
<button class="btn p-0 burger-icon burger-icon-left" id=kt_aside_mobile_toggle>
<span></span>
</button>
<button class="btn btn-hover-text-primary p-0 ml-2" id=kt_header_mobile_topbar_toggle>
<span class="svg-icon svg-icon-xl">
<svg xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink width=24px height=24px viewBox="0 0 24 24" version=1.1>
<g stroke=none stroke-width=1 fill=none fill-rule=evenodd>
<polygon points="0 0 24 0 24 24 0 24" />
<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill=#000000 fill-rule=nonzero opacity=0.3 />
<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill=#000000 fill-rule=nonzero />
</g>
</svg>
</span>
</button>
</div>
</div>
<div class="d-flex flex-column flex-root">
<div class="d-flex flex-row flex-column-fluid page">
<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id=kt_aside>
<div class="brand flex-column-auto" id=kt_brand>
<a href="{{ URL::to('/admin') }}" class=brand-logo>
<img style=max-height:40px alt=Logo src="{{ asset('uploads/logo/' . $infomation->infomation_logo . '') }}" />
</a>
<button class="brand-toggle btn btn-sm px-0" id=kt_aside_toggle>
<span class="svg-icon svg-icon svg-icon-xl">
<svg xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink width=24px height=24px viewBox="0 0 24 24" version=1.1>
<g stroke=none stroke-width=1 fill=none fill-rule=evenodd>
<polygon points="0 0 24 0 24 24 0 24" />
<path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill=#000000 fill-rule=nonzero transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
<path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill=#000000 fill-rule=nonzero opacity=0.3 transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
</g>
</svg>
</span>
</button>
</div>
<div class="aside-menu-wrapper flex-column-fluid" id=kt_aside_menu_wrapper>
<div id=kt_aside_menu class="aside-menu my-4" data-menu-vertical=1 data-menu-scroll=1 data-menu-dropdown-timeout=500>
<ul class=menu-nav>
<li class=menu-section>
<h4 class=menu-text>@lang('lang.manager')</h4>
<i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>
<li class="menu-item menu-item-active" aria-haspopup=true>
<a id=all_register class=menu-link>
<span class="svg-icon menu-icon">
<svg xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink width=24px height=24px viewBox="0 0 24 24" version=1.1>
<g stroke=none stroke-width=1 fill=none fill-rule=evenodd>
<rect x=0 y=0 width=24 height=24 />
<path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill=#000000 opacity=0.3 />
<path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill=#000000 />
<rect fill=#000000 opacity=0.3 x=10 y=9 width=7 height=2 rx=1 />
<rect fill=#000000 opacity=0.3 x=7 y=9 width=2 height=2 rx=1 />
<rect fill=#000000 opacity=0.3 x=7 y=13 width=2 height=2 rx=1 />
<rect fill=#000000 opacity=0.3 x=10 y=13 width=7 height=2 rx=1 />
<rect fill=#000000 opacity=0.3 x=7 y=17 width=2 height=2 rx=1 />
<rect fill=#000000 opacity=0.3 x=10 y=17 width=7 height=2 rx=1 />
</g>
</svg>
</span>
<span class=menu-text>@lang('lang.register')</span>
</a>
<?php
$admin_role = Auth::user()->admin_role;
if ($admin_role == '1') {
?>
<li class=menu-item aria-haspopup=true>
<a id=all_staff class=menu-link>
<span class="svg-icon menu-icon">
<svg xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink width=24px height=24px viewBox="0 0 24 24" version=1.1>
<g stroke=none stroke-width=1 fill=none fill-rule=evenodd>
<polygon points="0 0 24 0 24 24 0 24" />
<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill=#000000 fill-rule=nonzero opacity=0.3 />
<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill=#000000 fill-rule=nonzero />
</g>
</svg>
</span>
<span class=menu-text>@lang('lang.staff')</span>
</a>
</li>
<?php
                                }
                                ?>
<li class=menu-section>
<h4 class=menu-text>@lang('lang.display')</h4>
<i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>
<li class=menu-item aria-haspopup=true>
<a id=all_introduce class=menu-link>
<span class="svg-icon menu-icon">
<svg xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink width=24px height=24px viewBox="0 0 24 24" version=1.1>
<g stroke=none stroke-width=1 fill=none fill-rule=evenodd>
<rect x=0 y=0 width=24 height=24 />
<path d="M9.61764706,5 L8.73529412,7 L3,7 C2.44771525,7 2,6.55228475 2,6 C2,5.44771525 2.44771525,5 3,5 L9.61764706,5 Z M14.3823529,5 L21,5 C21.5522847,5 22,5.44771525 22,6 C22,6.55228475 21.5522847,7 21,7 L15.2647059,7 L14.3823529,5 Z M6.08823529,13 L5.20588235,15 L3,15 C2.44771525,15 2,14.5522847 2,14 C2,13.4477153 2.44771525,13 3,13 L6.08823529,13 Z M17.9117647,13 L21,13 C21.5522847,13 22,13.4477153 22,14 C22,14.5522847 21.5522847,15 21,15 L18.7941176,15 L17.9117647,13 Z M7.85294118,9 L6.97058824,11 L3,11 C2.44771525,11 2,10.5522847 2,10 C2,9.44771525 2.44771525,9 3,9 L7.85294118,9 Z M16.1470588,9 L21,9 C21.5522847,9 22,9.44771525 22,10 C22,10.5522847 21.5522847,11 21,11 L17.0294118,11 L16.1470588,9 Z M4.32352941,17 L3.44117647,19 L3,19 C2.44771525,19 2,18.5522847 2,18 C2,17.4477153 2.44771525,17 3,17 L4.32352941,17 Z M19.6764706,17 L21,17 C21.5522847,17 22,17.4477153 22,18 C22,18.5522847 21.5522847,19 21,19 L20.5588235,19 L19.6764706,17 Z" fill=#000000 opacity=0.3 />
<path d="M11.044,5.256 L13.006,5.256 L18.5,19 L16,19 L14.716,15.084 L9.19,15.084 L7.5,19 L5,19 L11.044,5.256 Z M13.924,13.14 L11.962,7.956 L9.964,13.14 L13.924,13.14 Z" fill=#000000 />
</g>
</svg>
</span>
<span class=menu-text>@lang('lang.introduce')</span>
</a>
</li>
<li class=menu-item aria-haspopup=true>
<a id=all_product class=menu-link>
<span class="svg-icon menu-icon">
<svg xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink width=24px height=24px viewBox="0 0 24 24" version=1.1>
<g stroke=none stroke-width=1 fill=none fill-rule=evenodd>
<rect x=0 y=0 width=24 height=24 />
<path d="M5,2 L19,2 C20.1045695,2 21,2.8954305 21,4 L21,6 C21,7.1045695 20.1045695,8 19,8 L5,8 C3.8954305,8 3,7.1045695 3,6 L3,4 C3,2.8954305 3.8954305,2 5,2 Z M11,4 C10.4477153,4 10,4.44771525 10,5 C10,5.55228475 10.4477153,6 11,6 L16,6 C16.5522847,6 17,5.55228475 17,5 C17,4.44771525 16.5522847,4 16,4 L11,4 Z M7,6 C7.55228475,6 8,5.55228475 8,5 C8,4.44771525 7.55228475,4 7,4 C6.44771525,4 6,4.44771525 6,5 C6,5.55228475 6.44771525,6 7,6 Z" fill=#000000 opacity=0.3 />
<path d="M5,9 L19,9 C20.1045695,9 21,9.8954305 21,11 L21,13 C21,14.1045695 20.1045695,15 19,15 L5,15 C3.8954305,15 3,14.1045695 3,13 L3,11 C3,9.8954305 3.8954305,9 5,9 Z M11,11 C10.4477153,11 10,11.4477153 10,12 C10,12.5522847 10.4477153,13 11,13 L16,13 C16.5522847,13 17,12.5522847 17,12 C17,11.4477153 16.5522847,11 16,11 L11,11 Z M7,13 C7.55228475,13 8,12.5522847 8,12 C8,11.4477153 7.55228475,11 7,11 C6.44771525,11 6,11.4477153 6,12 C6,12.5522847 6.44771525,13 7,13 Z" fill=#000000 />
<path d="M5,16 L19,16 C20.1045695,16 21,16.8954305 21,18 L21,20 C21,21.1045695 20.1045695,22 19,22 L5,22 C3.8954305,22 3,21.1045695 3,20 L3,18 C3,16.8954305 3.8954305,16 5,16 Z M11,18 C10.4477153,18 10,18.4477153 10,19 C10,19.5522847 10.4477153,20 11,20 L16,20 C16.5522847,20 17,19.5522847 17,19 C17,18.4477153 16.5522847,18 16,18 L11,18 Z M7,20 C7.55228475,20 8,19.5522847 8,19 C8,18.4477153 7.55228475,18 7,18 C6.44771525,18 6,18.4477153 6,19 C6,19.5522847 6.44771525,20 7,20 Z" fill=#000000 />
</g>
</svg>
</span>
<span class=menu-text>@lang('lang.product')</span>
</a>
</li>
<li class=menu-item aria-haspopup=true>
<a id=all_customer class=menu-link>
<span class="svg-icon menu-icon">
<svg xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink width=24px height=24px viewBox="0 0 24 24" version=1.1>
<g stroke=none stroke-width=1 fill=none fill-rule=evenodd>
<polygon points="0 0 24 0 24 24 0 24" />
<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill=#000000 fill-rule=nonzero opacity=0.3 />
<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill=#000000 fill-rule=nonzero />
</g>
</svg>
</span>
<span class=menu-text>@lang('lang.customer')</span>
</a>
</li>
<li class=menu-item aria-haspopup=true>
<a id=all_comment class=menu-link>
<span class="svg-icon menu-icon">
<svg xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink width=24px height=24px viewBox="0 0 24 24" version=1.1>
<g stroke=none stroke-width=1 fill=none fill-rule=evenodd>
<rect x=0 y=0 width=24 height=24 />
<polygon fill=#000000 opacity=0.3 points="5 15 3 21.5 9.5 19.5" />
<path d="M13.5,21 C8.25329488,21 4,16.7467051 4,11.5 C4,6.25329488 8.25329488,2 13.5,2 C18.7467051,2 23,6.25329488 23,11.5 C23,16.7467051 18.7467051,21 13.5,21 Z M8.5,13 C9.32842712,13 10,12.3284271 10,11.5 C10,10.6715729 9.32842712,10 8.5,10 C7.67157288,10 7,10.6715729 7,11.5 C7,12.3284271 7.67157288,13 8.5,13 Z M13.5,13 C14.3284271,13 15,12.3284271 15,11.5 C15,10.6715729 14.3284271,10 13.5,10 C12.6715729,10 12,10.6715729 12,11.5 C12,12.3284271 12.6715729,13 13.5,13 Z M18.5,13 C19.3284271,13 20,12.3284271 20,11.5 C20,10.6715729 19.3284271,10 18.5,10 C17.6715729,10 17,10.6715729 17,11.5 C17,12.3284271 17.6715729,13 18.5,13 Z" fill=#000000 />
</g>
</svg>
</span>
<span class=menu-text>@lang('lang.comment')</span>
</a>
</li>
<li class=menu-item aria-haspopup=true>
<a id=all_infomation class=menu-link>
<span class="svg-icon menu-icon">
<svg xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink width=24px height=24px viewBox="0 0 24 24" version=1.1>
<g stroke=none stroke-width=1 fill=none fill-rule=evenodd>
<rect x=0 y=0 width=24 height=24 />
<path d="M6.58578644,8 L5.17157288,6.58578644 C4.78104858,6.19526215 4.78104858,5.56209717 5.17157288,5.17157288 C5.56209717,4.78104858 6.19526215,4.78104858 6.58578644,5.17157288 L8,6.58578644 L9.41421356,5.17157288 C9.80473785,4.78104858 10.4379028,4.78104858 10.8284271,5.17157288 C11.2189514,5.56209717 11.2189514,6.19526215 10.8284271,6.58578644 L9.41421356,8 L10.8284271,9.41421356 C11.2189514,9.80473785 11.2189514,10.4379028 10.8284271,10.8284271 C10.4379028,11.2189514 9.80473785,11.2189514 9.41421356,10.8284271 L8,9.41421356 L6.58578644,10.8284271 C6.19526215,11.2189514 5.56209717,11.2189514 5.17157288,10.8284271 C4.78104858,10.4379028 4.78104858,9.80473785 5.17157288,9.41421356 L6.58578644,8 Z" fill=#000000 opacity=0.3 />
<path d="M13.0799676,14.7839934 L15.2839934,12.5799676 C15.8927139,11.9712471 16.0436229,11.0413042 15.6586342,10.2713269 L15.5337539,10.0215663 C15.1487653,9.25158901 15.2996742,8.3216461 15.9083948,7.71292558 L18.6411989,4.98012149 C18.836461,4.78485934 19.1530435,4.78485934 19.3483056,4.98012149 C19.3863063,5.01812215 19.4179321,5.06200062 19.4419658,5.11006808 L20.5459415,7.31801948 C21.3904962,9.0071287 21.0594452,11.0471565 19.7240871,12.3825146 L13.7252616,18.3813401 C12.2717221,19.8348796 10.1217008,20.3424308 8.17157288,19.6923882 L5.75709327,18.8875616 C5.49512161,18.8002377 5.35354162,18.5170777 5.4408655,18.2551061 C5.46541191,18.1814669 5.50676633,18.114554 5.56165376,18.0596666 L8.21292558,15.4083948 C8.8216461,14.7996742 9.75158901,14.6487653 10.5215663,15.0337539 L10.7713269,15.1586342 C11.5413042,15.5436229 12.4712471,15.3927139 13.0799676,14.7839934 Z" fill=#000000 />
</g>
</svg>
</span>
<span class=menu-text>@lang('lang.infomation')</span>
</a>
</li>
<li class=menu-section>
<h4 class=menu-text>@lang('lang.setting')</h4>
<i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>
<li class=menu-item aria-haspopup=true>
<a id=all_meta class=menu-link>
<span class="svg-icon menu-icon">
<svg xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink width=24px height=24px viewBox="0 0 24 24" version=1.1>
<g stroke=none stroke-width=1 fill=none fill-rule=evenodd>
<rect x=0 y=0 width=24 height="24"/>
<path d="M17.2718029,8.68536757 C16.8932864,8.28319382 16.9124644,7.65031935 17.3146382,7.27180288 C17.7168119,6.89328641 18.3496864,6.91246442 18.7282029,7.31463817 L22.7282029,11.5646382 C23.0906029,11.9496882 23.0906029,12.5503176 22.7282029,12.9353676 L18.7282029,17.1853676 C18.3496864,17.5875413 17.7168119,17.6067193 17.3146382,17.2282029 C16.9124644,16.8496864 16.8932864,16.2168119 17.2718029,15.8146382 L20.6267538,12.2500029 L17.2718029,8.68536757 Z M6.72819712,8.6853647 L3.37324625,12.25 L6.72819712,15.8146353 C7.10671359,16.2168091 7.08753558,16.8496835 6.68536183,17.2282 C6.28318808,17.6067165 5.65031361,17.5875384 5.27179713,17.1853647 L1.27179713,12.9353647 C0.909397125,12.5503147 0.909397125,11.9496853 1.27179713,11.5646353 L5.27179713,7.3146353 C5.65031361,6.91246155 6.28318808,6.89328354 6.68536183,7.27180001 C7.08753558,7.65031648 7.10671359,8.28319095 6.72819712,8.6853647 Z" fill=#000000 fill-rule="nonzero"/>
<rect fill=#000000 opacity=0.3 transform="translate(12.000000, 12.000000) rotate(-345.000000) translate(-12.000000, -12.000000) " x=11 y=4 width=2 height=16 rx="1"/>
</g>
</svg>
</span>
<span class=menu-text>@lang('lang.meta')</span>
</a>
</li>
</ul>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="d-flex flex-column flex-row-fluid wrapper" id=kt_wrapper>
<div id=kt_header class="header header-fixed">
<div class="container-fluid d-flex align-items-stretch justify-content-between">
<div class="header-menu-wrapper header-menu-wrapper-left" id=kt_header_menu_wrapper>
</div>
<div class=topbar>
<div class=dropdown>
<div class=topbar-item data-toggle=dropdown data-offset=10px,0px>
<div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
<?php
                                        $language = session()->get('language');
                                        if ($language == 'vi') {
                                            ?>
<img class="h-20px w-20px rounded-sm" src="{{ asset('backend/media/svg/flags/220-vietnam.svg') }}" />
<?php
                                        }
                                        else{
                                            ?>
<img class="h-20px w-20px rounded-sm" src="{{ asset('backend/media/svg/flags/226-united-states.svg') }}" />
<?php
                                        }
                                    ?>
</div>
</div>
<div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
<ul class="navi navi-hover py-4">
<li class=navi-item>
<a href data-lang=vi class="changelanguage navi-link">
<span class="symbol symbol-20 mr-3">
<img src="{{ asset('backend/media/svg/flags/220-vietnam.svg') }}" alt />
</span>
<span class=navi-text>@lang('lang.vietnam')</span>
</a>
</li>
<li class="navi-item active">
<a href data-lang=en class="changelanguage navi-link">
<span class="symbol symbol-20 mr-3">
<img src="{{ asset('backend/media/svg/flags/226-united-states.svg') }}" alt />
</span>
<span class=navi-text>@lang('lang.english')</span>
</a>
</li>
</ul>
</div>
</div>
<div class=topbar-item>
<div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id=kt_quick_user_toggle>
<span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">@lang('lang.hello'),</span>
<span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">
@php
$admin_name = Auth::user()->admin_name;
if ($admin_name) {
echo $admin_name;
}
@endphp
</span>
<span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
@php
$admin_image = Auth::user()->admin_image;
if ($admin_image) {
echo '<span class="symbol-label font-size-h5 font-weight-bold" style="background-image:url(uploads/avatar/' . $admin_image . ')"></span>';
} else {
echo '<span class="symbol-label font-size-h5 font-weight-bold" style=background-image:url(backend/media/users/blank.png)></span>';
}
@endphp
</span>
</div>
</div>
</div>
</div>
</div>
<div class="content d-flex flex-column flex-column-fluid" id=kt_content>
<div class="d-flex flex-column-fluid">
<div class=container id=container>
@yield('admincontent')
</div>
</div>
</div>
<div class="footer bg-white py-4 d-flex flex-lg-column" id=kt_footer>
<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
<div class="text-dark order-2 order-md-1">
<span class="text-muted font-weight-bold mr-2">2021©</span>
<a href=# class="text-dark-75 text-hover-primary">Sapo</a>
</div>
<div class="nav nav-dark"></div>
</div>
</div>
</div>
</div>
</div>
<div id=kt_quick_user class="offcanvas offcanvas-right p-10">
<div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
<h3 class="font-weight-bold m-0">@lang('lang.userinformation')
</h3>
<a href=# class="btn btn-xs btn-icon btn-light btn-hover-primary" id=kt_quick_user_close>
<i class="ki ki-close icon-xs text-muted"></i>
</a>
</div>
<div class="offcanvas-content pr-5 mr-n5">
<div class="d-flex align-items-center mt-5">
<div class="symbol symbol-100 mr-5">
@php
if ($admin_image) {
echo '<span class="symbol-label font-size-h5 font-weight-bold" style="background-image:url(uploads/avatar/' . $admin_image . ')"></span>';
} else {
echo '<span class="symbol-label font-size-h5 font-weight-bold" style=background-image:url(backend/media/users/blank.png)></span>';
}
@endphp
<i class="symbol-badge bg-success"></i>
</div>
<div class="d-flex flex-column">
<span class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">
@php
$admin_name = Auth::user()->admin_name;
if ($admin_name) {
echo $admin_name;
}
@endphp
</span>
<div class="text-muted mt-1">
<?php
                            $admin_role = Auth::user()->admin_role;
                            if ($admin_role == '1') {
                                ?>
@lang('lang.boss')
<?php
                            }
                            else {
                                ?>
@lang('lang.staff')
<?php
                            }
                        ?>
</div>
<div class="navi mt-2">
<span class=navi-item>
<span class="navi-link p-0 pb-2">
<span class="navi-icon mr-1">
<span class="svg-icon svg-icon-lg svg-icon-primary">
<svg xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink width=24px height=24px viewBox="0 0 24 24" version=1.1>
<g stroke=none stroke-width=1 fill=none fill-rule=evenodd>
<rect x=0 y=0 width=24 height=24 />
<path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill=#000000 />
<circle fill=#000000 opacity=0.3 cx=19.5 cy=17.5 r=2.5 />
</g>
</svg>
</span>
</span>
<span class="navi-text text-muted text-hover-primary">
@php
$admin_email = Auth::user()->admin_email;
if ($admin_email) {
echo $admin_email;
}
@endphp
</span>
</span>
</span>
<a href="{{ URL::to('/logout-admin') }}" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">@lang('lang.logout')</a>
</div>
</div>
</div>
<div class="separator separator-dashed mt-8 mb-5"></div>
<div class="navi navi-spacer-x-0 p-0">
<a href=# class=navi-item id=profile>
<div class=navi-link>
<div class="symbol symbol-40 bg-light mr-3">
<div class=symbol-label>
<span class="svg-icon svg-icon-md svg-icon-success">
<svg xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink width=24px height=24px viewBox="0 0 24 24" version=1.1>
<g stroke=none stroke-width=1 fill=none fill-rule=evenodd>
<rect x=0 y=0 width=24 height=24 />
<path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" fill=#000000 />
<circle fill=#000000 opacity=0.3 cx=18.5 cy=5.5 r=2.5 />
</g>
</svg>
</span>
</div>
</div>
<div class=navi-text>
<div class=font-weight-bold>@lang('lang.editprofile')</div>
<div class=text-muted>@lang('lang.edityourpersonal')</div>
</div>
</div>
</a>
<a href=# class=navi-item id=change_pass>
<div class=navi-link>
<div class="symbol symbol-40 bg-light mr-3">
<div class=symbol-label>
<span class="svg-icon svg-icon-md svg-icon-warning">
<svg xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink width=24px height=24px viewBox="0 0 24 24" version=1.1>
<g stroke=none stroke-width=1 fill=none fill-rule=evenodd>
<rect x=0 y=0 width=24 height=24 />
<rect fill=#000000 opacity=0.3 x=12 y=4 width=3 height=13 rx=1.5 />
<rect fill=#000000 opacity=0.3 x=7 y=9 width=3 height=8 rx=1.5 />
<path d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z" fill=#000000 fill-rule=nonzero />
<rect fill=#000000 opacity=0.3 x=17 y=11 width=3 height=6 rx=1.5 />
</g>
</svg>
</span>
</div>
</div>
<div class=navi-text>
<div class=font-weight-bold>@lang('lang.changepass')</div>
<div class=text-muted>@lang('lang.changeyourpass')</div>
</div>
</div>
</a>
</div>
</div>
</div>
<div id=kt_scrolltop class=scrolltop>
<span class=svg-icon>
<svg xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink width=24px height=24px viewBox="0 0 24 24" version=1.1>
<g stroke=none stroke-width=1 fill=none fill-rule=evenodd>
<polygon points="0 0 24 0 24 24 0 24" />
<rect fill=#000000 opacity=0.3 x=11 y=10 width=2 height=10 rx=1 />
<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill=#000000 fill-rule=nonzero />
</g>
</svg>
</span>
</div>
<script>var KTAppSettings={breakpoints:{sm:576,md:768,lg:992,xl:1200,xxl:1400},colors:{theme:{base:{white:"#ffffff",primary:"#3699FF",secondary:"#E5EAEE",success:"#1BC5BD",info:"#8950FC",warning:"#FFA800",danger:"#F64E60",light:"#E4E6EF",dark:"#181C32"},light:{white:"#ffffff",primary:"#E1F0FF",secondary:"#EBEDF3",success:"#C9F7F5",info:"#EEE5FF",warning:"#FFF4DE",danger:"#FFE2E5",light:"#F3F6F9",dark:"#D6D6E0"},inverse:{white:"#ffffff",primary:"#ffffff",secondary:"#3F4254",success:"#ffffff",info:"#ffffff",warning:"#ffffff",danger:"#ffffff",light:"#464E5F",dark:"#ffffff"}},gray:{"gray-100":"#F3F6F9","gray-200":"#EBEDF3","gray-300":"#E4E6EF","gray-400":"#D1D3E0","gray-500":"#B5B5C3","gray-600":"#7E8299","gray-700":"#5E6278","gray-800":"#3F4254","gray-900":"#181C32"}},"font-family":"Poppins"};</script>
<script src=//cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js></script>
{{-- <script src="//code.jquery.com/jquery-3.6.0.min.js"></script> --}}
<script src="{{ asset('backend/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('backend/js/scripts.bundle.js') }}"></script>
<script src="{{ asset('backend/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('backend/js/script.js') }}"></script>
</body>
</html>


