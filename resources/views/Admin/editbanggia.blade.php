
@extends('layout.LayoutAdmin')
@section('noidung')
  <main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item">Danh sách bảng giá</li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Chỉnh sửa bảng giá</h3>
          <div class="tile-body">

            <form class="row" action="{{route('admin.tablebg.edit',['id'=>$tin->id])}}" method="post" class="col-7 cla m-auto">

              <div class="form-group col-md-12">
                <label class="control-label">Tên bảng giá</label>
                <input value="{{$tin->title}}" name="title" class="form-control" type="text">
              </div>

              <div class="form-group col-md-12">
                <label class="control-label">Mô tả sản phẩm</label>
                <textarea value="{{$tin->content}}" class="form-control" name="content" id="mota"></textarea>
                <script>CKEDITOR.replace('mota');</script>
              </div>

          </div>
          <button class="btn btn-save" type="submit">Lưu lại</button>
          <a class="btn btn-cancel" href="table-data-product.html">Hủy bỏ</a>
          @csrf

</form>
        </div>
  </main>


  <!--
  MODAL CHỨC VỤ
-->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-body">
          <div class="row">
            <div class="form-group  col-md-12">
              <span class="thong-tin-thanh-toan">
                <h5>Thêm mới nhà cung cấp</h5>
              </span>
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Nhập tên chức vụ mới</label>
              <input class="form-control" type="text" required>
            </div>
          </div>
          <BR>
          <button class="btn btn-save" type="button">Lưu lại</button>
          <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
          <BR>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  <!--
MODAL
-->
@endsection



  <!--
  MODAL DANH MỤC
-->
