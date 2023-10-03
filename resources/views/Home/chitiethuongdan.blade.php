<?php


$listtin = DB::table('tbl_tintuc')->where('iddm', 6)
->get();

?>

@extends('layout.LayoutHome')
@section('noidung1')
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
  <title>Đặt hàng Trung Quốc: khó khăn, quy trình, bảng giá đặt hàng</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="canonical" href="/dat-hang-trung-quoc" />
<link rel="shortlink" href="/node/226" />
<link rel="shortcut icon" href="https://www.thuongdo.com/sites/default/files/48icon.ico" type="image/vnd.microsoft.icon" />
<meta name="revisit-after" content="1 ngày" />
<meta property="fb:app_id" content="1883942085176180" />
<meta name="robots" content="noodp,index, follow" />
<meta http-equiv="content-language" content="vi" />
<meta name="googlebot" content="all, index, follow" />
<meta name="msnbot" content="index, follow" />
<meta property="og:type" content="website" />
<meta property="article:author" content="https://www.facebook.com/thuongdogroup?fref=ts" />
<meta property="og:url" content="https://www.thuongdo.com/dat-hang-trung-quoc" />
<meta name="original-source" content="https://www.thuongdo.com" />
<meta name="description" content="Với phí mua hộ hàng Trung Quốc chỉ từ 1%, Thương Đô Logistics luôn cam kết mang giúp bạn giải quyết tất cả những khó khăn về mua hộ hàng, vận chuyển hàng về Trung Quốc an toàn chỉ sau 3-5 ngày." />
<meta name="keywords" content="Đặt hàng Trung Quốc" />
<link rel="canonical" href="https://www.thuongdo.com/dat-hang-trung-quoc" />
<meta property="og:image" content="https://www.thuongdo.com/sites/default/files/dichvu/dat-hang-trung-quoc-2.jpg" />
<meta property="og:title" content="Đặt hàng Trung Quốc: khó khăn, quy trình, bảng giá đặt hàng" />
<meta property="og:description" content="Với phí mua hộ hàng Trung Quốc chỉ từ 1%, Thương Đô Logistics luôn cam kết mang giúp bạn giải quyết tất cả những khó khăn về mua hộ hàng, vận chuyển hàng về Trung Quốc an toàn chỉ sau 3-5 ngày." />
		<script type="text/javascript">var uid_in_page = 252138;</script>
		<script src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/socket.io.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed&display=swap" rel="preload stylesheet" as="style" crossorigin="anonymous"/>
    <link rel="chrome-webstore-item" href="https://chrome.google.com/webstore/detail/fcicepgmmbpfkknccafappindadbgcpg" />
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="preload stylesheet" as="style" crossorigin="anonymous"/>
    <style type="text/css" media="all">
@import url("https://www.thuongdo.com/modules/system/system.base.css?s0lpgf");
@import url("https://www.thuongdo.com/modules/system/system.menus.css?s0lpgf");
@import url("https://www.thuongdo.com/modules/system/system.messages.css?s0lpgf");
@import url("https://www.thuongdo.com/modules/system/system.theme.css?s0lpgf");
</style>
<style type="text/css" media="all">
@import url("https://www.thuongdo.com/modules/aggregator/aggregator.css?s0lpgf");
@import url("https://www.thuongdo.com/sites/all/modules/contrib/date/date_api/date.css?s0lpgf");
@import url("https://www.thuongdo.com/sites/all/modules/contrib/date/date_popup/themes/datepicker.1.7.css?s0lpgf");
@import url("https://www.thuongdo.com/modules/field/theme/field.css?s0lpgf");
@import url("https://www.thuongdo.com/modules/node/node.css?s0lpgf");
@import url("https://www.thuongdo.com/modules/user/user.css?s0lpgf");
@import url("https://www.thuongdo.com/sites/all/modules/contrib/views/css/views.css?s0lpgf");
@import url("https://www.thuongdo.com/sites/all/modules/contrib/ckeditor/css/ckeditor.css?s0lpgf");
</style>
<style type="text/css" media="all">
@import url("https://www.thuongdo.com/sites/all/modules/contrib/ctools/css/ctools.css?s0lpgf");
@import url("https://www.thuongdo.com/sites/all/libraries/jgrowl/jquery.jgrowl.min.css?s0lpgf");
@import url("https://www.thuongdo.com/sites/all/modules/contrib/nicemessages/css/nicemessages_positions.css?s0lpgf");
@import url("https://www.thuongdo.com/sites/all/modules/contrib/nicemessages/css/nicemessages_drupal.css?s0lpgf");
@import url("https://www.thuongdo.com/sites/all/modules/contrib/nicemessages/css/shadows.css?s0lpgf");
@import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/lobibox/css/lobibox.min.css?s0lpgf");
@import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/chosen/chosen.min.css?s0lpgf");
@import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/uikit/css/uikit.min.css?s0lpgf");
@import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/uikit/css/components/tooltip.min.css?s0lpgf");
@import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/uikit/css/components/notify.min.css?s0lpgf");
@import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/uikit/css/components/progress.min.css?s0lpgf");
@import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/css/thuongdo_export.css?s0lpgf");
@import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/css/fontawesome-stars.css?s0lpgf");
@import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/gritter/css/jquery.gritter.css?s0lpgf");
@import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_khieunai/css/thuongdo_khieunai.css?s0lpgf");
@import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_vidientu/css/thuongdo_vidientu.css?s0lpgf");
</style>
<style type="text/css" media="all">
@import url("https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/css/font-awesome.css?s0lpgf");
@import url("https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/css/skins/square/blue.css?s0lpgf");
@import url("https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/css/animations.css?s0lpgf");
@import url("https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/css/owl.carousel.css?s0lpgf");
@import url("https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/css/owl.theme.css?s0lpgf");
@import url("https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/css/owl.transitions.css?s0lpgf");
@import url("https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/css/style.css?s0lpgf");
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
<body class="html not-front logged-in no-sidebars page-node page-node- page-node-226 node-type-dichvu  " >

<div class="main block-both">
            <div class="breadcrumb"><div class="container"><a href="/">Trang chủ</a><i class="fa fa-angle-right" aria-hidden="true"></i><a href="/dich-vu" title="">Dịch vụ</a></div></div>        <div class="container">
            <div class="content-item">
                <div class="group-content">
                          <div class="bai-viet-detail">
                <h1 class="title">{{$dv->title}}</h1>
        <div class="social-item">
			            <div class="fb-like" data-href="https://www.thuongdo.com/dat-hang-trung-quoc" data-width="100" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
            <div class="g-plusone" data-size="medium"></div>
        </div>
        {!! $dv->content !!}

            </div>
                </div>
                <div class="left">
                                    <div class="bai-viet-left-item item-block">
            <h3>Bài viết liên quan</h3>
                            <div class="content">
                    <ul><li class="first-below ">
                    @foreach($listtin as $tin)
<li>
                                                <a href="{{ url('/chitiettin',[$tin->id]) }}" title="DỊCH VỤ ĐẶT HÀNG TRUNG QUỐC" class="active"><i class="fa fa-caret-right" aria-hidden="true"></i>{{$tin->title}}</a>
                                                </li>
@endforeach
                                               </li></ul>                </div>
                    </div>
                                        	                </div>
                <div class="footer-article-top item-block block">
            <div class="menu-footer-bar">
            <ul><li class="first-below ">
                                                    <a href="/dat-hang-trung-quoc" title="DỊCH VỤ ĐẶT HÀNG TRUNG QUỐC" class="active"><i class="fa fa-caret-right" aria-hidden="true"></i>DỊCH VỤ ĐẶT HÀNG TRUNG QUỐC</a>
                                                    <ul><li class=""><a href="/dat-hang-quang-chau" title="Đặt hàng Quảng Châu"><i class="fa fa-angle-right" aria-hidden="true"></i>Đặt hàng Quảng Châu</a></li><li class=""><a href="/dat-hang-taobao" title="Đặt Hàng TaoBao"><i class="fa fa-angle-right" aria-hidden="true"></i>Đặt Hàng TaoBao</a></li><li class=""><a href="/dat-hang-1688" title="Đặt Hàng 1688"><i class="fa fa-angle-right" aria-hidden="true"></i>Đặt Hàng 1688</a></li><li class=""><a href="/dat-hang-alibaba" title="Đặt hàng Alibaba"><i class="fa fa-angle-right" aria-hidden="true"></i>Đặt hàng Alibaba</a></li><li class="last"><a href="/dat-hang-tmall" title="Đặt hàng Tmall"><i class="fa fa-angle-right" aria-hidden="true"></i>Đặt hàng Tmall</a></li></ul>
                                                   </li><li class=" ">
                                                    <a href="/van-chuyen-hang-trung-quoc" title="VẬN CHUYỂN HÀNG TRUNG QUỐC"><i class="fa fa-caret-right" aria-hidden="true"></i>VẬN CHUYỂN HÀNG TRUNG QUỐC</a>
                                                    <ul><li class=""><a href="/van-chuyen-hang-quang-chau" title="Vận chuyển hàng Quảng Châu"><i class="fa fa-angle-right" aria-hidden="true"></i>Vận chuyển hàng Quảng Châu</a></li><li class=""><a href="https:/www.thuongdo.com" title="Vận chuyển đường bộ"><i class="fa fa-angle-right" aria-hidden="true"></i>Vận chuyển đường bộ</a></li><li class=""><a href="https://www.thuongdo.com/" title="Vận chuyển đường hàng không"><i class="fa fa-angle-right" aria-hidden="true"></i>Vận chuyển đường hàng không</a></li><li class=""><a href="https://www.thuongdo.com/" title="Vận chuyển đường sắt"><i class="fa fa-angle-right" aria-hidden="true"></i>Vận chuyển đường sắt</a></li><li class="last"><a href="https://www.thuongdo.com" title="Vận chuyển đường thuỷ"><i class="fa fa-angle-right" aria-hidden="true"></i>Vận chuyển đường thuỷ</a></li></ul>
                                                   </li><li class=" last-below">
                                                    <a href="/dich-vu-kiem-dem" title="DỊCH VỤ GIA TĂNG"><i class="fa fa-caret-right" aria-hidden="true"></i>DỊCH VỤ GIA TĂNG</a>
                                                    <ul><li class=""><a href="https://www.thuongdo.com/bang-gia-dich-vu#bang-gia-chi-phi" title="Dịch vụ bảo hiểm hàng hoá"><i class="fa fa-angle-right" aria-hidden="true"></i>Dịch vụ bảo hiểm hàng hoá</a></li><li class=""><a href="https://www.thuongdo.com/bang-gia-dich-vu#bang-gia-phi-kiem-dem" title="Dịch vụ kiểm đếm"><i class="fa fa-angle-right" aria-hidden="true"></i>Dịch vụ kiểm đếm</a></li><li class="last"><a href="https://www.thuongdo.com/bang-gia-dich-vu#bang-gia-phi-dong-go" title="Dịch vụ đóng hàng"><i class="fa fa-angle-right" aria-hidden="true"></i>Dịch vụ đóng hàng</a></li></ul>
                                                   </li><li>
                                    <a href="/h%C6%B0%E1%BB%9Bng-dan" title="Hướng dẫn">Hướng dẫn</a><ul><li class="first-below ">
                                            <a href="/huong-dan-tao-don-hang" title="Hướng dẫn tạo đơn đặt hàng"><i class="fa fa-caret-right" aria-hidden="true"></i>Hướng dẫn tạo đơn đặt hàng</a>

                                           </li><li class=" ">
                                            <a href="/taobao-1688-tmall-alibaba" title="Hướng dẫn tìm nguồn hàng trên Taobao 1688"><i class="fa fa-caret-right" aria-hidden="true"></i>Hướng dẫn tìm nguồn hàng trên Taobao 1688</a>

                                           </li><li class=" ">
                                            <a href="/cong-cu-d%C4%83t-hang" title="Cài đặt công cụ đặt hàng"><i class="fa fa-caret-right" aria-hidden="true"></i>Cài đặt công cụ đặt hàng</a>

                                           </li><li class=" ">
                                            <a href="/huong-dan-dang-ky-dang-nhap-tai-khoan" title="Hướng dẫn đăng ký, đăng nhập tài khoản"><i class="fa fa-caret-right" aria-hidden="true"></i>Hướng dẫn đăng ký, đăng nhập tài khoản</a>

                                           </li><li class=" ">
                                            <a href="/ky-gui-hang-trung-quoc" title="Hướng dẫn tạo đơn ký gửi hàng"><i class="fa fa-caret-right" aria-hidden="true"></i>Hướng dẫn tạo đơn ký gửi hàng</a>

                                           </li><li class=" ">
                                            <a href="/huong-dan-nap-tien-vao-tai-khoan-khach-hang-cua-thuong-do" title="Hướng dẫn nạp tiền vào tài khoản khách hàng"><i class="fa fa-caret-right" aria-hidden="true"></i>Hướng dẫn nạp tiền vào tài khoản khách hàng</a>

                                           </li></ul>
                                  </li></ul>        </div>
    </div>            </div>
        </div>

</div>
 <script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/j-alert/jquery.min.js?s0lpgf"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/gritter/jquery.gritter.min.js?s0lpgf"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/html5Uploader/jquery.html5uploader.js?s0lpgf"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/uikit/js/uikit.min.js?s0lpgf"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/uikit/js/components/tooltip.min.js?s0lpgf"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/uikit/js/components/notify.min.js?s0lpgf"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/jquery.form.min.js?s0lpgf"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/jquery.validate.min.js?s0lpgf"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/additional-methods.min.js?s0lpgf"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/jquery.barrating.min.js?s0lpgf"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/chosen/chosen.jquery.min.js?s0lpgf"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/thuongdo_js.js?s0lpgf"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_vidientu/js/thuongdo_vidientu.js?s0lpgf"></script>
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
<script type="text/javascript" src="https://www.thuongdo.com/misc/drupal.js?s0lpgf"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/default/files/languages/vi_in2komZFFnsjt_72XE_KDM2awjJk45aiyeS5-nQPEpM.js?s0lpgf"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/libraries/jgrowl/jquery.jgrowl.min.js?s0lpgf"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/contrib/nicemessages/js/nicemessages.js?s0lpgf"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/json2.js?s0lpgf"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/autoNumeric.js?s0lpgf"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/cycle2.js?s0lpgf"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/happy_new_year.js?s0lpgf"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/css3-animate-it.js?s0lpgf"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/owl.carousel.min.js?s0lpgf"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/giaodiennguoidung.js?s0lpgf"></script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
jQuery.extend(Drupal.settings, {"basePath":"\/","pathPrefix":"","ajaxPageState":{"theme":"giaodiennguoidung","theme_token":"gy8VCc5Gpq_Yp3GykW6gk01EFeUsuPWaRxwqzNy9Lak","js":{"sites\/all\/modules\/developer\/thuongdo_export\/js\/j-alert\/jquery.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/gritter\/jquery.gritter.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/html5Uploader\/jquery.html5uploader.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/js\/uikit.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/js\/components\/tooltip.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/js\/components\/notify.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/jquery.form.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/jquery.validate.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/additional-methods.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/jquery.barrating.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/chosen\/chosen.jquery.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/thuongdo_js.js":1,"sites\/all\/modules\/developer\/thuongdo_vidientu\/js\/thuongdo_vidientu.js":1,"sites\/all\/modules\/contrib\/jquery_update\/replace\/jquery\/1.8\/jquery.min.js":1,"misc\/jquery-extend-3.4.0.js":1,"misc\/jquery-html-prefilter-3.5.0-backport.js":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"public:\/\/languages\/vi_in2komZFFnsjt_72XE_KDM2awjJk45aiyeS5-nQPEpM.js":1,"sites\/all\/libraries\/jgrowl\/jquery.jgrowl.min.js":1,"sites\/all\/modules\/contrib\/nicemessages\/js\/nicemessages.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/json2.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/autoNumeric.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/cycle2.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/happy_new_year.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/css3-animate-it.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/owl.carousel.min.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/giaodiennguoidung.js":1},"css":{"modules\/system\/system.base.css":1,"modules\/system\/system.menus.css":1,"modules\/system\/system.messages.css":1,"modules\/system\/system.theme.css":1,"modules\/aggregator\/aggregator.css":1,"sites\/all\/modules\/contrib\/date\/date_api\/date.css":1,"sites\/all\/modules\/contrib\/date\/date_popup\/themes\/datepicker.1.7.css":1,"modules\/field\/theme\/field.css":1,"modules\/node\/node.css":1,"modules\/user\/user.css":1,"sites\/all\/modules\/contrib\/views\/css\/views.css":1,"sites\/all\/modules\/contrib\/ckeditor\/css\/ckeditor.css":1,"sites\/all\/modules\/contrib\/ctools\/css\/ctools.css":1,"sites\/all\/libraries\/jgrowl\/jquery.jgrowl.min.css":1,"sites\/all\/modules\/contrib\/nicemessages\/css\/nicemessages_positions.css":1,"sites\/all\/modules\/contrib\/nicemessages\/css\/nicemessages_drupal.css":1,"sites\/all\/modules\/contrib\/nicemessages\/css\/shadows.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/lobibox\/css\/lobibox.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/chosen\/chosen.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/css\/uikit.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/css\/components\/tooltip.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/css\/components\/notify.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/css\/components\/progress.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/css\/thuongdo_export.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/css\/fontawesome-stars.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/gritter\/css\/jquery.gritter.css":1,"sites\/all\/modules\/developer\/thuongdo_khieunai\/css\/thuongdo_khieunai.css":1,"sites\/all\/modules\/developer\/thuongdo_vidientu\/css\/thuongdo_vidientu.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/font-awesome.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/skins\/square\/blue.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/animations.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/owl.carousel.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/owl.theme.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/owl.transitions.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/style.css":1}},"nicemessages":{"position":"center","items":[]}});
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

</div>
<div id="overlay_body"></div>
</body>
</html>
@endsection
