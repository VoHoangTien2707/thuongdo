<?php
use App\Models\User;

$user = session('user');
$iduser = $user->id;
$user = User::find($iduser);

// Kiểm tra xem có dữ liệu người dùng được trả về hay không
if ($user) {
    // Bạn có thể truy cập các thuộc tính của người dùng như tên, email, v.v.
    $phone = $user->phone;
    $email = $user->email;
    $img = $user->img;
    $tien = $user->tien;
    // ...
} else {
    // Xử lý khi không tìm thấy người dùng
}
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
  <title>Trang tổng hợp | THƯƠNG ĐÔ LOGISTICS</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="https://www.thuongdo.com/sites/default/files/48icon.ico" type="image/vnd.microsoft.icon" />
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<meta name="revisit-after" content="1 ngày" />
<meta property="fb:app_id" content="1883942085176180" />
<meta name="robots" content="noodp,index, follow" />
<meta http-equiv="content-language" content="vi" />
<meta name="googlebot" content="all, index, follow" />
<meta name="msnbot" content="index, follow" />
<meta property="og:type" content="website" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<meta property="article:author" content="https://www.facebook.com/thuongdogroup?fref=ts" />
<meta property="og:url" content="https://www.thuongdo.com" />
<meta name="original-source" content="https://www.thuongdo.com" />
		<script type="text/javascript">var uid_in_page = 252138;</script>
		<script src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/socket.io.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed&display=swap" rel="preload stylesheet" as="style" crossorigin="anonymous"/>
    <link rel="chrome-webstore-item" href="https://chrome.google.com/webstore/detail/fcicepgmmbpfkknccafappindadbgcpg" />
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="preload stylesheet" as="style" crossorigin="anonymous"/>
    <style type="text/css" media="all">
@import url("https://www.thuongdo.com/modules/system/system.base.css?s0yxf0");
@import url("https://www.thuongdo.com/modules/system/system.menus.css?s0yxf0");
@import url("https://www.thuongdo.com/modules/system/system.messages.css?s0yxf0");
@import url("https://www.thuongdo.com/modules/system/system.theme.css?s0yxf0");
</style>
<style type="text/css" media="all">
@import url("https://www.thuongdo.com/modules/aggregator/aggregator.css?s0yxf0");
@import url("https://www.thuongdo.com/sites/all/modules/contrib/date/date_api/date.css?s0yxf0");
@import url("https://www.thuongdo.com/sites/all/modules/contrib/date/date_popup/themes/datepicker.1.7.css?s0yxf0");
@import url("https://www.thuongdo.com/modules/field/theme/field.css?s0yxf0");
@import url("https://www.thuongdo.com/modules/node/node.css?s0yxf0");
@import url("https://www.thuongdo.com/modules/user/user.css?s0yxf0");
@import url("https://www.thuongdo.com/sites/all/modules/contrib/views/css/views.css?s0yxf0");
@import url("https://www.thuongdo.com/sites/all/modules/contrib/ckeditor/css/ckeditor.css?s0yxf0");
</style>
<style type="text/css" media="all">
@import url("https://www.thuongdo.com/sites/all/modules/contrib/ctools/css/ctools.css?s0yxf0");
@import url("https://www.thuongdo.com/sites/all/libraries/jgrowl/jquery.jgrowl.min.css?s0yxf0");
@import url("https://www.thuongdo.com/sites/all/modules/contrib/nicemessages/css/nicemessages_positions.css?s0yxf0");
@import url("https://www.thuongdo.com/sites/all/modules/contrib/nicemessages/css/nicemessages_drupal.css?s0yxf0");
@import url("https://www.thuongdo.com/sites/all/modules/contrib/nicemessages/css/shadows.css?s0yxf0");
@import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/lobibox/css/lobibox.min.css?s0yxf0");
@import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/chosen/chosen.min.css?s0yxf0");
@import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/uikit/css/uikit.min.css?s0yxf0");
@import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/uikit/css/components/tooltip.min.css?s0yxf0");
@import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/uikit/css/components/notify.min.css?s0yxf0");
@import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/uikit/css/components/progress.min.css?s0yxf0");
@import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/css/thuongdo_export.css?s0yxf0");
@import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/css/fontawesome-stars.css?s0yxf0");
@import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/gritter/css/jquery.gritter.css?s0yxf0");
@import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_khieunai/css/thuongdo_khieunai.css?s0yxf0");
@import url("https://www.thuongdo.com/sites/all/modules/developer/thuongdo_vidientu/css/thuongdo_vidientu.css?s0yxf0");
</style>
<style type="text/css" media="all">
@import url("https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/css/font-awesome.css?s0yxf0");
@import url("https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/css/skins/square/blue.css?s0yxf0");
@import url("https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/css/animations.css?s0yxf0");
@import url("https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/css/owl.carousel.css?s0yxf0");
@import url("https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/css/owl.theme.css?s0yxf0");
@import url("https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/css/owl.transitions.css?s0yxf0");
@import url("https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/css/style.css?s0yxf0");
</style>
        <!-- Facebook Pixel Code -->

	<meta name="cystack-verification" content="fac5075a8c00ceba1a55b9e74581f857" />
    <meta name="google-site-verification" content="K4NCbe6B5br-qb8UrhHd7ef7aSBsQCIcbLJnCrEg97I" />
</head>
<body class="html not-front logged-in no-sidebars page-dashboard dashboard-page " >
  <div class="olay-css" style="display: none;"></div>
    <header class="dashboard-header block-clear block-both">
	    <div class="logo"><a href="https://www.thuongdo.com" class="shiner" rel="nofollow"><img src="https://www.thuongdo.com/sites/default/files/quangcao/logo_3.png" alt= "Nhập hàng Trung Quốc - THƯƠNG ĐÔ LOGISTICS" title = "Nhập hàng Trung Quốc - THƯƠNG ĐÔ LOGISTICS" /></a></div>
<div class="header-dashboard-right">
	<div class="new-block">
		<span class="icon"></span>
			</div>
	<div class="dashboard-info">
		<div class="so-du item">
			Số dư: <b>{{$tien}}đ</b>
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
                <a href="/gop-y" data-uk-tooltip="" title="Góp ý"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>            </li>
            <li class="thong-tin notify item cart-inner">
                                <a href="javascript:void(0);" class="top name" data-total="0" data-intro="Xin chào <b>Vo Hoang Tien (FPL HCM_K17)</b>, Hôm nay bạn có <b>0</b> thông báo mới" data-position="bottom" >
    				<i class="fa fa-bell-o" aria-hidden="true"></i>
                    <sup>0</sup>
    			</a>
                                    <div class="panel-notify">
                        <div class="panel-arrow">
                            <div class="notify-header">Thông báo mới</div>
                            <div class="notify-body">
                                <ul class="notify-sidebar">
                                    <li class="first">
                                        <a data-title="Thông báo mới" href="#td-thongbao" title="Thông báo mới" class="tb-thongbao">
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                							<span class="uk-badge uk-badge-danger uk-badge-notification uk-badge-abs">0</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-title="Tài chính" href="#td-taichinh" title="Tài chính" class="tb-taichinh">
                                            <i class="fa fa-usd" aria-hidden="true"></i>
                							<span class="uk-badge uk-badge-danger uk-badge-notification uk-badge-abs">0</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-title="Kiện hàng" href="#td-kienhang" title="Kiện hàng" class="tb-kienhang">
                                            <i class="fa fa-hdd-o" aria-hidden="true"></i>
                							<span class="uk-badge uk-badge-danger uk-badge-notification uk-badge-abs">0</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-title="Khiếu nại" href="#td-yeucau" title="Khiếu nại" class="tb-khieunai">
                                            <i class="fa fa-frown-o" aria-hidden="true"></i>
                							<span class="uk-badge uk-badge-danger uk-badge-notification uk-badge-abs">0</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-title="Ưu đãi" href="#td-uu-dai" title="Ưu đãi" class="tb-uu-dai">
                                            <i class="fa fa-gift" aria-hidden="true"></i>
                                            <span class="uk-badge uk-badge-danger uk-badge-notification uk-badge-abs">0</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-title="Góp ý" href="#td-gop-y" class="tb-gopy">
                                            <i class="fa fa-commenting" aria-hidden="true"></i>
                                            <span class="uk-badge uk-badge-danger uk-badge-notification uk-badge-abs">0</span>
                                        </a>
                                    </li>
                                </ul>
                                    <div class="notify-content">
                                    	<div id="td-thongbao" class="td-notify">
                                    		<ul class="tb-not-hover"><li class=""><a href="/mo-lai-dich-vu-dat-hang-tren-pinduoduo-tu-ngay-06092023">[Thông báo] Mở lại dịch vụ đặt hàng trên Pinduoduo từ ngày 06/09/2023</a></li><li class=""><a href="/lich-nghi-le-quoc-khanh-02092023">[Thông báo] Lịch nghỉ lễ Quốc Khánh 02/09/2023</a></li><li class=""><a href="/mo-lai-dich-vu-kiem-dem-va-dong-go-hang-hoa-tu-ngay-19082023">[Thông báo] Mở lại dịch vụ kiểm đếm và đóng gỗ hàng hóa từ ngày 19/08/2023</a></li><li class=""><a href="/thay-doi-cu-phap-nap-tien-vao-tai-khoan-giao-dich-tai-thuong-do">[Thông báo] Thay đổi cú pháp nạp tiền vào tài khoản giao dịch tại Thương Đô</a></li><li class="last"><a href="/thay-doi-thong-tin-tai-khoan-giao-dich-tai-thuong-do-tu-ngay-03072023">[Thông báo] Thay đổi thông tin tài khoản giao dịch tại Thương Đô từ ngày 03/07/2023</a></li></ul>                                    	</div>
                                    	<div id="td-taichinh" class="td-notify" style="display:none">
                                    		<ul class="tb-not-hover"><li><div class="uk-alert uk-alert-danger">Chưa có dữ liệu tài chính !</div></li></ul>                                    	</div>
                                    	<div id="td-kienhang" class="td-notify" style="display:none">
                                    		<ul class="tb-not-hover"><li><div class="uk-alert uk-alert-danger">Chưa có thông báo mới về kiện hàng !</div></li></ul>                                    	</div>
                                        <div id="td-uu-dai" class="td-notify" style="display: none;">
                                                                                            <ul class="uu-dai-item"><li><div class="uk-alert uk-alert-danger">Chưa có ưu đãi mới nào !</div></li></ul>                                                                                    </div>
                                    	<div id="td-yeucau" class="td-notify" style="display:none">
                                    		<ul class="tb-not-hover"><li><div class="uk-alert uk-alert-danger">Chưa có thông báo mới nào !</div></li></ul>                                    	</div>
                                        <div class="td-notify" style="display:none" id="td-gop-y">
                                                                                            <ul class="tb-not-hover"><li class="uk-alert uk-alert-danger">Chưa có góp ý mới nào !</li></ul>                                                                                    </div>
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
                            <a href="/thong-tin-ca-nhan"><span><img width="30" height="30" src="/sites/default/files/pictures/no-avatar.jpg" /></span>
                                           <b></b>
                                           <strong class="kcode">Mã KH: </strong></a>
						</p>
						<p class="children">
							<a href="/don-hang/kien-hang"><b class="fa fa-th"></b> Kiện hàng</a>                            <a href="/don-hang/gop-y"><b class="fa fa-commenting"></b> Góp ý</a>							<a href="/thanh-vien/mat-khau"><b class="fa fa-unlock-alt"></b> Thay đổi mật khẩu</a>							<a href="/user/logout"><b class="fa fa-sign-out"></b> Thoát</a>						</p>
					</div>
				</div>
            </li>
        </ul>
	</div>
</div></header>
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
                <li><a href="{{ url('/chitiettin/21') }}">Hướng dẫn nạp tiền</a></li>
                <li><a href="{{ url('/lichsugiaodich') }}">Lịch sử giao dịch</a></li>
                <li><a href="{{ url('/ruttien') }}">Rút tiền</a></li>
            </ul>
		</li>
		<li class="parent">
			<a href="javascript:void(0);" class="item-5 one">
				<span class="dashboard-icon"></span>
                <strong>Khiếu nại</strong>
			</a>
            <ul>
                <li><a href="{{ url('/tatcakhieunai') }}">Tất cả khiếu nại</a></li>
                <li><a href="/">Hàng mất thông tin</a></li>
            </ul>
		</li>
		<li class="parent">
			<a href="javascript:void(0);" class="item-6 one">
				<span class="dashboard-icon"></span>
                <strong>Nhà cung cấp</strong>
			</a>
            <ul>
                <li><a href="{{ url('/nhacungcap') }}">Tất cả nhà cung cấp</a></li>
                <li><a href="{{ url('/addncc') }}">Thêm mới nhà cung cấp</a></li>
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
@yield('noidung1');
    <div class="right-dashboard-bar block-clear"><span class="info-header-nabar">
    <span class="avatar">
        <form id="upload-avatar" method="post" enctype="multipart/form-data">
            <input type="file" id="myfile" class="btn-hd-upload" name="uploadFileAvatar"/>
        </form>
        <img width="100" height="100" src="{{ asset('images/' . $img) }}" />
        <em>Thay đổi<br/> avatar</em>
    </span>
</span>
<h4></h4>
<a href="/lich-su-giao-dich">
    <span class="process-level block-both"><i class="yellow">0</i> / <i>0</i></span>
</a>
<div class="level block-both">
    <a href="/don-hang/thong-tin-cap-do">
            </a>
</div>
<p>
	<span>Email</span> <br/>
	<a href="">{{$email}}</a>
</p>
<p>
	<span>Điện thoại</span> <br/>
	<a href="">{{$phone}}</a>
</p>
<p>
	<span>Địa chỉ</span> <br/>
	</p>
<p class="info-edit">
	<a href="{{route('profile',$iduser)}}" class="edit">Chỉnh sửa thông tin</a>
</p>
<div class="lich-lam-viec">
	<span class="dashboard-icon"></span>
	<b>8h00 - 17h30 hằng ngày</b>
</div></div>
</div>

              <a href="https://zalo.me/1457414119565439158" target="_blank" class="zalo-page">
    <img src="/sites/all/themes/giaodiennguoidung/images/zalo-logo.png"/>
  </a>


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
