@extends('profile.layoutprofile')
@section('noidung1')
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
                    <form class="tim-kiem-add-form" target="_blank" action="/danh-sach-khieu-nai" method="post" id="baiviet-tim-kiem-add-form" accept-charset="UTF-8"><div><div class="search-text">
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
 <input placeholder="Chào Tiến, sáng nay bạn muốn tìm gì: nhập link, từ khóa..." type="text" id="edit-keyword" name="keyword" value="" size="60" maxlength="128" class="form-text form-autocomplete" /><input type="hidden" id="edit-keyword-autocomplete" value="https://www.thuongdo.com/index.php?q=tim-kiem/autocomplete" disabled="disabled" class="autocomplete" />
</div>
</div><input type="submit" id="edit-submit--2" name="op" value="Tìm kiếm" class="form-submit" /><input type="hidden" name="form_build_id" value="form-YPNgEfo5ozht26g9aQag4BgO1aNybmH6Xo29D2LsmU4" />
<input type="hidden" name="form_token" value="DfTTynYkk-kxCm_wILvaYPih8kt50uQsayBfZNXBXsI" />
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
            <ul class="step-action"><li class=""><a href="/danh-sach-khieu-nai?trang_thai_id=1" class="active">Chờ xử lý<span class="uk-badge uk-badge-notification " style="margin-left: 5px"> 0</span></a></li><li class=""><a href="/danh-sach-khieu-nai?trang_thai_id=4" class="active">Đang xử lý<span class="uk-badge uk-badge-notification " style="margin-left: 5px"> 0</span></a></li><li class=""><a href="/danh-sach-khieu-nai?trang_thai_id=5" class="active">Đã xử lý<span class="uk-badge uk-badge-notification " style="margin-left: 5px"> 0</span></a></li><li class=""><a href="/danh-sach-khieu-nai?trang_thai_id=2" class="active">Đã hoàn thành<span class="uk-badge uk-badge-notification " style="margin-left: 5px"> 0</span></a></li><li class=""><a href="/danh-sach-khieu-nai?trang_thai_id=3" class="active">Đã hủy<span class="uk-badge uk-badge-notification " style="margin-left: 5px"> 0</span></a></li></ul>            <div class="ds-khieu-nai"><div class="form-search"><form class="thuongdo-vidientu-search-form don-hang-search-form don-hang-kien-hang-search-form" action="/danh-sach-khieu-nai" method="post" id="thuongdo-khieunai-search-form" accept-charset="UTF-8"><div><div class="form-item form-type-textfield form-item-order-code">
 <input placeholder="Mã đơn hàng" type="text" id="edit-order-code" name="order_code" value="" size="60" maxlength="128" class="form-text form-autocomplete" /><input type="hidden" id="edit-order-code-autocomplete" value="https://www.thuongdo.com/index.php?q=order-code/autocomplete" disabled="disabled" class="autocomplete" />
</div>
<div class="form-item form-type-textfield form-item-fullname">
 <input placeholder="Họ tên" type="text" id="edit-fullname" name="fullname" value="" size="60" maxlength="128" class="form-text" />
</div>
<div class="form-item form-type-textfield form-item-phone">
 <input placeholder="Số điện thoại" type="text" id="edit-phone" name="phone" value="" size="60" maxlength="128" class="form-text" />
</div>
<div class="form-item form-type-select form-item-trang-thai-id">
 <select id="edit-trang-thai-id" name="trang_thai_id" class="form-select"><option value="" selected="selected">Lựa chọn trạng thái</option><option value="1">Chờ xử lý</option><option value="4">Đang xử lý</option><option value="5">Đã xử lý</option><option value="2">Đã hoàn thành</option><option value="3">Đã hủy</option></select>
</div>
<div class="form-item form-type-select form-item-loaikhieunai">
 <select id="edit-loaikhieunai" name="loaikhieunai" class="form-select"><option value="" selected="selected">Lựa chọn loại khiếu nại</option><option value="4">Đặt hàng chậm</option><option value="6">Thái độ phục vụ của nhận viên</option><option value="7">Trừ tiền ví điện tử chưa chính xác</option><option value="8">Đơn hàng sai lệch về tiền</option><option value="9">Tính sai cước cân nặng</option><option value="10">Ship Trung Quốc cao</option><option value="13">Hàng về chậm</option><option value="14">Hàng sai mẫu mã, quy cách</option><option value="15">Hàng vỡ hỏng</option><option value="16">Hàng thiếu</option></select>
</div>
<div class="form-item form-type-select form-item-phuong-an">
 <select id="edit-phuong-an" name="phuong_an" class="form-select"><option value="" selected="selected">Lựa chọn phương án</option><option value="1">Bồi thường</option><option value="2">Đổi trả</option><option value="3">Phát bù</option></select>
</div>
<div class="form-item form-type-select form-item-uid-xu-ly">
 <select id="edit-uid-xu-ly" name="uid_xu_ly" class="form-select"><option value="" selected="selected">Chọn NV đặt hàng</option><option value="1524">nguyen thi phuong</option><option value="18312">Nguyễn Thị Tuyết</option><option value="37997">Nguyễn Trung Đức</option><option value="50885">Vũ Thị Thiết</option><option value="70795">Đào Phương Thúy</option><option value="125109">Đặng Hồng Dung</option><option value="191383">A Cheng</option><option value="205602">Vũ Thị Hương Ly</option><option value="208830">Bùi Diệu Ly</option><option value="210697">Lê Trung Anh</option><option value="217564">Vũ Thu Trang</option><option value="233867">Phạm Phương Mai</option><option value="236547">Lê Thị Hương</option><option value="243476">Nguyễn Hải Bình</option><option value="253987">Lê Thị Mỹ Linh</option><option value="540">Lương Hữu Trường</option><option value="4307">Đặng Thị Lan Anh</option><option value="39397">Hoàng Thị Quỳnh</option><option value="168229">Vũ Thị Ngọc</option></select>
</div>
<div class="form-item form-type-select form-item-uid-xu-ly-kh">
 <select id="edit-uid-xu-ly-kh" name="uid_xu_ly_kh" class="form-select"><option value="" selected="selected">Chọn NV xử lý</option><option value="125108">Lê Hồng Ngọc</option><option value="220012">Nguyễn Quỳnh Anh</option></select>
</div>
<div  class="container-inline-date"><div class="form-item form-type-date-popup form-item-month-to">
 <div id="edit-month-to"  class="date-padding"><div class="form-item form-type-textfield form-item-month-to-date">
  <label for="edit-month-to-datepicker-popup-0">Date </label>
 <input placeholder="Từ ngày" type="text" id="edit-month-to-datepicker-popup-0" name="month_to[date]" value="" size="20" maxlength="30" class="form-text" />
<div class="description"> E.g., 03/10/2023</div>
</div>
</div>
</div>
</div><div  class="container-inline-date"><div class="form-item form-type-date-popup form-item-month-end">
 <div id="edit-month-end"  class="date-padding"><div class="form-item form-type-textfield form-item-month-end-date">
  <label for="edit-month-end-datepicker-popup-0">Date </label>
 <input placeholder="Đến ngày" type="text" id="edit-month-end-datepicker-popup-0" name="month_end[date]" value="" size="20" maxlength="30" class="form-text" />
<div class="description"> E.g., 03/10/2023</div>
</div>
</div>
</div>
</div><input type="submit" id="edit-submit" name="op" value="Tìm kiếm" class="form-submit" /><input type="hidden" name="form_build_id" value="form-hDxC5cYnYTNTEP1b8K6oLpBW4frnyCwjMYKh_eIMUxM" />
<input type="hidden" name="form_token" value="OQ-mS3rKqalOuwLSEKTuz-C69xz9I77ntEpxdInsc6M" />
<input type="hidden" name="form_id" value="thuongdo_khieunai_search_form" />
</div></form></div>
		<div class="uk-overflow-container" style="clear: both"><table class="theme-table sticky-enabled">
 <thead><tr><th>STT</th><th>Hình ảnh</th><th>Mã đơn hàng</th><th>Loại khiếu nại</th><th>Trạng thái khiếu nại</th><th>Ngày gửi</th><th>Thao tác</th> </tr></thead>
<tbody>
 <tr class="odd"><td colspan="7" class="empty message">Chưa có dữ liệu !</td> </tr>
</tbody>
</table>
</div></div>
	        </div>
    </div>


  <script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/j-alert/jquery.min.js?s18gps"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/gritter/jquery.gritter.min.js?s18gps"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/html5Uploader/jquery.html5uploader.js?s18gps"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/uikit/js/uikit.min.js?s18gps"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/uikit/js/components/tooltip.min.js?s18gps"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/uikit/js/components/notify.min.js?s18gps"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/jquery.form.min.js?s18gps"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/jquery.validate.min.js?s18gps"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/additional-methods.min.js?s18gps"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/jquery.barrating.min.js?s18gps"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/lib/chosen/chosen.jquery.min.js?s18gps"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/thuongdo_js.js?s18gps"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_vidientu/js/thuongdo_vidientu.js?s18gps"></script>
                  <!-- Start of widget script -->
            <script type="text/javascript">
                function loadJsAsync(t,n){var a=document.createElement("script");a.type="text/javascript",a.src=t,a.addEventListener("load",function(t){n(null,t)},!1),document.getElementsByTagName("body")[0].appendChild(a)}window.onload=(t=>{loadJsAsync("https://api.chatbiz.io/js/CsChat.js",function(){loadCsChat("https://realtime-v2.chatbiz.io/get-view-chat?domain=thuongdo_thuongdo&fullname=Võ Hoàng Tiến&phone=05836133789")})});
            </script>
        <!-- End of widget script -->
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
<script type="text/javascript" src="https://www.thuongdo.com/misc/drupal.js?s18gps"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/contrib/jquery_update/replace/ui/ui/minified/jquery.ui.core.min.js?v=1.10.2"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/contrib/jquery_update/replace/ui/ui/minified/jquery.ui.datepicker.min.js?v=1.10.2"></script>
<script type="text/javascript" src="https://www.thuongdo.com/modules/locale/locale.datepicker.js?v=1.10.2"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/contrib/date/date_popup/jquery.timeentry.pack.js?v=1.4.7"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/default/files/languages/vi_in2komZFFnsjt_72XE_KDM2awjJk45aiyeS5-nQPEpM.js?s18gps"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/libraries/jgrowl/jquery.jgrowl.min.js?s18gps"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/contrib/nicemessages/js/nicemessages.js?s18gps"></script>
<script type="text/javascript" src="https://www.thuongdo.com/misc/tableheader.js?s18gps"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/contrib/date/date_popup/date_popup.js?s18gps"></script>
<script type="text/javascript" src="https://www.thuongdo.com/misc/autocomplete.js?v=7.77"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/json2.js?s18gps"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/autoNumeric.js?s18gps"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/cycle2.js?s18gps"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/happy_new_year.js?s18gps"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/css3-animate-it.js?s18gps"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/owl.carousel.min.js?s18gps"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/giaodiennguoidung.js?s18gps"></script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
jQuery.extend(Drupal.settings, {"basePath":"\/","pathPrefix":"","ajaxPageState":{"theme":"giaodiennguoidung","theme_token":"YkzGEbEKenN4RupQKwqARiTh_kfQt4S6wgdqxp8qoCo","js":{"sites\/all\/modules\/developer\/thuongdo_export\/js\/j-alert\/jquery.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/gritter\/jquery.gritter.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/html5Uploader\/jquery.html5uploader.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/js\/uikit.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/js\/components\/tooltip.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/js\/components\/notify.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/jquery.form.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/jquery.validate.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/additional-methods.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/jquery.barrating.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/chosen\/chosen.jquery.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/thuongdo_js.js":1,"sites\/all\/modules\/developer\/thuongdo_vidientu\/js\/thuongdo_vidientu.js":1,"sites\/all\/modules\/contrib\/jquery_update\/replace\/jquery\/1.8\/jquery.min.js":1,"misc\/jquery-extend-3.4.0.js":1,"misc\/jquery-html-prefilter-3.5.0-backport.js":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"sites\/all\/modules\/contrib\/jquery_update\/replace\/ui\/ui\/minified\/jquery.ui.core.min.js":1,"sites\/all\/modules\/contrib\/jquery_update\/replace\/ui\/ui\/minified\/jquery.ui.datepicker.min.js":1,"modules\/locale\/locale.datepicker.js":1,"sites\/all\/modules\/contrib\/date\/date_popup\/jquery.timeentry.pack.js":1,"public:\/\/languages\/vi_in2komZFFnsjt_72XE_KDM2awjJk45aiyeS5-nQPEpM.js":1,"sites\/all\/libraries\/jgrowl\/jquery.jgrowl.min.js":1,"sites\/all\/modules\/contrib\/nicemessages\/js\/nicemessages.js":1,"misc\/tableheader.js":1,"sites\/all\/modules\/contrib\/date\/date_popup\/date_popup.js":1,"misc\/autocomplete.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/json2.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/autoNumeric.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/cycle2.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/happy_new_year.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/css3-animate-it.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/owl.carousel.min.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/giaodiennguoidung.js":1},"css":{"modules\/system\/system.base.css":1,"modules\/system\/system.menus.css":1,"modules\/system\/system.messages.css":1,"modules\/system\/system.theme.css":1,"misc\/ui\/jquery.ui.core.css":1,"misc\/ui\/jquery.ui.theme.css":1,"misc\/ui\/jquery.ui.datepicker.css":1,"sites\/all\/modules\/contrib\/date\/date_popup\/themes\/jquery.timeentry.css":1,"modules\/aggregator\/aggregator.css":1,"sites\/all\/modules\/contrib\/date\/date_api\/date.css":1,"sites\/all\/modules\/contrib\/date\/date_popup\/themes\/datepicker.1.7.css":1,"modules\/field\/theme\/field.css":1,"modules\/node\/node.css":1,"modules\/user\/user.css":1,"sites\/all\/modules\/contrib\/views\/css\/views.css":1,"sites\/all\/modules\/contrib\/ckeditor\/css\/ckeditor.css":1,"sites\/all\/modules\/contrib\/ctools\/css\/ctools.css":1,"sites\/all\/libraries\/jgrowl\/jquery.jgrowl.min.css":1,"sites\/all\/modules\/contrib\/nicemessages\/css\/nicemessages_positions.css":1,"sites\/all\/modules\/contrib\/nicemessages\/css\/nicemessages_drupal.css":1,"sites\/all\/modules\/contrib\/nicemessages\/css\/shadows.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/lobibox\/css\/lobibox.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/chosen\/chosen.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/css\/uikit.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/css\/components\/tooltip.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/css\/components\/notify.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/css\/components\/progress.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/css\/thuongdo_export.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/css\/fontawesome-stars.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/gritter\/css\/jquery.gritter.css":1,"sites\/all\/modules\/developer\/thuongdo_khieunai\/css\/thuongdo_khieunai.css":1,"sites\/all\/modules\/developer\/thuongdo_vidientu\/css\/thuongdo_vidientu.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/font-awesome.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/skins\/square\/blue.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/animations.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/owl.carousel.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/owl.theme.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/owl.transitions.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/style.css":1}},"jquery":{"ui":{"datepicker":{"isRTL":false,"firstDay":"1"}}},"datePopup":{"edit-month-to-datepicker-popup-0":{"func":"datepicker","settings":{"changeMonth":true,"changeYear":true,"autoPopUp":"focus","closeAtTop":false,"speed":"immediate","firstDay":1,"dateFormat":"dd\/mm\/yy","yearRange":"-3:+3","fromTo":false,"defaultDate":"0y"}},"edit-month-end-datepicker-popup-0":{"func":"datepicker","settings":{"changeMonth":true,"changeYear":true,"autoPopUp":"focus","closeAtTop":false,"speed":"immediate","firstDay":1,"dateFormat":"dd\/mm\/yy","yearRange":"-3:+3","fromTo":false,"defaultDate":"0y"}}},"urlIsAjaxTrusted":{"\/danh-sach-khieu-nai":true},"nicemessages":{"position":"center","items":[]}});
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
@endsection
