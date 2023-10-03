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
                <form class="tim-kiem-add-form" target="_blank" action="/dat-hang" method="post"
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
                                <input
                                    placeholder="Chào Vo Hoang Tien (FPL HCM_K17), chiều nay bạn muốn tìm gì: nhập link, từ khóa..."
                                    type="text" id="edit-keyword" name="keyword" value="" size="60" maxlength="128"
                                    class="form-text form-autocomplete" /><input type="hidden"
                                    id="edit-keyword-autocomplete"
                                    value="https://www.thuongdo.com/index.php?q=tim-kiem/autocomplete"
                                    disabled="disabled" class="autocomplete" />
                            </div>
                        </div><input type="submit" id="edit-submit--2" name="op" value="Tìm kiếm"
                            class="form-submit" /><input type="hidden" name="form_build_id"
                            value="form-WOUYCH_ZdU_DOwA21HbFbhI30-lEffeebABIdQSTltE" />
                        <input type="hidden" name="form_token" value="k9FNHv1AvrVA28DHsbBo9JckcQD-jnt56w-AteZ288c" />
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
        <form class="dat-hang-online-form" action="{{ url('/addorder') }}" method="post" enctype="multipart/form-data"
            id="baiviet-dat-hang-online-form" accept-charset="UTF-8">
            <div>
                <ul class="step-action">
                    @csrf
                    <li class="active"><b>01</b> Tạo đơn hàng</li>
                    <li><b>02</b> Chờ báo giá</li>
                    <li><b>03</b> Đặt cọc</li>
                    <li><b>04</b> Đặt hàng</li>
                    <li><b>05</b> Vận chuyển</li>
                    <li class="last"><b>06</b> Nhận hàng</li>
                </ul>
                <span class="ti-gia" style="display:none;">3470</span>
                <div class="uk-alert uk-alert-danger clearfix" style="clear: both"><b>Lưu ý:</b> Chức năng <b>upload ảnh
                        sản phẩm</b> đã hoàn thiện. Quý khách nên <b>upload ảnh sản phẩm</b> để được đặt hàng chính xác
                    và nhanh nhất. Trân trọng !</div>
                <table class="sticky-enabled">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Hình ảnh</th>
                            <th>Thuộc tính</th>
                            <th>Đơn giá <br /> (<span class="fa fa-yen"></span>)</th>
                            <th>Số lượng</th>
                            <th>Ghi chú khác</th>
                            <th>Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hidden-0 odd">
                            <td>1</td>
                            <td>
                                <div class="hinh-anh">
                                    <div class="product-img img-link" href="javascript:;" target="_blank">
                                        <!-- <img class="img-reponsive img-upload-dathang img-upload-dathang-1" src="/sites/all/themes/giaodiennguoidung/images/image-no-image.png">
                            <a href="javascript:;" class="img-upload-update img-upload-left img-upload-dathang">Tải</a>
                            <a href="javascript:;" class="img-upload-update img-upload-right open-modal-img" data-reveal-id="upload-img-modal" data-id=1>Link</a>
                            <input type="text" name="product_image[1]" class="btn-hd-upload product-image-1" style="display: none">
                            <input type="text" name="product_image_link[1]" class="image_link" style="display: none"> -->
                                        <div id="myfileupload">
                                            <input type="file" id="uploadfile" name="img" onchange="readURL(this);" />
                                        </div>
                                        <div id="img-modal-1" class="uk-modal">
                                            <div class="uk-modal-dialog uk-modal-smallest">
                                                <a class="uk-modal-close uk-close"></a>
                                                <input type="text" class="popup-link-img" data-i=1
                                                    placeholder="Link ảnh sản phẩm" style="width: 65%">
                                                <a href="#" class="uk-button uk-button-primary uk-upload"
                                                    class="accept-upload">Chấp nhận</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-item form-type-textfield form-item-sanpham-item-1-tensanpham">
                                    <input class="product-name form-text" name="tensp" onblur="don_hang_update_qty(1)"
                                        placeholder="Tên sản phẩm - Ghi Tiếng Việt" type="text"
                                        id="edit-sanpham-item-1-tensanpham" value="ggggg" size="60" maxlength="250" />
                                </div>
                                <div class="form-item form-type-textarea form-item-sanpham-item-1-thongso">
                                    <div class="form-textarea-wrapper resizable"><textarea
                                            class="product-name form-textarea" onblur="don_hang_update_qty(1)"
                                            placeholder="VD: Màu sắc, size, kích thước,...."
                                            id="edit-sanpham-item-1-thongso" name="chitietsp" cols="60"
                                            rows="5">gggggg</textarea></div>
                                </div>
                                <div class="form-item form-type-textfield form-item-sanpham-item-1-link">
                                    <input onblur="don_hang_update_qty(1)" class="link-item form-text"
                                        placeholder="Link sản phẩm" type="text" id="edit-sanpham-item-1-link"
                                        name="link" value="" size="60" maxlength="250" />
                                </div>
                            </td>
                            <td>
                                <div class="form-item form-type-textfield form-item-sanpham-item-1-price">
                                    <input class="auto price form-text" onblur="don_hang_update_qty(1)"
                                        placeholder="Đơn giá" type="number" id="edit-sanpham-item-1-price" name="gia"
                                        value="10,000.00" size="60" maxlength="128" />
                                </div>
                            </td>
                            <td><a href="#" class="tb-qty tb-reduce"> - </a>
                                <div class="form-item form-type-textfield form-item-sanpham-item-1-qty">
                                    <input class="qty form-text" onblur="don_hang_update_qty(1)" placeholder="Số lượng"
                                        type="number" id="edit-sanpham-item-1-qty" name="soluong" value="1" size="60"
                                        maxlength="128" />
                                </div>
                                <a href="#" class="tb-qty tb-increase"> + </a>
                            </td>
                            <td>
                                <div class="form-item form-type-textarea form-item-sanpham-item-1-ghichu-tvh">
                                    <div class="form-textarea-wrapper resizable"><textarea
                                            class="product-ghichu form-textarea" placeholder="Ghi chú sản phẩm..."
                                            id="ghichu" name="sanpham_item[1][ghichu_tvh]" cols="60"
                                            rows="5"></textarea></div>
                                </div>
                            </td>
                            <td>
                                <div class="thanh-tien">
                                    <div class="thanh-tong-tien">
                                        <div
                                            class="form-item form-type-textfield form-item-sanpham-item-1-tongtien form-disabled">
                                            <input class="thanh-tien form-text" disabled="disabled" type="text"
                                                id="edit-sanpham-item-1-tongtien" name="thanhtien" value="" size="60"
                                                maxlength="128" />
                                        </div>

                                        <script>
                                        // Lấy các phần tử HTML cần thiết
                                        const giaInput = document.getElementById('edit-sanpham-item-1-price');
                                        const soluongInput = document.getElementById('edit-sanpham-item-1-qty');
                                        const thanhtienInput = document.getElementById('edit-sanpham-item-1-tongtien');

                                        // Hàm tính toán tổng tiền
                                        function tinhTongTien() {
                                            const gia = parseFloat(giaInput.value.replace(',',
                                            '')); // Chuyển đổi gia về số, loại bỏ dấu ','
                                            const soluong = parseInt(soluongInput.value);
                                            const thanhtien = gia * soluong;

                                            // Hiển thị giá trị trong input thanhtien
                                            thanhtienInput.value = thanhtien.toFixed(2).replace(/\d(?=(\d{3})+\.)/g,
                                                '$&,'); // Định dạng giá trị tiền tệ
                                        }


                                        // Sự kiện khi người dùng thay đổi gia hoặc soluong
                                        giaInput.addEventListener('input', tinhTongTien);
                                        soluongInput.addEventListener('input', tinhTongTien);

                                        // Tính tổng tiền ban đầu khi trang được tải
                                        tinhTongTien();
                                        </script>

                                        <a onClick="don_hang_website_cart_delete(49)"
                                            class="icon-delete dat-hang-delete-item-49" href="javascript:void(0);"><span
                                                class="icon xoa"></span></a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="hidden-49 hidden  even">
                            <td>50</td>
                            <td>
                                <div class="hinh-anh">
                                    <div class="product-img img-link" href="javascript:;" target="_blank">
                                        <img class="img-reponsive img-upload-dathang img-upload-dathang-50"
                                            src="/sites/all/themes/giaodiennguoidung/images/image-no-image.png">
                                        <a href="javascript:;"
                                            class="img-upload-update img-upload-left img-upload-dathang">Tải</a>
                                        <a href="javascript:;" class="img-upload-update img-upload-right open-modal-img"
                                            data-reveal-id="upload-img-modal" data-id=50>Link</a>
                                        <input type="text" name="product_image[50]"
                                            class="btn-hd-upload product-image-50" style="display: none">
                                        <input type="text" name="product_image_link[50]" class="image_link"
                                            style="display: none">
                                        <div id="img-modal-50" class="uk-modal">
                                            <div class="uk-modal-dialog uk-modal-smallest">
                                                <a class="uk-modal-close uk-close"></a>
                                                <input type="text" class="popup-link-img" data-i=50
                                                    placeholder="Link ảnh sản phẩm" style="width: 65%">
                                                <a href="#" class="uk-button uk-button-primary uk-upload"
                                                    class="accept-upload">Chấp nhận</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-item form-type-textfield form-item-sanpham-item-50-tensanpham">
                                    <input class="product-name form-text" onblur="don_hang_update_qty(50)"
                                        placeholder="Tên sản phẩm - Ghi Tiếng Việt" type="text"
                                        id="edit-sanpham-item-50-tensanpham" name="sanpham_item[50][tensanpham]"
                                        value="" size="60" maxlength="250" />
                                </div>
                                <div class="form-item form-type-textarea form-item-sanpham-item-50-thongso">
                                    <div class="form-textarea-wrapper resizable"><textarea
                                            class="product-name form-textarea" onblur="don_hang_update_qty(50)"
                                            placeholder="VD: Màu sắc, size, kích thước,...."
                                            id="edit-sanpham-item-50-thongso" name="sanpham_item[50][thongso]" cols="60"
                                            rows="5"></textarea></div>
                                </div>
                                <div class="form-item form-type-textfield form-item-sanpham-item-50-link">
                                    <input onblur="don_hang_update_qty(50)" class="link-item form-text"
                                        placeholder="Link sản phẩm" type="text" id="edit-sanpham-item-50-link"
                                        name="sanpham_item[50][link]" value="" size="60" maxlength="250" />
                                </div>
                            </td>
                            <td>
                                <div class="form-item form-type-textfield form-item-sanpham-item-50-price">
                                    <input class="auto price form-text" onblur="don_hang_update_qty(50)"
                                        placeholder="Đơn giá" type="text" id="edit-sanpham-item-50-price"
                                        name="sanpham_item[50][price]" value="10" size="60" maxlength="128" />
                                </div>
                            </td>
                            <td><a href="#" class="tb-qty tb-reduce"> - </a>
                                <div class="form-item form-type-textfield form-item-sanpham-item-50-qty">
                                    <input class="qty form-text" onblur="don_hang_update_qty(50)" placeholder="Số lượng"
                                        type="text" id="edit-sanpham-item-50-qty" name="sanpham_item[50][qty]" value="1"
                                        size="60" maxlength="128" />
                                </div>
                                <a href="#" class="tb-qty tb-increase"> + </a>
                            </td>
                            <td>
                                <div class="form-item form-type-textarea form-item-sanpham-item-50-ghichu-tvh">
                                    <div class="form-textarea-wrapper resizable"><textarea
                                            class="product-ghichu form-textarea" placeholder="Ghi chú sản phẩm..."
                                            id="edit-sanpham-item-50-ghichu-tvh" name="sanpham_item[50][ghichu_tvh]"
                                            cols="60" rows="5"></textarea></div>
                                </div>
                            </td>
                            <td>
                                <div class="thanh-tien">
                                    <div class="thanh-tong-tien">
                                        <div
                                            class="form-item form-type-textfield form-item-sanpham-item-50-tongtien form-disabled">
                                            <input class="thanh-tien form-text" disabled="disabled" type="text"
                                                id="edit-sanpham-item-50-tongtien" name="sanpham_item[50][tongtien]"
                                                value="" size="60" maxlength="128" />
                                        </div>
                                        <a onClick="don_hang_website_cart_delete(50)"
                                            class="icon-delete dat-hang-delete-item-50" href="javascript:void(0);"><span
                                                class="icon xoa"></span></a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <a rel="3" href="javascript:void(0);" class="them-moi">+ Thêm sản phẩm</a>
                <div data-product-count="0" class="tong-tien-tam-tinh">
                    <p class="tong-tien-hang" data-total-price="34700000">Tổng tiền đặt hàng:
                        <span><b>34,700,000</b><em>đ</em></span></p>
                    <p class="phi-dat-hang">Phí đặt hàng<a href="/don-hang/thong-tin-cap-do" target="_blank"><i
                                class="fa fa-question-circle" aria-hidden="true"></i></a>: <span><b
                                data-price="0">0</b><em>đ</em></span></p>
                    <p class="phi-kiem-dem" data-product-total="1">Phí kiểm đếm<a href="/don-hang/thong-tin-cap-do"
                            target="_blank"><i class="fa fa-question-circle" aria-hidden="true"></i></a>:
                        <span><b></b><em>đ</em></span></p>
                    <p class="phi-dong-kien">Phí đóng kiện<a href="/don-hang/thong-tin-cap-do" target="_blank"><i
                                class="fa fa-question-circle" aria-hidden="true"></i></a>: <span><b></b></span></p>
                    <p class="tong-tien">Tổng tiền/chưa có phí ship TQ: <span><b>34,700,000</b><em>đ</em></span></p>
                </div>

                <div class="info">
                    <div class="yeu-cau-khac">
                        <div class="form-item form-type-radios form-item-van-chuyen">
                            <label for="edit-van-chuyen">Vận chuyển </label>
                            <div id="edit-van-chuyen" class="form-radios">
                                <div class="form-item form-type-radio form-item-van-chuyen">
                                    <input type="radio" id="edit-van-chuyen-1" name="vanchuyen" value="1"
                                        checked="checked" class="form-radio" /> <label class="option"
                                        for="edit-van-chuyen-1">Nhanh </label>

                                </div>
                                <div class="form-item form-type-radio form-item-van-chuyen">
                                    <input type="radio" id="edit-van-chuyen-2" name="vanchuyen" value="2"
                                        class="form-radio" /> <label class="option" for="edit-van-chuyen-2">Thường
                                    </label>

                                </div>
                            </div>
                        </div>
                        <div class="form-item form-type-checkboxes form-item-yeu-cau-khac form-disabled">
                            <label for="edit-yeu-cau-khac">Yêu cầu khác </label>
                            <div id="edit-yeu-cau-khac" class="form-checkboxes">
                                <div class="form-item form-type-checkbox form-item-yeu-cau-khac-1 form-disabled">
                                    <input disabled="disabled" type="checkbox" id="edit-yeu-cau-khac-1"
                                        name="yeu_cau_khac[1]" value="1" class="form-checkbox" /> <label class="option"
                                        for="edit-yeu-cau-khac-1">Kiểm hàng </label>

                                </div>
                                <div class="form-item form-type-checkbox form-item-yeu-cau-khac-2 form-disabled">
                                    <input disabled="disabled" type="checkbox" id="edit-yeu-cau-khac-2"
                                        name="yeu_cau_khac[2]" value="2" class="form-checkbox" /> <label class="option"
                                        for="edit-yeu-cau-khac-2">Đóng gỗ </label>

                                </div>
                            </div>
                        </div>
                        <div class="form-item form-type-checkbox form-item-khai-thue-id">
                            <input type="checkbox" id="edit-khai-thue-id" name="khai_thue_id" value="1"
                                class="form-checkbox" /> <label class="option" for="edit-khai-thue-id">Khai thuế 100%
                                hàng có hóa đơn GTGT </label>

                        </div>
                    </div>
                    <div class="ttcn-wrap-basic">
                        <div class="ttcn-wrap-title"><i class="fa fa-map-maker"></i> THÔNG TIN MUA HÀNG</div>
                        <div class="ttcn-wrap-content">
                            <div id="edit-container-check" class="form-radios">
                                <div class="form-item form-type-radio form-item-container-check">
                                    <input type="text" id="edit-container-check-other" name="thongtin" value=""
                                        class="form-radio" />

                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="other-diachi" class="other-diachi">
                        <div id="edit-other-diachi" class="form-wrapper"></div>
                    </div>
                    <div class="info-basic">
                        <div class="ttcn-wrap-basic">
                            <div class="ttcn-wrap-title"><i class="fa fa-map-maker"></i> TRỤ SỞ NHẬN HÀNG (*)</div>
                            <div class="ttcn-wrap-content">
                                <div id="edit-truso-id" class="form-radios">
                                    <div class="form-item form-type-radio form-item-truso-id">
                                        <input type="radio" id="edit-truso-id-1" name="truso_id" value="1"
                                            checked="checked" class="form-radio" /> <label class="option"
                                            for="edit-truso-id-1"><b>Hà Nội</b> - Số 30 Ngõ 298 Trần Điền, Định Công,
                                            Hoàng Mai, Hà Nội - <a class="label-bs label-bs-primary"
                                                id="set-default-truso" data-id="1" href="#">Đặt mặc định</a> </label>

                                    </div>
                                    <div class="form-item form-type-radio form-item-truso-id">
                                        <input type="radio" id="edit-truso-id-7" name="truso_id" value="7"
                                            class="form-radio" /> <label class="option" for="edit-truso-id-7"><b>Hà
                                                Nội</b> - 107 E2 ngõ 27 phố Tạ Quang Bửu,Phường Bách Khoa, Hai Bà Trưng,
                                            Hà Nội - <a class="label-bs label-bs-primary" id="set-default-truso"
                                                data-id="7" href="#">Đặt mặc định</a> </label>

                                    </div>
                                    <div class="form-item form-type-radio form-item-truso-id">
                                        <input type="radio" id="edit-truso-id-10" name="truso_id" value="10"
                                            class="form-radio" /> <label class="option" for="edit-truso-id-10"><b>Hà
                                                Nội</b> - Số 21, Đường 18M, Mỗ Lao, Hà Đông, Hà Nội - <a
                                                class="label-bs label-bs-primary" id="set-default-truso" data-id="10"
                                                href="#">Đặt mặc định</a> </label>

                                    </div>
                                    <div class="form-item form-type-radio form-item-truso-id">
                                        <input type="radio" id="edit-truso-id-3" name="truso_id" value="3"
                                            class="form-radio" /> <label class="option" for="edit-truso-id-3"><b>Hồ Chí
                                                Minh</b> - 47 Nguyễn Văn Luông, Quận 6, TP.Hồ Chí Minh - <a
                                                class="label-bs label-bs-primary" id="set-default-truso" data-id="3"
                                                href="#">Đặt mặc định</a> </label>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-action"><input type="submit" id="edit-submit" name="op" value="Đặt hàng"
                            class="form-submit" /></div><input type="hidden" name="form_build_id"
                        value="form-eHaiBEYjl6aAPLExS6D2On88kgPa5KjBk9qEejz7lCQ" />
                    <input type="hidden" name="form_token" value="v56JV3qrIJAlDb4FDVXTQeHgVyYXg9oRpw4jlsLNHCY" />
                    <input type="hidden" name="form_id" value="baiviet_dat_hang_online_form" />
                </div>
        </form>
    </div>
</div>
</div>
<form class="upload-avatar" method="post" enctype="multipart/form-data" style="display: none;">
    <input type="file" class="btn-upload" name="uploadAvatarKienhang">
    <input type="submit" name="submit_form" />
</form>

<a href="https://zalo.me/1457414119565439158" target="_blank" class="zalo-page">
    <img src="/sites/all/themes/giaodiennguoidung/images/zalo-logo.png" />
</a>




@endsection
