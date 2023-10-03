<?php

use App\Models\User;

$chobaogia = 'Chờ báo giá';
$count1 = DB::table('tbl_order')->where('trangthai', $chobaogia)->count();
$chodatcoc = 'Chờ đặt cọc';
$count2 = DB::table('tbl_order')->where('trangthai', $chodatcoc)->count();
$dadatcoc = 'Đã đặt cọc';
$count3 = DB::table('tbl_order')->where('trangthai', $dadatcoc)->count();
$dathang = 'Đã đặt hàng';
$count4 = DB::table('tbl_order')->where('trangthai', $dathang)->count();

$dathang2 = 'Đã hoàn thành';
$count5 = DB::table('tbl_order')->where('trangthai', $dathang2)->count();

$dathang3 = 'Cần xác nhận lại';
$count6 = DB::table('tbl_order')->where('trangthai', $dathang3)->count();


$user = session('user');
$iduser = $user->id;
$user = User::find($iduser);

// Kiểm tra xem có dữ liệu người dùng được trả về hay không
if ($user) {
    // Bạn có thể truy cập các thuộc tính của người dùng như tên, email, v.v.
    $phone = $user->phone;
    $email = $user->email;
    $img = $user->img;
    // ...
} else {
    // Xử lý khi không tìm thấy người dùng
}

?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="vi" version="XHTML+RDFa 1.0" dir="ltr"
    xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:dc="http://purl.org/dc/terms/"
    xmlns:foaf="http://xmlns.com/foaf/0.1/" xmlns:og="http://ogp.me/ns#"
    xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#" xmlns:sioc="http://rdfs.org/sioc/ns#"
    xmlns:sioct="http://rdfs.org/sioc/types#" xmlns:skos="http://www.w3.org/2004/02/skos/core#"
    xmlns:xsd="http://www.w3.org/2001/XMLSchema#">

<head profile="http://www.w3.org/1999/xhtml/vocab">
    <title>Đơn hàng của tôi | THƯƠNG ĐÔ LOGISTICS</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="https://www.thuongdo.com/sites/default/files/48icon.ico"
        type="image/vnd.microsoft.icon" />
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
    <script type="text/javascript">
    var uid_in_page = 252138;
    </script>
    <script src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/socket.io.js" type="text/javascript">
    </script>
    <!-- Thư viện CSS của Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- Thư viện JavaScript của Bootstrap (bao gồm jQuery) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed&display=swap" rel="preload stylesheet"
        as="style" crossorigin="anonymous" />
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="chrome-webstore-item"
        href="https://chrome.google.com/webstore/detail/fcicepgmmbpfkknccafappindadbgcpg" />
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="preload stylesheet" as="style"
        crossorigin="anonymous" />
    <style type="text/css" media="all">
    @import url("https://www.thuongdo.com/modules/system/system.base.css?s1699z");
    @import url("https://www.thuongdo.com/modules/system/system.menus.css?s1699z");
    @import url("https://www.thuongdo.com/modules/system/system.messages.css?s1699z");
    @import url("https://www.thuongdo.com/modules/system/system.theme.css?s1699z");
    </style>
    <style type="text/css" media="all">
    @import url("https://www.thuongdo.com/sites/all/modules/contrib/jquery_update/replace/ui/themes/base/minified/jquery.ui.core.min.css?s1699z");
    @import url("https://www.thuongdo.com/sites/all/modules/contrib/jquery_update/replace/ui/themes/base/minified/jquery.ui.theme.min.css?s1699z");
    @import url("https://www.thuongdo.com/sites/all/modules/contrib/jquery_update/replace/ui/themes/base/minified/jquery.ui.datepicker.min.css?s1699z");
    @import url("https://www.thuongdo.com/sites/all/modules/contrib/date/date_popup/themes/jquery.timeentry.css?s1699z");
    </style>
    <style type="text/css" media="all">
    @import url("https://www.thuongdo.com/modules/aggregator/aggregator.css?s1699z");
    @import url("https://www.thuongdo.com/sites/all/modules/contrib/date/date_api/date.css?s1699z");
    @import url("https://www.thuongdo.com/sites/all/modules/contrib/date/date_popup/themes/datepicker.1.7.css?s1699z");
    @import url("https://www.thuongdo.com/modules/field/theme/field.css?s1699z");
    @import url("https://www.thuongdo.com/modules/node/node.css?s1699z");
    @import url("https://www.thuongdo.com/modules/user/user.css?s1699z");
    @import url("https://www.thuongdo.com/sites/all/modules/contrib/views/css/views.css?s1699z");
    @import url("https://www.thuongdo.com/sites/all/modules/contrib/ckeditor/css/ckeditor.css?s1699z");
    </style>
    <style type="text/css" media="all">
    @import url("https://www.thuongdo.com/sites/all/modules/contrib/ctools/css/ctools.css?s1699z");
    @import url("https://www.thuongdo.com/sites/all/libraries/jgrowl/jquery.jgrowl.min.css?s1699z");
    @import url("https://www.thuongdo.com/sites/all/modules/contrib/nicemessages/css/nicemessages_positions.css?s1699z");
    @import url("https://www.thuongdo.com/sites/all/modules/contrib/nicemessages/css/nicemessages_drupal.css?s1699z");
    @import url("https://www.thuongdo.com/sites/all/modules/contrib/nicemessages/css/shadows.css?s1699z");
    @import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/lobibox/css/lobibox.min.css?s1699z");
    @import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/chosen/chosen.min.css?s1699z");
    @import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/intro/introjs.css?s1699z");
    @import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/uikit/css/uikit.min.css?s1699z");
    @import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/uikit/css/components/tooltip.min.css?s1699z");
    @import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/uikit/css/components/notify.min.css?s1699z");
    @import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/uikit/css/components/progress.min.css?s1699z");
    @import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/css/thuongdo_export.css?s1699z");
    @import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/css/fontawesome-stars.css?s1699z");
    @import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/gritter/css/jquery.gritter.css?s1699z");
    @import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_khieunai/css/thuongdo_khieunai.css?s1699z");
    @import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_vidientu/css/thuongdo_vidientu.css?s1699z");
    </style>
    <style type="text/css" media="all">
    @import url("https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/css/font-awesome.css?s1699z");
    @import url("https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/css/skins/square/blue.css?s1699z");
    @import url("https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/css/animations.css?s1699z");
    @import url("https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/css/owl.carousel.css?s1699z");
    @import url("https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/css/owl.theme.css?s1699z");
    @import url("https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/css/owl.transitions.css?s1699z");
    @import url("https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/css/style.css?s1699z");
    </style>
    <!-- Facebook Pixel Code -->
    <script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1300394569987936');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1300394569987936&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->

    <!-- Facebook Pixel Code -->
    <script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '345617853272695');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=345617853272695&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->

    <!-- Facebook Pixel Code -->
    <script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '2576325132663994');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=2576325132663994&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->

    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-MZFRW9H');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KLWC6MLBGL"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-KLWC6MLBGL');
    </script>
    <meta name="cystack-verification" content="fac5075a8c00ceba1a55b9e74581f857" />
    <meta name="google-site-verification" content="K4NCbe6B5br-qb8UrhHd7ef7aSBsQCIcbLJnCrEg97I" />
</head>

<body class="html not-front logged-in no-sidebars page-don-hang dashboard-page page-no-right">
    <div class="olay-css" style="display: none;"></div>
    <header class="dashboard-header block-clear block-both">
        <div class="logo"><a href="https://www.thuongdo.com" class="shiner" rel="nofollow"><img
                    src="https://www.thuongdo.com/sites/default/files/quangcao/logo_3.png"
                    alt="Nhập hàng Trung Quốc - THƯƠNG ĐÔ LOGISTICS"
                    title="Nhập hàng Trung Quốc - THƯƠNG ĐÔ LOGISTICS" /></a></div>
        <div class="header-dashboard-right">
            <div class="new-block">
                <span class="icon"></span>
            </div>
            <div class="dashboard-info">
                <div class="so-du item">
                    Số dư: <b>0đ</b>
                    <span class="dashboard-icon"></span>
                </div>
                <ul>
                    <li class="cart item cart-user icon-li">
                        <a href="/gio-hang" class="top">
                            <span class="dashboard-icon"></span>
                            <sup>0</sup>
                        </a>
                    </li>
                    <li class="gop-y">
                        <a href="/gop-y" data-uk-tooltip="" title="Góp ý"><i class="fa fa-envelope-o"
                                aria-hidden="true"></i></a>
                    </li>
                    <li class="thong-tin notify item cart-inner">
                        <a href="javascript:void(0);" class="top name" data-total="0"
                            data-intro="Xin chào <b>Võ Hoàng Tiến</b>, Hôm nay bạn có <b>0</b> thông báo mới"
                            data-position="bottom">
                            <i class="fa fa-bell-o" aria-hidden="true"></i>
                            <sup>0</sup>
                        </a>
                        <div class="panel-notify">
                            <div class="panel-arrow">
                                <div class="notify-header">Thông báo mới</div>
                                <div class="notify-body">
                                    <ul class="notify-sidebar">
                                        <li class="first">
                                            <a data-title="Thông báo mới" href="#td-thongbao" title="Thông báo mới"
                                                class="tb-thongbao">
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <span
                                                    class="uk-badge uk-badge-danger uk-badge-notification uk-badge-abs">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-title="Tài chính" href="#td-taichinh" title="Tài chính"
                                                class="tb-taichinh">
                                                <i class="fa fa-usd" aria-hidden="true"></i>
                                                <span
                                                    class="uk-badge uk-badge-danger uk-badge-notification uk-badge-abs">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-title="Kiện hàng" href="#td-kienhang" title="Kiện hàng"
                                                class="tb-kienhang">
                                                <i class="fa fa-hdd-o" aria-hidden="true"></i>
                                                <span
                                                    class="uk-badge uk-badge-danger uk-badge-notification uk-badge-abs">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-title="Khiếu nại" href="#td-yeucau" title="Khiếu nại"
                                                class="tb-khieunai">
                                                <i class="fa fa-frown-o" aria-hidden="true"></i>
                                                <span
                                                    class="uk-badge uk-badge-danger uk-badge-notification uk-badge-abs">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-title="Ưu đãi" href="#td-uu-dai" title="Ưu đãi" class="tb-uu-dai">
                                                <i class="fa fa-gift" aria-hidden="true"></i>
                                                <span
                                                    class="uk-badge uk-badge-danger uk-badge-notification uk-badge-abs">0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-title="Góp ý" href="#td-gop-y" class="tb-gopy">
                                                <i class="fa fa-commenting" aria-hidden="true"></i>
                                                <span
                                                    class="uk-badge uk-badge-danger uk-badge-notification uk-badge-abs">0</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="notify-content">
                                        <div id="td-thongbao" class="td-notify">
                                            <ul class="tb-not-hover">
                                                <li class=""><a
                                                        href="/mo-lai-dich-vu-dat-hang-tren-pinduoduo-tu-ngay-06092023">[Thông
                                                        báo] Mở lại dịch vụ đặt hàng trên Pinduoduo từ ngày
                                                        06/09/2023</a></li>
                                                <li class=""><a href="/lich-nghi-le-quoc-khanh-02092023">[Thông báo]
                                                        Lịch nghỉ lễ Quốc Khánh 02/09/2023</a></li>
                                                <li class=""><a
                                                        href="/mo-lai-dich-vu-kiem-dem-va-dong-go-hang-hoa-tu-ngay-19082023">[Thông
                                                        báo] Mở lại dịch vụ kiểm đếm và đóng gỗ hàng hóa từ ngày
                                                        19/08/2023</a></li>
                                                <li class=""><a
                                                        href="/thay-doi-cu-phap-nap-tien-vao-tai-khoan-giao-dich-tai-thuong-do">[Thông
                                                        báo] Thay đổi cú pháp nạp tiền vào tài khoản giao dịch tại
                                                        Thương Đô</a></li>
                                                <li class="last"><a
                                                        href="/thay-doi-thong-tin-tai-khoan-giao-dich-tai-thuong-do-tu-ngay-03072023">[Thông
                                                        báo] Thay đổi thông tin tài khoản giao dịch tại Thương Đô từ
                                                        ngày 03/07/2023</a></li>
                                            </ul>
                                        </div>
                                        <div id="td-taichinh" class="td-notify" style="display:none">
                                            <ul class="tb-not-hover">
                                                <li>
                                                    <div class="uk-alert uk-alert-danger">Chưa có dữ liệu tài chính !
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div id="td-kienhang" class="td-notify" style="display:none">
                                            <ul class="tb-not-hover">
                                                <li>
                                                    <div class="uk-alert uk-alert-danger">Chưa có thông báo mới về kiện
                                                        hàng !</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div id="td-uu-dai" class="td-notify" style="display: none;">
                                            <ul class="uu-dai-item">
                                                <li>
                                                    <div class="uk-alert uk-alert-danger">Chưa có ưu đãi mới nào !</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div id="td-yeucau" class="td-notify" style="display:none">
                                            <ul class="tb-not-hover">
                                                <li>
                                                    <div class="uk-alert uk-alert-danger">Chưa có thông báo mới nào !
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="td-notify" style="display:none" id="td-gop-y">
                                            <ul class="tb-not-hover">
                                                <li class="uk-alert uk-alert-danger">Chưa có góp ý mới nào !</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="avatar item logout-li front-li">
                        <a href="" class="top"><img src="{{ asset('images/' . $img) }}" /></a>
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                        <div class="logout-inner">
                            <i class="fa fa-caret-up" aria-hidden="true"></i>
                            <div class="content">
                                <p class="no-border">
                                    <a href="/thong-tin-ca-nhan"><span><img width="30" height="30"
                                                src="/sites/default/files/pictures/no-avatar.jpg" /></span>
                                        <b>{{$email}}</b>
                                        <strong class="kcode">Mã KH: {{$user->id}}</strong></a>
                                </p>
                                <p class="children">
                                    <a href="/don-hang/kien-hang"><b class="fa fa-th"></b> Kiện hàng</a> <a
                                        href="/don-hang/gop-y"><b class="fa fa-commenting"></b> Góp ý</a> <a
                                        href="/thanh-vien/mat-khau"><b class="fa fa-unlock-alt"></b> Thay đổi mật
                                        khẩu</a> <a href="/user/logout"><b class="fa fa-sign-out"></b> Thoát</a>
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="main-dashboard block-both">
        <div class="left-dashboard-bar block-clear">
            <nav class="menu-nav block-clear block-both">
                <ul>
                    <li class="parent">
                        <a href="javascript:void(0);" class="item-1 one">
                            <span class="dashboard-icon"></span>
                            <strong>Tạo đơn</strong>
                        </a>
                        <ul>
                            <li><a href="{{ url('/taodonhang') }}">Tạo đơn hàng</a></li>
                            <li><a href="/dat-hang/nha-cung-cap">Từ sản phẩm đã mua</a></li>
                            <li><a href="{{ url('/taodonkygui') }}">Tạo đơn ký gửi</a></li>
                        </ul>
                    </li>
                    <li class="parent">
                        <a href="javascript:void(0);" class="item-2 one">
                            <span class="dashboard-icon"></span>
                            <strong>Đơn hàng</strong>
                        </a>
                        <ul>
                            <li><a href="{{ url('/tatcadonhang') }}" class="active">Tất cả đơn hàng</a></li>
                            <li><a href="{{ url('/tatcadonkh') }}">Tất cả đơn ký gửi</a></li>
                        </ul>
                    </li>
                    <li class="parent">
                        <a href="javascript:void(0);" class="item-3 one">
                            <span class="dashboard-icon"></span>
                            <strong>Kiện hàng</strong>
                        </a>
                        <ul>
                            <li><a href="/don-hang/kien-hang-update">Tất cả kiện hàng</a></li>
                            <li><a href="/don-hang/giaohang">Giao hàng</a></li>
                            <li><a href="/kien-hang/da-ship">Đã giao hàng</a></li>
                            <li><a href="/kien-hang/kiem-dem">Kiểm hàng</a></li>
                        </ul>
                    </li>
                    <li class="parent">
                        <a href="javascript:void(0);" class="item-4 one">
                            <span class="dashboard-icon"></span>
                            <strong>Tài khoản KH</strong>
                        </a>
                        <ul>
                            <li><a href="/nap-tien">Hướng dẫn nạp tiền</a></li>
                            <li><a href="/lich-su-giao-dich">Lịch sử giao dịch</a></li>
                            <li><a href="/rut-tien">Rút tiền</a></li>
                        </ul>
                    </li>
                    <li class="parent">
                        <a href="javascript:void(0);" class="item-5 one">
                            <span class="dashboard-icon"></span>
                            <strong>Khiếu nại</strong>
                        </a>
                        <ul>
                            <li><a href="/danh-sach-khieu-nai">Tất cả khiếu nại</a></li>
                            <li><a href="/">Hàng mất thông tin</a></li>
                        </ul>
                    </li>
                    <li class="parent">
                        <a href="javascript:void(0);" class="item-6 one">
                            <span class="dashboard-icon"></span>
                            <strong>Nhà cung cấp</strong>
                        </a>
                        <ul>
                            <li><a href="/nha-cung-cap">Tất cả nhà cung cấp</a></li>
                            <li><a href="/nha-cung-cap/add">Thêm mới nhà cung cấp</a></li>
                        </ul>
                    </li>
                    <li class="parent last">
                        <a href="javascript:void(0);" class="item-7 one">
                            <span class="dashboard-icon"></span>
                            <strong>Cài đặt</strong>
                        </a>
                        <ul>
                            <li><a href="/thong-tin-ca-nhan">Thông tin cá nhân</a></li>
                            <li><a href="/thanh-vien/dia-chi-giao-hang">Địa chỉ giao hàng</a></li>
                            <li><a href="/thanh-vien/mat-khau">Thay đổi mật khẩu</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="addon-install block-clear block-both">
                <a href="https://chrome.google.com/webstore/detail/th%C6%B0%C6%A1ng-%C4%91%C3%B4-logistics-c%C3%B4ng/hdjjpocjionoehcnlohaefadonpidelg?hl=vi&authuser=3"
                    target="_blank">
                    <b>Cài đặt</b><br />
                    Công cụ đặt hàng
                </a>
                <span class="dashboard-icon"></span>
                <div class="hotline">
                    <span>Hotline</span><br />
                    <a href="">1900 6825</a>
                </div>
                <a href="https://chrome.google.com/webstore/detail/th%C6%B0%C6%A1ng-%C4%91%C3%B4-logistics-c%C3%B4ng/hdjjpocjionoehcnlohaefadonpidelg?hl=vi&authuser=3"
                    target="_blank" class="install-now">Cài đặt ngay</a>
            </div>
        </div>
        <div class="content-dashboard">
            <div class="content-dashboard-top block-both">
                <div class="content-dashboard-top-inner">
                    <div class="hotline">
                        <div class="inner">
                            <span class="text">Hotline</span><br />
                            <b>1900 6825</b>
                        </div>
                        <span class="dashboard-icon"></span>
                    </div>
                    <div class="tim-kiem-search-form">
                        <form class="tim-kiem-add-form" target="_blank" action="/don-hang" method="post"
                            id="baiviet-tim-kiem-add-form" accept-charset="UTF-8">
                            <div>
                                <div class="search-text">
                                    <span>
                                        <img data-id="2" class="active-seleted"
                                            src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/images/search/taobao.png" />
                                        <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </span>
                                    <ul class="search-hover" style="display:none;">
                                        <li data-id="2">
                                            <img
                                                src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/images/search/taobao.png" />
                                            <i class="fa fa-caret-right"></i>
                                        </li>
                                        <li data-id="6">
                                            <img
                                                src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/images/search/shiji1688.png" />
                                        </li>
                                        <li data-id="1">
                                            <img
                                                src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/images/search/shiji1688.png" />
                                        </li>
                                        <li data-id="3">
                                            <img
                                                src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/images/search/tmall.png" />
                                        </li>
                                        <li data-id="4">
                                            <img
                                                src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/images/search/tmall.png" />
                                        </li>
                                    </ul>
                                    <div class="form-item form-type-select form-item-category">
                                        <select id="edit-category" name="category" class="form-select">
                                            <option value="1">1688</option>
                                            <option value="6">1688shili</option>
                                            <option value="5">Taobao CN</option>
                                            <option value="2" selected="selected">Taobao QT</option>
                                            <option value="3">Tmall</option>
                                            <option value="4">Baidu</option>
                                        </select>
                                    </div>
                                    <div class="form-item form-type-textfield form-item-keyword">
                                        <input placeholder="Chào Tiến, tối nay bạn muốn tìm gì: nhập link, từ khóa..."
                                            type="text" id="edit-keyword" name="keyword" value="" size="60"
                                            maxlength="128" class="form-text form-autocomplete" /><input type="hidden"
                                            id="edit-keyword-autocomplete"
                                            value="https://www.thuongdo.com/index.php?q=tim-kiem/autocomplete"
                                            disabled="disabled" class="autocomplete" />
                                    </div>
                                </div><input type="submit" id="edit-submit--2" name="op" value="Tìm kiếm"
                                    class="form-submit" /><input type="hidden" name="form_build_id"
                                    value="form-rrk3NI63ZvH3PrIXOF9tkE0brhmcmMP3I6zL1S0IgtM" />
                                <input type="hidden" name="form_token"
                                    value="xV1S2GhPtUYb-xuveJpLTCSXk0vH2YAu1w6E8XVN7vY" />
                                <input type="hidden" name="form_id" value="baiviet_tim_kiem_add_form" />
                            </div>
                        </form> <b>(Nếu bạn chưa tìm thấy sản phẩm mong muốn vui lòng <a
                                href="https://www.messenger.com/t/thuongdo.vn" target="_bank" rel="nofollow">Click vào
                                đây</a> gửi yêu cầu từ khóa)</b>
                    </div>
                    <div class="ti-gia">
                        <span class="dashboard-icon"></span>
                        <span class="text">
                            <em>Tỉ giá</em><br />
                            <b>3,470đ</b>
                        </span>
                    </div>
                </div>
            </div>
            <div class="content-page-center">
                <div class="menu-don-hang">
                    <ul class="step-action">
                        <li class=""><a href="{{ url('/tatcadonhang') }}" class="active">Chờ báo giá<span
                                    class="uk-badge uk-badge-notification uk-badge-danger" style="margin-left: 5px">
                                    {{$count1}}</span></a></li>
                        <li class=""><a href="{{ url('/chodatcoc') }}" class="active">Chờ đặt cọc<span
                                    class="uk-badge uk-badge-notification " style="margin-left: 5px">
                                    {{$count2}}</span></a></li>
                        <li class=""><a href="{{ url('/dadathang') }}" class="active">Đã đặt cọc<span
                                    class="uk-badge uk-badge-notification " style="margin-left: 5px">
                                    {{$count3}}</span></a></li>
                        <li class=""><a href="{{ url('/dadathang1') }}" class="active">Đã đặt hàng <span
                                    class="uk-badge uk-badge-notification " style="margin-left: 5px">
                                    {{$count4}}</span></a></li>
                        <li class=""><a href="/don-hang?status=3" class="active">Đã hoàn thành<span
                                    class="uk-badge uk-badge-notification " style="margin-left: 5px">
                                    {{$count5}}</span></a></li>
                        <li class=""><a href="/don-hang?status=15" class="active">Cần xác nhận lại <span
                                    class="uk-badge uk-badge-notification " style="margin-left: 5px"> 0</span></a></li>
                        <li class=""><a href="/don-hang?status=2" class="active">Đã hủy<span
                                    class="uk-badge uk-badge-notification " style="margin-left: 5px"> 0</span></a></li>
                    </ul>
                </div>
                <form class="don-hang-da-dat-search-form" action="/don-hang" method="post" id="don-hang-dat-search-form"
                    accept-charset="UTF-8">
                    <div>
                        <div class="container-inline-date">
                            <div class="form-item form-type-date-popup form-item-month-to">
                                <div id="edit-month-to" class="date-padding">
                                    <div class="form-item form-type-textfield form-item-month-to-date">
                                        <label for="edit-month-to-datepicker-popup-0">Date </label>
                                        <input placeholder="Từ ngày" type="text" id="edit-month-to-datepicker-popup-0"
                                            name="month_to[date]" value="" size="20" maxlength="30" class="form-text" />
                                        <div class="description"> E.g., 18/09/2023</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-inline-date">
                            <div class="form-item form-type-date-popup form-item-month-end">
                                <div id="edit-month-end" class="date-padding">
                                    <div class="form-item form-type-textfield form-item-month-end-date">
                                        <label for="edit-month-end-datepicker-popup-0">Date </label>
                                        <input placeholder="Đến ngày" type="text" id="edit-month-end-datepicker-popup-0"
                                            name="month_end[date]" value="" size="20" maxlength="30"
                                            class="form-text" />
                                        <div class="description"> E.g., 18/09/2023</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-item form-type-textfield form-item-order-code">
                            <input placeholder="Mã đơn hàng" type="text" id="edit-order-code" name="order_code" value=""
                                size="60" maxlength="128" class="form-text" />
                        </div>
                        <div class="form-item form-type-select form-item-truso-id">
                            <select id="edit-truso-id" name="truso_id" class="form-select">
                                <option value="" selected="selected">Lựa chọn trụ sở</option>
                                <option value="1">Hà Nội</option>
                                <option value="7">Hà Nội</option>
                                <option value="10">Hà Nội</option>
                                <option value="11">Hà Nội</option>
                                <option value="2">Hải Phòng</option>
                                <option value="3">Hồ Chí Minh</option>
                                <option value="4">Quảng Châu</option>
                            </select>
                        </div>
                        <div class="form-item form-type-select form-item-status">
                            <select id="edit-status" name="status" class="form-select">
                                <option value="" selected="selected">Chọn trạng thái</option>
                                <option value="1">Chờ báo giá</option>
                                <option value="13">Chờ đặt cọc</option>
                                <option value="4">Đã đặt cọc</option>
                                <option value="14">Đã đặt hàng </option>
                                <option value="3">Đã hoàn thành</option>
                                <option value="15">Cần xác nhận lại </option>
                                <option value="2">Đã hủy</option>
                            </select>
                        </div>
                        <a class="search-form" href="javascript:void(0);"><i class="fa fa-search"
                                aria-hidden="true"></i> Tìm kiếm</a><input type="submit" id="edit-submit" name="op"
                            value="Tìm kiếm" class="form-submit" /><input type="hidden" name="form_build_id"
                            value="form-ktSS_tYcDojKhIzypven7zd-H13eVcd1GjS8yFrQlD4" />
                        <input type="hidden" name="form_token" value="4mOrar2AqFrJU0i8UkiQCnBEaAz-d5luliSTawXYXHo" />
                        <input type="hidden" name="form_id" value="don_hang_dat_search_form" />
                    </div>
                </form>
                <div class="order-item block-both">
                    <div class="order-item-top block-both">
                        <div class="order-item-top-left">
                            <div class="order-item-top-left-left">
                                <span class="kho">Hà Nội</span>
                                <span class="order-code">Mã đơn hàng: <a
                                        href="/don-hang-view?order_id=1304370">2960080001</a></span>
                            </div>
                            <span class="post"><i class="fa fa-calendar" aria-hidden="true"></i> 18/09/2023</span>
                            <span class="so-kien" data-uk-tooltip="" title="Kiện hàng"><i class="fa fa-cubes"
                                    aria-hidden="true"></i> <a href="/don-hang/kien-hang-update?order-code=2960080001"
                                    target="_blank">0</a> kiện hàng</span>
                        </div>
                        <div class="order-item-top-right">
                            Trạng thái: <span class="status" style="background:#ff0000">Chờ đặt cọc</span>
                        </div>
                    </div>
                    <div class="order-item-product block-both">
                        <div class="order-item-product-left">
                            <div class="ncc-item block-both">
                                <div class="ncc-item-top">
                                    <span class="stt">1</span>
                                    <span class="name">Nhà cung cấp: <b>Không xác định nhóm shop</b></span>
                                    <div class="dich-vu-khac">
                                        <span>Kiểm hàng <i class="fa fa-toggle-off" aria-hidden="true"></i></span>
                                        <span>Đóng gỗ <i class="fa fa-toggle-off" aria-hidden="true"></i></span>
                                        <span>Chống sốc <i class="fa fa-toggle-off" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                                @foreach($data as $dt)
                                <div class="ncc-product-list">
                                    <table>
                                        <tr>
                                            <td width="40%">
                                                <a href="https://login.taobao.com/member/login.jhtml?redirectURL=https%3a%2f%2fitem.taobao.com:443/item.htm%2F_____tmd_____%2Fpage%2Flogin_jump%3Frand%3DS3WxGHAgAt756EpznwfNzJq2AFA2qBNla3j6EINUS8We9dazM_iKElp8DwVSHZUevpC41Bx7RzivXIj9RnZgdg%26_lgt_%3D74b4fca76"
                                                    target="_blank" class="image">
                                                    <img width="75" src="{{asset('images/'.$dt->img) }}" />
                                                </a>
                                                <a href="https://login.taobao.com/member/login.jhtml?redirectURL=https%3a%2f%2fitem.taobao.com:443/item.htm%2F_____tmd_____%2Fpage%2Flogin_jump%3Frand%3DS3WxGHAgAt756EpznwfNzJq2AFA2qBNla3j6EINUS8We9dazM_iKElp8DwVSHZUevpC41Bx7RzivXIj9RnZgdg%26_lgt_%3D74b4fca76"
                                                    class="title">{{$dt->tensp}}</a>
                                                <span class="property">{{$dt->chitietsp}}</span>
                                            </td>
                                            <td width="10%" class="center">Số lượng: {{$dt->soluong}}</td>
                                            <td width="15%" class="center">
                                                <span class="price-vnd price-red">{{$dt->gia}}đ</span><br />
                                                <span class="price-cny">¥ 20.00</span>
                                            </td>
                                            <td width="15%" class="center">
                                                <span class="thanh-tien-vnd price-red">{{$dt->thanhtien}}</span><br />
                                                <span class="thanh-tien-cny">¥ 40</span>
                                            </td>
                                            <td width="20%">
                                                <strong>Ghi chú của khách: </strong><br />
                                                <p>{{$dt->soluong}}</p>
                                                <strong>Ghi chú dành cho khách hàng</strong><br />
                                                <p style="color:red;font-weight:bold;"></p>
                                            </td>
                                            <td><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal" data-bs-toggle="modal">
                                                    Xem đơn hàng
                                                </button>


                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" class="center">Tổng tiền : <b
                                                    class="price-red">{{$dt->thanhtien}}đ</b></td>

                                        </tr>
                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">

                                                            <div class="order-item-product-right">
                                                                <ul>
                                                                    <li>Tổng tiền hàng: <b>{{$dt->thanhtien}}đ</b></li>
                                                                    <li>Phí đặt hàng: <b>9.000</b><sup>đ</sup></li>
                                                                    <li>Phí kiểm đếm: <b>0</b><sup>đ</sup></li>
                                                                    <li>Phí ship TQ: <b>0</b><sup>đ</sup></li>

                                                                    <li>Tổng tiền đơn hàng: <b>{{$dt->thanhtien}}đ</b>
                                                                    </li>
                                                                    @if($dt->thanhtien > $user->tien)
                                                                    <button>Tài khoản còn thiếu Vui lòng nạp thêm tiền</button>
                                                                    @else
                                                                    <a href="{{route('dathang',['id'=>$dt->id])}}"><button>Đăt hàng</button></a>
                                                                    @endif
                                                                    <li class="blue">Đặt cọc: <b>0đ</b></li>
                                                                    <li class="blue">Còn lại:
                                                                        <b>-{{$dt->thanhtien}}đ</b>
                                                                    </li>
                                                                </ul>

                                                                <div class="action block-both"><a
                                                                        href="/don-hang-view?order_id=1304370"
                                                                        title="Xem chi tiết" data-uk-tooltip=""
                                                                        class="xem-chi-tiet"><i class="fa fa-th-list"
                                                                            aria-hidden="true"></i> Xem chi tiết</a><a
                                                                        href="/gio-hang/edit?orderID=1304370"
                                                                        title="Sửa đơn hàng" data-uk-tooltip=""><i
                                                                            class="fa fa-pencil-square-o"
                                                                            aria-hidden="true"></i> </a><a
                                                                        title="Hủy đơn hàng" data-uk-tooltip=""
                                                                        class="huy-don"
                                                                        onclick="don_hang_huy_item(1304370);"
                                                                        href="javascript:void(0);"><i class="fa fa-ban"
                                                                            aria-hidden="true"></i> Hủy đơn</a><a
                                                                        href="/don-hang/export?order-id=1304370"
                                                                        data-uk-tooltip="" title="Xuất excel"><i
                                                                            class="fa fa-file-excel-o"
                                                                            aria-hidden="true"></i> Xuất excel</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                    </table>
                                </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/j-alert/jquery.min.js?s1699z">
    </script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/gritter/jquery.gritter.min.js?s1699z">
    </script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/html5Uploader/jquery.html5uploader.js?s1699z">
    </script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/uikit/js/uikit.min.js?s1699z">
    </script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/uikit/js/components/tooltip.min.js?s1699z">
    </script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/uikit/js/components/notify.min.js?s1699z">
    </script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/jquery.form.min.js?s1699z">
    </script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/jquery.validate.min.js?s1699z">
    </script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/additional-methods.min.js?s1699z">
    </script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/jquery.barrating.min.js?s1699z">
    </script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/chosen/chosen.jquery.min.js?s1699z">
    </script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/intro/intro.js?s1699z"></script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/thuongdo_js.js?s1699z"></script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/js_intro.js?s1699z"></script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_vidientu/js/thuongdo_vidientu.js?s1699z">
    </script>
    <!-- Start of widget script -->
    <script type="text/javascript">
    function loadJsAsync(t, n) {
        var a = document.createElement("script");
        a.type = "text/javascript", a.src = t, a.addEventListener("load", function(t) {
            n(null, t)
        }, !1), document.getElementsByTagName("body")[0].appendChild(a)
    }
    window.onload = (t => {
        loadJsAsync("https://api.chatbiz.io/js/CsChat.js", function() {
            loadCsChat(
                "https://realtime-v2.chatbiz.io/get-view-chat?domain=thuongdo_thuongdo&fullname=Võ Hoàng Tiến&phone=05836133789"
            )
        })
    });
    </script>
    <!-- End of widget script -->
    <a href="https://zalo.me/1457414119565439158" target="_blank" class="zalo-page">
        <img src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/images/zalo-logo.png" />
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
    <script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
    <script src="https://apis.google.com/js/platform.js" async defer>
    {
        lang: 'vi'
    }
    </script>
    <script>
    (function() {
        var ta = document.createElement('script');
        ta.type = 'text/javascript';
        ta.async = true;
        ta.src = 'https://analytics.tiktok.com/i18n/pixel/sdk.js?sdkid=BU7V8B5BQ1HOVJLHD0G0';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ta, s);
    })();
    </script>
    <script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-77517270-2', 'auto');
    ga('send', 'pageview');
    </script>

    <div id="fb-root"></div>
    <script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>

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
            <img height="1" width="1" style="border-style:none;" alt=""
                src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/882264878/?value=0&amp;guid=ON&amp;script=0" />
        </div>
    </noscript>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MZFRW9H" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/modules/contrib/jquery_update/replace/jquery/1.8/jquery.min.js?v=1.8.3">
    </script>
    <script type="text/javascript" src="https://www.thuongdo.com/misc/jquery-extend-3.4.0.js?v=1.8.3"></script>
    <script type="text/javascript" src="https://www.thuongdo.com/misc/jquery-html-prefilter-3.5.0-backport.js?v=1.8.3">
    </script>
    <script type="text/javascript" src="https://www.thuongdo.com/misc/jquery.once.js?v=1.2"></script>
    <script type="text/javascript" src="https://www.thuongdo.com/misc/drupal.js?s1699z"></script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/modules/contrib/jquery_update/replace/ui/ui/minified/jquery.ui.core.min.js?v=1.10.2">
    </script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/modules/contrib/jquery_update/replace/ui/ui/minified/jquery.ui.datepicker.min.js?v=1.10.2">
    </script>
    <script type="text/javascript" src="https://www.thuongdo.com/modules/locale/locale.datepicker.js?v=1.10.2"></script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/modules/contrib/date/date_popup/jquery.timeentry.pack.js?v=1.4.7">
    </script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/default/files/languages/vi_in2komZFFnsjt_72XE_KDM2awjJk45aiyeS5-nQPEpM.js?s1699z">
    </script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/libraries/jgrowl/jquery.jgrowl.min.js?s1699z"></script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/modules/contrib/nicemessages/js/nicemessages.js?s1699z"></script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/modules/contrib/date/date_popup/date_popup.js?s1699z"></script>
    <script type="text/javascript" src="https://www.thuongdo.com/misc/autocomplete.js?v=7.77"></script>
    <script type="text/javascript" src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/json2.js?s1699z">
    </script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/autoNumeric.js?s1699z"></script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/cycle2.js?s1699z"></script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/happy_new_year.js?s1699z"></script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/css3-animate-it.js?s1699z"></script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/owl.carousel.min.js?s1699z"></script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/giaodiennguoidung.js?s1699z"></script>
    <script type="text/javascript">
    <!--//
    -->
    <![CDATA[//><!--
jQuery.extend(Drupal.settings, {"basePath":"\/","pathPrefix":"","ajaxPageState":{"theme":"giaodiennguoidung","theme_token":"aG610o-Dpyg4IIz8x7jWjCjrVFkOSnT76k-ZQiMv3Vo","js":{"sites\/all\/modules\/developer\/thuongdo_export\/js\/j-alert\/jquery.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/gritter\/jquery.gritter.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/html5Uploader\/jquery.html5uploader.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/js\/uikit.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/js\/components\/tooltip.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/js\/components\/notify.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/jquery.form.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/jquery.validate.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/additional-methods.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/jquery.barrating.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/chosen\/chosen.jquery.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/intro\/intro.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/thuongdo_js.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/js_intro.js":1,"sites\/all\/modules\/developer\/thuongdo_vidientu\/js\/thuongdo_vidientu.js":1,"sites\/all\/modules\/contrib\/jquery_update\/replace\/jquery\/1.8\/jquery.min.js":1,"misc\/jquery-extend-3.4.0.js":1,"misc\/jquery-html-prefilter-3.5.0-backport.js":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"sites\/all\/modules\/contrib\/jquery_update\/replace\/ui\/ui\/minified\/jquery.ui.core.min.js":1,"sites\/all\/modules\/contrib\/jquery_update\/replace\/ui\/ui\/minified\/jquery.ui.datepicker.min.js":1,"modules\/locale\/locale.datepicker.js":1,"sites\/all\/modules\/contrib\/date\/date_popup\/jquery.timeentry.pack.js":1,"public:\/\/languages\/vi_in2komZFFnsjt_72XE_KDM2awjJk45aiyeS5-nQPEpM.js":1,"sites\/all\/libraries\/jgrowl\/jquery.jgrowl.min.js":1,"sites\/all\/modules\/contrib\/nicemessages\/js\/nicemessages.js":1,"sites\/all\/modules\/contrib\/date\/date_popup\/date_popup.js":1,"misc\/autocomplete.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/json2.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/autoNumeric.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/cycle2.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/happy_new_year.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/css3-animate-it.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/owl.carousel.min.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/giaodiennguoidung.js":1},"css":{"modules\/system\/system.base.css":1,"modules\/system\/system.menus.css":1,"modules\/system\/system.messages.css":1,"modules\/system\/system.theme.css":1,"misc\/ui\/jquery.ui.core.css":1,"misc\/ui\/jquery.ui.theme.css":1,"misc\/ui\/jquery.ui.datepicker.css":1,"sites\/all\/modules\/contrib\/date\/date_popup\/themes\/jquery.timeentry.css":1,"modules\/aggregator\/aggregator.css":1,"sites\/all\/modules\/contrib\/date\/date_api\/date.css":1,"sites\/all\/modules\/contrib\/date\/date_popup\/themes\/datepicker.1.7.css":1,"modules\/field\/theme\/field.css":1,"modules\/node\/node.css":1,"modules\/user\/user.css":1,"sites\/all\/modules\/contrib\/views\/css\/views.css":1,"sites\/all\/modules\/contrib\/ckeditor\/css\/ckeditor.css":1,"sites\/all\/modules\/contrib\/ctools\/css\/ctools.css":1,"sites\/all\/libraries\/jgrowl\/jquery.jgrowl.min.css":1,"sites\/all\/modules\/contrib\/nicemessages\/css\/nicemessages_positions.css":1,"sites\/all\/modules\/contrib\/nicemessages\/css\/nicemessages_drupal.css":1,"sites\/all\/modules\/contrib\/nicemessages\/css\/shadows.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/lobibox\/css\/lobibox.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/chosen\/chosen.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/intro\/introjs.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/css\/uikit.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/css\/components\/tooltip.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/css\/components\/notify.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/css\/components\/progress.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/css\/thuongdo_export.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/css\/fontawesome-stars.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/gritter\/css\/jquery.gritter.css":1,"sites\/all\/modules\/developer\/thuongdo_khieunai\/css\/thuongdo_khieunai.css":1,"sites\/all\/modules\/developer\/thuongdo_vidientu\/css\/thuongdo_vidientu.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/font-awesome.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/skins\/square\/blue.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/animations.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/owl.carousel.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/owl.theme.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/owl.transitions.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/style.css":1}},"jquery":{"ui":{"datepicker":{"isRTL":false,"firstDay":"1"}}},"datePopup":{"edit-month-to-datepicker-popup-0":{"func":"datepicker","settings":{"changeMonth":true,"changeYear":true,"autoPopUp":"focus","closeAtTop":false,"speed":"immediate","firstDay":1,"dateFormat":"dd\/mm\/yy","yearRange":"-3:+3","fromTo":false,"defaultDate":"0y"}},"edit-month-end-datepicker-popup-0":{"func":"datepicker","settings":{"changeMonth":true,"changeYear":true,"autoPopUp":"focus","closeAtTop":false,"speed":"immediate","firstDay":1,"dateFormat":"dd\/mm\/yy","yearRange":"-3:+3","fromTo":false,"defaultDate":"0y"}}},"urlIsAjaxTrusted":{"\/don-hang":true},"nicemessages":{"position":"center","items":[{"type":"status","content":"\u003Cfont color=\u0022white\u0022\u003E\u003Ccenter\u003E\u003Cb\u003E\u0110\u01a0N H\u00c0NG \u0110\u01af\u1ee2C G\u1eecI \u0110I\u003C\/b\u003E\u003Cbr\u003EVui l\u00f2ng thanh to\u00e1n ti\u1ec1n h\u00e0ng \u0111\u1ec3 ch\u00fang t\u00f4i c\u00f3 th\u1ec3 \u0111\u1eb7t h\u00e0ng cho b\u1ea1n s\u1edbm nh\u1ea5t.\u003Cbr\u003E Xin c\u1ea3m \u01a1n!\u003Cbr\u003E\u003C\/font\u003E\u003Cb\u003E\u003Ca href=\u0022https:\/\/thuongdo.com\/don-hang\u0022\u003E\u0110\u01a0N H\u00c0NG\u003C\/a\u003E | \u003Ca href=\u0022https:\/\/thuongdo.com\/huong-dan-dat-coc\u0022\u003ETHANH TO\u00c1N\u003C\/a\u003E\u003C\/b\u003E\u003Cbr\u003E\u003Cfont color=#ff0\u003E\u003Cb\u003EHOTLINE: 1900 6825\u003C\/b\u003E\u003Cbr\u003E (Lu\u00f4n s\u1eb5n s\u00e0ng h\u1ed7 tr\u1ee3)\u003C\/font\u003E\u003C\/center\u003E","life":6000,"glue":"after","speed":"normal"}]}});
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
                        Công cụ đặt hàng của <b>thuongdo.com</b> hiện tại chỉ hỗ trợ trình duyệt Chrome, Firefox. Bạn có
                        thể download hai trình duyệt này bằng link dưới đây:
                        <ul>
                            <li><a
                                    href="https://chrome.google.com/webstore/detail/c%C3%B4ng-c%E1%BB%A5-%C4%91%E1%BA%B7t-h%C3%A0ng-th%C6%B0%C6%A1ng-%C4%91/fcicepgmmbpfkknccafappindadbgcpg">Link
                                    tải Chrome</a></li>
                            <li><a
                                    href="https://addons.mozilla.org/firefox/downloads/file/931827/thuong_o_logistics-3.0-an+fx.xpi">Link
                                    tải Firefox</a></li>
                        </ul>
                        Hoặc bạn có thể đặt hàng bằng biểu mẫu, hoặc đặt hàng bằng links liên kết. Chat ngay nếu bạn cần
                        hỗ trợ
                    </div>
                    <div class="td-support">
                        <div class="uk-grid uk-grid-collapse">
                            <div class="uk-width-1-1 uk-width-medium-1-2">
                                <a href="#" class="uk-button uk-button-primary"
                                    style="display: block; margin-right: 1px; font-weight: bold"><i
                                        class="fa fa-phone"></i> 19006825</a>
                            </div>
                            <div class="uk-width-1-1 uk-width-medium-1-2">
                                <a href="#" class="uk-button uk-button-primary"
                                    style="display: block; font-weight: bold"><i class="fa fa-envelope-o"></i>
                                    chamsoc@thuongdo.com</a>
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

<style>
.order-item-product-right ul{
    width: 500px;
    padding: 20px;
}
.order-item-product-right ul button{
    border:none;
    background-color:red;
    color:white
}
</style>
