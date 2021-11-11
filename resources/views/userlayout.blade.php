<!DOCTYPE html>
<html lang=en>
<head>
<meta charset=UTF-8 />
<meta name=viewport content="width=device-width, initial-scale=1.0" />
<meta name=csrf-token content="{{ csrf_token() }}">
<meta name=description content="{{ $meta_desc }}">
<meta name=keywords content="{{ $meta_keywords }}" />
<title>{{ $meta_title }}</title>
<link rel=canonical href="{{ $url_canonical }}" />
<link rel=icon type=image/ico href="{{ asset('frontend/images/logo/favicon.ico') }}" />
<link rel=stylesheet href=//unpkg.com/swiper@7/swiper-bundle.min.css />
<link rel=stylesheet href="{{ asset('frontend/scss/style.css') }}" />
</head>
<body>
<div class="modal visible">
<div class=modal-register>
<div class=modal-register-body>
@foreach ($infomation as $key => $infomation)
<a href=/ class=logo>
<img src="{{ asset('uploads/logo/' . $infomation->infomation_logo . '') }}" />
</a>
@endforeach
<button class=close>
<svg with=30 height=30 viewBox="0 0 30 30" xmlns=http://www.w3.org/2000/svg>
<path d="M30 3.02143L26.9786 0L15 11.9786L3.02143 0L0 3.02143L11.9786 15L0 26.9786L3.02143 30L15 18.0214L26.9786 30L30 26.9786L18.0214 15L30 3.02143Z">
</path>
</svg>
</button>
<div class=block-title>
<h2>Dùng thử Sapo miễn phí 7 ngày</h2>
<p>+100,000 doanh nghiệp & chủ shop tin dùng</p>
</div>
<form id=form_register>
<div class=form-group>
<input autocomplete=off name=name id=register_name type=text placeholder="Họ và tên của bạn" class="form-control form-input" />
</div>
<div class=modal-register-grid>
<div class=form-group>
<input autocomplete=off name=phone id=register_phone type=number placeholder="Số điện thoại của bạn" class="form-control form-input" />
</div>
<div class=form-group>
<input autocomplete=off name=store id=register_store type=text placeholder="Tên cửa hàng của bạn" class="form-control form-input" />
</div>
</div>
<div class=modal-register-grid>
<div class=form-group>
<input autocomplete=off name=address id=register_address type=text placeholder="Địa chỉ cửa hàng của bạn" class="form-control form-input" />
</div>
<div class=form-group>
<select name=product id=register_product class="form-control form-input">
<option value disabled selected hidden>Chọn sản phẩm bạn quan tâm</option>
@foreach ($product as $key => $pro)
<option value="{{ $pro->product_name }}">{{ $pro->product_name }}</option>
@endforeach
</select>
</div>
</div>
</form>
<button class=add id=btn-registration>Đăng ký dùng thử</button>
</div>
</div>
</div>
<header class=header>
<div class="overlay has-fade"></div>
<nav class="container container--pall flex flex-jc-sb flex-ai-c">
<a href=/ class=header__logo>
<img src="{{ asset('uploads/logo/' . $infomation->infomation_logo . '') }}" />
</a>
<span style="cursor: pointer" id=btnHamburger class="header__toggle hide-for-desktop">
<span></span>
<span></span>
<span></span>
</span>
<div class="header__links hide-for-mobile">
<a href=#home>Trang chủ</a>
<a href=#introduce>Giới thiệu</a>
<a href=#product>Sản phẩm</a>
<a href=#customer>Khách hàng</a>
<a href=#comment>Đánh giá</a>
</div>
<span class="modal-toggle button header__cta hide-for-mobile">Dùng thử</span>
</nav>
<div class="header__menu has-fade">
<a href=#home>Trang chủ</a>
<a href=#introduce>Giới thiệu</a>
<a href=#product>Sản phẩm</a>
<a href=#customer>Khách hàng</a>
<a href=#comment>Đánh giá</a>
</div>
</header>
<section id=home class=hero>
<div class=container>
<div class=hero__image></div>
<div class="hero__text container--pall">
<h1>Sapo - Phần mềm quản lý bán hàng</h1>
<p>
Nền tảng quản lý và bán hàng đa kênh được sử dụng nhiều nhất Việt Nam. <br> Với hơn <b>100,000</b>
doanh
nghiệp và chủ shop đã chọn
</p>
<a href=# class="modal-toggle button hero__cta">Dùng thử miễn phí</a>
</div>
</div>
</section>
<section id=introduce class=about>
<div class="about__content container container--pall">
<div class=about__intro>
<h2>Về chúng tôi</h2>
<div class=about__grid>
<div class=about__item>
<div class=composition>
@php
$i = 1;
@endphp
@foreach ($gallery as $key => $gallery)
<img src="{{ asset('uploads/gallery/' . $gallery->gallery_image . '') }}" class="composition__photo composition__photo--p{{ $i++ }}">
@endforeach
</div>
</div>
<div class=fix></div>
<div class=about__item>
@foreach ($introduce as $key => $introduce)
{!! $introduce->introduce_desc !!}
@endforeach
</div>
</div>
</div>
</div>
</section>
<section id=product class=feature>
<div class="feature__content container container--pall">
<div class=feature__intro>
<h2>Sapo - Giải pháp bạn cần để quản lý & bán hàng tốt hơn</h2>
<p>
Chúng tôi mang đến cho bạn những trợ lý ảo đắc lực để phát triển kinh doanh
</p>
</div>
<div class=feature__grid>
@foreach ($product as $key => $product)
<div class=feature__item>
<div class=feature__icon>
<img src="{{ asset('uploads/product/' . $product->product_image . '') }}" />
</div>
<div class=feature__title>{{ $product->product_name }}</div>
<div class=feature__description>{{ $product->product_desc }}</div>
</div>
@endforeach
</div>
</div>
</section>
<section id=customer class=customer>
<div class="customer__content container container--pall">
<div class=customer__intro>
<h2><b>+100,000</b> khách hàng đã sử dụng Sapo</h2>
<p>
Sự hài lòng của khách hàng chính là thành công lớn nhất của chúng tôi
</p>
</div>
<div class=customer__grid>
@foreach ($customer as $key => $customer)
<div class=customer__item>
<a href="{{ $customer->customer_link }}" target=_blank rel="noopener noreferrer">
<img src="{{ asset('uploads/logo/' . $customer->customer_image . '') }}" alt>
</a>
</div>
@endforeach
</div>
</div>
</section>
<section id=comment class=comment>
<div class="comment__content container container--pall">
<div class=comment__intro>
<h2>Sapo đã ghi lại những dấu ấn đặc biệt gì</h2>
<p>
Trên chặng đường thành công của Khách hàng?
</p>
</div>
<div class="swiper mySwiper">
<div class=swiper-wrapper>
@foreach ($comment as $key => $comment)
<div class=swiper-slide>
<div class=comment__grid>
<div class=comment__item>
<div class="comment__shape">
<img class="comment__img" src="{{ asset('uploads/khachhang/' . $comment->comment_image . '') }}">
</div>
</div>
<div class=comment__item>
<h3 class=comment__title>{{ $comment->comment_name }}</h3>
<h4 class=comment__text>{{ $comment->comment_role }}</h4>
</div>
</div>
<p class=comment__description>{{ $comment->comment_desc }}</p>
</div>
@endforeach
</div>
<div class=swiper-pagination></div>
</div>
</section>
<footer class=footer>
<div class=container>
<a class=footer__logo href=/>
<img src="{{ asset('uploads/logo/' . $infomation->infomation_logo . '') }}" />
</a>
<div class=footer__social>
<a target=_bank href="{{ $infomation->infomation_facebook }}">
<img src="{{ asset('frontend/images/icon/icon-facebook.svg') }}" alt>
</a>
<a target=_bank href="{{ $infomation->infomation_youtube }}">
<img src="{{ asset('frontend/images/icon/icon-youtube.svg') }}" alt>
</a>
<a target=_bank href="{{ $infomation->infomation_zalo }}">
<img src="{{ asset('frontend/images/icon/icon-zalo.svg') }}" alt>
</a>
</a>
</div>
<div class="footer__links col1">
<a href=#home>Trang chủ</a>
<a href=#introduce>Giới thiệu</a>
<a href=#product>Sản phẩm</a>
<a href=#customer>Khách hàng</a>
</div>
<div class="footer__links col2">
{!! $infomation->infomation_contact !!}
</div>
<div class=footer__cta>
<span style="cursor: poiner" class="modal-toggle button">Dùng thử</span>
</div>
<div class=footer__copyright>
&copy; 2021 Sapo
</div>
</div>
</footer>
</body>
<script src=//unpkg.com/swiper@7/swiper-bundle.min.js></script>
<link href="{{ asset('backend/plugins/global/plugins.bundle.css') }}" rel=stylesheet type=text/css />
<script src="{{ asset('backend/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('backend/js/scripts.bundle.js') }}"></script>
<script src="{{ asset('frontend/js/script.js') }}"></script>
<script>function send_info_cus(a){$.ajax({url:"send-info-cus/"+a,method:"GET",headers:{"X-CSRF-TOKEN":$('meta[name = "csrf-token" ]').attr("content")}})}var form=KTUtil.getById("form_register");var validation=FormValidation.formValidation(form,{fields:{name:{validators:{notEmpty:{message:"Vui lòng điền họ tên của bạn"}}},phone:{validators:{notEmpty:{message:"Vui lòng điền số điện thoại"},phone:{country:"US",message:"Vui lòng nhập đúng số điện thoại"}}},store:{validators:{notEmpty:{message:"Vui lòng điền tên cửa hàng"}}},address:{validators:{notEmpty:{message:"Vui lòng điền địa chỉ"}}},product:{validators:{notEmpty:{message:"Vui lòng chọn sản phâm"}}}},plugins:{trigger:new FormValidation.plugins.Trigger(),bootstrap:new FormValidation.plugins.Bootstrap()}});$(document).ready(function(){$(".add").on("click",function(a){a.preventDefault();validation.validate().then(function(c){if(c=="Valid"){var d=$("#register_name").val();var g=$("#register_phone").val();var b=$("#register_store").val();var f=$("#register_address").val();var e=$("#register_product").val();$.ajax({url:"add-register",method:"POST",headers:{"X-CSRF-TOKEN":$('meta[name = "csrf-token" ]').attr("content")},data:{register_name:d,register_phone:g,register_store:b,register_address:f,register_product:e},success:function(h){if(h==0){Swal.fire({icon:"error",title:"Thất bại",text:"Bạn đã đăng ký sản phẩm này rồi!",showConfirmButton:false,timer:1500})}else{send_info_cus(h);Swal.fire({icon:"success",title:"Thành công",text:"Đăng ký dùng thử thành công!",showConfirmButton:false,timer:1500})}}})}else{swal.fire({text:"Xin lỗi, có vẻ như đã phát hiện thấy một số lỗi, vui lòng thử lại .",icon:"error",title:"Thất bại",buttonsStyling:false,showConfirmButton:false,timer:1500}).then(function(){KTUtil.scrollTop()})}})})});</script>
</html>

