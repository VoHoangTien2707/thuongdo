@extends('layout.LayoutHome')
@section('noidung1')
<div class="main">
            <div class="breadcrumb"><div class="container"><a href="/">Trang chủ</a><i class="fa fa-angle-right"></i><a href="/tin-tuc" class="active">Tin tức</a></div></div>        <div class="container">
                    <div class="quang-cao-content-top item-block">
                    </div>
            <div class="content-include-search">
                    </div>
        <h1 class="title-page">Tin tức</h1>
        <div class="left">	</div>
        <div class="group-content">
                            <div class="baiviet-list-item block">
                                <ul>

                                @foreach($dv as $dt)
                                    <li><a href="{{ url('/chitiettin',[$dt->id]) }}" class="image "><img typeof="foaf:Image" src="{{ asset('images/' . $dt->img) }}" width="200" height="150" alt="Order đồ tập thể dục nữ Trung Quốc trên Taobao nhanh - rẻ - an toàn" title="Order đồ tập thể dục nữ Trung Quốc trên Taobao nhanh - rẻ - an toàn" /></a><a href="{{ url('/chitiettin',[$dt->id]) }}" class="title" title="Order đồ tập thể dục nữ Trung Quốc trên Taobao nhanh - rẻ - an toàn">{{$dt->title}}</a><div style="color: #888"><i class="fa fa-clock-o"></i> 08-09-2023</div><div class="mo-ta">{{$dt->description}}</div><a href="{{ url('/chitiettin',[$dt->id]) }}" class="uk-button uk-float-right" rel="nofollow"><i class="fa fa-long-arrow-right"></i> Xem chi tiết</a></li>
                                    @endforeach


                             </ul><h2 class="element-invisible">Trang</h2><div class="item-list"><ul class="pager">                             {{ $dv->links('pagination::bootstrap-4') }}

<!-- <li class="pager-item"><a title="Đến trang 2" href="/tin-tuc?page=1">2</a></li>
<li class="pager-item"><a title="Đến trang 3" href="/tin-tuc?page=2">3</a></li>
<li class="pager-item"><a title="Đến trang 4" href="/tin-tuc?page=3">4</a></li>
<li class="pager-item"><a title="Đến trang 5" href="/tin-tuc?page=4">5</a></li>
<li class="pager-item"><a title="Đến trang 6" href="/tin-tuc?page=5">6</a></li>
<li class="pager-item"><a title="Đến trang 7" href="/tin-tuc?page=6">7</a></li>
<li class="pager-item"><a title="Đến trang 8" href="/tin-tuc?page=7">8</a></li>
<li class="pager-item"><a title="Đến trang 9" href="/tin-tuc?page=8">9</a></li>
<li class="pager-ellipsis">…</li>
<li class="pager-next"><a title="Đến trang sau" href="/tin-tuc?page=1">sau ›</a></li>
<li class="pager-last last"><a title="Đến trang cuối cùng" href="/tin-tuc?page=87">cuối »</a></li> -->
</ul></div></div>
                    </div>
    </div>
    
</div>
<footer><div class="footer-top block-both">
    <div class="container">
    	<div class="thuongdo-info">
    		                <div class="logo"><a href="https://www.thuongdo.com" rel="nofollow"><img src="https://www.thuongdo.com/sites/default/files/quangcao/logo_3.png" alt= "Nhập hàng Trung Quốc - THƯƠNG ĐÔ LOGISTICS" title = "Nhập hàng Trung Quốc - THƯƠNG ĐÔ LOGISTICS" /></a></div>
                        <p>Website httk.com được vận hành bởi:</p>
            <p><strong>CÔNG TY CỔ PHẦN QUỐC TẾ HTTK</strong></p>
            <p>Giấy chứng nhận đăng ký doanh nghiệp số 0316904160 do Sở Kế hoạch và Đầu tư thành phố Hồ Chí Minh cấp lần đầu ngày 11/06/2021</p>
            <p>Địa chỉ trụ sở: Văn phòng 02, Tầng 10, Tòa nhà Pearl Plaza, Số 561A Điện Biên Phủ, Phường 25, Quận Bình Thạnh, TP. Hồ Chí Minh</p>
            <div class="item info-detail last">
    			<p><span>Tổng đài cskh:</span> <a href="tel:1900 6825">1900 6825</a> - <span>Hotline:</span> <a href="tel:0898169666">0898169666</a></p>
    			<p><span>Email:</span> <a href="mailto:chamsoc@thuongdo.com">chamsoc@thuongdo.com</a></p>
    		</div>
    		<h5>TẢI ỨNG DỤNG HTTK CHO MOBILE</h5>
    		<i>( Quản lý đơn hàng mọi lúc, mọi nơi và nhiều hơn nữa )</i>
    		<!--<a href="https://itunes.apple.com/us/app/thuong-do/id1437479839?ls=1&mt=8" target="_blank" rel="nofollow" class="ios app">
    			<span class="icon"></span>
    		</a>
    		<a href="https://play.google.com/store/apps/details?id=com.thuongdo.thuongdologistics" target="_blank" rel="nofollow" class="android app last">
    			<span class="icon"></span>
    		</a>-->

    	</div>
    	<div class="menu-footer block-clear">
    		<div class="item">
    			<h3>Về HTTK</h3>
    			                    <ul><li class="item item-49950 Giới thiệu 590   ">
                                    <a href="/gioi-thieu-ve-thuong-do" title="Giới thiệu" rel="" class="parent"><span class="icon"></span>Giới thiệu</a>
                                  </li><li class="item item-49951 Hướng dẫn 593   ">
                                    <a href="/h%C6%B0%E1%BB%9Bng-dan" title="Hướng dẫn" rel="" class="parent"><span class="icon"></span>Hướng dẫn</a>
                                  </li><li class="item item-49952 Tin tức 594   ">
                                    <a href="/tin-tuc" title="Tin tức" rel="" class="parent active"><span class="icon"></span>Tin tức</a>
                                  </li><li class="item item-49953 Chính sách bảo hành 4860   ">
                                    <a href="/chinh-sach-bao-hanh" title="Chính sách bảo hành" rel="" class="parent"><span class="icon"></span>Chính sách bảo hành</a>
                                  </li><li class="item item-49954 Chính sách bảo mật 2613   ">
                                    <a href="/chinh-sach-bao-mat-thong-tin-thanh-vien" title="Chính sách bảo mật" rel="" class="parent"><span class="icon"></span>Chính sách bảo mật</a>
                                  </li><li class="item item-49955 Chính sách bảo mật thông tin cá nhân 4866   ">
                                    <a href="/chinh-sach-bao-mat-thong-tin-ca-nhan" title="Chính sách bảo mật thông tin cá nhân" rel="" class="parent"><span class="icon"></span>Chính sách bảo mật thông tin cá nhân</a>
                                  </li><li class="item item-49956 Chính sách và quy định chung 4872   ">
                                    <a href="/chinh-sach-va-quy-dinh-chung" title="Chính sách và quy định chung" rel="" class="parent"><span class="icon"></span>Chính sách và quy định chung</a>
                                  </li><li class="item item-49957 Chính sách đổi trả hoàn tiền 4869   ">
                                    <a href="/chinh-sach-doi-tra-va-hoan-tien" title="Chính sách đổi trả hoàn tiền" rel="" class="parent"><span class="icon"></span>Chính sách đổi trả hoàn tiền</a>
                                  </li><li class="item item-49958 Cơ chế giải quyết tranh chấp 4863   ">
                                    <a href="/chinh-sach-giai-quyet-tranh-chap" title="Cơ chế giải quyết tranh chấp" rel="" class="parent"><span class="icon"></span>Cơ chế giải quyết tranh chấp</a>
                                  </li><li class="item item-49960 Hình thức thanh toán 5262   ">
                                    <a href="/hinh-thuc-thanh-toan" title="Hình thức thanh toán" rel="" class="parent"><span class="icon"></span>Hình thức thanh toán</a>
                                  </li><li class="item item-50000 Hình thức giao nhận 5472   ">
                                    <a href="/hinh-thuc-giao-nhan" title="Hình thức giao nhận" rel="" class="parent"><span class="icon"></span>Hình thức giao nhận</a>
                                  </li></ul>                    		</div>
    		<div class="item last">
    			<h3>Chăm sóc khách hàng</h3>
    			<ul>
    				<li><a href="https://hotro.thuongdo.com">Trung tâm trợ giúp</a></li>
    				<li><a href="/huong-dan-dang-ky-dang-nhap-tai-khoan" title="Hướng dẫn tạo tài khoản">Hướng dẫn tạo tài khoản</a></li>
    				<li><a href="/huong-dan-tao-don-hang" title="Hướng dẫn mua hàng">Hướng dẫn mua hàng</a></li>
    				<li><a href="">Trả hàng & vận chuyển</a></li>
    				<li><a href="/cau-hoi-thuong-gap-td" title="Các câu hỏi thường gặp">Các câu hỏi thường gặp</a></li>
    			</ul>
    		</div>
    		<div class="social">
    			<h5>Theo dõi chúng tôi trên: </h5>
    			<a href="https://www.facebook.com/thuongdocom/" class="facebook">
    				<i class="fa fa-facebook" aria-hidden="true"></i>
    			</a>
    			<a href="https://www.youtube.com/channel/UCWodKAgwRb1MHDOJa8ib84A" class="twitter">
    				<i class="fa fa-youtube" aria-hidden="true"></i>
    			</a>
    			<a href="/" class="google">
    				<i class="fa fa-google" aria-hidden="true"></i>
    			</a>
    		</div>
    	</div>
    	<div class="contact-info">
    		<h3>Thông tin liên hệ</h3>
    		<div class="item">
    			<h5>Văn phòng kinh doanh miền Bắc</h5>
    			<p>Số 176 Trường Chinh, Thanh Xuân, Hà Nội.</p>
    			<p>335 Ngô Gia Tự , Hải An, Hải Phòng.</p>
    		</div>
    		<div class="item center">
    			<h5>Văn phòng kinh doanh Miền Nam</h5>
    			<p>911 Nguyễn Trãi - Quận 5 - Hồ Chí Minh.</p>
    		</div>

    	</div>
    </div>
</div>
<style>
    .pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px; /* Điều chỉnh khoảng cách từ trên xuống */
}

/* Canh giữa từng mục trong phân trang */
.pagination li {
    margin: 0 5px; /* Điều chỉnh khoảng cách giữa các mục phân trang */
}

/* Hiển thị phân trang bằng dấu chấm (...) nếu có nhiều trang */
.pagination li span {
    padding: 5px 10px;
    background-color: #f8f9fa;
    border: 1px solid #dee2e6;
    border-radius: 4px;
}

/* Hiển thị mục phân trang hiện tại với màu nền khác */
.pagination .page-item.active span {
    background-color: #007bff;
    color: #fff;
    border: 1px solid #007bff;
}
.pagination {
    float:none;
}

ul.pagination{
    display: flex;
    justify-content: center;
    align-items: center;    float: left;
width: 20%;;    margin-bottom: 15px;
    padding-bottom: 15px;
    list-style: none;
    padding: 10px;
    box-sizing: border-box;
}
</style>
@endsection
