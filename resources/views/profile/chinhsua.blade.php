@extends('profile.layoutprofile')
@section('noidung1')
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
  <title>Thông tin cá nhân | THƯƠNG ĐÔ LOGISTICS</title>
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
@import url("https://www.thuongdo.com/sites/all/modules/contrib/jquery_update/replace/ui/themes/base/minified/jquery.ui.core.min.css?s0yxf0");
@import url("https://www.thuongdo.com/sites/all/modules/contrib/jquery_update/replace/ui/themes/base/minified/jquery.ui.theme.min.css?s0yxf0");
@import url("https://www.thuongdo.com/sites/all/modules/contrib/jquery_update/replace/ui/themes/base/minified/jquery.ui.datepicker.min.css?s0yxf0");
@import url("https://www.thuongdo.com/sites/all/modules/contrib/date/date_popup/themes/jquery.timeentry.css?s0yxf0");
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
<div class="addon-install block-clear block-both">
	<a href="https://chrome.google.com/webstore/detail/th%C6%B0%C6%A1ng-%C4%91%C3%B4-logistics-c%C3%B4ng/hdjjpocjionoehcnlohaefadonpidelg?hl=vi&authuser=3" target="_blank">
		<b>Cài đặt</b><br/>
		Công cụ đặt hàng
	</a>
	<span class="dashboard-icon"></span>
	<div class="hotline">
		<span>Hotline</span><br/>
		<a href="">1900 6825</a>
	</div>
	<a href="https://chrome.google.com/webstore/detail/th%C6%B0%C6%A1ng-%C4%91%C3%B4-logistics-c%C3%B4ng/hdjjpocjionoehcnlohaefadonpidelg?hl=vi&authuser=3" target="_blank" class="install-now">Cài đặt ngay</a>
</div>    </div>
<div class="content-dashboard">
        <div class="content-dashboard-top block-both">
            <div class="content-dashboard-top-inner">
                <div class="hotline">
					<div class="inner">
						<span class="text">Hotline</span><br/>
						<b>1900 6825</b>
					</div>
					<span class="dashboard-icon"></span>
				</div>
                <div class="tim-kiem-search-form">
                    <form class="tim-kiem-add-form" target="_blank" action="/thong-tin-ca-nhan" method="post" id="baiviet-tim-kiem-add-form" accept-charset="UTF-8"><div><div class="search-text">
                       <span>
                        <img data-id="2" class="active-seleted" src="/sites/all/themes/giaodiennguoidung/images/search/taobao.png" />
                        <i class="fa fa-caret-down" aria-hidden="true"></i>
                       </span>
                       <ul class="search-hover" style="display:none;">
                        <li data-id="2">
                            <img src="/sites/all/themes/giaodiennguoidung/images/search/taobao.png" />
		                    <i class="fa fa-caret-right"></i>
                        </li>
		                <li data-id="6">
                            <img src="/sites/all/themes/giaodiennguoidung/images/search/shiji1688.png" />
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
                       </ul><div class="form-item form-type-select form-item-category">
 <select id="edit-category" name="category" class="form-select"><option value="1">1688</option><option value="6">1688shili</option><option value="5">Taobao CN</option><option value="2" selected="selected">Taobao QT</option><option value="3">Tmall</option><option value="4">Baidu</option></select>
</div>
<div class="form-item form-type-textfield form-item-keyword">
 <input placeholder="Chào Vo Hoang Tien (FPL HCM_K17), chiều nay bạn muốn tìm gì: nhập link, từ khóa..." type="text" id="edit-keyword" name="keyword" value="" size="60" maxlength="128" class="form-text form-autocomplete" /><input type="hidden" id="edit-keyword-autocomplete" value="https://www.thuongdo.com/index.php?q=tim-kiem/autocomplete" disabled="disabled" class="autocomplete" />
</div>
</div><input type="submit" id="edit-submit--2" name="op" value="Tìm kiếm" class="form-submit" /><input type="hidden" name="form_build_id" value="form-87nK1HaJ4eAlAJn14SY2XhSIoIz0RbVWl1vh7GZ9EaM" />
<input type="hidden" name="form_token" value="k9FNHv1AvrVA28DHsbBo9JckcQD-jnt56w-AteZ288c" />
<input type="hidden" name="form_id" value="baiviet_tim_kiem_add_form" />
</div></form>                    <b>(Nếu bạn chưa tìm thấy sản phẩm mong muốn vui lòng <a href="https://www.messenger.com/t/thuongdo.vn" target="_bank" rel="nofollow">Click vào đây</a> gửi yêu cầu từ khóa)</b>
                </div>
                <div class="ti-gia">
					<span class="dashboard-icon"></span>
					<span class="text">
						<em>Tỉ giá</em><br/>
						<b>3,470đ</b>
					</span>
				</div>
            </div>
        </div>
        <div class="content-page-center">
            <form class="thong-tin-ca-nhan-form dia-chi-giao-hang-add-form" action="{{route('profile.edit',['id'=>$tin->id])}}" method="post" id="don-hang-thong-tin-ca-nhan-add-form"  enctype="multipart/form-data" accept-charset="UTF-8"><div><div class="ttcn-wrap-basic"><div class="ttcn-wrap-title">THÔNG TIN CƠ BẢN</div> <div class="ttcn-wrap-content"><div class="form-item form-type-textfield form-item-ma-tai-khoan form-disabled">
            @csrf
            <div class="col-8">
            <label for="edit-ma-tai-khoan">Mã tài khoản <span class="form-required" title="Trường dữ liệu này là bắt buộc.">*</span></label>
 <input disabled="disabled" type="text" id="edit-ma-tai-khoan" name="ma_tai_khoan" value="{{$tin->id}}" size="60" maxlength="128" class="form-text required" />
</div>
<div class="form-item form-type-textfield form-item-fullname">
  <label for="edit-fullname">Họ và tên <span class="form-required" title="Trường dữ liệu này là bắt buộc.">*</span></label>
 <input type="text" id="edit-fullname" name="name" value="{{$tin->name}}" size="60" maxlength="128" class="form-text required" />
</div>
<div class="form-item form-type-textfield form-item-mail">
  <label for="edit-mail">E-mail <span class="form-required" title="Trường dữ liệu này là bắt buộc.">*</span></label>
 <input type="text" id="edit-mail" name="email" value="{{$tin->email}}" size="60" maxlength="128" class="form-text required" />
</div>
<div class="form-item form-type-textfield form-item-phone">
  <label for="edit-phone">Số điện thoại <span class="form-required" title="Trường dữ liệu này là bắt buộc.">*</span></label>
 <input type="text" id="edit-phone" name="phone" value="{{$tin->phone}}" size="60" maxlength="128" class="form-text required" />
</div>
            </div>

<div class="col-4" id="tang">

<img class="img" src="{{asset('images/'.$tin->img) }}" class="img-fluid rounded-start" alt="...">
<input type="file" name="img" id="image" class="form-control-file">
</div>
</div></div><div class="ttcn-wrap-basic"><div class="ttcn-wrap-title">THÔNG TIN BỔ SUNG</div> <div class="ttcn-wrap-content"><div  class="container-inline-date"><div class="form-item form-type-date-popup form-item-birthday">


</div>
</div>

<div class="form-item form-type-textfield form-item-address">
  <label for="edit-address">Địa chỉ </label>
 <input type="text" id="edit-address" name="diachi" value="{{$tin->diachi}}" size="60" maxlength="128" class="form-text" />
</div>
<div class="form-item form-type-textfield form-item-address">
  <label for="edit-address">Kho nhận hàng </label>
 <input type="text" id="edit-address" name="kho_nhan_hang" value="{{$tin->kho_nhan_hang}}" size="60" maxlength="128" class="form-text" />
</div>

</div></div><div class="ttcn-wrap-basic">
            <div class="ttcn-wrap-title">Danh sách địa chỉ kho nhận hàng tại Trung Quốc</div>
            <div class="ttcn-wrap-content">
                <!--<h4 class="address-label"><i class="fa fa-map-marker" aria-hidden="true"></i> Kho Bảo Thuế <em>(kê khai 100% thuế - có hóa đơn GTGT)</em></h4>
                <div class="addresscon">
        			<ul>
        				<li>
        					<strong class="flo">Địa chỉ nhận hàng:</strong>
        					<span class="flo"> <b>广西东兴市冲卜四路215号</b>仓库</span>
        				</li>
        				<li>
        					<strong class="flo">Người nhận:</strong>
        					<span class="flo">  KH咚咚公司</span>
        				</li>
        				<li>
        					<strong class="flo">Mã bưu điện:</strong>
        					<span class="flo">538100</span>
        				</li>
        				<li>
        					<strong class="flo">Số điện thoại:</strong>
        					<span class="flo">17788548022</span>
        				</li>
        			</ul>
        		</div>-->
                <h4 class="address-label"><i class="fa fa-map-marker" aria-hidden="true"></i> Kho Đông Hưng</h4>
                <div class="addresscon">
        			<ul>
        				<li>
        					<strong class="flo">Địa chỉ nhận hàng:</strong>
        					<span class="flo"> <b>广西壮族自治区 防城港市 东兴市 东兴镇 冲卜一路65-1号</b>仓库</span>
        				</li>
        				<li>
        					<strong class="flo">Người nhận:</strong>
        					<span class="flo">  KH咚咚公司</span>
        				</li>
        				<li>
        					<strong class="flo">Mã bưu điện:</strong>
        					<span class="flo">538100</span>
        				</li>
        				<li>
        					<strong class="flo">Số điện thoại:</strong>
        					<span class="flo">18587603681</span>
        				</li>
        			</ul>

        		</div>
                <h4 class="address-label"><i class="fa fa-map-marker" aria-hidden="true"></i> Kho Quảng Châu</h4>
                <div class="addresscon">
        			<ul>
        				<li>
        					<strong class="flo">Địa chỉ nhận hàng:</strong>
        					<span class="flo"> <b>广东省 广州市 白云区 石井街道 凰岗村 凤鸣路117号KH凰岗二社大型停车场F1档口 </b></span>
        				</li>
        				<li>
        					<strong class="flo">Người nhận:</strong>
        					<span class="flo">  KH咚咚代收</span>
        				</li>
        				<li>
        					<strong class="flo">Mã bưu điện:</strong>
        					<span class="flo">510430</span>
        				</li>
        				<li>
        					<strong class="flo">Số điện thoại:</strong>
        					<span class="flo">86-18926668611</span>
        				</li>
        			</ul>
        		</div>
            </div>
        </div><input class="uk-button uk-button-primary form-submit" type="submit" id="edit-submit" name="op" value="Lưu thay đổi" /><input type="hidden" name="form_build_id" value="form-QdJY0FbacACSZl16CE9-xLNePD2uwv7tBSNqYBK0EHY" />
<input type="hidden" name="form_token" value="qotSR2DKeq57qsu7c0DazN1BmLc3NWQnZBsrivyaNuI" />
<input type="hidden" name="form_id" value="don_hang_thong_tin_ca_nhan_add_form" />
</div></form>        </div>
    </div>

    <style>
        .col-4 img{
            width: 100px;
        }
        img.imghinh{
            width:100px;
        }
    </style>
@endsection
