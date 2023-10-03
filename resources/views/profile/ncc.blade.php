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
                <form class="tim-kiem-add-form" target="_blank" action="/nha-cung-cap" method="post"
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
                                <input placeholder="Chào Tiến, sáng nay bạn muốn tìm gì: nhập link, từ khóa..."
                                    type="text" id="edit-keyword" name="keyword" value="" size="60" maxlength="128"
                                    class="form-text form-autocomplete" /><input type="hidden"
                                    id="edit-keyword-autocomplete"
                                    value="https://www.thuongdo.com/index.php?q=tim-kiem/autocomplete"
                                    disabled="disabled" class="autocomplete" />
                            </div>
                        </div><input type="submit" id="edit-submit--2" name="op" value="Tìm kiếm"
                            class="form-submit" /><input type="hidden" name="form_build_id"
                            value="form-FW-0HQgig_XWmT0t2FtNDptKKFZdpVj2aua21vIfDX8" />
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
        <form class="don-hang-da-dat-search-form" action="/nha-cung-cap" method="post"
            id="nha-cung-cap-user-search-form" accept-charset="UTF-8">
            <div>
                <div class="form-item form-type-select form-item-nganh-hang">
                    <select id="edit-nganh-hang" name="nganh_hang" class="form-select">
                        <option value="" selected="selected">- Chọn ngành hàng kinh doanh -</option>
                        <option value="1">Quần áo</option>
                        <option value="2">Giày dép</option>
                        <option value="4">Đồ điện tử / điện máy</option>
                        <option value="5">Nội thất</option>
                        <option value="6">Linh kiện điện tử / điện máy</option>
                        <option value="7">Phụ kiện thời trang</option>
                        <option value="8">Mỹ phẩm</option>
                        <option value="9">Đồ chơi</option>
                        <option value="10">Vải vóc</option>
                        <option value="11">Tóc giả</option>
                        <option value="12">Văn phòng phẩm</option>
                        <option value="13">Đồ cơ khí</option>
                        <option value="16">Đồ gia dụng</option>
                        <option value="17">Dây lưng</option>
                        <option value="19">Phụ tùng xe</option>
                        <option value="22">Đồ trang trí / decor</option>
                        <option value="25">Phụ kiện đèn</option>
                        <option value="28">Xe điện</option>
                        <option value="31">Thức ăn vật nuôi</option>
                        <option value="32">Thực Phẩm</option>
                        <option value="33">Phụ kiện vật nuôi</option>
                        <option value="34">Váy</option>
                        <option value="35">Quần đùi</option>
                        <option value="36">Áo len</option>
                        <option value="37">Áo phông</option>
                        <option value="38">Áo sơ mi</option>
                        <option value="39">Quần áo trẻ em</option>
                        <option value="40">Áo lông vũ / Áo lông thú</option>
                        <option value="41">Áo da</option>
                        <option value="42">Áo ghile</option>
                        <option value="43">Áo gió</option>
                        <option value="44">Áo măng tô</option>
                        <option value="45">Áo khoác len</option>
                        <option value="48">Giày nam</option>
                        <option value="49">Giày thể thao</option>
                        <option value="50">Giày trẻ em</option>
                        <option value="51">Bốt</option>
                        <option value="52">Hộp đựng giày</option>
                        <option value="53">Linh kiện / phụ kiện máy tính </option>
                        <option value="54">Linh kiện đồng hồ</option>
                        <option value="55">Giày da</option>
                        <option value="56">Giày bệt</option>
                        <option value="57">Dầu mỡ bảo dưỡng</option>
                        <option value="58">Túi sưởi</option>
                        <option value="59">Khuyên tai</option>
                        <option value="60">Kẹp tóc</option>
                        <option value="61">Nhẫn</option>
                        <option value="62">Ốp điện thoại</option>
                        <option value="63">Lược</option>
                        <option value="64">Áo khoác trẻ em</option>
                        <option value="65">Quạt điện</option>
                        <option value="66">Bờm tóc</option>
                        <option value="67">Vòng tay</option>
                        <option value="68">Vòng cổ </option>
                        <option value="69">Đồng hồ đeo tay</option>
                        <option value="70">Bình nước</option>
                        <option value="71">Lọ hoa</option>
                        <option value="72">Cốc</option>
                        <option value="73">Tai nghe</option>
                        <option value="74">Mũ len</option>
                        <option value="77">Nồi</option>
                        <option value="78">Mũ</option>
                        <option value="79">Lót chuột</option>
                        <option value="80">Găng tay</option>
                        <option value="81">Chuột bàn phím</option>
                        <option value="82">Chảo</option>
                        <option value="83">Tất</option>
                        <option value="84">Phụ kiện ô tô</option>
                        <option value="85">Bát</option>
                        <option value="86">Đĩa </option>
                        <option value="88">Đèn</option>
                        <option value="89">Kính</option>
                        <option value="90">Nhạc cụ</option>
                        <option value="91">Móng giả</option>
                        <option value="92">Dép </option>
                        <option value="93">Bộ ngủ</option>
                        <option value="94">Đồ nội thất</option>
                        <option value="95">Khăn tay</option>
                        <option value="97">Quần áo (bộ)</option>
                        <option value="98">Khăn quàng</option>
                        <option value="99">Khóa cửa</option>
                        <option value="100">Huy hiệu cài áo</option>
                        <option value="101">Phụ kiện trang điểm</option>
                        <option value="102">Áo khoác</option>
                        <option value="103">Áo tắm</option>
                        <option value="104">Ví</option>
                        <option value="105">Balo</option>
                        <option value="106">Chăn ga, gối</option>
                        <option value="107">Bàn phím</option>
                        <option value="108">Bàn chải</option>
                        <option value="109">Phụ kiện câu cá</option>
                        <option value="111">Quần áo thể thao</option>
                        <option value="112">Phụ kiện làm móng</option>
                        <option value="113">Xe đạp</option>
                        <option value="114">Kệ đựng mỹ phẩm</option>
                        <option value="115">Sổ / Sách</option>
                        <option value="116">Tay nắm cửa</option>
                        <option value="117">Gấu bông</option>
                        <option value="118">Túi đựng quần áo</option>
                        <option value="119">Gương</option>
                        <option value="120">Cờ</option>
                        <option value="121">Ốc vít</option>
                        <option value="122">Động cơ máy bơm</option>
                        <option value="123">Tượng trang trí</option>
                        <option value="124">Mô hình đồ chơi</option>
                        <option value="125">Nút tai</option>
                        <option value="126">Tượng Phật</option>
                        <option value="128">Quần tất</option>
                        <option value="129">Ruy băng</option>
                        <option value="130">Phụ kiện mắt kính</option>
                        <option value="131">Quần dài</option>
                        <option value="132">Giày cao gót</option>
                        <option value="133">Túi xách</option>
                        <option value="135">Râu ăng ten</option>
                        <option value="136">Linh / phụ kiện cơ khí</option>
                        <option value="137">Công tắc</option>
                        <option value="138">Bộ điều khiển nhiệt độ</option>
                        <option value="139">Dây cáp/ dây điện / sạc </option>
                        <option value="140">Đồ bảo hộ lao động</option>
                        <option value="141">Máy xay</option>
                        <option value="142">Thiết bị nhà vệ sinh</option>
                        <option value="143">Hoa khô / hoa giả / cây giả</option>
                        <option value="144">Cần câu</option>
                        <option value="146">Thìa </option>
                        <option value="147">Đũa</option>
                        <option value="148">Dây buộc tóc</option>
                        <option value="149">Máy khoan</option>
                        <option value="150">Kệ nhà bếp</option>
                        <option value="151">Ắc quy</option>
                        <option value="152">Thiết bị mạng</option>
                        <option value="153">Dầu bảo dưỡng xe đạp</option>
                        <option value="154">Máy hàn</option>
                        <option value="155">Máy lọc không khí</option>
                        <option value="156">Keo dán </option>
                        <option value="157">Móc chìa khóa</option>
                        <option value="158">Động cơ</option>
                        <option value="159">Máy cưa</option>
                        <option value="161">Máy rửa xe</option>
                        <option value="162">Pin</option>
                        <option value="163">Camera</option>
                        <option value="164">Băng dính</option>
                        <option value="165">Quạt giấy</option>
                        <option value="166">Hộp giấy</option>
                        <option value="167">Phụ / linh kiện nha khoa</option>
                        <option value="168">Phụ kiện bàn trà</option>
                        <option value="169">Dung dịch tẩy rửa</option>
                        <option value="170">Dây cảm biến</option>
                        <option value="171">Thiệp, lì xì, phong bì</option>
                        <option value="172">Hộp sắt</option>
                        <option value="173">Hộp nhựa</option>
                        <option value="174">Sạc dự phòng</option>
                        <option value="175">Dụng cụ thể thao</option>
                        <option value="176">Bút</option>
                        <option value="177">Đồng hồ treo tường</option>
                        <option value="178">Loa</option>
                        <option value="179">Linh phụ kiện máy in</option>
                        <option value="180">Thiết bị định vị</option>
                        <option value="181">Gậy bi-a</option>
                        <option value="182">Máy bắn đinh</option>
                        <option value="183">Đồ chơi golf</option>
                        <option value="184">Linh kiện điện thoại</option>
                        <option value="185">Kệ nhà tắm</option>
                        <option value="186">Giấy</option>
                        <option value="187">Bảng mạch</option>
                        <option value="188">Khung gỗ</option>
                        <option value="189">Nhiệt kế</option>
                        <option value="190">Nến</option>
                        <option value="191">Máy massage</option>
                        <option value="192">Vật lý trị liệu</option>
                        <option value="193">Nội y</option>
                        <option value="194">Vòi nước</option>
                        <option value="195">Bếp nướng</option>
                        <option value="196">Cái ô</option>
                        <option value="197">Túi nilon</option>
                        <option value="198">Móc quần áo</option>
                        <option value="199">Kính lúp</option>
                        <option value="200">Máy phun khói</option>
                        <option value="201">Giá đỡ điện thoại</option>
                        <option value="202">Màn hình công nghiệp</option>
                        <option value="203">Máy đo góc</option>
                        <option value="204">Vali</option>
                        <option value="205">Cân điện tử</option>
                        <option value="206">Ấm chén</option>
                        <option value="208">Lọ thủy tinh</option>
                        <option value="209">Túi giấy</option>
                        <option value="210">Chà gót chân</option>
                        <option value="211">Bàn tính</option>
                        <option value="212">Phụ kiện làm bánh</option>
                        <option value="213">Bộ điều khiển đánh lửa</option>
                        <option value="214">Cái diều</option>
                        <option value="215">Dụng cụ vệ sinh quét dọn</option>
                        <option value="216">Hộp gỗ</option>
                        <option value="217">Đồ dùng ăn sushi</option>
                        <option value="218">Đồ rửa cốc</option>
                        <option value="219">Hộp đựng trang sức</option>
                        <option value="220">Phụ kiện hóa trang / cosplay</option>
                        <option value="221">Áo nỉ hoodie</option>
                        <option value="222">Ròng rọc</option>
                        <option value="223">Bàn là</option>
                        <option value="224">Cờ lê</option>
                        <option value="225">Móc xích đu</option>
                        <option value="226">Máy đóng chất lỏng</option>
                        <option value="227">Hạt xâu vòng</option>
                        <option value="228">Biến tần</option>
                        <option value="229">Dao kéo</option>
                        <option value="230">Lọ đựng gia vị</option>
                        <option value="231">Gậy chụp ảnh</option>
                        <option value="232">Dụng cụ xăm</option>
                        <option value="233">Thảm</option>
                        <option value="234">Ghế massage</option>
                        <option value="235">Máy hút bụi</option>
                        <option value="236">Gạch</option>
                        <option value="237">Giấy dán tường</option>
                        <option value="238">Đồng hồ báo thức</option>
                        <option value="239">Ấm điện</option>
                        <option value="240">Máy pha cà phê</option>
                        <option value="241">Cây thông noel</option>
                        <option value="242">Đồ trang trí Noel</option>
                        <option value="243">Đai nịt bụng</option>
                        <option value="244">Con chip</option>
                        <option value="245">Hộp cơm</option>
                        <option value="246">Khăn</option>
                        <option value="247">Van </option>
                        <option value="248">Túi đồ gia dụng</option>
                        <option value="249">Máy khử trùng</option>
                        <option value="250">Máy phun sương</option>
                        <option value="251">Cà vạt / nơ</option>
                        <option value="252">Phụ kiện bếp</option>
                        <option value="253">Bẫy chuột</option>
                        <option value="254">Lịch</option>
                        <option value="255">Tranh</option>
                        <option value="256">Lõi lọc</option>
                        <option value="257">Kệ giày</option>
                        <option value="258">Máy đóng sách</option>
                        <option value="259">Linh / phụ kiện máy lọc nước</option>
                        <option value="260">Sticker / hình dán</option>
                        <option value="261">Ghế sofa</option>
                        <option value="263">Màu / mực</option>
                        <option value="264">Lò xo</option>
                        <option value="265">Máy chiếu</option>
                        <option value="266">Đèn pin</option>
                        <option value="267">Ống thông khí/ ống nước</option>
                        <option value="268">Máy nướng bánh mì</option>
                        <option value="269">Nồi cơm điện</option>
                        <option value="270">Ghế</option>
                        <option value="271">Máy niệm phật</option>
                        <option value="272">Áo mưa</option>
                        <option value="273">Nước hoa</option>
                        <option value="274">Kính cường lực điện thoại</option>
                        <option value="275">Kính hiển vi</option>
                        <option value="276">Tấm nhôm</option>
                        <option value="277">Bàn cờ</option>
                        <option value="278">Bộ điều khiển cảm ứng</option>
                        <option value="279">Máy cạo râu</option>
                        <option value="280">Máy sấy tóc</option>
                        <option value="281">Máy đọc sách</option>
                        <option value="282">Ổ cứng</option>
                        <option value="283">Cục phát wifi</option>
                        <option value="284">Máy hút chân không</option>
                        <option value="285">Cúp</option>
                        <option value="286">Cổng USB / USB</option>
                        <option value="287">Bàn</option>
                        <option value="288">Phụ kiện máy đóng gói</option>
                        <option value="289">Đất sét</option>
                        <option value="290">Cầu chì</option>
                        <option value="291">Tấm silicone dẫn nhiệt</option>
                        <option value="293">Khung tranh</option>
                        <option value="294">Khay inox</option>
                        <option value="295">Điều khiển từ xa</option>
                        <option value="296">Máy nén</option>
                        <option value="297">Sim / thẻ nhớ</option>
                        <option value="298">Chậu / xô</option>
                        <option value="299">Máy quét mã vạch</option>
                        <option value="300">Máy tính cầm tay</option>
                        <option value="301">Máy rửa mặt</option>
                        <option value="302">Giá đỡ nến</option>
                        <option value="303">Kìm</option>
                        <option value="304">Bánh xe</option>
                        <option value="305">Lọ xịt / bình xịt</option>
                        <option value="306">Kẹp giấy</option>
                        <option value="307">Bìa kẹp giấy A4</option>
                        <option value="308">Máy khắc</option>
                        <option value="309">Xà phòng</option>
                        <option value="310">Tinh dầu</option>
                        <option value="311">Pin năng lượng mặt trời</option>
                        <option value="312">Bộ mã hóa</option>
                        <option value="313">Máy đo cường độ dòng điện</option>
                        <option value="314">Tăm nước</option>
                        <option value="315">Rèm cửa</option>
                        <option value="316">Ổ điện</option>
                        <option value="317">Lều</option>
                        <option value="318">Cây giống / hạt giống</option>
                        <option value="319">Máy sưởi</option>
                        <option value="320">Máy uốn tóc</option>
                        <option value="321">Kem đánh răng</option>
                        <option value="322">Máy dập</option>
                        <option value="323">Máy phát video</option>
                        <option value="324">Vợt cầu lông</option>
                        <option value="325">Bông tẩy trang</option>
                        <option value="326">Con dấu</option>
                        <option value="327">Kính thực tế ảo</option>
                        <option value="328">Logo</option>
                        <option value="329">Lồng bắt cá</option>
                        <option value="330">Linh / phụ kiện tai nghe</option>
                        <option value="331">Phân bón/ thuốc cho cây</option>
                        <option value="332">Tấm nhựa</option>
                        <option value="333">Giá đỡ bàn</option>
                        <option value="334"> Bộ bấm móng tay</option>
                        <option value="335">Thiết bị y tế</option>
                        <option value="336">Mũ bảo hiểm</option>
                        <option value="337">Tụ điện / điện trở</option>
                        <option value="338">Tạp dề</option>
                        <option value="339">Cần gạt nước</option>
                        <option value="340">Đồng xu</option>
                        <option value="341">Khay gỗ</option>
                        <option value="342">máy dầm đất</option>
                        <option value="343">Huy chương</option>
                        <option value="344">máy dò </option>
                        <option value="345">tấm xốp</option>
                        <option value="346">máy thổi bong bóng</option>
                        <option value="347">đĩa CD</option>
                        <option value="348">cồng/ chiêng / chuông</option>
                        <option value="349">thùng rác</option>
                        <option value="350">nhiệt kế đo nồng độ cồn</option>
                        <option value="351">đá vĩnh cửu</option>
                        <option value="352">màn hình điện thoại</option>
                        <option value="353">vòng bi</option>
                        <option value="354">bánh răng</option>
                        <option value="355">Máy bơm</option>
                        <option value="356">máy in</option>
                        <option value="357">phụ kiện may mặc</option>
                        <option value="358">Máy sấy tay</option>
                        <option value="359">phụ kiện đàn</option>
                        <option value="360">Bông tắm</option>
                        <option value="361">Dây đai</option>
                        <option value="362">Bộ đàm</option>
                        <option value="363">Thanh kim loại</option>
                        <option value="364">Dụng cụ may vá</option>
                        <option value="365">Giá treo tường</option>
                        <option value="366">Bộ chuyển đổi</option>
                        <option value="367">Tủ chống ẩm</option>
                        <option value="368">Xi lanh/ Piston</option>
                        <option value="369">Đệm / Đệm bơm hơi</option>
                        <option value="370">thẻ bài</option>
                        <option value="371">chuông cửa</option>
                        <option value="372">bồn tắm</option>
                        <option value="373">bồn rửa mặt</option>
                        <option value="374">Micro </option>
                        <option value="375">Bình khí</option>
                        <option value="376">lư hương</option>
                        <option value="377">hộp sấy</option>
                        <option value="378">cuộn len</option>
                        <option value="379">bộ định tuyến</option>
                        <option value="380">miếng dán ngực</option>
                        <option value="381">Kệ sách</option>
                        <option value="382">chìa khóa</option>
                        <option value="383">cột cờ</option>
                        <option value="384">bịt tai giữ ấm</option>
                        <option value="385">nôi/ cũi </option>
                        <option value="386"> bịt mắt </option>
                        <option value="387">bông ngoáy tai</option>
                        <option value="388"> Tuốc nơ vít</option>
                        <option value="389">Máy cắt</option>
                        <option value="390">Vợt bóng bàn</option>
                        <option value="391">Máy hút ẩm</option>
                        <option value="392">Tấm cao su</option>
                        <option value="393">thanh nhựa</option>
                        <option value="394">yếm ăn dặm</option>
                        <option value="395">máy giặt</option>
                        <option value="396">trâm cài tóc</option>
                        <option value="397">mũi khoan</option>
                        <option value="398">Máy xông tinh dầu</option>
                        <option value="399">đồng hồ đo vận tốc</option>
                        <option value="400">thùng ủ rượu</option>
                        <option value="401">cánh quạt</option>
                        <option value="402">rổ / giá / làn</option>
                        <option value="403">khuôn</option>
                        <option value="404">màn hình máy tính</option>
                        <option value="405">mô tơ</option>
                        <option value="406">ván trượt</option>
                        <option value="407">dây đeo thẻ</option>
                        <option value="408">phích cắm</option>
                        <option value="409">Cái cáng</option>
                        <option value="410">nắp / nút / núm</option>
                        <option value="411">cái nhíp </option>
                        <option value="412">hương,nhang</option>
                        <option value="413">nhựa lỏng</option>
                        <option value="414">ma nơ canh</option>
                        <option value="415">bỉm/tã</option>
                        <option value="416">Mô đun điều chỉnh điện áp</option>
                        <option value="417">hàng rào</option>
                        <option value="418">Báo động chống trộm</option>
                        <option value="419">máy hút mùi</option>
                        <option value="420">Tủ</option>
                        <option value="421">ống hút</option>
                        <option value="422">dây vợt cầu lông</option>
                        <option value="423">Tấm tản nhiệt</option>
                        <option value="424">Ná bắn chim</option>
                        <option value="425">máy chơi game</option>
                        <option value="426"> tủ trữ đông</option>
                        <option value="427">thùng inox</option>
                        <option value="428">Quả bóng</option>
                        <option value="429">máy cảm biến</option>
                        <option value="430">trạm dự báo thời tiết</option>
                        <option value="431">máy đánh bóng</option>
                        <option value="432">gậy leo nú</option>
                        <option value="433">linh/ phụ kiện máy giặt</option>
                        <option value="434">gậy</option>
                        <option value="435">Quạt</option>
                        <option value="436">máy quẹt thẻ</option>
                        <option value="437">vợt muỗi</option>
                        <option value="438">nam châm</option>
                        <option value="439">cái nạng</option>
                        <option value="440">bóng chữa cháy</option>
                        <option value="441">Giường</option>
                        <option value="442">chiếu</option>
                        <option value="443">cái thước</option>
                        <option value="444">la bàn</option>
                        <option value="445">Máy thở</option>
                        <option value="446">kính áp tròng</option>
                        <option value="447">dây</option>
                        <option value="448">bồn cầu</option>
                        <option value="449">Máy đuổi muỗi</option>
                        <option value="450">con lăn</option>
                        <option value="451">Lót</option>
                        <option value="452">máy mài</option>
                        <option value="453">trang thiết bị bể bơi</option>
                        <option value="454">dược phẩm / thuốc</option>
                        <option value="455">đá / sỏi</option>
                        <option value="456">bản lề</option>
                        <option value="457">tấm gỗ</option>
                        <option value="458">dụng cụ làm vườn</option>
                        <option value="459">bảng </option>
                        <option value="460">tẩu</option>
                        <option value="461">tệp kiểm tra độ cứng</option>
                        <option value="462">xe trượt</option>
                        <option value="463">thớt</option>
                        <option value="464">Robot</option>
                        <option value="465">Sáp</option>
                        <option value="466">máy đo độ cứng</option>
                        <option value="467">sơn</option>
                        <option value="468">bộ cấp dầu</option>
                        <option value="469">Xe chở hàng</option>
                        <option value="470">máy phun sơn</option>
                        <option value="471">máy cấy lúa</option>
                        <option value="472">đầu kĩ thuật số/karaoke</option>
                        <option value="473">bếp gas</option>
                        <option value="474">cái thang</option>
                        <option value="475">máy ảnh/phụ kiện máy ảnh</option>
                        <option value="476">link/web online</option>
                        <option value="477">Mặt nạ</option>
                        <option value="478">phụ kiện dép</option>
                        <option value="479">Khẩu trang</option>
                        <option value="480">Điều hòa</option>
                        <option value="481">bình gốm/sứ</option>
                        <option value="482">Tủ lạnh</option>
                        <option value="483">máy làm đá</option>
                        <option value="484">máy cán màng</option>
                        <option value="485">Cái bơm</option>
                        <option value="486">Võng</option>
                        <option value="487">cái phao</option>
                        <option value="488">xe lăn</option>
                        <option value="489">giày trượt băng / giày trượt patanh</option>
                    </select>
                </div>
                <div class="form-item form-type-select form-item-type">
                    <select id="edit-type" name="type" class="form-select">
                        <option value="" selected="selected">- Chọn loại NCC -</option>
                        <option value="1">Online</option>
                        <option value="2">Offline</option>
                    </select>
                </div>
                <div class="form-item form-type-textfield form-item-name">
                    <input placeholder="Tên nhà cung cấp" type="text" id="edit-name" name="name" value="" size="60"
                        maxlength="128" class="form-text" />
                </div>
                <input type="submit" id="edit-submit" name="op" value="Tìm kiếm" class="form-submit" /><input
                    type="hidden" name="form_build_id" value="form-qoXPsZPyR0113CPDQwMgWPiVKC-yildnDdi32IrihNk" />
                <input type="hidden" name="form_token" value="8FJU5WPD5YVlKKYQGn_4BvyJLYZsczW9pcIcKabp2ac" />
                <input type="hidden" name="form_id" value="nha_cung_cap_user_search_form" />
            </div>
        </form>
        <div class="nha-cung-cap-list-page">
            <table class="nha-cung-cap-user-list-table sticky-enabled">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã NCC</th>
                        <th>Logo</th>
                        <th>Thông tin NCC</th>
                        <th><a href="/nha-cung-cap?sort=DESC" data-uk-tooltip="" title="Sắp xếp tăng/giảm dần">Tổng tiền
                                đặt hàng <i class="fa fa-sort" aria-hidden="true"></i></a></th>
                        <th>Tổng khiếu nại</th>
                        <th>Tác vụ</th>
                    </tr>
                </thead>
                <tbody>

                @foreach($data as $dt)
                    <tr price="14018800" class="odd">
                        <td><span class="stt">1</span></td>
                        <td>000{{$dt->id}}</td>
                        <td><img with="75" height="75" src="/sites/all/modules/developer/nha_cung_cap/nologo.png"
                                class="logo" /></td>
                        <td>
                            <div class="info">
                                <span class="name">
                                    <a href="javascript:void(0);" onClick="nha_cung_cap_edit_name(7918);">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a>
                                    <input class="nha-cung-cap-name nha-cung-cap-name-7918 hidden"
                                        value="Không xác định nhóm shop"
                                        onBlur="nha_cung_cap_user_change_update(7918);" />
                                    <span class="value ncc-id-7918">Không xác định nhóm shop</span>
                                </span><br />
                                <span class="type" style="background:green">{{$dt->thongtin}}</span><br />

                            </div>
                        </td>
                        <td>14,018,800<em>đ</em></td>
                        <td>0</td>
                        <td>
                            <div class="action"><a href="/nha-cung-cap/view-detail"
                                    class="xem-chi-tiet popup-ncc-detail" data-uk-tooltip="" title="Xem chi tiết"
                                    data-ncc="7918"><i class="fa fa-bars" aria-hidden="true"></i></a><br /></div>
                        </td>
                    </tr>
                    @endforeach
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
    src="https://www.thuongdo.com/sites/default/files/languages/vi_in2komZFFnsjt_72XE_KDM2awjJk45aiyeS5-nQPEpM.js?s18gps">
</script>
<script type="text/javascript" src="https://www.thuongdo.com/sites/all/libraries/jgrowl/jquery.jgrowl.min.js?s18gps">
</script>
<script type="text/javascript"
    src="https://www.thuongdo.com/sites/all/modules/contrib/nicemessages/js/nicemessages.js?s18gps"></script>
<script type="text/javascript" src="https://www.thuongdo.com/misc/tableheader.js?s18gps"></script>
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
jQuery.extend(Drupal.settings, {"basePath":"\/","pathPrefix":"","ajaxPageState":{"theme":"giaodiennguoidung","theme_token":"YkzGEbEKenN4RupQKwqARiTh_kfQt4S6wgdqxp8qoCo","js":{"sites\/all\/modules\/developer\/thuongdo_export\/js\/j-alert\/jquery.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/gritter\/jquery.gritter.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/html5Uploader\/jquery.html5uploader.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/js\/uikit.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/js\/components\/tooltip.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/js\/components\/notify.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/jquery.form.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/jquery.validate.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/additional-methods.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/jquery.barrating.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/chosen\/chosen.jquery.min.js":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/thuongdo_js.js":1,"sites\/all\/modules\/developer\/thuongdo_vidientu\/js\/thuongdo_vidientu.js":1,"sites\/all\/modules\/contrib\/jquery_update\/replace\/jquery\/1.8\/jquery.min.js":1,"misc\/jquery-extend-3.4.0.js":1,"misc\/jquery-html-prefilter-3.5.0-backport.js":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"public:\/\/languages\/vi_in2komZFFnsjt_72XE_KDM2awjJk45aiyeS5-nQPEpM.js":1,"sites\/all\/libraries\/jgrowl\/jquery.jgrowl.min.js":1,"sites\/all\/modules\/contrib\/nicemessages\/js\/nicemessages.js":1,"misc\/tableheader.js":1,"misc\/autocomplete.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/json2.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/autoNumeric.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/cycle2.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/happy_new_year.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/css3-animate-it.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/owl.carousel.min.js":1,"sites\/all\/themes\/giaodiennguoidung\/js\/giaodiennguoidung.js":1},"css":{"modules\/system\/system.base.css":1,"modules\/system\/system.menus.css":1,"modules\/system\/system.messages.css":1,"modules\/system\/system.theme.css":1,"modules\/aggregator\/aggregator.css":1,"sites\/all\/modules\/contrib\/date\/date_api\/date.css":1,"sites\/all\/modules\/contrib\/date\/date_popup\/themes\/datepicker.1.7.css":1,"modules\/field\/theme\/field.css":1,"modules\/node\/node.css":1,"modules\/user\/user.css":1,"sites\/all\/modules\/contrib\/views\/css\/views.css":1,"sites\/all\/modules\/contrib\/ckeditor\/css\/ckeditor.css":1,"sites\/all\/modules\/contrib\/ctools\/css\/ctools.css":1,"sites\/all\/libraries\/jgrowl\/jquery.jgrowl.min.css":1,"sites\/all\/modules\/contrib\/nicemessages\/css\/nicemessages_positions.css":1,"sites\/all\/modules\/contrib\/nicemessages\/css\/nicemessages_drupal.css":1,"sites\/all\/modules\/contrib\/nicemessages\/css\/shadows.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/lobibox\/css\/lobibox.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/chosen\/chosen.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/css\/uikit.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/css\/components\/tooltip.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/css\/components\/notify.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/lib\/uikit\/css\/components\/progress.min.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/css\/thuongdo_export.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/css\/fontawesome-stars.css":1,"sites\/all\/modules\/developer\/thuongdo_export\/js\/gritter\/css\/jquery.gritter.css":1,"sites\/all\/modules\/developer\/thuongdo_khieunai\/css\/thuongdo_khieunai.css":1,"sites\/all\/modules\/developer\/thuongdo_vidientu\/css\/thuongdo_vidientu.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/font-awesome.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/skins\/square\/blue.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/animations.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/owl.carousel.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/owl.theme.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/owl.transitions.css":1,"sites\/all\/themes\/giaodiennguoidung\/css\/style.css":1}},"urlIsAjaxTrusted":{"\/nha-cung-cap":true},"nicemessages":{"position":"center","items":[]}});
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
