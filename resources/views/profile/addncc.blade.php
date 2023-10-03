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
                        <form class="tim-kiem-add-form" target="_blank" action="/nha-cung-cap/add" method="post"
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
                                        <input placeholder="Chào Tiến, sáng nay bạn muốn tìm gì: nhập link, từ khóa..."
                                            type="text" id="edit-keyword" name="keyword" value="" size="60"
                                            maxlength="128" class="form-text form-autocomplete" /><input type="hidden"
                                            id="edit-keyword-autocomplete"
                                            value="https://www.thuongdo.com/index.php?q=tim-kiem/autocomplete"
                                            disabled="disabled" class="autocomplete" />
                                    </div>
                                </div><input type="submit" id="edit-submit--2" name="op" value="Tìm kiếm"
                                    class="form-submit" /><input type="hidden" name="form_build_id"
                                    value="form-gMF6cXOX8eRaWMcq9IO2bYyzJPDKM79r2tIc8KScEsM" />
                                <input type="hidden" name="form_token"
                                    value="DfTTynYkk-kxCm_wILvaYPih8kt50uQsayBfZNXBXsI" />
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
            @if(session()->has('thongbao') && session('thongbao') != '')

<div id="thongbao" class="alert alert-success" role="alert">
<h6 >{{ session('thongbao') }}</h6></div>
<script>
    setTimeout(function() {
        document.getElementById('thongbao').style.display = 'none';
    }, 10000); // 15 giây
</script>
@endif
                <form class="nha-cung-cap-user-add-form" action="{{route('ncc.add')}}"  enctype="multipart/form-data" method="post"
                    id="nha-cung-cap-user-add-form" accept-charset="UTF-8">
                    @csrf
                    <div>
                        <table>
                            <tr class="border-bg">
                                <td colspan="2" class=""><span>1</span> Thông tin chung</td>
                            </tr>
                            <tr class="odd">
                                <td>
                                    <div class="form-item form-type-textfield form-item-name">
                                        <label for="edit-name">Tên nhà cung cấp <span class="form-required"
                                                title="Trường dữ liệu này là bắt buộc.">*</span></label>
                                        <input type="text" id="edit-name" name="tenncc" value="" size="60" maxlength="128"
                                            class="form-text required" />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-item form-type-textfield form-item-address">
                                        <label for="edit-address">Địa chỉ </label>
                                        <input type="text" id="edit-address" name="diachi" value="" size="60"
                                            maxlength="128" class="form-text" />
                                    </div>
                                </td>
                            </tr>
                            <tr class="even">
                                <td>
                                    <div class="form-item form-type-textfield form-item-website">
                                        <label for="edit-website">Website </label>
                                        <input type="text" id="edit-website" name="website" value="" size="60"
                                            maxlength="128" class="form-text" />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-item"><label>Logo</label>
                                    <input type="file" name="img" />

                                </div>
                                <div class="form-item form-type-textfield form-item-website">
                                        <label for="edit-website">Ngành kinh doanh</label>
                                        <select name="nganhkinhdoanh" id="">
                                            <option value="Nội thất">Nội thất</option>
                                            <option value="Điện tử">Điện tử</option>
                                            <option value="Mỹ phẩm">Mỹ phẩm</option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <table class="phuong-thuc-lien-he table-item">
                            <tr class="border-bg">
                                <td colspan="4"><span>2</span> Phương thức liên hệ</td>
                            </tr>
                            <tr class=" hidden-1">
                                <td>
                                    <div class="form-item form-type-select form-item-phuong-thuc-lien-he-1-type">
                                        <select id="edit-phuong-thuc-lien-he-1-type" name="lienhe"
                                            class="form-select">
                                            <option value="" selected="selected">- Chọn loại phương thức -</option>
                                            <option value="2">Email</option>
                                            <option value="4">QQ</option>
                                            <option value="1">Số điện thoại</option>
                                            <option value="3">Wechat</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-item form-type-textfield form-item-phuong-thuc-lien-he-1-fullname">
                                        <input placeholder="Họ và tên" type="text"
                                            id="edit-phuong-thuc-lien-he-1-fullname"
                                            name="nguoidaidien" value="" size="60" maxlength="128"
                                            class="form-text" />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-item form-type-textfield form-item-phuong-thuc-lien-he-1-chuc-vu">
                                        <input placeholder="Chức vụ" type="text" id="edit-phuong-thuc-lien-he-1-chuc-vu"
                                            name="chucvu" value="" size="60" maxlength="128"
                                            class="form-text" />
                                    </div>
                                </td>
                                <td>
                                    <div class="form-item form-type-textfield form-item-phuong-thuc-lien-he-1-detail">
                                        <input placeholder="Chi tiết" type="text" id="edit-phuong-thuc-lien-he-1-detail"
                                            name="" value="" size="60" maxlength="128"
                                            class="form-text" />
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <a href="javascript:void(0);" class="add-new add-more-phuong-thuc" data-count="1">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm dòng
                        </a>
                        <table class="tai-khoan-ngan-hang table-item">
                            <tr class="border-bg">
                                <td colspan="4"><span>3</span> Tài khoản ngân hàng</td>
                            </tr>
                            <tr class=" hidden-1">
                                <td>
                                    <div class="form-item form-type-select form-item-tai-khoan-ngan-hang-1-bank-name">
                                        <select id="edit-tai-khoan-ngan-hang-1-bank-name"
                                            name="nganhang" class="form-select">
                                            <option value="" selected="selected">- Tên ngân hàng -</option>
                                            <option value="中国农业银行">中国农业银行</option>
                                            <option value="中国工商银行">中国工商银行</option>
                                            <option value="中国建设银行">中国建设银行</option>
                                            <option value="中国银行">中国银行</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div
                                        class="form-item form-type-textfield form-item-tai-khoan-ngan-hang-1-so-tai-khoan">
                                        <input placeholder="Số tài khoản" type="text"
                                            id="edit-tai-khoan-ngan-hang-1-so-tai-khoan"
                                            name="stk" value="" size="60"
                                            maxlength="128" class="form-text" />
                                    </div>
                                </td>
                                <td>
                                    <div
                                        class="form-item form-type-textfield form-item-tai-khoan-ngan-hang-1-chu-tai-khoan">
                                        <input placeholder="Chủ tài khoản" type="text"
                                            id="edit-tai-khoan-ngan-hang-1-chu-tai-khoan"
                                            name="chutaikhoan" value="" size="60"
                                            maxlength="128" class="form-text" />
                                    </div>
                                </td>
                                <td>
                                    <div
                                        class="form-item form-type-textfield form-item-tai-khoan-ngan-hang-1-chi-nhanh">
                                        <input placeholder="Chi nhánh" type="text"
                                            id="edit-tai-khoan-ngan-hang-1-chi-nhanh"
                                            name="chinhanh" value="" size="60" maxlength="128"
                                            class="form-text" />
                                    </div>
                                </td>
                            </tr>
                        </table>
                    ><input type="submit" id="edit-submit" name="op" value="Thêm mới"
                            class="form-submit" />
                    </div>
                </form>
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
    <!-- End of widget script -->
    <a href="https://zalo.me/1457414119565439158" target="_blank" class="zalo-page">
        <img src="/sites/all/themes/giaodiennguoidung/images/zalo-logo.png" />
    </a>
    <style>
        #thongbao{
            background-color: #33cc33;
            color:white;
        }
        #thongbao h6{
            color:white;
            font-size:16px;
            font-style:italic;
        }
        </style>
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
        src="https://www.thuongdo.com/sites/default/files/languages/vi_in2komZFFnsjt_72XE_KDM2awjJk45aiyeS5-nQPEpM.js?s18gps">
    </script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/libraries/jgrowl/jquery.jgrowl.min.js?s18gps"></script>
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/modules/contrib/nicemessages/js/nicemessages.js?s18gps"></script>
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
    <script type="text/javascript"
        src="https://www.thuongdo.com/sites/all/themes/giaodiennguoidung/js/giaodiennguoidung.js?s18gps"></script>
    <script type="text/javascript">

    <!--//
    -->
    <![CDATA[//><!--
jQuery.extend(Drupal.settings, {"basePath":"\/","pathPrefix":"","ajaxPageState":{"theme":"giaodiennguoidung","theme_token":"YkzGEbEKenN4RupQKwqARiTh_kfQt4S6wgdqxp8qoCo","js":{"sites\/all\/modules\/developer\/thuongdo_export\/js\/j-alert\/jquery.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/gritter\/jquery.gritter.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/html5Uploader\/jquery.html5uploader.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/js\/uikit.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/js\/components\/tooltip.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/js\/components\/notify.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/jquery.form.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/jquery.validate.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/additional-methods.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/jquery.barrating.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/chosen\/chosen.jquery.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/thuongdo_js.js":1,"sites\/all\/modules\/developer\/thuongdo_vidientu\/js\/thuongdo_vidientu.js":1,"sites\/all\/modules\/contrib\/jquery_update\/replace\/jquery\/1.8\/jquery.min.js":1,"misc\/jquery-extend-3.4.0.js":1,"misc\/jquery-html-prefilter-3.5.0-backport.js":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"public:\/\/languages\/vi_in2komZFFnsjt_72XE_KDM2awjJk45aiyeS5-nQPEpM.js":1,"sites\/all\/libraries\/jgrowl\/jquery.jgrowl.min.js":1,"sites\/all\/modules\/contrib\/nicemessages\/js\/nicemessages.js":1,"misc\/autocomplete.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/json2.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/autoNumeric.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/cycle2.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/happy_new_year.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/css3-animate-it.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/owl.carousel.min.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/giaodiennguoidung.js":1},"css":{"modules\/system\/system.base.css":1,"modules\/system\/system.menus.css":1,"modules\/system\/system.messages.css":1,"modules\/system\/system.theme.css":1,"modules\/aggregator\/aggregator.css":1,"sites\/all\/modules\/contrib\/date\/date_api\/date.css":1,"sites\/all\/modules\/contrib\/date\/date_popup\/themes\/datepicker.1.7.css":1,"modules\/field\/theme\/field.css":1,"modules\/node\/node.css":1,"modules\/user\/user.css":1,"sites\/all\/modules\/contrib\/views\/css\/views.css":1,"sites\/all\/modules\/contrib\/ckeditor\/css\/ckeditor.css":1,"sites\/all\/modules\/contrib\/ctools\/css\/ctools.css":1,"sites\/all\/libraries\/jgrowl\/jquery.jgrowl.min.css":1,"sites\/all\/modules\/contrib\/nicemessages\/css\/nicemessages_positions.css":1,"sites\/all\/modules\/contrib\/nicemessages\/css\/nicemessages_drupal.css":1,"sites\/all\/modules\/contrib\/nicemessages\/css\/shadows.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/lobibox\/css\/lobibox.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/chosen\/chosen.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/css\/uikit.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/css\/components\/tooltip.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/css\/components\/notify.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/css\/components\/progress.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/css\/thuongdo_export.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/css\/fontawesome-stars.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/gritter\/css\/jquery.gritter.css":1,"sites\/all\/modules\/developer\/thuongdo_khieunai\/css\/thuongdo_khieunai.css":1,"sites\/all\/modules\/developer\/thuongdo_vidientu\/css\/thuongdo_vidientu.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/font-awesome.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/skins\/square\/blue.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/animations.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/owl.carousel.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/owl.theme.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/owl.transitions.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/style.css":1}},"nicemessages":{"position":"center","items":[]},"urlIsAjaxTrusted":{"\/nha-cung-cap\/add":true}});
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
