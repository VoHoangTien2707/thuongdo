
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
                    <form class="tim-kiem-add-form" target="_blank" action="/dashboard" method="post" id="baiviet-tim-kiem-add-form" accept-charset="UTF-8"><div><div class="search-text">
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
</div><input type="submit" id="edit-submit" name="op" value="Tìm kiếm" class="form-submit" /><input type="hidden" name="form_build_id" value="form-hAlxLWzxEb-Jv0ipiD5I2LLVkoZsJR8cVHUBfobj08k" />
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
            <div class="dashboard-block-page block-clear block-both">
				<ul>
					<li>
						<a href="/dat-hang" class="tao-don-hang image">
							<span class="table">
								<span class="cell">
									<span class="dashboard-icon"></span>
								</span>
							</span>

						</a>
						<a href="/dat-hang" class="title">Tạo đơn hàng</a>
					</li>
					<li>
						<a href="/kien-ky-gui" class="tao-don-ky-gui image">
							<span class="table">
								<span class="cell">
									<span class="dashboard-icon"></span>
								</span>
							</span>
						</a>
						<a href="/kien-ky-gui" class="title">Tạo đơn ký gửi</a>
					</li>
					<li>
						<a href="/don-hang" class="quan-ly-don-hang image">
							<span class="table">
								<span class="cell">
									<span class="dashboard-icon"></span>
								</span>
							</span>
						</a>
						<a href="/don-hang" class="title">Quản lý đơn hàng</a>
					</li>
					<li>
						<a href="/don-hang/kien-hang-update" class="quan-ly-kien-hang image">
							<span class="table">
								<span class="cell">
									<span class="dashboard-icon"></span>
								</span>
							</span>
						</a>
						<a href="/don-hang/kien-hang-update" class="title">Quản lý kiện hàng</a>
					</li>
					<li class="last">
						<a href="/don-hang/giaohang" class="yeu-cau-giao-hang image">
							<span class="table">
								<span class="cell">
									<span class="dashboard-icon"></span>
								</span>
							</span>
						</a>
						<a href="/don-hang/giaohang" class="title">Giao hàng</a>
					</li>
					<li>
						<a href="/lich-su-giao-dich" class="vi-dien-tu image">
							<span class="table">
								<span class="cell">
									<span class="dashboard-icon"></span>
								</span>
							</span>
						</a>
						<a href="/lich-su-giao-dich" class="title">Tài khoản KH</a>
					</li>
					<li>
						<a href="/danh-sach-khieu-nai" class="khieu-nai-don-hang image">
							<span class="table">
								<span class="cell">
									<span class="dashboard-icon"></span>
								</span>
							</span>
						</a>
						<a href="/danh-sach-khieu-nai" class="title">Khiếu nại</a>
					</li>
					<li>
						<a href="/nha-cung-cap" class="quan-ly-nha-cung-cap image">
							<span class="table">
								<span class="cell">
									<span class="dashboard-icon"></span>
								</span>
							</span>
						</a>
						<a href="/nha-cung-cap" class="title">Nhà cung cấp</a>
					</li>
					<li>
						<a href="/thong-tin-ca-nhan" class="thong-tin-ca-nhan image">
							<span class="table">
								<span class="cell">
									<span class="dashboard-icon"></span>
								</span>
							</span>
						</a>
						<a href="/thong-tin-ca-nhan" class="title">Thông tin cá nhân</a>
					</li>
					<li class="last">
						<a href="" class="cai-dat image">
							<span class="table">
								<span class="cell">
									<span class="dashboard-icon"></span>
								</span>
							</span>
						</a>
						<a href="/" class="title">Cài đặt</a>
					</li>
				</ul>
			</div>        </div>
    </div>
    <div class="right-dashboard-bar block-clear"><span class="info-header-nabar">
                    <span class="avatar">
                        <form id="upload-avatar" method="post" enctype="multipart/form-data">
                            <input type="file" id="myfile" class="btn-hd-upload" name="uploadFileAvatar" />
                        </form>
                        <img width="100" height="100" src="{{ asset('images/' . $user->img) }}" />
                        <em>Thay đổi<br /> avatar</em>
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
                    <span>Email</span> <br />
                    <a href="">{{$email}}</a>
                </p>
                <p>
                    <span>Điện thoại</span> <br />
                    <a href="">{{$phone}}</a>
                </p>
                <p>
                    <span>Địa chỉ</span> <br />
                </p>
                <p class="info-edit">
                    <a href="{{route('profile',$iduser)}}" class="edit">Chỉnh sửa thông tin</a>
                </p>
                <div class="lich-lam-viec">
                    <span class="dashboard-icon"></span>
                    <b>8h00 - 17h30 hằng ngày</b>
                </div>
            </div>
        </div>
@endsection
