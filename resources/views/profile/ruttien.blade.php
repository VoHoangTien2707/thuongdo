@extends('profile.layoutprofile')
@section('noidung1')

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
                <form class="tim-kiem-add-form" target="_blank" action="s" method="post"
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
                                <input placeholder="Chào Tiến, chiều nay bạn muốn tìm gì: nhập link, từ khóa..."
                                    type="text" id="edit-keyword" name="keyword" value="" size="60" maxlength="128"
                                    class="form-text form-autocomplete" /><input type="hidden"
                                    id="edit-keyword-autocomplete"
                                    value="https://www.thuongdo.com/index.php?q=tim-kiem/autocomplete"
                                    disabled="disabled" class="autocomplete" />
                            </div>
                        </div><input type="submit" id="edit-submit--2" name="op" value="Tìm kiếm"
                            class="form-submit" /><input type="hidden" name="form_build_id"
                            value="form-jIuPt0uOaF5nRCERZOLnM4BG6GevpfTvVCrZRVTbvaI" />
                        <input type="hidden" name="form_token" value="DfTTynYkk-kxCm_wILvaYPih8kt50uQsayBfZNXBXsI" />
                        <input type="hidden" name="form_id" value="baiviet_tim_kiem_add_form" />
                    </div>
                </form> <b>(Nếu bạn chưa tìm thấy sản phẩm mong muốn vui lòng <a
                        href="https://www.messenger.com/t/thuongdo.vn" target="_bank" rel="nofollow">Click vào đây</a>
                    gửi yêu cầu từ khóa)</b>
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
        <form class="khach-hang-rut-tien-add-form"  action="{{ route('luu-thong-tin-tai-khoan') }}" method="post" id="khach-hang-rut-tien-add-form"
            accept-charset="UTF-8">
            <div>
                <div class="ttcn-wrap-basic">
                @if(session()->has('thongbao') && session('thongbao') != '')

<div id="thongbao" class="alert alert-success" role="alert">
<h6 >{{ session('thongbao') }}</h6></div>
<script>
    setTimeout(function() {
        document.getElementById('thongbao').style.display = 'none';
    }, 5000); // 15 giây
</script>
@endif
                    <div class="ttcn-wrap-title">THÔNG TIN RÚT TIỀN</div>
                    <div class="ttcn-wrap-content">
                        <div class="form-item form-type-textfield form-item-total">
                            <label for="edit-total">Tổng rút <span class="form-required"
                                    title="Trường dữ liệu này là bắt buộc.">*</span></label>
                            <input class="" type="text"  name="total" value=""/>

                            <div class="description"><span>0</span><em>đ</em> có thể rút</div>

                        </div>
                    </div>
                </div>
                <div class="ttcn-wrap-basic">
                    <div class="ttcn-wrap-title">THÔNG TIN CHUYỂN KHOẢN</div>
                    <div class="ttcn-wrap-content">
                        <table class="td-theme-table product-view-detail sticky-enabled">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>STT</th>
                                    <th>Ngân hàng</th>
                                    <th>Thông tin chuyển khoản</th>
                                </tr>
                            </thead>
                            <tbody>


                                @foreach($data as $np)
                                <tr class=" odd">
                                    <td>
                                        <div class="wrap-nganhang">
                                            <div class="form-item form-type-checkbox form-item-container-16141-check">
                                            <input data-id="16141" type="checkbox" id="edit-container-16141-check" name="selected-accounts[]" value="1" class="form-checkbox" />

                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="stt">1</span></td>
                                    <td>
                                        <div class="nganhang">
                                            {{$np->nganhang}}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tt-taikhoan">
                                            {{$np->thongtin}}
                                        </div>
                                    </td>
                                    <input type="hidden" name="ttnganhang" value="{{$np->nganhang}}">
                                    <input type="hidden" name="ttthongtin" value="{{$np->thongtin}}">

                                </tr>
                                @endforeach
                                <input type="hidden" id="selected-accounts" name="selected-accounts" value="">

                            </tbody>
                        </table>
                        <br /><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Launch demo modal
                        </button>

                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div id="modal-content" class="modal-content" style="width: 689px; height: auto;">
                                        <form class="uk-form chuyentien-add-form ctools-use-modal-processed"
                                            action="{{route('add.nganhang')}}" method="post" id="chuyentien-add-form"
                                            accept-charset="UTF-8">
                                            @csrf
                                            <div>
                                                <div class="form-item form-type-select form-item-nganhang-id">
                                                    <label for="edit-nganhang-id">Tên ngân hàng <span
                                                            class="form-required"
                                                            title="Trường dữ liệu này là bắt buộc.">*</span></label>
                                                    <select id="edit-nganhang-id" name="nganhang"
                                                        class="form-select required">
                                                        <option value="" selected="selected">- Chọn -</option>
                                                        <option value="vietcombank">Vietcombank </option>
                                                        <option value="viettinbank">VietinBank</option>
                                                        <option value="argibank">Agribank</option>
                                                        <option value="BIDV">BIDV </option>
                                                        <option value="Techcombank">Techcombank</option>
                                                        <option value="Sacombank">Sacombank</option>
                                                    </select>
                                                </div>
                                                <div class="form-item form-type-textfield form-item-tai-khoan">
                                                    <label for="edit-tai-khoan">Thông tin tài khoản, hoặc địa chỉ nhận
                                                        tiền <span class="form-required"
                                                            title="Trường dữ liệu này là bắt buộc.">*</span></label>
                                                    <input placeholder="Số tài khoản, họ tên, chi nhánh, ghi chú..."
                                                        title="Đối với phương thức nhận tiền mặt, địa chỉ nhận tiền tại chi nhánh của Thương Đô"
                                                        type="text" id="edit-tai-khoan" name="thongtin" value=""
                                                        size="60" maxlength="128" class="form-text required">
                                                    <div class="description">VD: Nguyễn Văn A, Số tài khoản, Chi nhánh
                                                    </div>
                                                </div>
                                                <input class="uk-button uk-button-primary form-submit" type="submit"
                                                    id="edit-submit--3"  value="Thêm mới">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div style="display:none;" id="modal-message">&nbsp</div>
                    </div>
                </div>
                <div class="uk-alert uk-alert-danger"><i class="fa fa-exclamation-triangle"></i> Quý khách lưu ý chọn
                    thông tin tài khoản trước khi "Gửi yêu cầu". Sau khi tạo yêu cầu rút tiền xong vui lòng liên hệ bộ
                    phận chăm sóc để xác nhận!</div><input type="submit" id="edit-submit" name="op" value="Gửi yêu cầu"
                    class="form-submit" /><input type="hidden" name="form_build_id"
                    value="form-nj7nd_abgdXyQ7X9IDzvxmBMolNAAG6fullEIyRIEic" />
                <input type="hidden" name="form_token" value="Gj9KR-b61KITRyuRBAd4RzWQfeQn8zaNbnDsN_UvqFw" />
                <input type="hidden" name="form_id" value="khach_hang_rut_tien_add_form" />

            </div>

            <script>
$(document).ready(function () {
    $('#khach-hang-rut-tien-add-form').submit(function () {
        // Làm rỗng trường ẩn trước khi gán giá trị mới
        $('#selected-accounts').val('');

        // Tạo một mảng để lưu thông tin tài khoản được chọn
        var selectedAccounts = [];

        // Lặp qua các checkbox đã chọn
        $('input[type="checkbox"]:checked').each(function () {
            var nganhang = $(this).closest('tr').find('.nganhang').text();
            var thongtin = $(this).closest('tr').find('.tt-taikhoan').text();
            var total = $(this).closest('tr').find('.auto-vnd').val(); // Sửa dòng này để lấy giá trị từ input

            // Thêm thông tin vào mảng
            selectedAccounts.push({ nganhang: nganhang, thongtin: thongtin, total: total });
        });

        // Gắn thông tin vào trường ẩn "selected-accounts" để biểu mẫu có thể gửi đi
        $('#selected-accounts').val(JSON.stringify(selectedAccounts));

        // Cho phép biểu mẫu gửi đi
        return true;
    });
});
            </script>
        </form>


        <div class="lich-su-giao-dich-page-item rut-tien-list">
            <table class="sticky-enabled">
                <thead>
                    <tr>
                        <th>Ngày yêu cầu</th>
                        <th>Tổng rút</th>
                        <th>Tình trạng</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd">
                        <td colspan="4" class="empty message">Chưa có yêu cầu rút tiền.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script type="text/javascript"
    src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/j-alert/jquery.min.js?s18gps"></script>
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
    src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/jquery.form.min.js?s18gps"></script>
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
    src="https://www.thuongdo.com/sites/all/modules/developer/thuongdo_export/js/thuongdo_js.js?s18gps"></script>
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
<style>
    #thongbao{
        background-color:red;
        color:white;
    }
    #thongbao h6{
        font-size:15px;
        font-style: italic;

        color:white;
    }
</style>
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
    src="https://www.thuongdo.com/sites/all/modules/contrib/jquery_update/replace/ui/external/jquery.cookie.js?v=67fb34f6a866c40d0570">
</script>
<script type="text/javascript"
    src="https://www.thuongdo.com/sites/all/modules/contrib/jquery_update/replace/jquery.form/4/jquery.form.min.js?v=4.2.1">
</script>
<script type="text/javascript" src="https://www.thuongdo.com/misc/ajax.js?v=7.77"></script>
<script type="text/javascript"
    src="https://www.thuongdo.com/sites/all/modules/contrib/jquery_update/js/jquery_update.js?v=0.0.1"></script>
<script type="text/javascript"
    src="https://www.thuongdo.com/sites/default/files/languages/vi_in2komZFFnsjt_72XE_KDM2awjJk45aiyeS5-nQPEpM.js?s18gps">
</script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/libraries/jgrowl/jquery.jgrowl.min.js?s18gps">
</script>
<script type="text/javascript"
    src="https://www.thuongdo.com/sites/all/modules/contrib/nicemessages/js/nicemessages.js?s18gps"></script>
<script type="text/javascript" src="https://www.thuongdo.com/misc/tableheader.js?s18gps"></script>
<script type="text/javascript" src="https://www.thuongdo.com/misc/progress.js?v=7.77"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/modules/contrib/ctools/js/modal.js?s18gps">
</script>
<script type="text/javascript" src="https://www.thuongdo.com/misc/autocomplete.js?v=7.77"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/json2.js?s18gps">
</script>
<script type="text/javascript"
    src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/autoNumeric.js?s18gps"></script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/cycle2.js?s18gps">
</script>
<script type="text/javascript"
    src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/happy_new_year.js?s18gps"></script>
<script type="text/javascript"
    src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/css3-animate-it.js?s18gps"></script>
<script type="text/javascript"
    src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/owl.carousel.min.js?s18gps"></script>
<script type="text/javascript"
    src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/giaodiennguoidung.js?s18gps"></script>
<script type="text/javascript">
<!--//
-->
<![CDATA[//><!--
jQuery.extend(Drupal.settings, {"basePath":"\/","pathPrefix":"","ajaxPageState":{"theme":"giaodiennguoidung","theme_token":"YkzGEbEKenN4RupQKwqARiTh_kfQt4S6wgdqxp8qoCo","jquery_version":"1.8","js":{"sites\/all\/modules\/developer\/thuongdo_export\/js\/j-alert\/jquery.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/gritter\/jquery.gritter.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/html5Uploader\/jquery.html5uploader.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/js\/uikit.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/js\/components\/tooltip.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/js\/components\/notify.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/jquery.form.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/jquery.validate.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/additional-methods.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/jquery.barrating.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/chosen\/chosen.jquery.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/thuongdo_js.js":1,"sites\/all\/modules\/developer\/thuongdo_vidientu\/js\/thuongdo_vidientu.js":1,"sites\/all\/modules\/contrib\/jquery_update\/replace\/jquery\/1.8\/jquery.min.js":1,"misc\/jquery-extend-3.4.0.js":1,"misc\/jquery-html-prefilter-3.5.0-backport.js":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"sites\/all\/modules\/contrib\/jquery_update\/replace\/ui\/ui\/minified\/jquery.ui.core.min.js":1,"sites\/all\/modules\/contrib\/jquery_update\/replace\/ui\/external\/jquery.cookie.js":1,"sites\/all\/modules\/contrib\/jquery_update\/replace\/jquery.form\/4\/jquery.form.min.js":1,"misc\/ajax.js":1,"sites\/all\/modules\/contrib\/jquery_update\/js\/jquery_update.js":1,"public:\/\/languages\/vi_in2komZFFnsjt_72XE_KDM2awjJk45aiyeS5-nQPEpM.js":1,"sites\/all\/libraries\/jgrowl\/jquery.jgrowl.min.js":1,"sites\/all\/modules\/contrib\/nicemessages\/js\/nicemessages.js":1,"misc\/tableheader.js":1,"misc\/progress.js":1,"sites\/all\/modules\/contrib\/ctools\/js\/modal.js":1,"misc\/autocomplete.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/json2.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/autoNumeric.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/cycle2.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/happy_new_year.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/css3-animate-it.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/owl.carousel.min.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/giaodiennguoidung.js":1},"css":{"modules\/system\/system.base.css":1,"modules\/system\/system.menus.css":1,"modules\/system\/system.messages.css":1,"modules\/system\/system.theme.css":1,"misc\/ui\/jquery.ui.core.css":1,"misc\/ui\/jquery.ui.theme.css":1,"modules\/aggregator\/aggregator.css":1,"sites\/all\/modules\/contrib\/date\/date_api\/date.css":1,"sites\/all\/modules\/contrib\/date\/date_popup\/themes\/datepicker.1.7.css":1,"modules\/field\/theme\/field.css":1,"modules\/node\/node.css":1,"modules\/user\/user.css":1,"sites\/all\/modules\/contrib\/views\/css\/views.css":1,"sites\/all\/modules\/contrib\/ckeditor\/css\/ckeditor.css":1,"sites\/all\/modules\/contrib\/ctools\/css\/ctools.css":1,"sites\/all\/libraries\/jgrowl\/jquery.jgrowl.min.css":1,"sites\/all\/modules\/contrib\/nicemessages\/css\/nicemessages_positions.css":1,"sites\/all\/modules\/contrib\/nicemessages\/css\/nicemessages_drupal.css":1,"sites\/all\/modules\/contrib\/nicemessages\/css\/shadows.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/lobibox\/css\/lobibox.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/chosen\/chosen.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/css\/uikit.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/css\/components\/tooltip.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/css\/components\/notify.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/css\/components\/progress.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/css\/thuongdo_export.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/css\/fontawesome-stars.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/gritter\/css\/jquery.gritter.css":1,"sites\/all\/modules\/developer\/thuongdo_khieunai\/css\/thuongdo_khieunai.css":1,"sites\/all\/modules\/developer\/thuongdo_vidientu\/css\/thuongdo_vidientu.css":1,"sites\/all\/modules\/contrib\/ctools\/css\/modal.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/responsive-modal.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/font-awesome.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/skins\/square\/blue.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/animations.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/owl.carousel.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/owl.theme.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/owl.transitions.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/style.css":1}},"CToolsModal":{"loadingText":"Loading...","closeText":"Close Window","closeImage":"\u003Cimg typeof=\u0022foaf:Image\u0022 src=\u0022https:\/\/www.thuongdo.com\/sites\/all\/modules\/contrib\/ctools\/images\/icon-close-window.png\u0022 alt=\u0022Close window\u0022 title=\u0022Close window\u0022 \/\u003E","throbber":"\u003Cimg typeof=\u0022foaf:Image\u0022 src=\u0022https:\/\/www.thuongdo.com\/sites\/all\/modules\/contrib\/ctools\/images\/throbber.gif\u0022 alt=\u0022\u0110ang n\u1ea1p\u0022 title=\u0022Loading...\u0022 \/\u003E"},"my-simple-ass-modal-style":{"modalSize":{"type":"fixed","width":714,"height":340},"modalOptions":{"opacity":0.6,"background-color":"#333"},"closeText":"\u003Ci class=\u0022fa fa-times\u0022 aria-hidden=\u0022true\u0022\u003E\u003C\/i\u003E","closeImage":"","animation":"fadeIn"},"urlIsAjaxTrusted":{"\/rut-tien":true},"nicemessages":{"position":"center","items":[]}});
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
                    Công cụ đặt hàng của <b>thuongdo.com</b> hiện tại chỉ hỗ trợ trình duyệt Chrome, Firefox. Bạn có thể
                    download hai trình duyệt này bằng link dưới đây:
                    <ul>
                        <li><a
                                href="https://chrome.google.com/webstore/detail/c%C3%B4ng-c%E1%BB%A5-%C4%91%E1%BA%B7t-h%C3%A0ng-th%C6%B0%C6%A1ng-%C4%91/fcicepgmmbpfkknccafappindadbgcpg">Link
                                tải Chrome</a></li>
                        <li><a
                                href="https://addons.mozilla.org/firefox/downloads/file/931827/thuong_o_logistics-3.0-an+fx.xpi">Link
                                tải Firefox</a></li>
                    </ul>
                    Hoặc bạn có thể đặt hàng bằng biểu mẫu, hoặc đặt hàng bằng links liên kết. Chat ngay nếu bạn cần hỗ
                    trợ
                </div>
                <div class="td-support">
                    <div class="uk-grid uk-grid-collapse">
                        <div class="uk-width-1-1 uk-width-medium-1-2">
                            <a href="#" class="uk-button uk-button-primary"
                                style="display: block; margin-right: 1px; font-weight: bold"><i class="fa fa-phone"></i>
                                19006825</a>
                        </div>
                        <div class="uk-width-1-1 uk-width-medium-1-2">
                            <a href="#" class="uk-button uk-button-primary" style="display: block; font-weight: bold"><i
                                    class="fa fa-envelope-o"></i> chamsoc@thuongdo.com</a>
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
div.ctools-modal-content .modal-content {
    padding: 1em 1em 0 1em;
    overflow: auto;
    position: relative;
}

#modal-content {
    overflow-y: auto !important;
}

#modal-content {
    padding-top: 0px;
}

#modal-content {
    width: 699px !important;
    overflow: hidden;
}

.chuyentien-add-form {
    padding: 15px;
    clear: both;
}

.chuyentien-add-form {
    padding: 15px;
    clear: both;
}

div.ctools-modal-content {
    background: #fff;
    color: #000;
    padding: 0;
    margin: 2px;
    border: 1px solid #000;
    width: 600px;
    text-align: left;
}

div.ctools-modal-content {
    background: #fff;
    color: #000;
    padding: 0;
    margin: 2px;
    border: 1px solid #000;
    width: 600px;
    text-align: left;
}

.uk-form input:not([type]),
.uk-form input[type=text],
.uk-form input[type=password],
.uk-form input[type=email],
.uk-form input[type=url],
.uk-form input[type=search],
.uk-form input[type=tel],
.uk-form input[type=number],
.uk-form input[type=datetime],
.uk-form input[type=datetime-local],
.uk-form input[type=date],
.uk-form input[type=month],
.uk-form input[type=time],
.uk-form input[type=week],
.uk-form input[type=color],
.uk-form select,
.uk-form textarea {
    height: 30px;
    max-width: 100%;
    padding: 4px 6px;
    border: 1px solid #ddd;
    background: #fff;
    color: #444;
    -webkit-transition: all .2s linear;
    -webkit-transition-property: border, background, color, box-shadow, padding;
    transition: all .2s linear;
    transition-property: border, background, color, box-shadow, padding;
}
.alert-succes{
    background-color:red;
}
</style>
@endsection
