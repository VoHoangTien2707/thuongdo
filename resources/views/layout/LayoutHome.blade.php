<?php
$data = DB::table("tbl_dịchvu")
->get();

$data1 = DB::table("tbl_banggia")
->get();

$data2 = DB::table("tbl_huongdan")
->get();

$data3 = DB::table("tbl_chinhsach")
->get();
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="vi" version="XHTML+RDFa 1.0" dir="ltr"
  xmlns:content="http://purl.org/rss/1.0/modules/content/"
  xmlns:dc="http://purl.org/dc/terms/"
  xmlns:foaf="http://xmlns.com/foaf/0.1/"
  xmlns:og="http://ogp.me/ns#"
  xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#"
  xmlns:sioc="http://rdfs.org/sioc/ns#"
  xmlns:sioct="http://rdfs.org/sioc/types#"
  xmlns:skos="http://www.w3.org/2004/02/skos/core#"
  xmlns:xsd="http://www.w3.org/2001/XMLSchema#">

<head profile="http://www.w3.org/1999/xhtml/vocab">
  <title>Thương Đô Logistics - Dịch vụ Order Taobao Nhập hàng Trung Quốc, Đặt hàng Quảng Châu</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="https://www.thuongdo.com/sites/default/files/48icon.ico" type="image/vnd.microsoft.icon" />
<meta name="revisit-after" content="1 ngày" />
<meta property="fb:app_id" content="1883942085176180" />
<meta name="robots" content="noodp,index, follow" />
<meta http-equiv="content-language" content="vi" />
<meta name="googlebot" content="all, index, follow" />
<meta name="msnbot" content="index, follow" />
<meta property="og:type" content="website" />
<meta property="article:author" content="https://www.facebook.com/thuongdogroup?fref=ts" />
<meta property="og:url" content="https://www.thuongdo.com" />
<meta name="original-source" content="https://www.thuongdo.com" />
<meta name="description" content="Thương Đô cung cấp dịch vụ đặt mua hàng order Taobao, 1688, Alibaba, Tmall, nhập hàng Trung Quốc, order hàng Quảng Châu, giải pháp logistics vận chuyển Việt - Trung chuyên nghiệp, tốc độ và uy tín. Phục vụ hơn 50.000 khách hàng, dẫn đầu tại VN. Hotline 19006825" />
<meta property="og:image" content="https://www.thuongdo.com/sites/default/files/quangcao/banner.png" />
<meta property="og:title" content="Nhập Hàng Trung Quốc - Đặt Hàng Quảng Châu Trung Quốc Giá Rẻ" />
<meta property="og:description" content="Thương Đô cung cấp dịch vụ đặt mua hàng order Taobao, 1688, Alibaba, Tmall, nhập hàng Trung Quốc, order hàng Quảng Châu, giải pháp logistics vận chuyển Việt - Trung chuyên nghiệp, tốc độ và uy tín. Phục vụ hơn 50.000 khách hàng, dẫn đầu tại VN. Hotline 19006825" />
<link rel="canonical" href="https://www.thuongdo.com/" />
		<script type="text/javascript">var uid_in_page = 252138;</script>
		<script src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/socket.io.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed&display=swap" rel="preload stylesheet" as="style" crossorigin="anonymous"/>
    <link rel="chrome-webstore-item" href="https://chrome.google.com/webstore/detail/fcicepgmmbpfkknccafappindadbgcpg" />
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="preload stylesheet" as="style" crossorigin="anonymous"/>
    <style type="text/css" media="all">
@import url("https://www.thuongdo.com/modules/system/system.base.css?s0jxe0");
@import url("https://www.thuongdo.com/modules/system/system.menus.css?s0jxe0");
@import url("https://www.thuongdo.com/modules/system/system.messages.css?s0jxe0");
@import url("https://www.thuongdo.com/modules/system/system.theme.css?s0jxe0");
</style>
<style type="text/css" media="all">
@import url("https://www.thuongdo.com/modules/aggregator/aggregator.css?s0jxe0");
@import url("https://www.thuongdo.com/sites/all/modules/contrib/date/date_api/date.css?s0jxe0");
@import url("https://www.thuongdo.com/sites/all/modules/contrib/date/date_popup/themes/datepicker.1.7.css?s0jxe0");
@import url("https://www.thuongdo.com/modules/field/theme/field.css?s0jxe0");
@import url("https://www.thuongdo.com/modules/node/node.css?s0jxe0");
@import url("https://www.thuongdo.com/modules/user/user.css?s0jxe0");
@import url("https://www.thuongdo.com/sites/all/modules/contrib/views/css/views.css?s0jxe0");
@import url("https://www.thuongdo.com/sites/all/modules/contrib/ckeditor/css/ckeditor.css?s0jxe0");
</style>
<style type="text/css" media="all">
@import url("https://www.thuongdo.com/sites/all/modules/contrib/ctools/css/ctools.css?s0jxe0");
@import url("https://www.thuongdo.com/sites/all/libraries/jgrowl/jquery.jgrowl.min.css?s0jxe0");
@import url("https://www.thuongdo.com/sites/all/modules/contrib/nicemessages/css/nicemessages_positions.css?s0jxe0");
@import url("https://www.thuongdo.com/sites/all/modules/contrib/nicemessages/css/nicemessages_drupal.css?s0jxe0");
@import url("https://www.thuongdo.com/sites/all/modules/contrib/nicemessages/css/shadows.css?s0jxe0");
@import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/lobibox/css/lobibox.min.css?s0jxe0");
@import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/chosen/chosen.min.css?s0jxe0");
@import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/uikit/css/uikit.min.css?s0jxe0");
@import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/uikit/css/components/tooltip.min.css?s0jxe0");
@import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/uikit/css/components/notify.min.css?s0jxe0");
@import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/uikit/css/components/progress.min.css?s0jxe0");
@import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/css/thuongdo_export.css?s0jxe0");
@import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/css/fontawesome-stars.css?s0jxe0");
@import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/gritter/css/jquery.gritter.css?s0jxe0");
@import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_khieunai/css/thuongdo_khieunai.css?s0jxe0");
@import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_vidientu/css/thuongdo_vidientu.css?s0jxe0");
</style>
<style type="text/css" media="all">
@import url("https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/css/font-awesome.css?s0jxe0");
@import url("https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/css/skins/square/blue.css?s0jxe0");
@import url("https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/css/animations.css?s0jxe0");
@import url("https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/css/owl.carousel.css?s0jxe0");
@import url("https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/css/owl.theme.css?s0jxe0");
@import url("https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/css/owl.transitions.css?s0jxe0");
@import url("https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/css/style.css?s0jxe0");
</style>
        <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1300394569987936');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1300394569987936&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '345617853272695');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=345617853272695&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '2576325132663994');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=2576325132663994&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MZFRW9H');</script>
<!-- End Google Tag Manager -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KLWC6MLBGL"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-KLWC6MLBGL');
</script>
	<meta name="cystack-verification" content="fac5075a8c00ceba1a55b9e74581f857" />
    <meta name="google-site-verification" content="K4NCbe6B5br-qb8UrhHd7ef7aSBsQCIcbLJnCrEg97I" />
</head>
<body class="html front logged-in no-sidebars page-home  " >
  <div class="olay-css" style="display: none;"></div>
    <header class="block-clear block-both">
        <h1 class="title-head-h1">Thương Đô Logistics - Dịch vụ Order Taobao Nhập hàng Trung Quốc, Đặt hàng Quảng Châu</h1>

<div class="header-top block-clear block-both">
	<div class="container">
		<div class="header-top-left">
			<span class="exchange-current">
				<span class="icon"></span>Tỉ giá: <b>3,470</b>
			</span>
			<span class="hotline">
				<span class="icon"></span> Hotline: <b>1900 6825</b>
			</span>
		</div>
        @if (session()->has('user'))
    @php $user = session('user'); @endphp
    <ul class="header-top-right">
                            			    <li><a href="{{ url('/dashboard') }}"><i class="fa fa-list-alt" aria-hidden="true"></i> Danh sách đơn hàng</a></li>
                <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i> Thoát</a></li>
            		</ul>
                    @else
                    <ul class="header-top-right">
                            <span class="icon"></span>
    			<li class="dang-nhap"><a href="{{ url('/dangnhap') }}">Đăng nhập</a></li>
    			<li><a href="{{ url('/dangky') }}">Đăng ký</a></li>
            		</ul>
                    @endif
	</div>

</div>
<div class="header-center block-both">
	<div class="container">
		            <div class="logo"><a href="https://www.thuongdo.com" class="shiner" rel="nofollow"><img src="https://www.thuongdo.com/sites/default/files/quangcao/logo_3.png" alt= "Nhập hàng Trung Quốc - THƯƠNG ĐÔ LOGISTICS" title = "Nhập hàng Trung Quốc - THƯƠNG ĐÔ LOGISTICS" /></a></div>
        		            <nav class="menu-main block-clear">
                <ul><li class="item item-49950 Trang chủ 698   ">
                                    <a href="/" title="Trang chủ" rel="" class="parent active"><i class="fa fa-home" aria-hidden="true"></i></a>
                                  </li><li class="item item-49951 Dịch vụ 432  last-below ">
                                    <a href="/dich-vu" title="Dịch vụ" rel="" class="parent"><span class="icon"></span>Dịch vụ</a>
                                    <ul>
                                        <li class="first-below ">
                                        @foreach($data as $dt)
                                        <a href="{{ url('/tin',[$dt->id]) }}" title="DỊCH VỤ ĐẶT HÀNG TRUNG QUỐC">{{$dt->title}}</a>

                                        @endforeach

                                           </li></ul>
                                  </li><li class="item item-49952 BẢNG GIÁ 433  last-below ">
                                    <a href="/bang-gia-dich-vu" title="BẢNG GIÁ" rel="" class="parent"><span class="icon"></span>BẢNG GIÁ</a><ul><li class="first-below ">
                                        @foreach($data1 as $dt)
                                            <a href="{{ url('/banggia',[$dt->id]) }}" title="Bảng giá dịch vụ đặt hàng Trung Quốc">{{$dt->title}}</a>

@endforeach
                                           </li></ul>
                                  </li><li class="item item-49953 Tra cước 3031   ">
                                    <a href="{{ url('/tracuoc') }}" title="Tra cước" rel="" class="parent"><span class="icon"></span>Tra cước</a>
                                  </li><li class="item item-49954 Hướng dẫn 431   ">
                                    <a href="/h%C6%B0%E1%BB%9Bng-dan" title="Hướng dẫn" rel="" class="parent"><span class="icon"></span>Hướng dẫn</a><ul><li class="first-below ">

                                    @foreach($data2 as $dt)
                                            <a href="{{ url('/huongdan',[$dt->id]) }}" title="Bảng giá dịch vụ đặt hàng Trung Quốc">{{$dt->title}}</a>

@endforeach

                                           </li></ul>
                                  </li><li class="item item-49955 CHÍNH SÁCH 782  last-below ">
                                    <a href="/cau-hoi-thuong-gap-td" title="CHÍNH SÁCH" rel="" class="parent"><span class="icon"></span>CHÍNH SÁCH</a><ul><li class="first-below ">
                                    @foreach($data3 as $dt)
                                            <a href="{{ url('/chinhsach',[$dt->id]) }}" title="Bảng giá dịch vụ đặt hàng Trung Quốc">{{$dt->title}}</a>

@endforeach
                                           </li></ul>
                                  </li><li class="item item-49956 TIN TỨC 1685   ">
                                    <a href="{{ url('/tintuc') }}" title="TIN TỨC" rel="" class="parent"><span class="icon"></span>TIN TỨC</a>
                                  </li><li class="item item-49957 SỰ KIỆN 2153   ">
                                    <a href="{{ url('/sukien') }}" title="SỰ KIỆN" rel="" class="parent"><span class="icon"></span>SỰ KIỆN</a>
                                  </li><li class="item item-49958 TUYỂN DỤNG 1299   ">
                                    <a href="{{ url('/tuyendung') }}" title="TUYỂN DỤNG" rel="" class="parent"><span class="icon"></span>TUYỂN DỤNG</a>
                                  </li></ul>            </nav>
        	</div>
</div>
<div class="header-bottom block-clear block-both">
	<div class="container">
		<span class="icon"></span>
        	</div>
</div></header>



@yield('noidung1');

@yield('noidung2');

@yield('noidung3');



<footer class="block-clear block-both"><div class="footer-top block-both">
    <div class="container">
    	<div class="thuongdo-info">
    		                <div class="logo"><a href="https://www.thuongdo.com" rel="nofollow"><img src="https://www.thuongdo.com/sites/default/files/quangcao/logo_3.png" alt= "Nhập hàng Trung Quốc - THƯƠNG ĐÔ LOGISTICS" title = "Nhập hàng Trung Quốc - THƯƠNG ĐÔ LOGISTICS" /></a></div>
                        <p>Website thuongdo.com được vận hành bởi:</p>
            <p><strong>CÔNG TY CỔ PHẦN QUỐC TẾ THƯƠNG ĐÔ</strong></p>
            <p>Giấy chứng nhận đăng ký doanh nghiệp số 0316904160 do Sở Kế hoạch và Đầu tư thành phố Hồ Chí Minh cấp lần đầu ngày 11/06/2021</p>
            <p>Địa chỉ trụ sở: Văn phòng 02, Tầng 10, Tòa nhà Pearl Plaza, Số 561A Điện Biên Phủ, Phường 25, Quận Bình Thạnh, TP. Hồ Chí Minh</p>
            <div class="item info-detail last">
    			<p><span>Tổng đài cskh:</span> <a href="tel:1900 6825">1900 6825</a> - <span>Hotline:</span> <a href="tel:0898169666">0898169666</a></p>
    			<p><span>Email:</span> <a href="mailto:chamsoc@thuongdo.com">chamsoc@thuongdo.com</a></p>
    		</div>
    		<h5>TẢI ỨNG DỤNG THƯƠNG ĐÔ CHO MOBILE</h5>
    		<i>( Quản lý đơn hàng mọi lúc, mọi nơi và nhiều hơn nữa )</i>
    		<!--<a href="https://itunes.apple.com/us/app/thuong-do/id1437479839?ls=1&mt=8" target="_blank" rel="nofollow" class="ios app">
    			<span class="icon"></span>
    		</a>
    		<a href="https://play.google.com/store/apps/details?id=com.thuongdo.thuongdologistics" target="_blank" rel="nofollow" class="android app last">
    			<span class="icon"></span>
    		</a>-->

    	</div>
    	<div class="menu-footer block-clear">
    		<div class="item">
    			<h3>Về Thương Đô</h3>
    			                    <ul><li class="item item-49950 Giới thiệu 590   ">
                                    <a href="/gioi-thieu-ve-thuong-do" title="Giới thiệu" rel="" class="parent"><span class="icon"></span>Giới thiệu</a>
                                  </li><li class="item item-49951 Hướng dẫn 593   ">
                                    <a href="/h%C6%B0%E1%BB%9Bng-dan" title="Hướng dẫn" rel="" class="parent"><span class="icon"></span>Hướng dẫn</a>
                                  </li><li class="item item-49952 Tin tức 594   ">
                                    <a href="/tin-tuc" title="Tin tức" rel="" class="parent"><span class="icon"></span>Tin tức</a>
                                  </li><li class="item item-49953 Chính sách bảo hành 4860   ">
                                    <a href="/chinh-sach-bao-hanh" title="Chính sách bảo hành" rel="" class="parent"><span class="icon"></span>Chính sách bảo hành</a>
                                  </li><li class="item item-49954 Chính sách bảo mật 2613   ">
                                    <a href="/chinh-sach-bao-mat-thong-tin-thanh-vien" title="Chính sách bảo mật" rel="" class="parent"><span class="icon"></span>Chính sách bảo mật</a>
                                  </li><li class="item item-49955 Chính sách bảo mật thông tin cá nhân 4866   ">
                                    <a href="/chinh-sach-bao-mat-thong-tin-ca-nhan" title="Chính sách bảo mật thông tin cá nhân" rel="" class="parent"><span class="icon"></span>Chính sách bảo mật thông tin cá nhân</a>
                                  </li><li class="item item-49956 Chính sách và quy định chung 4872   ">
                                    <a href="/chinh-sach-va-quy-dinh-chung" title="Chính sách và quy định chung" rel="" class="parent"><span class="icon"></span>Chính sách và quy định chung</a>
                                  </li><li class="item item-49957 Chính sách đổi trả hoàn tiền 4869   ">
                                    <a href="/chinh-sach-doi-tra-va-hoan-tien" title="Chính sách đổi trả hoàn tiền" rel="" class="parent"><span class="icon"></span>Chính sách đổi trả hoàn tiền</a>
                                  </li><li class="item item-49958 Cơ chế giải quyết tranh chấp 4863   ">
                                    <a href="/chinh-sach-giai-quyet-tranh-chap" title="Cơ chế giải quyết tranh chấp" rel="" class="parent"><span class="icon"></span>Cơ chế giải quyết tranh chấp</a>
                                  </li><li class="item item-49960 Hình thức thanh toán 5262   ">
                                    <a href="/hinh-thuc-thanh-toan" title="Hình thức thanh toán" rel="" class="parent"><span class="icon"></span>Hình thức thanh toán</a>
                                  </li><li class="item item-50000 Hình thức giao nhận 5472   ">
                                    <a href="/hinh-thuc-giao-nhan" title="Hình thức giao nhận" rel="" class="parent"><span class="icon"></span>Hình thức giao nhận</a>
                                  </li></ul>                    		</div>
    		<div class="item last">
    			<h3>Chăm sóc khách hàng</h3>
    			<ul>
    				<li><a href="https://hotro.thuongdo.com">Trung tâm trợ giúp</a></li>
    				<li><a href="/huong-dan-dang-ky-dang-nhap-tai-khoan" title="Hướng dẫn tạo tài khoản">Hướng dẫn tạo tài khoản</a></li>
    				<li><a href="/huong-dan-tao-don-hang" title="Hướng dẫn mua hàng">Hướng dẫn mua hàng</a></li>
    				<li><a href="">Trả hàng & vận chuyển</a></li>
    				<li><a href="/cau-hoi-thuong-gap-td" title="Các câu hỏi thường gặp">Các câu hỏi thường gặp</a></li>
    			</ul>
    		</div>
    		<div class="social">
    			<h5>Theo dõi chúng tôi trên: </h5>
    			<a href="https://www.facebook.com/thuongdocom/" class="facebook">
    				<i class="fa fa-facebook" aria-hidden="true"></i>
    			</a>
    			<a href="https://www.youtube.com/channel/UCWodKAgwRb1MHDOJa8ib84A" class="twitter">
    				<i class="fa fa-youtube" aria-hidden="true"></i>
    			</a>
    			<a href="/" class="google">
    				<i class="fa fa-google" aria-hidden="true"></i>
    			</a>
    		</div>
    	</div>
    	<div class="contact-info">
    		<h3>Thông tin liên hệ</h3>
    		<div class="item">
    			<h5>Văn phòng kinh doanh miền Bắc</h5>
    			<p>Số 176 Trường Chinh, Thanh Xuân, Hà Nội.</p>
    			<p>335 Ngô Gia Tự , Hải An, Hải Phòng.</p>
    		</div>
    		<div class="item center">
    			<h5>Văn phòng kinh doanh Miền Nam</h5>
    			<p>911 Nguyễn Trãi - Quận 5 - Hồ Chí Minh.</p>
    		</div>

    	</div>
    </div>
</div>
<div class="footer-bottom block-both">
    <div class="container">
    	<div class="copyright">
    		© 2013 - 2019 THUONGDO Logistics. Tất cả các quyền được bảo lưu<br/>
    		THUONGDO là doanh nghiệp hàng đầu cung cấp dịch vụ hỗ trợ tìm nguồn và đặt hàng giá gốc, giao vận hàng hóa thương mại Việt Nam - Quốc Tế.
    	</div>
    	<div class="giay-phep-bocongthuong">
    		<a href="http://online.gov.vn/Home/WebDetails/63714?AspxAutoDetectCookieSupport=1" target="_blank" rel="nofollow" class="bo-cong-thuong">
    			<img width="100" height="34" src="/sites/all/themes/giaodiennguoidung/images/logoSaleNoti.png" />
    		</a>
    		<a href="//www.dmca.com/Protection/Status.aspx?ID=77b99676-3e02-47c4-b64b-45b83a4e935d" target="_blank" rel="nofollow" class="dmca dmca-badge">
    			<span class="icon"></span>
    		</a>
            <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
    	</div>
    </div>
</div></footer>
<!-- Popup Auto -->
  <script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/j-alert/jquery.min.js?s0jxe0"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/gritter/jquery.gritter.min.js?s0jxe0"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/html5Uploader/jquery.html5uploader.js?s0jxe0"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/uikit/js/uikit.min.js?s0jxe0"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/uikit/js/components/tooltip.min.js?s0jxe0"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/uikit/js/components/notify.min.js?s0jxe0"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/jquery.form.min.js?s0jxe0"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/jquery.validate.min.js?s0jxe0"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/additional-methods.min.js?s0jxe0"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/jquery.barrating.min.js?s0jxe0"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/chosen/chosen.jquery.min.js?s0jxe0"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/thuongdo_js.js?s0jxe0"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/popup_home.js?s0jxe0"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_vidientu/js/thuongdo_vidientu.js?s0jxe0"></script>
              <a href="https://zalo.me/1457414119565439158" target="_blank" class="zalo-page">
    <img src="/sites/all/themes/giaodiennguoidung/images/zalo-logo.png"/>
  </a>
	<script>
		window.fbAsyncInit = function() {
        FB.init({
            appId: '1883942085176180',
            xfbml: true,
            version: 'v2.8'
        });
    };
	</script>
  <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <script src="https://apis.google.com/js/platform.js" async defer>
      {lang: 'vi'}
    </script>
    <script>
  (function() {
    var ta = document.createElement('script'); ta.type = 'text/javascript'; ta.async = true;
    ta.src = 'https://analytics.tiktok.com/i18n/pixel/sdk.js?sdkid=BU7V8B5BQ1HOVJLHD0G0';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ta, s);
  })();
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77517270-2', 'auto');
  ga('send', 'pageview');

</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Google Code dành cho Thẻ tiếp thị lại -->
<!--------------------------------------------------
Không thể liên kết thẻ tiếp thị lại với thông tin nhận dạng cá nhân hay đặt thẻ tiếp thị lại trên các trang có liên quan đến danh mục nhạy cảm. Xem thêm thông tin và hướng dẫn về cách thiết lập thẻ trên: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 882264878;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/882264878/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MZFRW9H"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/contrib/jquery_update/replace/jquery/1.8/jquery.min.js?v=1.8.3"></script>
<script type="text/javascript" src="https://www.thuongdo.com/misc/jquery-extend-3.4.0.js?v=1.8.3"></script>
<script type="text/javascript" src="https://www.thuongdo.com/misc/jquery-html-prefilter-3.5.0-backport.js?v=1.8.3"></script>
<script type="text/javascript" src="https://www.thuongdo.com/misc/jquery.once.js?v=1.2"></script>
<script type="text/javascript" src="https://www.thuongdo.com/misc/drupal.js?s0jxe0"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/default/files/languages/vi_in2komZFFnsjt_72XE_KDM2awjJk45aiyeS5-nQPEpM.js?s0jxe0"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/libraries/jgrowl/jquery.jgrowl.min.js?s0jxe0"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/contrib/nicemessages/js/nicemessages.js?s0jxe0"></script>
<script type="text/javascript" src="https://www.thuongdo.com/misc/autocomplete.js?v=7.77"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/json2.js?s0jxe0"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/autoNumeric.js?s0jxe0"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/cycle2.js?s0jxe0"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/happy_new_year.js?s0jxe0"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/css3-animate-it.js?s0jxe0"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/owl.carousel.min.js?s0jxe0"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/giaodiennguoidung.js?s0jxe0"></script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
jQuery.extend(Drupal.settings, {"basePath":"\/","pathPrefix":"","ajaxPageState":{"theme":"giaodiennguoidung","theme_token":"txDOda797bjqKmTQk5I0lJ5BKlObyoHYa8598lzUOto","js":{"sites\/all\/modules\/developer\/thuongdo_export\/js\/j-alert\/jquery.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/gritter\/jquery.gritter.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/html5Uploader\/jquery.html5uploader.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/js\/uikit.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/js\/components\/tooltip.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/js\/components\/notify.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/jquery.form.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/jquery.validate.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/additional-methods.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/jquery.barrating.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/chosen\/chosen.jquery.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/thuongdo_js.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/popup_home.js":1,"sites\/all\/modules\/developer\/thuongdo_vidientu\/js\/thuongdo_vidientu.js":1,"sites\/all\/modules\/contrib\/jquery_update\/replace\/jquery\/1.8\/jquery.min.js":1,"misc\/jquery-extend-3.4.0.js":1,"misc\/jquery-html-prefilter-3.5.0-backport.js":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"public:\/\/languages\/vi_in2komZFFnsjt_72XE_KDM2awjJk45aiyeS5-nQPEpM.js":1,"sites\/all\/libraries\/jgrowl\/jquery.jgrowl.min.js":1,"sites\/all\/modules\/contrib\/nicemessages\/js\/nicemessages.js":1,"misc\/autocomplete.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/json2.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/autoNumeric.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/cycle2.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/happy_new_year.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/css3-animate-it.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/owl.carousel.min.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/giaodiennguoidung.js":1},"css":{"modules\/system\/system.base.css":1,"modules\/system\/system.menus.css":1,"modules\/system\/system.messages.css":1,"modules\/system\/system.theme.css":1,"modules\/aggregator\/aggregator.css":1,"sites\/all\/modules\/contrib\/date\/date_api\/date.css":1,"sites\/all\/modules\/contrib\/date\/date_popup\/themes\/datepicker.1.7.css":1,"modules\/field\/theme\/field.css":1,"modules\/node\/node.css":1,"modules\/user\/user.css":1,"sites\/all\/modules\/contrib\/views\/css\/views.css":1,"sites\/all\/modules\/contrib\/ckeditor\/css\/ckeditor.css":1,"sites\/all\/modules\/contrib\/ctools\/css\/ctools.css":1,"sites\/all\/libraries\/jgrowl\/jquery.jgrowl.min.css":1,"sites\/all\/modules\/contrib\/nicemessages\/css\/nicemessages_positions.css":1,"sites\/all\/modules\/contrib\/nicemessages\/css\/nicemessages_drupal.css":1,"sites\/all\/modules\/contrib\/nicemessages\/css\/shadows.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/lobibox\/css\/lobibox.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/chosen\/chosen.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/css\/uikit.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/css\/components\/tooltip.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/css\/components\/notify.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/css\/components\/progress.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/css\/thuongdo_export.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/css\/fontawesome-stars.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/gritter\/css\/jquery.gritter.css":1,"sites\/all\/modules\/developer\/thuongdo_khieunai\/css\/thuongdo_khieunai.css":1,"sites\/all\/modules\/developer\/thuongdo_vidientu\/css\/thuongdo_vidientu.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/font-awesome.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/skins\/square\/blue.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/animations.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/owl.carousel.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/owl.theme.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/owl.transitions.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/style.css":1}},"nicemessages":{"position":"center","items":[]},"urlIsAjaxTrusted":{"\/":true}});
//--><!]]>
</script>
	<div id="ajax_loader" class="ajax-load-qa">&nbsp;</div>
    <!--
            <div id="my_modal" class="uk-modal">
            <div class="uk-modal-dialog">

            </div>
    	</div>
    -->

    <div id="my_modal" class="uk-modal">
        <div class="uk-modal-dialog">

        </div>
	</div>

	<!-- Scroll to top -->
	<!--<div id="backtotop"></div>-->
	<!-- Scroll to top -->
	<div id="popup-browser" class="uk-modal popup-home">
     <div class="uk-modal-dialog">
          <a class="uk-modal-close uk-close"></a>
          <div class="td-thongbao">
               <div class="td-thongbao-top">
                    <div class="uk-grid uk-grid-small">
                         <div class="uk-width-1-1 uk-width-medium-1-3">
                              <img src="https://www.thuongdo.com/sites/default/files/quangcao/logo_0.png" />
                         </div>
                         <div class="uk-width-1-1 uk-width-medium-2-3">
                              <div class="td-slogan">
                                   THƯƠNG ĐÔ LOGISTICS CHỈ CẦN NGỒI Ở NHÀ MÀ VẪN CHỦ ĐỘNG ĐƯỢC NGUỒN HÀNG
                              </div>
                         </div>
                    </div>
               </div>
               <div class="td-thongbao-content">
                    <div class="td-content-main">
                         Công cụ đặt hàng của <b>thuongdo.com</b> hiện tại chỉ hỗ trợ trình duyệt Chrome, Firefox. Bạn có thể download hai trình duyệt này bằng link dưới đây:
												 <ul>
													<li><a href="https://chrome.google.com/webstore/detail/c%C3%B4ng-c%E1%BB%A5-%C4%91%E1%BA%B7t-h%C3%A0ng-th%C6%B0%C6%A1ng-%C4%91/fcicepgmmbpfkknccafappindadbgcpg">Link tải Chrome</a></li>
													<li><a href="https://addons.mozilla.org/firefox/downloads/file/931827/thuong_o_logistics-3.0-an+fx.xpi">Link tải Firefox</a></li>
												 </ul>
                        Hoặc bạn có thể đặt hàng bằng biểu mẫu, hoặc đặt hàng bằng links liên kết. Chat ngay nếu bạn cần hỗ trợ
                    </div>
                    <div class="td-support">
                         <div class="uk-grid uk-grid-collapse">
                              <div class="uk-width-1-1 uk-width-medium-1-2">
                                   <a href="#" class="uk-button uk-button-primary" style="display: block; margin-right: 1px; font-weight: bold"><i class="fa fa-phone"></i> 19006825</a>
                              </div>
                              <div class="uk-width-1-1 uk-width-medium-1-2">
                                   <a href="#" class="uk-button uk-button-primary" style="display: block; font-weight: bold"><i class="fa fa-envelope-o"></i> chamsoc@thuongdo.com</a>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
<div id="overlay_body"></div>
</body>
</html>
