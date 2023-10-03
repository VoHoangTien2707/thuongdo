<?php

use App\Models\User;

$chobaogia = 'Chờ xử lý';
$count1 = DB::table('tbl_kygui')->where('trangthai', $chobaogia)->count();
$chodatcoc = 'Đang xử lý';
$count2 = DB::table('tbl_kygui')->where('trangthai', $chodatcoc)->count();
$dadatcoc = 'Đã hoàn thành';
$count3 = DB::table('tbl_kygui')->where('trangthai', $dadatcoc)->count();



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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="vi" version="XHTML+RDFa 1.0" dir="ltr"
    xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:dc="http://purl.org/dc/terms/"
    xmlns:foaf="http://xmlns.com/foaf/0.1/" xmlns:og="http://ogp.me/ns#"
    xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#" xmlns:sioc="http://rdfs.org/sioc/ns#"
    xmlns:sioct="http://rdfs.org/sioc/types#" xmlns:skos="http://www.w3.org/2004/02/skos/core#"
    xmlns:xsd="http://www.w3.org/2001/XMLSchema#">

<head profile="http://www.w3.org/1999/xhtml/vocab">
    <title>Đơn hàng ký gửi | THƯƠNG ĐÔ LOGISTICS</title>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed&display=swap" rel="preload stylesheet"
        as="style" crossorigin="anonymous" />
    <link rel="chrome-webstore-item"
        href="https://chrome.google.com/webstore/detail/fcicepgmmbpfkknccafappindadbgcpg" />
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="preload stylesheet" as="style"
        crossorigin="anonymous" />
    <style type="text/css" media="all">
    @import url("https://www.thuongdo.com/modules/system/system.base.css?s18gps");
    @import url("https://www.thuongdo.com/modules/system/system.menus.css?s18gps");
    @import url("https://www.thuongdo.com/modules/system/system.messages.css?s18gps");
    @import url("https://www.thuongdo.com/modules/system/system.theme.css?s18gps");
    </style>
    <style type="text/css" media="all">
    @import url("https://www.thuongdo.com/sites/all/modules/contrib/jquery_update/replace/ui/themes/base/minified/jquery.ui.core.min.css?s18gps");
    @import url("https://www.thuongdo.com/sites/all/modules/contrib/jquery_update/replace/ui/themes/base/minified/jquery.ui.theme.min.css?s18gps");
    @import url("https://www.thuongdo.com/sites/all/modules/contrib/jquery_update/replace/ui/themes/base/minified/jquery.ui.datepicker.min.css?s18gps");
    @import url("https://www.thuongdo.com/sites/all/modules/contrib/date/date_popup/themes/jquery.timeentry.css?s18gps");
    </style>
    <style type="text/css" media="all">
    @import url("https://www.thuongdo.com/modules/aggregator/aggregator.css?s18gps");
    @import url("https://www.thuongdo.com/sites/all/modules/contrib/date/date_api/date.css?s18gps");
    @import url("https://www.thuongdo.com/sites/all/modules/contrib/date/date_popup/themes/datepicker.1.7.css?s18gps");
    @import url("https://www.thuongdo.com/modules/field/theme/field.css?s18gps");
    @import url("https://www.thuongdo.com/modules/node/node.css?s18gps");
    @import url("https://www.thuongdo.com/modules/user/user.css?s18gps");
    @import url("https://www.thuongdo.com/sites/all/modules/contrib/views/css/views.css?s18gps");
    @import url("https://www.thuongdo.com/sites/all/modules/contrib/ckeditor/css/ckeditor.css?s18gps");
    </style>
    <style type="text/css" media="all">
    @import url("https://www.thuongdo.com/sites/all/modules/contrib/ctools/css/ctools.css?s18gps");
    @import url("https://www.thuongdo.com/sites/all/libraries/jgrowl/jquery.jgrowl.min.css?s18gps");
    @import url("https://www.thuongdo.com/sites/all/modules/contrib/nicemessages/css/nicemessages_positions.css?s18gps");
    @import url("https://www.thuongdo.com/sites/all/modules/contrib/nicemessages/css/nicemessages_drupal.css?s18gps");
    @import url("https://www.thuongdo.com/sites/all/modules/contrib/nicemessages/css/shadows.css?s18gps");
    @import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/lobibox/css/lobibox.min.css?s18gps");
    @import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/chosen/chosen.min.css?s18gps");
    @import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/intro/introjs.css?s18gps");
    @import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/uikit/css/uikit.min.css?s18gps");
    @import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/uikit/css/components/tooltip.min.css?s18gps");
    @import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/uikit/css/components/notify.min.css?s18gps");
    @import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/uikit/css/components/progress.min.css?s18gps");
    @import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/css/thuongdo_export.css?s18gps");
    @import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/css/fontawesome-stars.css?s18gps");
    @import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/gritter/css/jquery.gritter.css?s18gps");
    @import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_khieunai/css/thuongdo_khieunai.css?s18gps");
    @import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_vidientu/css/thuongdo_vidientu.css?s18gps");
    </style>
    <style type="text/css" media="all">
    @import url("https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/css/font-awesome.css?s18gps");
    @import url("https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/css/skins/square/blue.css?s18gps");
    @import url("https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/css/animations.css?s18gps");
    @import url("https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/css/owl.carousel.css?s18gps");
    @import url("https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/css/owl.theme.css?s18gps");
    @import url("https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/css/owl.transitions.css?s18gps");
    @import url("https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/css/style.css?s18gps");
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

<body class="html not-front logged-in no-sidebars page-don-hang page-don-hang-ky-gui dashboard-page page-no-right">
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
                        <a href="" class="top"><img src="/sites/default/files/pictures/no-avatar.jpg" /></a>
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                        <div class="logout-inner">
                            <i class="fa fa-caret-up" aria-hidden="true"></i>
                            <div class="content">
                                <p class="no-border">
                                    <a href="/thong-tin-ca-nhan"><span><img width="30" height="30"
                                                src="/sites/default/files/pictures/no-avatar.jpg" /></span>
                                        <b>Võ Hoàng Tiến</b>
                                        <strong class="kcode">Mã KH: </strong></a>
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
                            <li><a href="{{ url('/tatcadonhang') }}">Tất cả đơn hàng</a></li>
                            <li><a href="{{ url('/tatcadonkh') }}" class="active">Tất cả đơn ký gửi</a></li>
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
                        <form class="tim-kiem-add-form" target="_blank" action="/don-hang/ky-gui" method="post"
                            id="baiviet-tim-kiem-add-form" accept-charset="UTF-8">
                            <div>
                                <div class="search-text">
                                    <span>
                                        <img data-id="2" class="active-seleted"
                                            src="/sites/all/themes/giaodiennguoidung/images/search/taobao.png" />
                                        <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </span>
                                    <ul class="search-hover" style="display:none;">
                                        <li data-id="2">
                                            <img src="/sites/all/themes/giaodiennguoidung/images/search/taobao.png" />
                                            <i class="fa fa-caret-right"></i>
                                        </li>
                                        <li data-id="6">
                                            <img
                                                src="/sites/all/themes/giaodiennguoidung/images/search/shiji1688.png" />
                                        </li>
                                        <li data-id="1">
                                            <img src="/sites/all/themes/giaodiennguoidung/images/search/1688.png" />
                                        </li>
                                        <li data-id="3">
                                            <img src="/sites/all/themes/giaodiennguoidung/images/search/tmall.png" />
                                        </li>
                                        <li data-id="4">
                                            <img src="/sites/all/themes/giaodiennguoidung/images/search/baidu.png" />
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
                                    value="form-XtR-ovzoqI7J7yu73gHbfHEPEdEHLfzoBh-T_Co6hx8" />
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
                    </ul>
                </div>
                <div class="don-hang-detail-inner don-hang-ky-gui-table-list">
                    <div class="menu-don-hang">
                        <ul class="step-action">
                            <li><a href="{{ url('/tatcadonkh') }}">Chờ xử lý<span class="uk-badge uk-badge-notification "
                                        style="margin-left: 5px"> {{$count1}}</span></a></li>
                            <li><a href="{{ url('/dangxulykh') }}">Đang xử lý<span class="uk-badge uk-badge-notification "
                                        style="margin-left: 5px"> {{$count2}}</span></a></li>
                            <li><a href="{{ url('/dahoanthanhkh') }}">Đã hoàn thành<span class="uk-badge uk-badge-notification "
                                        style="margin-left: 5px"> {{$count3}}</span></a></li>
                        </ul>
                    </div>
                    <form class="don-hang-search-form" action="{{ url('/searchkh') }}" method="post"
                        id="don-hang-ky-gui-search-form" accept-charset="UTF-8">
                        @csrf
                        <div>
                            <div class="form-item form-type-select form-item-status">
                                <select id="edit-status" name="trangthai" class="form-select">
                                    <option value="Chờ xử lý">Chờ xử lý</option>
                                    <option value="Đang xử lý">Đang xử lý</option>
                                    <option value="Đã hoàn thành">Đã hoàn thành</option>
                                </select>
                            </div>
                            <div class="form-item form-type-select form-item-kho">
                                <select id="edit-kho" name="khonhanhang" class="form-select">
                                    <option value="Hà Nội">Hà Nội</option>
                                    <option value="Hải Phòng">Hải Phòng</option>
                                    <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                                    <option value="Quảng Châu">Quảng Châu</option>
                                </select>
                            </div>
                            <div class="form-item form-type-textfield form-item-order-code">
                                <input placeholder="Mã đơn hàng" type="text" id="edit-order-code" name="madon"
                                    value="" size="60" maxlength="128" class="form-text" />
                            </div>
                            <div class="container-inline-date">
                                <div class="form-item form-type-date-popup form-item-month-to">
                                    <div id="edit-month-to" class="date-padding">
                                        <div class="form-item form-type-textfield form-item-month-to-date">
                                            <label for="edit-month-to-datepicker-popup-0">Date </label>
                                            <input placeholder="Từ ngày" type="text"
                                                id="myID" name="month_to[date]" value=""
                                                size="20" maxlength="30" class="form-text" />
                                            <div class="description"> E.g., 21/09/2023</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-inline-date">
                                <div class="form-item form-type-date-popup form-item-month-end">
                                    <div id="edit-month-end" class="date-padding">
                                        <div class="form-item form-type-textfield form-item-month-end-date">
                                            <label for="edit-month-end-datepicker-popup-0">Date </label>
                                            <input placeholder="Đến ngày" type="text"
                                                id="myID" name="month_end[date]" value=""
                                                size="20" maxlength="30" class="form-text" />
                                            <div class="description"> E.g., 21/09/2023</div>
                                        </div>
                                    </div>
                                </div>
                            </div><input type="submit" id="edit-submit" name="op" value="Tìm kiếm"
                                class="form-submit" />

                        </div>
                    </form>
                    <table class="don-hang-cua-ban-item don-hang-ky-gui-table-list sticky-enabled">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Mã đơn hàng</th>
                                <th>Ngày gửi</th>
                                <th>Kho nhận hàng</th>
                                <th>Số kiện</th>
                                <th>Trạng thái</th>
                                <th>Tác vụ</th>
                            </tr>
                        </thead>
                        <tbody>
@foreach($data as $dt)
                            <tr class="odd">
                                <td>1</td>
                                <td><a href="/don-hang/ky-gui/detail?id=233644">{{$dt->madon}}
                                    </a></td>
                                <td>{{$dt->created_at}}</td>
                                <td><span class="label-bs label-bs-success" style="background:#5cb85c">{{$dt->chieugui}}</span>
                                </td>
                                <td>{{$dt->sokh}}</td>
                                <td><span class="status red">{{$dt->trangthai}}</span></td>
                                <td>
                                    <div class="action"><a href="{{route('kienhang.edit',['id'=>$dt->id])}}"><i
                                                class="fa fa-th-list" aria-hidden="true"></i></a></div>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/j-alert/jquery.min.js?s18gps">
    </script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/gritter/jquery.gritter.min.js?s18gps">
    </script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/html5Uploader/jquery.html5uploader.js?s18gps">
    </script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/uikit/js/uikit.min.js?s18gps">
    </script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/uikit/js/components/tooltip.min.js?s18gps">
    </script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/uikit/js/components/notify.min.js?s18gps">
    </script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/jquery.form.min.js?s18gps">
    </script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/jquery.validate.min.js?s18gps">
    </script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/additional-methods.min.js?s18gps">
    </script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/jquery.barrating.min.js?s18gps">
    </script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/chosen/chosen.jquery.min.js?s18gps">
    </script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/intro/intro.js?s18gps"></script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/thuongdo_js.js?s18gps"></script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/js_intro.js?s18gps"></script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_vidientu/js/thuongdo_vidientu.js?s18gps">
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
        <img src="/sites/all/themes/giaodiennguoidung/images/zalo-logo.png" />
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
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

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
    <script type="text/javascript" src="https://www.thuongdo.com/misc/drupal.js?s18gps"></script>
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
        src="https://www.thuongdo.com/sites/default/files/languages/vi_in2komZFFnsjt_72XE_KDM2awjJk45aiyeS5-nQPEpM.js?s18gps">
    </script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/libraries/jgrowl/jquery.jgrowl.min.js?s18gps"></script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/modules/contrib/nicemessages/js/nicemessages.js?s18gps"></script>
    <script type="text/javascript" src="https://www.thuongdo.com/misc/tableheader.js?s18gps"></script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/modules/contrib/date/date_popup/date_popup.js?s18gps"></script>
    <script type="text/javascript" src="https://www.thuongdo.com/misc/autocomplete.js?v=7.77"></script>
    <script type="text/javascript" src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/json2.js?s18gps">
    </script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/autoNumeric.js?s18gps"></script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/cycle2.js?s18gps"></script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/happy_new_year.js?s18gps"></script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/css3-animate-it.js?s18gps"></script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/owl.carousel.min.js?s18gps"></script>
        <script>

flatpickr("#myID", {});

</script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/giaodiennguoidung.js?s18gps"></script>
    <script type="text/javascript">
    <!--//
    -->


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
